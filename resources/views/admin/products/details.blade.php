@extends('layouts.admin-template')

@section('content')

    {!! showMessage() !!}

    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title text-bold">Products Details</h3>
            <div class="heading-elements">
                <a href="{{ url('admin/products') }}" class="btn btn-primary">Back To Products</a>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h2>{{$productData->title}}</h2>
                        </div> --}}
                        <div class="card-body">
                            <h5 class="card-title"><b>ID:</b> {{!empty($productData->id) ? $productData->id:''}}</h5>
                            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Title:</b> {{!empty($productData->title) ? $productData->title: ''}}</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Description:</b> {!! html_entity_decode($productData->description) !!}</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Small Description:</b> {!! html_entity_decode($productData->small_description) !!}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection

    @section('footer_script')

    @endsection
