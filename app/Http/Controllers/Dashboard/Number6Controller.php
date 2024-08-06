<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Controllers\Controller;

use App\Services\Dashboard\Number6Service;

class Number6Controller extends Controller
{
    /**
     ** Service instance.
     *
     * @var Number6Service
     */
    protected $number6Service;

    /**
     ** Constructor.
     *
     * @param Number6Service $number6Service
     */
    public function __construct(Number6Service $number6Service)
    {
        $this->number6Service = $number6Service;
    }

    /**
     ** Index.
     *
     * @return Response
     */
    public function index()
    {
        return view('dashboard.number_6.index');
    }

    /**
     ** Datatable.
     *
     * @param Request $request
     * @return Response
     */
    public function datatable(Request $request)
    {
        $result = $this->number6Service->datatable($request);

        return $result->product;
    }
}
