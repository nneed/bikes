@extends('layouts.app')

@section('content')

    <div class="bike-filter">
        <bike-filter
            :selected="{{$selected}}"
            :make="{{$make}}"
            :cylinders="{{$cylinders}}"
            :gears="{{$gears}}"
            :wheel_dia_rear="{{$wheelDiaRear}}"
            :wheel_dia_frt="{{$wheelDiaFrt}}"
            :wheel_type="{{$wheelType}}"
            :bike_abs="{{$bikeABS}}"
            :bike_tс="{{$bikeTC}}"
            :start_year="{{$startYear}}"
            :end_year="{{$endYear}}"
            :count="{{$bikes->count()}}"
            :bikes="{{$bikes}}"
        ></bike-filter>
    </div>
    {{--@each('bike.bikes', $bikes, 'bike')--}}

    {{--<div class="container">--}}
    <?php // if ($bikes) echo $bikes->links(); ?>
    {{--</div>--}}



{{--        @foreach ($selected as $select)--}}
{{--            {{$select}}--}}
{{--        @endforeach--}}

@endsection
