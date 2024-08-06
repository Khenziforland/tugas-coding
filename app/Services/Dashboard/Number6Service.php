<?php

namespace App\Services\Dashboard;

use App\Helpers\FormatterHelper;
use Yajra\DataTables\Facades\DataTables;

use App\Helpers\MessageHelper;

use App\Models\Product;

class Number6Service
{
    /**
     ** Datatable service.
     *
     * @param $request
     * @return object
     */
    public function datatable($request)
    {
        $product = Product::orderBy('name', 'asc')
            ->get();

        $product = Datatables::of($product)
            ->addColumn('priceCustom', function ($row) {
                $result = FormatterHelper::formatNumber($row->price);

                return $result;
            })
            ->addColumn('totalTransactionCustom', function ($row) {
                $result = FormatterHelper::formatNumber($row->total_transaction);

                return $result;
            })
            ->rawColumns([
                'priceCustom',
                'totalTransactionCustom',
            ])
            ->make(true);

        $status = true;
        $message = MessageHelper::retrieveSuccess();

        $result = (object) [
            'status' => $status,
            'message' => $message,
            'product' => $product,
        ];

        return $result;
    }
}
