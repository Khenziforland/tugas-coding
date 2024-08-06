<?php

namespace App\Services\Dashboard;

use App\Helpers\FormatterHelper;
use Yajra\DataTables\Facades\DataTables;

use App\Helpers\MessageHelper;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Transaction;
use DB;

class Number4Service
{
    /**
     ** Datatable service.
     *
     * @param $request
     * @return object
     */
    public function datatable($request)
    {
        $transaction = Transaction::select('customer_id', DB::raw('count(*) as total_sales'))
            ->whereHas('product', function ($query) {
                $query->where('name', 'laptop');
            })
            ->groupBy('customer_id')
            ->get();

        $transaction = Datatables::of($transaction)
            ->addColumn('id', function ($row) {
                return $row->customer_id;
            })
            ->addColumn('customerNameCustom', function ($row) {
                $customer = Customer::find($row->customer_id);

                return $customer->name;
            })
            ->addColumn('totalSalesCustom', function ($row) {
                $result = FormatterHelper::formatNumber($row->total_sales);

                return $result;
            })
            ->rawColumns([
                'customerNameCustom',
                'totalSalesCustom'
            ])
            ->make(true);

        $status = true;
        $message = MessageHelper::retrieveSuccess();

        $result = (object) [
            'status' => $status,
            'message' => $message,
            'transaction' => $transaction,
        ];

        return $result;
    }
}
