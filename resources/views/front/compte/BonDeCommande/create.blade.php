

@extends('front.layoutsfront.mastersteps')
@section('title'.'laravel')
@section('content')

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
crossorigin=""/>

<STYle>#map { height: 180px; }

</STYle>
<body>
    <!-- Pre-loader start -->
   
</div>
    <!-- Pre-loader end -->
    
                            <div class="main-body">
                                <div class="page-wrapper">
                                   
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Form wizard with validation card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Ajouter un bon de commande </h5>
                                                        <span>ajouter description conçernant les coordonnées géographiques</span>
                                                        <div class="card-header-right"> <i class="icofont icofont-spinner-alt-5"></i> </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-md-12" >
                                                                <div id="wizard" >
                                                                    <section>
                                                                        <form class="wizard-form" id="example-advanced-form"  action="/saveBon" method="POST"enctype="multipart/form-data" style="height:1200% !important">
                                                                            {{ csrf_field() }}
                                                                            <h3> Maitre de l'Ouvrage </h3>
                                                                            <fieldset>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="userName-2" class="block">Maitre de l’Ouvrage  *</label>
                                                                                    </div>
                                                                                    @if (Auth::guard('web')->user()->type == 3)
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        <input id="userName-2"  name="MaitreOuvrage" type="text" value="{{Auth::guard('web')->user()->Nom}}"readonly  class=" form-control">
                                                                                    </div>
                                                                                    @else
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        <input id="userName-2"  name="MaitreOuvrage" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control">
                                                                                    </div>
                                                                                    @endif
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="email-2" class="block">Adresse  *</label>
                                                                                    </div>
                                                                                    @if (Auth::guard('web')->user()->type == 3) 
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        <input id="email-2" name="MaitreOuvrageAdr" type="text"value="{{Auth::guard('web')->user()->Adresse}}" readonly class=" form-control">
                                                                                    </div>
                                                                                    @else
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        <input id="email-2" name="MaitreOuvrageAdr" type="text"value="" oninput="this.value = this.value.toUpperCase()" class=" form-control">
                                                                                    </div>
                                                                                    @endif
                                                                                    
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="password-2" class="block">Nif *</label>
                                                                                    </div>
                                                                                    @if (Auth::guard('web')->user()->type == 3) 
                                                                                    <div class="col-md-8 col-lg-5">
                                                                                      
                                                                                        <input type="text" class="form-control  "name="MaitreOuvrageNif"   value="{{Auth::guard('web')->user()->Nif}}" readonly>
                                                                                    </div>
                                                                                    @else
                                                                                    <div class="col-md-8 col-lg-5">
                                                                                      
                                                                                        <input type="text" class="form-control "oninput="this.value = this.value.toUpperCase()" name="MaitreOuvrageNif"  value="" >
                                                                                    </div>
                                                                                    @endif
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="password-1" class="block">Tél *</label>
                                                                                    </div>
                                                                                    @if (Auth::guard('web')->user()->type == 3) 
                                                                                    <div class="col-md-8 col-lg-3">
                                                                                        <input type="text" class="form-control us_telephone" data-mask="(999) 999-9999"value="{{Auth::guard('web')->user()->Telephone}}"name="MaitreOuvrageTel"
                                                                                        readonly>
                                                                                    </div>
                                                                                    @else

                                                                                    <div class="col-md-8 col-lg-3">
                                                                                        <input type="text" class="form-control us_telephone" data-mask="(999) 999-9999"value=""name="MaitreOuvrageTel"
                                                                                        >
                                                                                    </div>
                                                                                    @endif
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="email" class="block">Email *</label>
                                                                                    </div>
                                                                                    @if (Auth::guard('web')->user()->type == 3) 
                                                                                    <div class="col-md-8 col-lg-5">
                                                                                        <input id="email"name="MaitreOuvrageEmail"type="email" class="form-control "value="{{Auth::guard('web')->user()->email}}" readonly>
                                                                                    </div>
                                                                                    @else
                                                                                    <div class="col-md-8 col-lg-5">
                                                                                        <input id="email" name="MaitreOuvrageEmail"type="email" class="form-control "value="" >
                                                                                    </div>

                                                                                    @endif
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="password-1" class="block">Fax *</label>
                                                                                    </div>
                                                                                    @if (Auth::guard('web')->user()->type == 3) 
                                                                                    <div class="col-md-8 col-lg-3">
                                                                                        <input type="text" class="form-control us_telephone" data-mask="(999) 999-9999"name="MaitreOuvrageFax"value="{{Auth::guard('web')->user()->Fax}}" readonly>
                                                                                    </div>
                                                                                    @else
                                                                                    <div class="col-md-8 col-lg-3">
                                                                                        <input type="text" name="MaitreOuvrageFax"class="form-control us_telephone" data-mask="(999) 999-9999"value="{{Auth::guard('web')->user()->Fax}}" >
                                                                                    </div>

                                                                                    @endif
                                                                                </div>
                                                                            </fieldset>
                                                                            <h3> Situation du Projet : 
                                                                            </h3>
                                                                            <fieldset >
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="name-2" class="block">Intitulé du Projet *</label>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        <input id="name-2"name="intitule_proj"  type="text" class="form-control required">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">Wilaya </div>
                                                                                    <div class="col-md-8 col-lg-5">
                                                                                        <select name="country" id="country"class="form-control" required="required" data-error="Please specify your need.">

                                                                                            @foreach(App\Bwilaya::all() as $countryData)

                                                                                            <option value="{{$countryData->CODE_Wilaya}}" selected>{{$countryData->nom_wilaya}}</option>
                                                                                            @endforeach
                                                                                            </select>
                                                                                    </div>
                                                                                    <div class="col-md-4 col-lg-2">Commune  </div>
                                                                                    <div class="col-md-8 col-lg-3">
                                                                                        <select name="state" id="state" class="form-control">
                                                                                            <option>--Commune--</option>
                                                                                             </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="surname-2" class="block">Lieu dit *</label>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        <textarea id="surname-2" name="adress_proj"type="text" class="form-control required"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">{{ __('latitude (X') }} </div>
                                                                                    <div class="col-md-8 col-lg-5">
                                                                                        <input id="latitude" type="text" class="form-control{{ $errors->has('latitude') ? ' is-invalid' : '' }}" name="latitude" value="{{ old('latitude', request('latitude')) }}" required>
                                                                                        {!! $errors->first('latitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                                                                                    </div>
                                                                                    <div class="col-md-4 col-lg-2">{{ __('longitude (Y)') }}  </div>
                                                                                    <div class="col-md-8 col-lg-3">
                                                                                        <input id="longitude" type="text" class="form-control{{ $errors->has('longitude') ? ' is-invalid' : '' }}" name="longitude" value="{{ old('longitude', request('longitude')) }}" required>
                                                                                        {!! $errors->first('longitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2"> </div>
                                                                                    <div class="col-md-8 col-lg-5">
                                                                                        <div class="map-responsive">   
                                                                                <center>
                                                                            </div> </div>
                                                                                 </div>
                                                                            </fieldset>
                                                                            <h3> Avancement des études à la date du Bon de Commande : </h3>
                                                                            <fieldset>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2"> </div>
                                                                                  
                                                                               
                                                                                <div class="checkbox-fade fade-in-primary">
                                                                                    <label class="check-task">
                                                                                        <input type="checkbox"  id="AvantProjet" name="AvantProjet">
                                                                                        <span class="cr">
                                                                                            <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                                        </span>
                                                                                        <span>AvantProjet</span>
                                                                                       
                                                                                    </label>
                                                                                </div>
                                                                                <div class="checkbox-fade fade-in-primary">
                                                                                    <label class="check-task">
                                                                                        <input type="checkbox"  id="Projetd’exécution" name="Projetd’exécution">
                                                                                        <span class="cr">
                                                                                            <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                                        </span>
                                                                                        <span>Projet d’exécution</span>
                                                                                       
                                                                                    </label>
                                                                                </div>
                                                                                <div class="checkbox-fade fade-in-primary">
                                                                                    <label class="check-task">
                                                                                        <input type="checkbox"  id="Esquisse" name="Esquisse">
                                                                                        <span class="cr">
                                                                                            <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                                        </span>
                                                                                        <span>Esquisse</span>
                                                                                       
                                                                                    </label>
                                                                                </div>


                                                                            </div>
                                                                            </fieldset>
                                                                            <h3> Maitred’œuvre :
                                                                            </h3>
                                                                            <fieldset>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="Company-2" class="block">Dénomination:</label>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        <input id="Company-2" name="maitre_oeuv"oninput="this.value = this.value.toUpperCase()"  type="text" class="form-control required">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="CountryW-2" class="block">Adresse</label>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        <textarea id="surname-2" name="maitre_oeuvAdresse"oninput="this.value = this.value.toUpperCase()" type="text" class="form-control required"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="Position-2" class="block">Email</label>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        <input id="Position-2" name="maitre_oeuvEmail" type="text" class="form-control required">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="email" class="block">Tél *</label>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-lg-5">
                                                                                        <input type="text" name="maitre_oeuvTél"class="form-control us_telephone" data-mask="(999) 999-9999"value="" >

                                                                                    </div>
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="password-1" class="block">Fax *</label>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-lg-3">
                                                                                        <input type="text" class="form-control us_telephone"name="maitre_oeuvFax" data-mask="(999) 999-9999"value="" >
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                            <h3> Bureau d’Etudes Techniques
                                                                              
                                                                            </h3>
                                                                            <fieldset>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="Company-2" class="block">Dénomination:</label>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        @if (Auth::guard('web')->user()->type == 1) 
                                                                                        <div class="mb-3">
                                                                                  
                                                                                  <label for="address2">Dénomination:  *</label>
                                                                                 <input type="text" name="bureau_etud"class="form-control" id="address2" value="{{Auth::guard('web')->user()->Nom}}"readonly>
                                                                              </div>
                                                        
                                                                                      @else
                                                        
                                                                <select id="sel"class="form-control" name="bureauSel"  onchange="toggle()">
                                                                
                                                                   <option   class="form-control"selected disabled>Selectionée un Bureau Etude</option>
                                                        
                                                                    <option value="new"  style="color:red" class="form-control" >Ajouter un  Nouveau Bureau Etude</option>
                                                                    @foreach(App\B_bcommande::select('bureau_etud')->where('client_id','=',Auth::guard('web')->user()->id)->groupBy('bureau_etud')->get() as $bureau)
                                                               
                                                                                                     <option class="form-control"  name="bureauSel"  value="{{$bureau->bureau_etud}}">{{$bureau->bureau_etud}}</option>
                                                                 
                                                                                                      @endforeach
                                                                </select>@endif
                                                                <div id="cont" style="display:none;
                                                                border:solid 1px #CCC;padding:10px;">
                                                        
                                                                Dénomination: <input type="text" name="bureau_etud"class="form-control"oninput="this.value = this.value.toUpperCase()" id="name" />
                                                                Adresse: <input type="text" name="bureau_etudAdr"class="form-control"oninput="this.value = this.value.toUpperCase()" id="name" />
                                                                <div class="row">
                                                                                    <div class="col-md-5 mb-3">
                                                                                        <label for="country">Tél : *</label>
                                                                                        <input type="text"name="bureau_etudTél" class="form-control us_telephone" data-mask="(999) 999-9999"value="" >
                                                                                        <div class="invalid-feedback"> </div>
                                                                                    </div>
                                                                                    <div class="col-md-4 mb-3">
                                                                                        <label for="state">Fax  *</label>
                                                                                        <input type="text" name="bureau_etudFax"class="form-control us_telephone" data-mask="(999) 999-9999"value="" >
                                                                                        <div class="invalid-feedback"> . </div>
                                                                                    </div>
                                                                                    
                                                                                </div>
                                                        
                                                        
                                                                            
                                                        </body>
                                                        <script>
                                                            function toggle() {
                                                                var cont = document.getElementById('cont');
                                                                                                          if(document.getElementById('sel').value =="new"){
                                                                                                             cont.style.display = 'block';
                                                                                                             
                                                                                                           
                                                                                                                                                            }
                                                                                                                                                            
                                                                                                                                                            else {
                                                                                                                                                                
                                                                                                                                                              cont.style.display = 'none';
                                                        
                                                                                                                                                            }
                                                                               }
                                                        </script>
                                                                                </div>  
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="email" class="block">Ingénieur Chargé de l'Etude G.Civil</label>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-lg-5">
                                                                                        <input type="text" name="IngControlleSite"oninput="this.value = this.value.toUpperCase()"class="form-control "value="" >

                                                                                    </div>
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="password-1" class="block">Numéro d'agrement Ingénieurs</label>
                                                                                    </div>
                                                                                    <div class="col-md-8 col-lg-3">
                                                                                        <input type="text" class="form-control us_telephone" name="IngNumeroagrement "data-mask="(999) 999-9999"value="" >
                                                                                    </div>
                                                                                </div>
                                                                            </fieldset>
                                                                            <h3> Laboratoire Etudes de Sol(Géotechnique) :
                                                                              
                                                                            </h3>
                                                                            <fieldset>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="Company-2" class="block">Dénomination:</label>
                                                                                    </div>
                                                                                    @if (Auth::guard('web')->user()->type == 2) 
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        <input id="Company-2" name="laboratoire" type="text"oninput="this.value = this.value.toUpperCase()" class="form-control required">
                                                                                    </div>
                                                                                    @else
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        <input id="Company-2" name="laboratoire" oninput="this.value = this.value.toUpperCase()"type="text" class="form-control required">
                                                                                    </div>
                                                                                    @endif
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="CountryW-2" class="block">Adresse</label>
                                                                                    </div>   @if (Auth::guard('web')->user()->type == 2) 
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        <textarea id="surname-2"name="laboratoireAdresse"  type="text" class="form-control required" value="{{Auth::guard('web')->user()->Adresse}}" readonly></textarea>
                                                                                    </div> @else
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        <textarea id="surname-2" name="laboratoireAdresse" oninput="this.value = this.value.toUpperCase()"type="text" class="form-control required"></textarea>
                                                                                    </div>  @endif
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="Position-2" class="block">Email</label>
                                                                                    </div> @if (Auth::guard('web')->user()->type == 2)
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        <input id="Position-2" name="laboratoireEmail"  type="text" class="form-control required"value="{{Auth::guard('web')->user()->email}}" readonly>
                                                                                    </div>    @else
                                                                                    <div class="col-md-8 col-lg-10">
                                                                                        <input id="Position-2" name="laboratoireEmail" oninput="this.value = this.value.toUpperCase()" type="text" class="form-control required">
                                                                                    </div>@endif
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="email" class="block">Tél *</label>
                                                                                    </div>    @if (Auth::guard('web')->user()->type == 2)
                                                                                    <div class="col-md-8 col-lg-5">
                                                                                        <input type="text" name="laboratoireTél"class="form-control us_telephone" data-mask="(999) 999-9999"value="{{Auth::guard('web')->user()->Telephone}}" readonly>

                                                                                    </div>@else
                                                                                    <div class="col-md-8 col-lg-5">
                                                                                        <input type="text" name="laboratoireTél"class="form-control us_telephone" oninput="this.value = this.value.toUpperCase()"data-mask="(999) 999-9999"value="" >

                                                                                    </div>
                                                                                    @endif
                                                                                    <div class="col-md-4 col-lg-2">
                                                                                        <label for="password-1" class="block">Fax *</label>
                                                                                    </div>  @if (Auth::guard('web')->user()->type == 2)
                                                                                    <div class="col-md-8 col-lg-3">
                                                                                        <input type="text" class="form-control us_telephone" name="laboratoireFax" data-mask="(999) 999-9999"value="" value="{{Auth::guard('web')->user()->Fax}}" readonly>
                                                                                    </div>@else
                                                                                    <div class="col-md-8 col-lg-3">
                                                                                        <input type="text" class="form-control us_telephone" name="laboratoireFax" data-mask="(999) 999-9999"value="" >
                                                                                    </div>
                                                                                    @endif
                                                                                </div>
                                                                            </fieldset>
                                                                            <h3> DESCRIPTION DES BATIMENTS et/ou OUVRAGES
                                                                              
                                                                            </h3>
                                                                            <fieldset>
                                                                                <div class="form-group row">
                                                                                    <table class="table"  style="border: 1px solid black;">
                                                                                        <tr>
                                                                                            <th>Surface Totale du Terrain D’Assiette en M²</th>
                                                                                            <th>Date prévisionnelle du début des travaux</th>
                                                                                            <th>Délais desTravaux en Mois</th>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><input type="text"name="SurfaceConstruitM2"  class="form-control" /></td>
                                                                                            <td><input type="date"name="DateDebuttravaux"  class="form-control" /></td>
                                                                                            <td><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" name="DateDélaisTravaux"class="form-control" /></td>
                                                                                        </tr>
                                                                                      
                                                                                        </tr>    
                                                                                    </table>
                                                                                        <div class="form-group row">
                                                                                        <table class="table table-bordered" id="dynamicTable">  
                                                                                            <tr>
                                                                                            <th>Désignation du Bâtiment et/ou Ouvrage</th>
                                                                                                            <th>Emprise du Bâtimentet /ou Ouvrageau Sol enm²</th>
                                                                                                            <th>Nombre  d’Etages du Bâtiment et/ou Hauteurdel’ouvrage</th>
                                                                                                            <th>Nombre de Bâtimentset/ou Ouvrages</th>
                                                                                                            <th>Action</th>
                                                                                            </tr>
                                                                                            <tr>  
                                                                                                <td><textarea type="text" name="addmore[0][Désignation]" oninput="this.value = this.value.toUpperCase()" class="form-control" /></textarea> </td>  
                                                                                                <td><input type="text" name="addmore[0][EmpriseduBatiment]"  oninput="this.value = this.value.toUpperCase()"class="form-control" /></td>  
                                                                                                <td><input type="text"  name="addmore[0][NombredEtages]"  class="form-control" /></td>  
                                                                                                <td><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"name="addmore[0][NombredeBatiment]"  class="form-control" /></td>  
                                                                                    
                                                                                                <td><button type="button" name="add" id="add" class="">Ajouter une ligne</button></td>  
                                                                                            </tr>  
                                                                                        </table> 
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                            </fieldset>
                                                                            <div class="col text-center">

                                                                                <button type="submit" value=" Enregistrez" class="btn btn-warning" id="submit" >Enregistrez</button>
                                                                                <button type="submit" value=" Enregistrez" class="btn btn-success" id="submit" >Envoyer</button>
                                                                                                </div>
                                                                        </form>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Form wizard with validation card end -->
                                                <!-- Form Basic Wizard card start -->
                                               
                                                <!-- Form Basic Wizard card end -->
                                                <!-- Verticle Wizard card start -->
                                              
                                                <!-- Verticle Wizard card end -->
                                                <!-- Design Wizard card start -->
                                                
                                                <!-- Design Wizard card end -->
                                            </div>
                                        </div>
                                    </div>
                    
            </div>

          
                                    <!-- Page body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->

                           
 
                            <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
                            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
                            crossorigin=""></script>
                            <script>
                               var map = L.map('map').setView([36.752887, 3.042048], 13);
                           //var map = L.map('map' ,{attributionControl: false}) to hide name in the map
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
</script>
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
    $('#country').change(function(){
    var countryID = $(this).val();
    if(countryID){
    $.ajax({
    type:"GET",
    url:"{{url('getstatelist')}}?countryid="+countryID,
    success:function(res){
    if(res){
    $("#state").empty();
    $("#state").append('<option>Select</option>');
    $.each(res,function(key,value){
    $("#state").append('<option value="'+key+'">'+value+'</option>');
    });
    }else{
    $("#state").empty();
    }
    }
    });
    }else{
    $("#state").empty();
    }
    });
    });
    </script>
<script type="text/javascript">
   
    var i = 0;
       
    $("#add").click(function(){
   
        ++i;
   
        $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][Désignation]"  class="form-control" /></td><td><input type="text" name="addmore['+i+'][EmpriseduBatiment]"  class="form-control" /></td><td><input type="text" name="addmore['+i+'][NombredEtages]" class="form-control" /></td> <td><input type="text" name="addmore['+i+'][NombredeBatiment]" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Supprimer</button></td></tr>');
    });
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('tr').remove();
    });  
   
 </script>
    
@endsection
