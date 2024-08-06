<?php

namespace App\Http\Controllers\Api\MasterData;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Validations\Api\MasterData\BarangValidationApi;
use App\Services\Api\MasterData\BarangServiceApi;

class BarangControllerApi extends Controller
{
    /**
     * Validation instance.
     *
     * @var \App\Validations\Api\MasterData\BarangValidationApi
     */
    protected $barangValidationApi;

    /**
     * Service instance.
     *
     * @var \App\Services\Api\MasterData\BarangServiceApi
     */
    protected $barangServiceApi;

    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct(BarangValidationApi $barangValidationApi, BarangServiceApi $barangServiceApi)
    {
        $this->barangValidationApi = $barangValidationApi;
        $this->barangServiceApi = $barangServiceApi;
    }

    /**
     * Index.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $validation = $this->barangValidationApi->index($request);

        if ($validation->status == false) {
            return response()->json($validation, 422);
        }

        $result = $this->barangServiceApi->index($request);

        return response()->json($result, 200);
    }

    /**
     * Show.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $request['id'] = $id;
        $validation = $this->barangValidationApi->show($request);

        if ($validation->status == false) {
            return response()->json($validation, 422);
        }

        $result = $this->barangServiceApi->show($request);

        return response()->json($result, 200);
    }

    /**
     * Store.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $this->barangValidationApi->store($request);

        if ($validation->status == false) {
            return response()->json($validation, 422);
        }

        $result = $this->barangServiceApi->store($request);

        return response()->json($result, 200);
    }

    /**
     * Update.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request['id'] = $id;
        $validation = $this->barangValidationApi->update($request);

        if ($validation->status == false) {
            return response()->json($validation, 422);
        }

        $result = $this->barangServiceApi->update($request);

        return response()->json($result, 200);
    }

    /**
     * Destroy.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $request['id'] = $id;
        $validation = $this->barangValidationApi->destroy($request);

        if ($validation->status == false) {
            return response()->json($validation, 422);
        }

        $result = $this->barangServiceApi->destroy($request);

        return response()->json($result, 200);
    }
}
