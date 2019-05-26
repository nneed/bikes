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

        $cylinders = $bikes->mapToGroups(function ($item, $key) {
            $arr = [];
            $key = trim(str_replace('  ',' ',$item->Make));
            $arr[$key] = $item->EngCylinders;
            return $arr;
        });

        $gears = $bikes->mapToGroups(function ($item, $key) {
            $arr = [];
            $key = trim(str_replace('  ',' ',$item->Make));
            $arr[$key] = $item->EngGearQty;
            return $arr;
        });

        $wheelDiaRear = $bikes->mapToGroups(function ($item, $key) {
            $arr = [];
            $key = trim(str_replace('  ',' ',$item->Make));
            $arr[$key] = $item->WheelDiaRear;
            return $arr;
        });

        $wheelDiaFrt = $bikes->mapToGroups(function ($item, $key) {
            $arr = [];
            $key = trim(str_replace('  ',' ',$item->Make));
            $arr[$key] = $item->WheelDiaFrt;
            return $arr;
        });


        $filteredWheelType = $bikes->reject(function ($value, $key) {
            return $value->WheelType == '';
        });
        $wheelType = $filteredWheelType->mapToGroups(function ($item, $key) {
            $arr = [];
            $key = trim(str_replace('  ',' ',$item->Make));
            $arr[$key] = $item->WheelType;
            return $arr;
        });


        $filteredbikeABS = $bikes->reject(function ($value, $key) {
            return $value->BikeABS == '';
        });
        $bikeABS = $filteredbikeABS->mapToGroups(function ($item, $key) {
            $arr = [];
            $key = trim(str_replace('  ',' ',$item->Make));
            $arr[$key] = $item->BikeABS;
            return $arr;
        });

        $filteredBikeTC = $bikes->reject(function ($value, $key) {
            return $value->BikeTC == '';
        });

        $bikeTC = $filteredBikeTC->mapToGroups(function ($item, $key) {
            $arr = [];
            $key = trim(str_replace('  ',' ',$item->Make));
            $arr[$key] = $item->BikeTC;
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
            'cylinders'=> $cylinders,
          //  'modelCode'=>$model,
            'startYear'=>$startYear,
            'endYear'=>$endYear,
            'gears'=>$gears,
            'wheelDiaRear'=>$wheelDiaRear,
            'wheelDiaFrt'=>$wheelDiaFrt,
            'wheelType'=>$wheelType,
            'bikeABS'=>$bikeABS,
            'bikeTC'=>$bikeTC,

        ];

        return $data;
    }
}