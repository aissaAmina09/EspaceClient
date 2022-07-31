
@extends('front.layoutsfront.master')
@section('title'.'laravel')
@section('content')
<div class="page-body">
  <div class="row"id="render">
    <!-- card1 start -->
    <div class="col-md-12 col-xl-4">
    <div class="card fb-card">
        <div class="card-header">
            <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
            <div class="d-inline-block">
                <h5>RECEVABILITE DU DOSSIER</h5>
                <span>blog page timeline</span>
            </div>
        </div>
        <div class="card-block text-center">
            <div class="row">
                <div class="col-6 b-r-default">
                    <h2>{{ $countEncours}}</h2>
                    <a href=" {{route('Encours')}}"><p class="text-muted">EN COURS</p></a>
                </div>
                <div class="col-6">
                    <h2>{{ $countNonRecevable}}</h2>
                    <a href="{{route('NonRecevable')}}"><p class="text-muted">NON RECEVABLE</p></a>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div class="col-md-12 col-xl-4">
    <div class="card fb-card">
        <div class="card-header">
            <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
            <div class="d-inline-block">
                <h5>TRAITEMENT DES DOSSIERS RECEVABLES</h5>
                <span>blog page timeline</span>
            </div>
        </div>
        <div class="card-block text-center">
            <div class="row">
                <div class="col-6 b-r-default">
                    <h2>{{$Traitements}}</h2>
                    <a href="{{route('Traitement')}}">  <p class="text-muted">EN COURS DE TRAITEMENT</p></a>
                </div>
                <div class="col-6">
                    <h2>{{$countEXAMINES}}</h2>
                    <a href="{{route('EXAMINES')}}">  <p class="text-muted">EXAMINES</p></a>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div class="col-md-12 col-xl-4">
    <div class="card fb-card">
        <div class="card-header">
            <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
            <div class="d-inline-block">
                <h5>CONTRÔLE CHANTIER</h5>
                <span>blog page timeline</span>
            </div>
        </div>
        <div class="card-block text-center">
            <div class="row">
                <div class="col-4 b-r-default">
                    <h2>{{$countNONDEMARRES}}</h2>
                      <a href="{{route('NONDEMARRES')}}">  <p class="text-muted">NON DEMARRES</p></a>
                </div>
                <div class="col-4">
                    <h2>{{$countProjetEnCours}}</h2>
                    <a href="{{route('ProjetEnCours')}}"> <p class="text-muted">EN COURS</p></a>
                </div>
                <div class="col-4">
                    <h2>{{$countProjet_Arret}}</h2>
                    <a href="{{route('Projet_Arret')}}">    <p class="text-muted">A L'ARRÊT</p></a>
                </div>
            </div>
        </div>
    </div>
    
</div>
    
