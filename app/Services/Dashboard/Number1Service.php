<?php

namespace App\Services\Dashboard;

use App\Helpers\FormatterHelper;
use Yajra\DataTables\Facades\DataTables;

use App\Helpers\MessageHelper;
use App\Models\Customer;
use App\Models\Product;

class Number1Service
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
            ->addColumn('lastTransactionDateCustom', function ($row) {
                $result = FormatterHelper::formatDate($row->last_transaction_date);

                return $result;
            })
            ->rawColumns([
                'lastTransactionDateCustom',
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
