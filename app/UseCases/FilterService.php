<?php
/**
 * Created by PhpStorm.
 * User: НЮКазанков
 * Date: 12.04.2019
 * Time: 15:26
 */

namespace App\UseCases;

use App\Bike;

class FilterService
{
    public function getDataForFilter() : array
    {
        $bikes = Bike::all();

        $make = $bikes->pluck('Make');
        $make = $make->map(function ($item, $key) {
            return trim($item);
        });
        $make = $make->unique();

        $model = $bikes->mapToGroups(function ($item, $key) {
            $arr = [];
            $key = trim(str_replace('  ',' ',$item->Make));
            $arr[$key] = $item->Model;
            return $arr;
        });

        $startYear = $bikes->mapToGroups(function ($item, $key) {
            $arr = [];
            $key = trim(str_replace('  ',' ',$item->Model));
            $arr[$key] = $item->StartYr;
            return $arr;
        });

        $endYear = $bikes->mapToGroups(function ($item, $key) {
            $arr = [];
            $key = trim(str_replace('  ',' ',$item->Model));
            $arr[$key] = $item->EndYr;
            return $arr;
        });



        /**
         * model->make
         * year->model
         */

        $data = [
            'make' => $make,
            'model'=>$model,
          //  'modelCode'=>$model,
            'startYear'=>$startYear,
            'endYear'=>$endYear,
//            'EngDisp'=>$model,
//            'EngMaxPwr'=>$model,
//            'EngMaxPwrRPM'=>$model,
//            'EngMaxTrq'=>$model,
//            'EngMaxTrq'=>$model,
//            'EngMaxTrqRPM'=>$model,
//            'EngFueling'=>$model,
//            'EngFueling'=>$model,
//            'EngCooling'=>$model,
//            'EngCylinders'=>$model,
//            'EngCylinders'=>$model,
//            'EngGearQty'=>$model,
//            'EngSvcInterval'=>$model,
//            'BikeWtDry'=>$model,
//            'BikeWtWet'=>$model,
//            'BikeWtWet'=>$model,
//            'BikeWtWetEst'=>$model,
//            'BikeFuelCap'=>$model,
//            'WheelTravelFrt'=>$model,
//            'WheelTravelRear'=>$model,
//            'WheelTravelRear'=>$model,
//            'WheelDiaRear'=>$model,
//            'WheelDiaFrt'=>$model,
//            'WheelType'=>$model,
//            'BikeFuelEconSpec'=>$model,
//            'FuellyData'=>$model,
//            'FuellyData'=>$model,
//            'BikeFuelEconComb'=>$model,
//            'BikeABS'=>$model,
//            'BikeTC'=>$model,
        ];
        return $data;
    }
}