@extends('admin.layoutadmin.master')
@section('title'.'laravel')
@section('content')
<style>#map { height: 180px; }</style>
<div class="page-body">
    <div class="row">
<div class="col-md-6 col-xl-4">
  
</div>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
   <div id="mapid" style="width: 1800px; height: 600px;"></div>
</div>
</div>
<br><br>
    <div class="col-sm-3 text-right">
    <button class="btn btn-primary"> View report</button>
     </div>
    </div>
    </div>
    </div>
    </div>
     <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/leaflet.markercluster.js"></script>

<script>
 







 var map = L.map('mapid').setView([36.752887, 3.042048], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
var markers = L.markerClusterGroup();

axios.get('{{ route('outlets.index') }}')
.then(function (response) {
    var marker = L.geoJSON(response.data, {
        pointToLayer: function(geoJsonPoint, latlng) {
            return L.marker(latlng).bindPopup(function (layer) {
                return layer.feature.properties.map_popup_content;
            });
        }
    });
    markers.addLayer(marker);
})
.catch(function (error) {
    console.log(error);
});
map.addLayer(markers);
var theMarker;

map.on('click', function(e) {
    let latitude = e.latlng.lat.toString().substring(0, 15);
    let longitude = e.latlng.lng.toString().substring(0, 15);

    if (theMarker != undefined) {
        map.removeLayer(theMarker);
    };

    var popupContent = "Your location : " + latitude + ", " + longitude + ".";
    popupContent += '<br><a href="">Add new outlet here</a>';

    theMarker = L.marker([latitude, longitude]).addTo(map);
    theMarker.bindPopup(popupContent)
    .openPopup();
});
</script>
@endsection
@push('page-scripts')
@endpush
