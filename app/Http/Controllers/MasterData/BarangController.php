<?php

namespace App\Http\Controllers\MasterData;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Controllers\Controller;

use App\Services\MasterData\BarangService;

class BarangController extends Controller
{
    /**
     ** Service instance.
     *
     * @var BarangService
     */
    protected $barangService;

    /**
     ** Constructor.
     *
     * @param BarangService $barangService
     */
    public function __construct(BarangService $barangService)
    {
        $this->barangService = $barangService;
    }

    /**
     ** Index.
     *
     * @return Response
     */
    public function index()
    {
        return view('master_data.barang.index');
    }

    /**
     ** Datatable.
     *
     * @param Request $request
     * @return Response
     */
    public function datatable(Request $request)
    {
        $result = $this->barangService->datatable($request);

        return $result->barang;
    }

    /**
     ** Create.
     *
     * @return Response
     */
    public function create()
    {
        return view('master_data.barang.create');
    }

    /**
     ** Store.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $result = $this->barangService->store($request);

        return redirect()->back()->with($result->statusNotify, $result->message);
    }

    /**
     ** Edit.
     *
     * @param Request $request
     * @return Response
     */
    public function edit(Request $request)
    {
        $result = $this->barangService->edit($request);

        return view('master_data.barang.edit', [
            'barang' => $result->barang,
        ]);
    }

    /**
     ** Update.
     *
     * @param Request $request
     * @return Response
     */
    public function update(Request $request)
    {
        $result = $this->barangService->update($request);

        return redirect()->back()->with($result->statusNotify, $result->message);
    }

    /**
     ** Destroy.
     *
     * @param Request $request
     * @return Response
     */
    public function destroy(Request $request)
    {
        $result = $this->barangService->destroy($request);

        return redirect()->back()->with($result->statusNotify, $result->message);
    }
}
