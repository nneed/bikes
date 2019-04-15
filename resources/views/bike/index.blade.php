@extends('layouts.app')

@section('content')






    <div class="bike-filter">
        <bike-filter :make="{{$make}}" :model="{{$model}}" :start_year="{{$startYear}}" :end_year="{{$endYear}}"></bike-filter>
    </div>
    {{--<div class="container">--}}
        {{--@foreach ($bikes as $bike)--}}
            {{--{{$bike}}--}}
        {{--@endforeach--}}
    {{--</div>--}}

@endsection


