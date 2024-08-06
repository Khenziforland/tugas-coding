<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Controllers\Controller;

use App\Services\Dashboard\Number1Service;

class Number1Controller extends Controller
{
    /**
     ** Service instance.
     *
     * @var Number1Service
     */
    protected $number1Service;

    /**
     ** Constructor.
     *
     * @param Number1Service $number1Service
     */
    public function __construct(Number1Service $number1Service)
    {
        $this->number1Service = $number1Service;
    }

    /**
     ** Index.
     *
     * @return Response
     */
    public function index()
    {
        return view('dashboard.number_1.index');
    }

    /**
     ** Datatable.
     *
     * @param Request $request
     * @return Response
     */
    public function datatable(Request $request)
    {
        $result = $this->number1Service->datatable($request);

        return $result->product;
    }
}
