<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Controllers\Controller;

use App\Services\Dashboard\Number3Service;

class Number3Controller extends Controller
{
    /**
     ** Service instance.
     *
     * @var Number3Service
     */
    protected $number3Service;

    /**
     ** Constructor.
     *
     * @param Number3Service $number3Service
     */
    public function __construct(Number3Service $number3Service)
    {
        $this->number3Service = $number3Service;
    }

    /**
     ** Index.
     *
     * @return Response
     */
    public function index()
    {
        return view('dashboard.number_3.index');
    }

    /**
     ** Datatable.
     *
     * @param Request $request
     * @return Response
     */
    public function datatable(Request $request)
    {
        $result = $this->number3Service->datatable($request);

        return $result->product;
    }
}
