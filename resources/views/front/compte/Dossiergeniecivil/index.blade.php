

@extends('admin.layoutadmin.master')
@section('title'.'laravel')
@section('content')
<div class="row">
    <div class="col-lg-12 col-xl-6">
    
    <div class="card">
    <div class="card-header">
    <h5>plan de masse</h5>
    <span>Map shows places around the world</span>
    <div class="card-header-right"> <i class="icofont icofont-spinner-alt-5"></i> </div>
    </div>
    <div class="card-block">
    <div id="basic-map" class="set-map">
        <iframe src="//sharecad.org/cadframe/load?url=https://www.cadsofttools.com/dwgviewer/hostel_block.dwg" width="100%" height="100%"scrolling="no"> </iframe>
    </div>
    </div>
    </div>
    
    </div>
    <div class="col-lg-12 col-xl-6">
    
    <div class="card">
    <div class="card-header">
    <h5>plan de levéTopograp </h5>
    <span>Maps shows <code>location</code> of the place</span>
    <div class="card-header-right"> <i class="icofont icofont-spinner-alt-5"></i> </div>
    </div>
    <div class="card-block">
    <div id="markers-map" class="set-map"></div>
    </div>
    </div>
    
    </div>
    </div>
    
    <div class="col-lg-12 col-xl-6">
    
        <div class="card">
        <div class="card-header">
        <h5>vue Plan RDC </h5>
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
