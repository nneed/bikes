@extends('layouts.app')

@section('content')

    <div class="bike-filter">
        <bike-filter
            :selected="{{$selected}}"
            :make="{{$make}}"
            :model="{{$model}}"
            :start_year="{{$startYear}}"
            :end_year="{{$endYear}}"
        ></bike-filter>
    </div>
    @each('bike.bikes', $bikes, 'bike')






{{--        @foreach ($selected as $select)--}}
{{--            {{$select}}--}}
{{--        @endforeach--}}

@endsection
