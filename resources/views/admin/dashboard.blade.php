@extends('layouts.admin-template')

@section('content')

    {!! showMessage() !!}

    <div class="panel panel-flat">
        <div class="panel-heading">
            <h3 class="panel-title text-bold">Dashboard</h3>
            <div class="heading-elements"></div>
        </div>
        <div class="panel-body">
            <h1 class="text-center text-uppercase text-bold"><img src="{{ URL::asset('assets/images/logo-2.png') }}" width="300" class="img-circle"></h1>
            <h1 class="text-center text-uppercase text-bold text-info"><a href="{!! url('/') !!}">Welcome to {{ config('app.name', 'APP_NAME') }}</a></h1>{{-- express-modify: 1.change .env file app-name, 2.chenge this file optional app-name --}}
            <h3 class="text-center text-uppercase text-bold text-danger">Admin panel</h3>
        </div>
    </div>

@endsection

@section('footer_script')
@endsection