<div class="col-md-12 col-xl-8 ">
    <div class="card">
        <div class="card-block user-detail-card">
            <div class="row">
               
                <div class="col-sm-8 user-detail">
                    <div class="row">
                        <div class="col-sm-5">
                            <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-user"></i>Nom :</h6>
                        </div>
                        <div class="col-sm-7">
                            <h6 class="m-b-30"> @if(Auth::guard('web')->check()){{Auth::guard('web')->user()->Nom}}@endif</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-email"></i>Nif  :</h6>
                        </div>
                        <div class="col-sm-7">
                            <h6 class="m-b-30"><a href="mailto:dummy@example.com"> @if(Auth::guard('web')->check()){{Auth::guard('web')->user()->Nif}}@endif</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-email"></i>Email  :</h6>
                        </div>
                        <div class="col-sm-7">
                            <h6 class="m-b-30"><a href="mailto:dummy@example.com"> @if(Auth::guard('web')->check()){{Auth::guard('web')->user()->email}}@endif</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-home"></i>Address :</h6>
                        </div>
                        <div class="col-sm-7">
                            <h6 class="m-b-30"> @if(Auth::guard('web')->check()){{Auth::guard('web')->user()->Adresse}}@endif</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <h6 class="f-w-400 m-b-30"><i class="icofont icofont-ui-touch-phone"></i>Telephone :</h6>
                        </div>
                        <div class="col-sm-7">
                            <h6 class="m-b-30">@if(Auth::guard('web')->check()){{Auth::guard('web')->user()->Telephone}}@endif</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <h6 class="f-w-400 m-b-30"><i class="icofont icofont-web"></i>Site web :</h6>
                        </div>
                        <div class="col-sm-7">
                            <h6 class="m-b-30"><a href="#!">/</a></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <h6 class="f-w-400 m-b-30"><i class="icofont icofont-fax"></i>Fax :</h6>
                        </div>
                        <div class="col-sm-7">
                            <h6 class="m-b-30">@if(Auth::guard('web')->check()){{Auth::guard('web')->user()->Fax}}@endif</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<div class="col-md-12 col-xl-4">
    <div class="card card-overview ">
        <div class="card-header ">
            <div class="card-header-left ">
                <h5>Aperçu du projet </h5>
            </div>
           
        </div>
        <div class="card-block">
            <div class="m-b-50">
                <div class="row justify-content-md-center">
                    <div class="col-sm-12">
                        <div id="project-overview-chart" class="project-overview-chart" style="height: 200px; overflow: hidden; text-align: left;"><div class="amcharts-main-div" style="position: relative;"><div class="amcharts-chart-div" style="overflow: hidden; position: relative; text-align: left; width: 447px; height: 200px; padding: 0px; touch-action: auto;"><svg version="1.1" style="position: absolute; width: 447px; height: 200px; top: -0.109375px; left: -0.28125px;"><desc>JavaScript chart by amCharts 3.21.5</desc><g><path cs="100,100" d="M0.5,0.5 L446.5,0.5 L446.5,199.5 L0.5,199.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0"></path></g><g></g><g></g><g></g><g></g><g></g><g><g aria-label="Project Sold: 12.79% 39 "><path cs="1000,1000" d=" M223.5,100 L151.52628067796434,30.575337761334183 A100,100,0,0,1,223.49999999999997,0 L223.5,100 Z" fill="#FFB64D" stroke="#FFFFFF" stroke-width="2" stroke-opacity="0.9" fill-opacity="1"></path></g><g aria-label="Project Returned: 21.31% 65 "><path cs="1000,1000" d=" M223.5,100 L139.39996850301839,154.1034629409865 A100,100,0,0,1,151.52628067796434,30.575337761334183 L223.5,100 Z" fill="#FC6180" stroke="#FFFFFF" stroke-width="2" stroke-opacity="0.9" fill-opacity="1"></path></g><g aria-label="Project Processed: 65.90% 201 "><path cs="1000,1000" d=" M223.5,100 L223.5,0 A100,100,0,1,1,139.39996850301839,154.1034629409865 L223.5,100 Z" fill="#4680ff" stroke="#FFFFFF" stroke-width="2" stroke-opacity="0.9" fill-opacity="1"></path></g></g><g></g><g></g><g></g><g></g><g></g><g><g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></div></div></div>
                    </div>
                </div>
            </div>
            <div class="p-t-20 p-b-20 ">
                <div class="row ">
                    <div class="col-sm-6 ">
                        <span class="bg-c-blue "></span>
                        <h6 class="m-l-30 f-w-600 m-b-5 ">23.89%</h6>
                        <p class="text-muted m-l-30 m-b-0 ">Projet traité</p>
                    </div>
                    <div class="col-sm-6 "><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                        <canvas id="project-over-sub-1" height="96" width="416" style="display: block; width: 208px; height: 48px;"></canvas>
                    </div>
                </div>
            </div>
            <div class="b-t-default p-t-20 p-b-20 ">
                <div class="row ">
                    <div class="col-sm-6 ">
                        <span class="bg-c-pink "></span>
                        <h6 class="m-l-30 f-w-600 m-b-5 ">17.78%</h6>
                        <p class="text-muted m-l-30 m-b-0 ">Projet retourné</p>
                    </div>
                    <div class="col-sm-6 "><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                        <canvas id="project-over-sub-2" height="96" width="416" style="display: block; width: 208px; height: 48px;"></canvas>
                    </div>
                </div>
            </div>
            <div class="b-t-default p-t-20 p-b-20 ">
                <div class="row ">
                    <div class="col-sm-6 ">
                        <span class="bg-c-yellow "></span>
                        <h6 class="m-l-30 f-w-600 m-b-5 ">10.56%</h6>
                        <p class="text-muted m-l-30 m-b-0 ">
                            Projet vendu </p>
                    </div>
                    <div class="col-sm-6 "><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                        <canvas id="project-over-sub-3" height="96" width="416" style="display: block; width: 208px; height: 48px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
  </div>
</div>

@endsection

@push('page-scripts')




@endpush