<?php

namespace App\Services\Api\MasterData;

use App\Helpers\CheckHelper;
use App\Models\Barang;

class BarangServiceApi
{
    /**
     * Index service.
     *
     * @param  $request
     * @return ArrayObject
     */
    public function index($request)
    {
        $filter = [];
        $sortKey = $request->sort_key;
        $sortOrder = strtoupper($request->sort_order);

        if (CheckHelper::isset($request->search)) {
            $filter['search'] = $request->search;
        }

        $barang = Barang::filter($filter)
            ->getPaginatedData(true, $request->page, $request->per_page, $sortKey, $sortOrder);

        $data = $barang->data;
        $pagination = $barang->pagination;

        $status = true;
        $message = 'Data berhasil diambil !';

        $result = (object) [
            'status' => $status,
            'message' => $message,
            'data' => $data,
            'pagination' => $pagination,
        ];

        return $result;
    }

    /**
     * Show service.
     *
     * @param  $request
     * @return ArrayObject
     */
    public function show($request)
    {
        $barang = Barang::firstWhere('id', $request->id);

        $status = true;
        $message = 'Data berhasil diambil !';

        $result = (object) [
            'status' => $status,
            'message' => $message,
            'barang' => $barang,
        ];

        return $result;
    }

    /**
     * Store service.
     *
     * @param  $request
     * @return ArrayObject
     */
    public function store($request)
    {
        $data = [
            'name' => $request->name,
            'stock' => $request->stock,
            'quantity_sold' => $request->quantity_sold,
            'transaction_datetime' => $request->transaction_datetime,
            'item_type' => $request->item_type,
        ];

        $barang = barang::create($data);

        $barang = barang::firstWhere('id', $barang->id);

        $status = true;
        $message = 'Data berhasil disimpan !';

        $result = (object) [
            'status' => $status,
            'message' => $message,
            'barang' => $barang,
        ];

        return $result;
    }

    /**
     * Update service.
     *
     * @param  $request
     * @return ArrayObject
     */
    public function update($request)
    {
        $data = [
            'name' => $request->name,
            'stock' => $request->stock,
            'quantity_sold' => $request->quantity_sold,
            'transaction_datetime' => $request->transaction_datetime,
            'item_type' => $request->item_type,
        ];

        $barang = barang::where('id', $request->id)
            ->update($data);

        $barang = barang::firstWhere('id', $request->id);

        $status = true;
        $message = 'Data berhasil disimpan !';

        $result = (object) [
            'status' => $status,
            'message' => $message,
            'barang' => $barang,
        ];

        return $result;
    }

    /**
     * Destroy service.
     *
     * @param  $request
     * @return ArrayObject
     */
    public function destroy($request)
    {
        Barang::where('id', $request->id)
            ->delete();

        $status = true;
        $message = 'Data berhasil dihapus !';

        $result = (object) [
            'status' => $status,
            'message' => $message,
        ];

        return $result;
    }
}
