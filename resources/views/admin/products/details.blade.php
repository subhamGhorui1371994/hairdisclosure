@extends('layouts.admin-template')

@section('content')

    {!! showMessage() !!}

    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title text-bold">Service Details</h3>
            <div class="heading-elements">
                <a href="{{ url('admin/service') }}" class="btn btn-primary">Back To Services</a>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h2>{{$serviceData->title}}</h2>
                        </div> --}}
                        <div class="card-body">
                            {{-- {!! html_entity_decode($employeeDtlData->BRANCH_NAME) !!} --}}
                            <h5 class="card-title"><b>ID:</b> {{!empty($serviceData->id) ? $serviceData->id:''}}</h5>
                            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        </div>
                        {{-- <div class="card-body">
                            <h5 class="card-title"><b>Title:</b> {{!empty($serviceData->title) ? $serviceData->title: ''}}</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Description:</b> {{!empty($serviceData->description) ? $serviceData->description : ''}}</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Small Description:</b> {{!empty($serviceData->small_description) ? $serviceData->small_description : ''}}</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Small Description:</b> {{!empty($serviceData->small_description) ? $serviceData->small_description : ''}}</h5>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>

    @endsection

    @section('footer_script')

    @endsection
