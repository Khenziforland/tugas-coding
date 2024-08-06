<?php

namespace App\Services\Dashboard;

use App\Helpers\FormatterHelper;
use Yajra\DataTables\Facades\DataTables;

use App\Helpers\MessageHelper;

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
        $laptopSales = Transaction::select('customer_id', DB::raw('COUNT(*) as total_sales'))
        ->whereHas('product', function ($query) {
            $query->where('category', 'laptop');
        })
            ->groupBy('customer_id')
            ->with('customer:id,name')
            ->get();

        $laptopSales = Datatables::of($laptopSales)
            ->addColumn('customer_name', function ($row) {
                return $row->customer->name;
            })
            ->make(true);

        $status = true;
        $message = MessageHelper::retrieveSuccess();

        $result = (object) [
            'status' => $status,
            'message' => $message,
            'laptopSales' => $laptopSales,
        ];

        return $result;
    }
}
