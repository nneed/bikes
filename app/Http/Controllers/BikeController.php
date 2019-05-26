<?php

namespace App\Http\Controllers;

use App\Bike;
use App\UseCases\FilterService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BikeController extends Controller
{

    public $service;

    public function __construct(FilterService $service)
    {
        $this->service = $service;
    }

    public function Index(Request $request)
    {
        $data = $this->service->getDataForFilter();

        $input = $request->getRequestUri();

        $selected_params = [];
        $filtered_params = preg_replace('#/?\??#','',$input);

        if ($filtered_params){
          //  dd($request->all());
            $input = explode('&',$filtered_params);
            $selected_params = [];

            foreach ($input as $string){
                $arr_key_value = explode('=', $string);
                if ($arr_key_value[1] === '') continue;
                $selected_params[$arr_key_value[0]][] = $arr_key_value[1];
            }
        }
        $page = '';
        if (array_key_exists('page', $selected_params)){
            $selected_params = $request->all();
//            dd(array_pop($selected_params));
            $page = "page=" . array_pop($selected_params);

        }
        $bikes = collect([]);
//        dd($selected_params);
        if ($selected_params){
            $bikes = Bike::query();
            foreach ($selected_params as $key_param => $params){
                $bikes->orWhereIn($key_param,str_replace("+",' ',$params));
            }
            /*PAGINATION*/
           // $bikes = $bikes->simplePaginate(5);
           // $bikes->appends($selected_params);
            $bikes = $bikes->get();
        }
        $data['bikes'] = $bikes;
        $input = $request->getRequestUri();
        $data['selected'] = collect($selected_params)??[];
//        dd($data);
        return view('bike.index', $data);
    }

    public function getBikes(Request $request)
    {
        return $request->all();
    }

}
