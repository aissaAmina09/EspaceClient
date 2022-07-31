@extends('admin.layoutadmin.master')
@section('title'.'laravel')
@section('content')
<style>#map { height: 180px; }</style>
<div class="page-body">
    <div class="row">
<div class="col-md-6 col-xl-4">
    <div class="card widget-statstic-card">
        <div class="card-header">
            <div class="card-header-left">
                <h5>Nombre de partenaires</h5>
            </div>
        </div>
        <div class="card-block">
            <i class="icofont icofont-users-social st-icon bg-c-pink txt-lite-color"></i>
            <div class="text-left">
                <h3 class="d-inline-block">{{$countPartenaire}}</h3>
                <i class="icofont icofont-long-arrow-down text-c-pink f-30 "></i>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 col-xl-4">
    <div class="card widget-statstic-card">
        <div class="card-header">
            <div class="card-header-left">
                <h5>Nouveaux bon de commande</h5>
            </div>
        </div>
        <div class="card-block">
            <i class="icofont icofont-chart-line st-icon bg-c-yellow"></i>
            <div class="text-left">
                <h3 class="d-inline-block">{{$countbbc}}</h3>
                <i class="icofont icofont-long-arrow-up text-c-green f-30 "></i>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
   <div id="map" style="width: 1800px; height: 600px;"></div>
</div>
</div>
<script>
   var map = L.map('map').setView([36.752887, 3.042048], 13);
   var myStyle = {
 "color": "#ff7800",
 "weight": 5,
 "opacity": 1
};
    var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(map);
    coords =[[36.50076700392493, 2.773151970231559],[36.539689554661905, 2.961261134110762]];
    rent =['04 Logts CFPA 19 JUIN','Realisation loge arbitre et salle de cours']
    let l =coords.length;
    for(let i=0; i< l; i++){
        //markers
        var marker =L.circleMarker(coords[i],myStyle).addTo(map);
        //lables
        var toollip = L.tooltip({
              permanent : true 
        }).setContent(rent[i]);
        marker.bindTooltip(toollip);
    }
</script>
@endsection
@push('page-scripts')
@endpush
