<?php

namespace App\Services\Dashboard;

use App\Helpers\FormatterHelper;
use Yajra\DataTables\Facades\DataTables;

use App\Helpers\MessageHelper;

use App\Models\Customer;

class Number2Service
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
            ->addColumn('totalTransactionCustom', function ($row) {
                $result = FormatterHelper::formatNumber($row->total_transaction);

                return $result;
            })
            ->rawColumns([
                'totalTransactionCustom',
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
