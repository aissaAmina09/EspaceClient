<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="#">
<meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="#">
<!-- Favicon icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
<!-- Google font-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
<!-- Required Fremwork -->
<link rel="stylesheet" type="text/css" href="{{asset('front/bower_componentsnew/bootstrap/css/bootstrap.min.css')}}">
<!-- themify-icons line icon -->
<link rel="stylesheet" type="text/css" href="{{asset('front/icon/themify-icons/themify-icons.css')}}">
<!-- ico font -->
<link rel="stylesheet" type="text/css" href="{{asset('front/icon/icofont/css/icofont.css')}}">
<!-- flag icon framework css -->
<link rel="stylesheet" type="text/css" href="{{asset('front/pages/flag-icon/flag-icon.min.css')}}">
<!-- Menu-Search css -->
<link rel="stylesheet" type="text/css" href="{{asset('front/pages/menu-search/css/component.css')}}">
<!--forms-wizard css-->
<link rel="stylesheet" type="text/css" href="{{asset('front/bower_componentsnew/jquery.steps/css/jquery.steps.css')}}">
<!-- Style.css -->
<link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/css/jquery.mCustomScrollbar.css')}}">
</head>


</head>

<body>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>

<STYle>#map { height: 500px; }
</STYle>



<BODy>
    <div class="form-group row">
        <div class="col-md-4 col-lg-2">
            <label for="surname-2" class="block">Lieu dit *</label>
        </div>
        <div class="col-md-8 col-lg-10">
            <textarea id="surname-2" name="surname" type="text" class="form-control required"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-4 col-lg-2">{{ __('latitude (X') }} </div>
        <div class="col-md-8 col-lg-5">
            <input id="latitude" type="text" class="form-control" name="latitude" >
           
        </div>
        <div class="col-md-4 col-lg-2">{{ __('longitude (Y)') }}  </div>
        <div class="col-md-8 col-lg-3">
            <input id="longitude" type="text" class="form-control" name="longitude" >
          
        </div>
    </div>
    <div id="map">

    </div>
</BODy>



    <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
 integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
 crossorigin=""></script>

 <script>
    var map = L.map('map').setView([36.752887, 3.042048], 13);
 
 var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
     maxZoom: 18,
     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
         'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
     id: 'mapbox/streets-v11',
     tileSize: 512,
     zoomOffset: -1
 }).addTo(map);
 //get coordinat location
 var latInput = document.querySelector("[name=latitude]");
 var lngInput = document.querySelector("[name=longitude]");
 var curlocation =[36.752887, 3.042048];
 map.attributionControl.setPrefix('YOUR_ATTRIBUTION');

 var marker =new L.marker(curlocation, {
                  draggable:'true',
 });
marker.on('dragend', function (event){
      var position = marker.getLatLng();
      marker.setLatLng(position ,{
          draggable :'true',
           }).bindPopup(position).update();
           $("#latitude").val(position.lat);
           $("#longitude").val(position.lng);
});
map.addLayer(marker);
map.on("click",function(e){
    var lat=e.latlng.lat;
    var lng=e.latlng.lng;
    if(!marker){
        marker= l.marker(e.latlng).addTo(maymap);

    }else{
        marker.setLatLng(e.latlng);
    }
    latInput.value=lat;
    lngInput.value=lng;

});
 </script>

    <script type="text/javascript" src="{{asset('front/bower_componentsnew/jquery/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/bower_componentsnew/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/bower_componentsnew/popper.js/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/bower_componentsnew/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('front/bower_componentsnew/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('front/bower_componentsnew/modernizr/js/modernizr.js')}}"></script>


    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{asset('front/bower_componentsnew/i18next/js/i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/bower_componentsnew/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/bower_componentsnew/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/bower_componentsnew/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
    <!--Forms - Wizard js-->
    <script src="{{asset('front/bower_componentsnew/jquery.cookie/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('front/bower_componentsnew/jquery.steps/js/jquery.steps.js')}}"></script>
    <script src="{{asset('front/bower_componentsnew/jquery-validation/js/jquery.validate.js')}}"></script>
    <!-- Validation js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script type="text/javascript" src="assets/pages/form-validation/validate.js')}}"></script>
    <!-- Custom js -->
    <script src="{{asset('front/pages/forms-wizard-validation/form-wizard.js')}}"></script>
    <script src="{{asset('front/js/pcoded.min.js')}}"></script>
    <script src="{{asset('front/js/demo-12.js')}}"></script>
    <script src="{{asset('front/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/script.js')}}"></script>
   <!-- phone js -->

    <script src="{{asset('front/pages/form-masking/inputmask.js')}}"></script>
    <script src="{{asset('front/pages/form-masking/jquery.inputmask.js')}}"></script>
    <script src="{{asset('front/pages/form-masking/autoNumeric.js')}}"></script>
    <script src="{{asset('front/pages/form-masking/form-mask.js')}}"></script>
</HTml>