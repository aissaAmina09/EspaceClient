

@extends('admin.layoutadmin.master')
@section('title'.'laravel')
@section('content')
<div class="row">
    <div class="col-lg-12 col-xl-6">
    
    <div class="card">
    <div class="card-header">
    <h5>Basic</h5>
    <span>Map shows places around the world</span>
    <div class="card-header-right"> <i class="icofont icofont-spinner-alt-5"></i> </div>
    </div>
    <div class="card-block">
    <div id="basic-map" class="set-map"></div>
    </div>
    </div>
    
    </div>
    <div class="col-lg-12 col-xl-6">
    
    <div class="card">
    <div class="card-header">
    <h5>Markers</h5>
    <span>Maps shows <code>location</code> of the place</span>
    <div class="card-header-right"> <i class="icofont icofont-spinner-alt-5"></i> </div>
    </div>
    <div class="card-block">
    <div id="markers-map" class="set-map"></div>
    </div>
    </div>
    
    </div>
    </div>
@endsection

@push('page-scripts')






@endpush
