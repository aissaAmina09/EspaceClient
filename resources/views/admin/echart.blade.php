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
<br><br>
<div class="col-md-12">
    <div class="card">
    <div class="card-header">
    <div class="card-header-left">
    <h5>Marketing partenaires</h5>
    </div>
    
    </div>
    <div class="card-block marketing-card p-t-0">
    <div class="table-responsive">
    <table class="table">
    <thead>
    <tr>
    <th>Companies</th>
    <th>Client</th>
    <th>Changes</th>
    <th colspan="3">Date</th>
    </tr>
    </thead>
     <tbody>
    <tr>
    <td colspan="6" class="marketing-header">Today</td>
    </tr>
    <tr>
   
   
    </tr>
    <tr>
   
    
  
    </tr>
    <tr>
    
   
   
    </tr>
    <tr>
    <td><a href="#!"><i class="icofont icofont-brand-amazon bg-amazon social-icon"></i></a>
    <div class="table-contain">
    <h6>Amazon ads</h6>
    <p class="text-muted">6:00am- 8:00am</p>
    </div>
    </td>
    <td>
    <p class="text-muted">Softtech</p>
    </td>
    <td>
    <i class="icofont icofont-bird text-c-green"></i>
    <p class="m-l-10 text-c-green">6.45%</p>
    </td>
    <td><span>$3365</span></td>
    <td>
    <button class="btn btn-default btn-bg-c-yellow btn-outline-default btn-round btn-action">Hold</button>
    </td>
    <td>
    <div class="dropdown-primary dropdown open">
    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"><i class="icofont icofont-brand-flikr text-muted"></i>
    </button>
    <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
    <a class="dropdown-item waves-light waves-effect" href="#">Insert</a>
    <a class="dropdown-item waves-light waves-effect" href="#">Update</a>
    <a class="dropdown-item waves-light waves-effect" href="#">Delete</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item waves-light waves-effect" href="#">disable</a>
    </div>
    </div>
    </td>
    </tr>
    <tr>
    
    </tr>
    <tr>
    
    </tr>
    <tr class="b-b-default">
    <td><a href="#!"><i class="icofont icofont-social-dribbble bg-dribble social-icon"></i></a>
    <div class="table-contain">
    <h6>Youtube Videos</h6>
    <p class="text-muted">6:00am- 8:00am</p>
    </div>
    </td>
    <td>
    <p class="text-muted">Softtech</p>
    </td>
    <td>
    <i class="icofont icofont-bird text-c-pink"></i>
    <p class="m-l-10 text-c-pink">2.34%</p>
    </td>
    <td><span>$4645</span></td>
    <td>
    <button class="btn btn-default btn-bg-c-pink btn-outline-default btn-round btn-action">Closed</button>
    </td>
    <td>
     <div class="dropdown-primary dropdown open">
    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"><i class="icofont icofont-brand-flikr text-muted"></i>
    </button>
    <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
    <a class="dropdown-item waves-light waves-effect" href="#">Insert</a>
    <a class="dropdown-item waves-light waves-effect" href="#">Update</a>
    <a class="dropdown-item waves-light waves-effect" href="#">Delete</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item waves-light waves-effect" href="#">disable</a>
    </div>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    <div class="row marketing-card-footer">
    <div class="col-sm-9">
    <div class="d-inline-block m-r-20">
    <h6 class=" m-l-10 m-b-20 f-w-600 f-14">Statut de la semaine dernière</h6>
    <div class="tab-cont m-l-10">
    <span class="last-week-report" data-peity="{&quot;innerRadius&quot;: 10, &quot;radius&quot;: 16 }" style="display: none;">1,2,3,2</span><svg class="peity" height="32" width="32"><path d="M 16 0 A 16 16 0 0 1 27.31370849898476 4.686291501015241 L 23.071067811865476 8.928932188134524 A 10 10 0 0 0 16 6" fill="#4680FE"></path><path d="M 27.31370849898476 4.686291501015241 A 16 16 0 0 1 27.31370849898476 27.31370849898476 L 23.071067811865476 23.071067811865476 A 10 10 0 0 0 23.071067811865476 8.928932188134524" fill="#93BE52"></path><path d="M 27.31370849898476 27.31370849898476 A 16 16 0 0 1 0 16.000000000000004 L 6 16 A 10 10 0 0 0 23.071067811865476 23.071067811865476" fill="#FC6180"></path><path d="M 0 16.000000000000004 A 16 16 0 0 1 15.999999999999996 0 L 15.999999999999998 6 A 10 10 0 0 0 6 16" fill="#FFB64D"></path></svg>
    <p>56,345 <i class="icofont icofont-long-arrow-up text-c-green d-inline-block"></i><span class="text-c-green d-inline-block">( +15.70% )</span></p>
    </div>
    </div>
    <div class="d-inline-block">
    <h6 class=" m-l-10 m-b-20 f-w-600 f-14">Statut de le mois  dernièr</h6>
    <div class="tab-cont m-l-10">
    <span class="last-month-report" data-peity="{&quot;innerRadius&quot;: 10, &quot;radius&quot;: 16 }" style="display: none;">1,3,4,2</span><svg class="peity" height="32" width="32"><path d="M 16 0 A 16 16 0 0 1 25.40456403667957 3.055728090000841 L 21.877852522924734 7.9098300562505255 A 10 10 0 0 0 16 6" fill="#4680FE"></path><path d="M 25.40456403667957 3.055728090000841 A 16 16 0 0 1 25.40456403667957 28.94427190999916 L 21.877852522924734 24.090169943749473 A 10 10 0 0 0 21.877852522924734 7.9098300562505255" fill="#93BE52"></path><path d="M 25.40456403667957 28.94427190999916 A 16 16 0 0 1 0.7830957392775417 11.055728090000844 L 6.489434837048464 12.909830056250527 A 10 10 0 0 0 21.877852522924734 24.090169943749473" fill="#FC6180"></path><path d="M 0.7830957392775417 11.055728090000844 A 16 16 0 0 1 15.999999999999996 0 L 15.999999999999998 6 A 10 10 0 0 0 6.489434837048464 12.909830056250527" fill="#FFB64D"></path></svg>
    <p>5,845 <i class="icofont icofont-long-arrow-down text-c-pink d-inline-block"></i><span class="text-c-pink d-inline-block">( +1.65% )</span></p>
    </div>
    </div>
    </div>
    <div class="col-sm-3 text-right">
    <button class="btn btn-primary"> View report</button>
     </div>
    </div>
    </div>
    </div>
    </div>
    <script>
        var map = L.map('map').setView([36.752887, 3.042048], 13);
        
        var myStyle = {
      "color": "#00FFFF",
      "weight": 5,
      "opacity": 1
     };
     
         var tiles =  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
       // coords =[[36.50076700392493, 2.773151970231559],[36.539689554661905, 2.961261134110762]];
   var leafletIcon =L.icon({
    iconUrl:'https://leafletjs.com/examples/custom-icons/leaf-green.png',
    iconSize: [38,95],
    iconAnchor:[22,94],
    popupAnchor:[12,-90]
   })     
    
var coords = [
@foreach ($outlet as $location)
[ {{ $location->latitude }}, {{ $location->longitude }} ],
//console.log($location);
@endforeach
];

         rent =[
            
         @foreach ($outlet as $location)
 "{{ $location->intitule_proj }}",
//console.log($location);
@endforeach
];

         let l =coords.length;
         for(let i=0; i< l; i++){
             //markers
             var marker =L.marker(coords[i],myStyle).addTo(map);
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
