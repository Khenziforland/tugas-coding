<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Controllers\Controller;

use App\Services\Dashboard\Number4Service;

class Number4Controller extends Controller
{
    /**
     ** Service instance.
     *
     * @var Number4Service
     */
    protected $number4Service;

    /**
     ** Constructor.
     *
     * @param Number4Service $number4Service
     */
    public function __construct(Number4Service $number4Service)
    {
        $this->number4Service = $number4Service;
    }

    /**
     ** Index.
     *
     * @return Response
     */
    public function index()
    {
        return view('dashboard.number_4.index');
    }

    /**
     ** Datatable.
     *
     * @param Request $request
     * @return Response
     */
    public function datatable(Request $request)
    {
        $result = $this->number4Service->datatable($request);

        return $result->transaction;
    }
}
