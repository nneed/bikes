<?php

namespace App\Http\Controllers;

use App\Bike;
use App\Http\Requests\StorePhoto;
use Illuminate\Http\Request;
use App\Photo;
use Illuminate\Support\Facades\Storage;

class BikeController extends Controller
{

    public function Index()
    {
        $bikes = Bike::all();
        $make = $bikes->pluck('Model','Make');
      //  dd($make);
        $make = $make->map(function ($item, $key) {
            return trim($item);
        });
        $make = $make->unique();

        $model = $bikes->pluck(['Make','Model']);
        $model = $model->map(function ($item, $key) {
            return trim($item);
        });
        $model = $model->unique();

//        dd($model);
        return view('bike.index', ['make' => $make,'model'=>$model]);
    }

}
