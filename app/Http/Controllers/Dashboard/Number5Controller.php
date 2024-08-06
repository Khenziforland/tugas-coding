<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Controllers\Controller;

use App\Services\Dashboard\Number5Service;

class Number5Controller extends Controller
{
    /**
     ** Service instance.
     *
     * @var Number5Service
     */
    protected $number5Service;

    /**
     ** Constructor.
     *
     * @param Number5Service $number5Service
     */
    public function __construct(Number5Service $number5Service)
    {
        $this->number5Service = $number5Service;
    }

    /**
     ** Index.
     *
     * @return Response
     */
    public function index()
    {
        return view('dashboard.number_5.index');
    }

    /**
     ** Datatable.
     *
     * @param Request $request
     * @return Response
     */
    public function datatable(Request $request)
    {
        $result = $this->number5Service->datatable($request);

        return $result->customer;
    }
}
