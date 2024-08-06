<?php

namespace App\Services\Dashboard;

use App\Helpers\FormatterHelper;
use Yajra\DataTables\Facades\DataTables;

use App\Helpers\MessageHelper;

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
        $product = Product::orderBy('name', 'asc')
            ->get();

        $product = Datatables::of($product)
            ->addColumn('transactionDateCustom', function ($row) {
                $result = FormatterHelper::formatDate($row->transaction_datetime);

                return $result;
            })
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
