<?php

namespace App\Validations\Api\MasterData;

use App\Models\Barang;
use Illuminate\Validation\Rule;

class BarangValidationApi
{
    /**
     * Index validation.
     *
     * @param  $request
     * @return ArrayObject
     */
    public function index($request)
    {
        $validation = [
            'per_page' => ['required', 'numeric'],
            'page' => ['required', 'numeric'],
            'sort_key' => [
                'required',
                Rule::in([
                    'name',
                    'stock',
                    'quantity_sold',
                    'transaction_datetime',
                    'item_type',
                ]),
            ],
            'sort_order' => [
                'required',
                Rule::in([
                    'ASC',
                    'DESC',
                ]),
            ],
            'search' => [
                'nullable',
            ],
        ];

        $message = [
            'per_page.required' => 'Jumlah data tidak boleh kosong !',
            'per_page.numeric' => 'Jumlah data harus angka !',

            'page.required' => 'Halaman tidak boleh kosong !',
            'page.numeric' => 'Halaman harus angka !',

            'sort_key.required' => 'Kunci pengurutan tidak boleh kosong !',
            'sort_key.in' => 'Kunci pengurutan tidak valid !',

            'sort_order.required' => 'Urutan pengurutan tidak boleh kosong !',
            'sort_order.in' => 'Urutan pengurutan tidak valid !',
        ];

        $request->validate($validation);

        $status = true;
        $message = 'Data berhasil divalidasi !';

        $result = (object) [
            'status' => $status,
            'message' => $message,
        ];

        return $result;
    }

    /**
     * Show validation.
     *
     * @param  $request
     * @return ArrayObject
     */
    public function show($request)
    {
        $validation = [
            'id' => ['required', 'numeric', 'exists:barangs,id'],
        ];

        $message = [
            'id.required' => 'ID barang tidak boleh kosong !',
            'id.numeric' => 'ID barang harus angka !',
            'id.exists' => 'ID barang tidak ditemukan !',
        ];

        $request->validate($validation, $message);

        $status = true;
        $message = 'Data berhasil divalidasi !';

        $result = (object) [
            'status' => $status,
            'message' => $message,
        ];

        return $result;
    }

    /**
     * Store validation.
     *
     * @param  $request
     * @return ArrayObject
     */
    public function store($request)
    {
        $validation = [
            'name' => ['required'],
            'stock' => ['required', 'numeric'],
            'quantity_sold' => ['required', 'numeric'],
            'transaction_datetime' => ['required', 'date'],
            'item_type' => ['required'],


        ];

        $message = [
            'name.required' => 'Nama barang tidak boleh kosong !',

            'stock.required' => 'Stok barang tidak boleh kosong !',
            'stock.numeric' => 'Stok barang harus angka !',

            'quantity_sold.required' => 'Jumlah terjual tidak boleh kosong !',
            'quantity_sold.numeric' => 'Jumlah terjual harus angka !',

            'transaction_datetime.required' => 'Tanggal transaksi tidak boleh kosong !',
            'transaction_datetime.date' => 'Tanggal transaksi harus berupa tanggal !',

            'item_type.required' => 'Tipe barang tidak boleh kosong !',
        ];

        $request->validate($validation, $message);

        $status = true;
        $message = 'Data berhasil divalidasi !';

        $result = (object) [
            'status' => $status,
            'message' => $message,
        ];

        return $result;
    }

    /**
     * Update validation.
     *
     * @param  $request
     * @return ArrayObject
     */
    public function update($request)
    {
        $validation = [
            'id' => ['required', 'numeric', 'exists:barangs,id'],
            'stock' => ['required', 'numeric'],
            'quantity_sold' => ['required', 'numeric'],
            'transaction_datetime' => ['required', 'date'],
            'item_type' => ['required'],
        ];

        $message = [
            'id.required' => 'ID barang tidak boleh kosong !',
            'id.numeric' => 'ID barang harus angka !',
            'id.exists' => 'ID barang tidak ditemukan !',

            'stock.required' => 'Stok barang tidak boleh kosong !',
            'stock.numeric' => 'Stok barang harus angka !',

            'quantity_sold.required' => 'Jumlah terjual tidak boleh kosong !',
            'quantity_sold.numeric' => 'Jumlah terjual harus angka !',

            'transaction_datetime.required' => 'Tanggal transaksi tidak boleh kosong !',
            'transaction_datetime.date' => 'Tanggal transaksi harus berupa tanggal !',

            'item_type.required' => 'Tipe barang tidak boleh kosong !',
        ];

        $request->validate($validation, $message);

        $status = true;
        $message = 'Data berhasil divalidasi !';

        $result = (object) [
            'status' => $status,
            'message' => $message,
        ];

        return $result;
    }

    /**
     * Destroy validation.
     *
     * @param  $request
     * @return ArrayObject
     */
    public function destroy($request)
    {
        $validation = [
            'id' => ['required', 'numeric', 'exists:barangs,id'],
        ];

        $message = [
            'id.required' => 'ID barang tidak boleh kosong !',
            'id.numeric' => 'ID barang harus angka !',
            'id.exists' => 'ID barang tidak ditemukan !',
        ];

        $request->validate($validation, $message);

        $status = true;
        $message = 'Data berhasil divalidasi !';

        $result = (object) [
            'status' => $status,
            'message' => $message,
        ];

        return $result;
    }
}
