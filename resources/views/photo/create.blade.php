@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card mb-3">
                <div class="card-header">
                    Common
                </div>
                <div class="card-body pb-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" class="col-form-label">Desc</label>
                                <input id="name" class="form-control{{ $errors->has('desc') ? ' is-invalid' : '' }}" name="desc" value="{{ old('desc') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input{{ $errors->has('file') ? ' is-invalid' : '' }}" id="validatedFile"   name="file">
                                <label class="custom-file-label" for="validatedFile">Choose photo...</label>
                                @if ($errors->has('file'))
                                    <span class="invalid-feedback"><strong>{{ $errors->first('file') }}</strong></span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>


        {{--<form method="POST" method="POST" enctype="multipart/form-data">--}}
            {{--@csrf--}}

            {{--<div class="form-group">--}}
                {{--<label for="name" class="col-form-label">Desc</label>--}}
                {{--<input id="name" class="form-control{{ $errors->has('desc') ? ' is-invalid' : '' }}" name="name" value="{{ old('desc') }}" required>--}}
                {{--@if ($errors->has('desc'))--}}
                    {{--<span class="invalid-feedback"><strong>{{ $errors->first('desc') }}</strong></span>--}}
                {{--@endif--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
                {{--<div class="col-md-6 custom-file">--}}
                    {{--<input type="file" class="custom-file-input" id="validatedFile"   name="file">--}}
                    {{--<label class="custom-file-label" for="validatedFile">Choose photo...</label>--}}
                    {{--@if ($errors->has('file'))--}}
                        {{--<span class="invalid-feedback"><strong>{{ $errors->first('file') }}</strong></span>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="form-group">--}}
                {{--<button type="submit" class="btn btn-primary">Save</button>--}}
            {{--</div>--}}
        {{--</form>--}}


    </div>
@endsection

@php
//dd($errors->first('file'));
@endphp



