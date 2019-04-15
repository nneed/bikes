<?php

namespace App\Http\Controllers;

use App\UseCases\FilterService;

class BikeController extends Controller
{

    public $service;

    public function __construct(FilterService $service)
    {
        $this->service = $service;
    }

    public function Index()
    {
        $data = $this->service->getDataForFilter();
        return view('bike.index', $data);
    }

}
