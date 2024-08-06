<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Controllers\Controller;

use App\Services\Dashboard\Number2Service;

class Number2Controller extends Controller
{
    /**
     ** Service instance.
     *
     * @var Number2Service
     */
    protected $number2Service;

    /**
     ** Constructor.
     *
     * @param Number2Service $number2Service
     */
    public function __construct(Number2Service $number2Service)
    {
        $this->number2Service = $number2Service;
    }

    /**
     ** Index.
     *
     * @return Response
     */
    public function index()
    {
        return view('dashboard.number_2.index');
    }

    /**
     ** Datatable.
     *
     * @param Request $request
     * @return Response
     */
    public function datatable(Request $request)
    {
        $result = $this->number2Service->datatable($request);

        return $result->customer;
    }
}
