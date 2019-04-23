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
            $input = explode('&',$filtered_params);
            $selected_params = [];
            foreach ($input as $string){
                $arr_key_value = explode('=', $string);
                $selected_params[$arr_key_value[0]][] = $arr_key_value[1];
            }
        }
//dd($selected_params);
        if ($filtered_params){
            $query_srring = DB::table('TABLE 1');
         //   $query_srring->orWhereIn('Make',$selected_params['Make']);
            $bikes = Bike::query();
         //   dd($bikes);
            foreach ($selected_params as $key_param => $params){
                $query_srring->orWhereIn($key_param,$params);
                $bikes->orWhereIn($key_param,$params);
            }
//            dd($bikes->first()->getAttributes());
                $bikes = $bikes->get();
        }
        $data['bikes'] = $bikes??[];
        $input = $request->getRequestUri();
        $data['selected'] = collect($selected_params)??[];
//        dd($data);
        return view('bike.index', $data);
    }

}
