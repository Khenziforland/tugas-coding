<?php

namespace App\Services\Dashboard;

use App\Helpers\FormatterHelper;
use Yajra\DataTables\Facades\DataTables;

use App\Helpers\MessageHelper;

use App\Models\Customer;

class Number5Service
{
    /**
     ** Datatable service.
     *
     * @param $request
     * @return object
     */
    public function datatable($request)
    {
        $customer = Customer::orderBy('name', 'asc')
            ->get();

        $customer = Datatables::of($customer)
            ->addColumn('totalNominalTransactionCustom', function ($row) {
                $result = FormatterHelper::formatNumber($row->total_nominal_transaction);

                return $result;
            })
            ->rawColumns([
                'totalNominalTransactionCustom',
            ])
            ->make(true);

        $status = true;
        $message = MessageHelper::retrieveSuccess();

        $result = (object) [
            'status' => $status,
            'message' => $message,
            'customer' => $customer,
        ];

        return $result;
    }
}
