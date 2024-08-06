<?php

namespace App\Imports\Employment;

use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;

use App\Models\Employee;
use App\Models\Schedule;

class AttendanceImport implements
    ToModel,
    WithHeadingRow,
    WithValidation,
    WithChunkReading
{
    use Importable;

    /**
     ** Model.
     *
     * @param $row
     * @return void
     */
    public function model($row): void
    {
        $data = $this->convertion($row);

        $this->update($data);
    }

    /**
     ** Convertion.
     *
     * @param $row
     * @return array
     */
    public function convertion($row): array
    {
        $row = (object) $row;
        $result = [];

        if (($row->status) and ($row->waktu)) {
            $datetime = ExcelDate::excelToDateTimeObject($row->waktu)
                ->format('Y-m-d H:i:s');

            $data = (object) [
                'employeeNumber' => $row->nip,
                'datetime' => $datetime,
                'status' => $row->status,
            ];

            array_push($result, $data);
        }

        return $result;
    }

    /**
     ** Update.
     *
     * @param $request
     * @return void
     */
    public function update($request): void
    {
        foreach ($request as $row) {
            $employee = Employee::firstWhere('employee_number', $row->employeeNumber);

            $date = Carbon::parse($row->datetime)
                ->isoFormat('YYYY-MM-DD');

            $time = Carbon::parse($row->datetime)
                ->isoFormat('HH:mm:ss');

            $schedule = Schedule::where('employee_id', $employee->id)
                ->where('shift_date', $date)
                ->first();

            if ($schedule) {
                if ($row->status == 'C/Masuk') {
                    $data = [
                        'attendance_start_time' => $time,
                        'status' => 'Hadir',
                    ];

                    Schedule::where('id', $schedule->id)
                        ->update($data);
                }

                if ($row->status == 'C/Keluar') {
                    $data = [
                        'attendance_end_time' => $time,
                    ];

                    Schedule::where('id', $schedule->id)
                        ->update($data);
                }
            }
        }
    }

    /**
     ** Rules.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            '*.nip' => [
                'required',
                Rule::exists('employees', 'employee_number'),
            ],

            '*.nama' => [
                'nullable',
            ],

            '*.waktu' => [
                'required',
            ],

            '*.status' => [
                'required',
                Rule::in([
                    'C/Masuk',
                    'C/Keluar',
                ])
            ],
        ];
    }

    /**
     ** Chunk size.
     *
     * @return int
     */
    public function chunkSize(): int
    {
        return 1000;
    }
}
