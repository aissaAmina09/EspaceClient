@include('admin.layouts.headn')
<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
       
        <!-- ========== App Menu ========== -->
        @include('admin.layouts.headern')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Ajouter un bon de commande</h4>
                                </div>
                                <!-- end card header -->
                                <div class="card-body form-steps">
                                    <form class="vertical-navs-step" action="/saveBon" method="POST"enctype="multipart/form-data" >
                                        {{ csrf_field() }}
                                        <div class="row gy-5">
                                            <div class="col-lg-3">
                                                <div class="nav flex-column custom-nav nav-pills" role="tablist" aria-orientation="vertical">
                                                    <button class="nav-link active" id="v-pills-bill-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-info" type="button" role="tab" aria-controls="v-pills-bill-info" aria-selected="true" data-position="0">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> 
                                                            Etape 1
                                                        </span>
                                                        Maitre de l'Ouvrage  
                                                    </button>
                                                    <button class="nav-link" id="v-pills-bill-address-tab"
                                                     data-bs-toggle="pill" data-bs-target="#v-pills-bill-address" type="button" role="tab" aria-controls="v-pills-bill-address" aria-selected="false" data-position="1">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Etape 2
                                                        </span>
                                                        Situation du Projet 
                                                    </button>
                                                    <button class="nav-link" id="v-pills-payment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-payment" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false" data-position="2">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Etape 3
                                                        </span>
                                                        Maitre d’œuvre 
                                                    </button>
                                                    <button class="nav-link" id="v-pills-Bureau-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Bureau" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false" data-position="2">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Etape 4
                                                        </span>
                                                        Bureau d’Etudes Techniques 
                                                    </button>
                                                    <button class="nav-link" id="v-pills-labo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-labo" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false" data-position="2">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Etape 5
                                                        </span>
                                                        Laboratoire Etudes de Sol(Géotechnique) 
                                                    </button>
                                                    <button class="nav-link" id="v-pills-Batiment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Batiment" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false" data-position="2">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Etape 6
                                                        </span>
                                                      DESCIPTION DES BATIMENTS et/ou OUVAGES
                                                    </button>
                                                    <button class="nav-link" id="v-pills-finish-tab" data-bs-toggle="pill" data-bs-target="#v-pills-finish" type="button" role="tab" aria-controls="v-pills-finish" aria-selected="false" data-position="3">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Etape 4
                                                        </span>
                                                        Terminé
                                                    </button>
                                                </div>
                                                <!-- end nav -->
                                            </div>
                                            <!-- end col-->
                                            <div class="col-lg-6">
                                                <div class="px-lg-4">
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade active show" id="v-pills-bill-info" role="tabpanel" aria-labelledby="v-pills-bill-info-tab">
                                                            <div>
                                                                <h5>Maitre de l'Ouvrage</h5>
                                                                <p class="text-muted">Fill all information below</p>
                                                            </div>
                                                            <div>
                                                                <div class="col-12">
                                                                    <label for="email" class="form-label">Maitre de l’Ouvrage *
                                                                     <!--   <span class="text-muted">(Optional)</span> --></label>
                                                                     
                                                                     <input id="userName-2"  name="MaitreOuvrage" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control"placeholder="Entrer MaitreOuvrage">
                                                                     
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="email" class="form-label">Adresse *
                                                                     <!--   <span class="text-muted">(Optional)</span> --></label>
                                                                    
                                                                     <input id="userName-2"  name="MaitreOuvrage" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control" placeholder="Entrer Adresse">
                                                                   
                                                                </div>
                                                                <div class="row g-3">
                                                                    <div class="col-sm-6">
                                                                        <label for="firstName" class="form-label">Nif </label>
                                                                       
                                                                        <input type="text" class="form-control" name="MaitreOuvrageNif"   oninput="this.value = this.value.toUpperCase()" name="MaitreOuvrageNif"  placeholder="Entrer Nif" value="">
                                                                      
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="lastName" class="form-label">Tél</label>
                                                                      
                                                                        <input type="text" class="form-control" name="MaitreOuvrageTel" placeholder="Entrer Tél" value="">
                                                                      
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="firstName" class="form-label">
                                                                            Email </label>
                                                                            
                                                                            <input  class="form-control" name="MaitreOuvrageEmail"type="email"placeholder="Entrer  Email" value="">
                                                                         
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="lastName" class="form-label">Fax</label>
                                                                        
                                                                        <input type="text"  class="form-control" name="MaitreOuvrageFax"placeholder="Entrer  Fax" value="">
                                                                      
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-bill-address-tab">
                                                                    <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>L'étape suivante</button>
                                                            </div>
                                                        </div>
                                                        <!-- end tab pane -->
                                                        <div class="tab-pane fade" id="v-pills-bill-address" role="tabpanel" aria-labelledby="v-pills-bill-address-tab">
                                                            <div>
                                                                <h5>Situation du Projet :</h5>
                                                                <p class="text-muted">Ajouter description conçernant les coordonnées géographiques
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <div class="row g-3">
                                                                    <div class="col-12">
                                                                        <label for="address" class="form-label">Intitulé du Projet *</label>
                                                                        <input type="text" class="form-control" id="address"name="intitule_proj" placeholder="1234 Main St">
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label for="address2" class="form-label">Descript projet <span class="text-muted">(Optional)</span></label>
                                                                        <textarea type="text" class="form-control" id="address2"name="descript_projet" placeholder="Apartment or suite"></textarea>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <label for="country" class="form-label">Wilaya</label>
                                                                        <select name="country" id="country"class="form-control" required="required" data-error="Please specify your need.">
                                                                            @foreach(App\Bwilaya::all() as $countryData)
                                                                            <option value="{{$countryData->CODE_Wilaya}}" selected>{{$countryData->nom_wilaya}}</option>
                                                                            @endforeach
                                                                            </select>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label for="state" class="form-label">Commune</label>
                                                                        <select name="state" id="state" class="form-control">
                                                                            <option>--Commune--</option>
                                                                             </select>
                                                                    </div>
                                                                </div>
                                                                <hr class="my-4 text-muted">
                                                                <div>
                                                                    <div class="row g-3">
                                                                        <div class="col-md-5">
                                                                            <label for="country" class="form-label">latitude (X)</label>
                                                                            <input id="latitude" type="text" class="form-control{{ $errors->has('latitude') ? ' is-invalid' : '' }}" name="latitude" value="{{ old('latitude', request('latitude')) }}" required>
                                                                            {!! $errors->first('latitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label for="state" class="form-label">longitude (Y)
                                                                            </label>
                                                                            <input id="longitude" type="text" class="form-control{{ $errors->has('longitude') ? ' is-invalid' : '' }}" name="longitude" value="{{ old('longitude', request('longitude')) }}" required>
                                                                            {!! $errors->first('longitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div id="map" id="gw_map1" style="width: 780px; height: 300px !important"></div></center>
                                                            </div>
                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-bill-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Retour aux informations Maitre de l'Ouvrage</button>
                                                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-payment-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> 
                                                                    Maitre d’œuvre</button>
                                                            </div>
                                                        </div>
                                                        <!-- end tab pane -->
                                                        <div class="tab-pane fade" id="v-pills-payment" role="tabpanel" aria-labelledby="v-pills-payment-tab">
                                                            <div>
                                                                <h5>Avancement des études à la date du Bon de Commande :
                                                                </h5>
                                                                <p class="text-muted">Remplissez toutes les informations ci-dessous</p>
                                                            </div>
                                                            <div>
                                                                <div class="my-3">
                                                                    <div class="form-check form-check-inline">
                                                                        <input id="credit" name="Esquisse" type="checkbox"class="form-check-input">
                                                                        <label class="form-check-label" for="credit">Esquisse</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input id="debit" name="AvantProjet" type="checkbox" class="form-check-input">
                                                                        <label class="form-check-label" for="debit">Avant Projet</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input id="paypal" name="Projetdexécution" type="checkbox" class="form-check-input" >
                                                                        <label class="form-check-label" for="paypal">Projet d’exécution</label>
                                                                    </div>
                                                                </div>
                                                                <div class="row gy-3">
                                                                    <div class="col-12"> <h5>Maitre d’œuvre</h5>
                                                                        <label for="email" class="form-label">Dénomination *
                                                                         <!--   <span class="text-muted">(Optional)</span> --></label>
                                                                         <input id="userName-2"  name="maitre_oeuv" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control"placeholder="Entrer Dénomination ">
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label for="Adresse" class="form-label">Adresse *</label>
                                                                         <textarea id="userName-2"  name="maitre_oeuvAdresse" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control" placeholder="Entrer Adresse">
                                                                        </textarea>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label for="firstName" class="form-label">
                                                                            Email </label>
                                                                            <input  class="form-control"name="maitre_oeuvEmail"type="email"placeholder="Entrer  Email" value="">
                                                                    </div>
                                                                    <div class="row g-3">
                                                                        <div class="col-sm-6">
                                                                            <label for="lastName" class="form-label">Tél</label>
                                                                            <input type="text" class="form-control"name="maitre_oeuvTél" placeholder="Entrer Tél" value="">
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label for="lastName" class="form-label">Fax</label>
                                                                            <input type="text"  class="form-control" name="maitre_oeuvFax" placeholder="Entrer  Fax" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-bill-address-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Situation du Projet </button>
                                                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-Bureau-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>  Bureau d’Etudes Techniques </button>
                                                            </div>
                                                        </div>
                                                        <!-- end tab pane -->
                                                        <div class="tab-pane fade" id="v-pills-Bureau" role="tabpanel" aria-labelledby="v-pills-Bureau-tab">
                                                            <div>
                                                                <div class="row gy-3">
                                                                    <div class="col-12"> <h5>Bureau d’Etudes Techniques</h5>
                                                                        <label for="email" class="form-label">Dénomination *
                                                                         <!--   <span class="text-muted">(Optional)</span> --></label>
                                                                        
                                                                         <select id="sel"class="form-control" name="bureauSel"  onchange="toggle()">
                                                                            <option   class="form-control"selected disabled>Selectionée un Bureau Etude</option>
                                                                             <option value="new"  style="color:red" class="form-control" >Ajouter un  Nouveau Bureau Etude</option>
                                                                            
                                                                         </select>
                                                                        </div>
                                                                    <div id="cont" style="display:none; border:solid 1px #CCC;padding:10px;">
                                                                        <div class="col-12">
                                                                            <label for="address" class="form-label">Dénomination*</label>
                                                                             <input id="userName-2" name="bureau_etud"type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control" placeholder="Entrer Dénomination">
                                                                        </div>
                                                                        <div class="col-12">
                                                                        <label for="Adresse" class="form-label">Adresse *
                                                                         <input id="userName-2"  name="bureau_etudAdr" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control" placeholder="Entrer Adresse">
                                                                    </div>
                                                                    <div class="row g-3">
                                                                        <div class="col-sm-6">
                                                                            <label for="lastName" class="form-label">Email</label>
                                                                            <input type="text" class="form-control"name="bureau_etudEmail" placeholder="Entrer Email" value="">
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label for="lastName" class="form-label">Tél</label>
                                                                            <input type="text" class="form-control"name="bureau_etudTél" placeholder="Entrer Tél" value="">
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label for="lastName" class="form-label">Fax</label>
                                                                            <input type="text"  class="form-control" name="bureau_etudFax" placeholder="Entrer  Fax" value="">
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <div class="row g-2">
                                                                        <div class="col-sm-6">
                                                                            <label for="lastName" class="form-label">Ingénieur Chargé de l'Etude G.Civil</label>
                                                                            <input type="text" class="form-control"name="maitre_oeuvTél" placeholder="Entrer Chargé de l'Etude" oninput="this.value = this.value.toUpperCase()"   value="">
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label for="lastName" class="form-label">Numéro d'agrement :(tableau des Ingénieurs) </label>
                                                                            <input type="text"  class="form-control" name="IngNumeroagrement" placeholder="Entrer  Fax" value="">
                                                                        </div>
                                                                    </div>
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
                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-payment-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Retour  Maitre d’œuvre</button>
                                                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-labo-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> Laboratoire Etudes de Sol</button>
                                                            </div>
                                                        </div>
                                                        <!-- end tab pane -->
                                                        <div class="tab-pane fade" id="v-pills-labo" role="tabpanel" aria-labelledby="v-pills-labo-tab">
                                                            <div>
                                                                <div class="row gy-3">
                                                                    <div class="col-12"> <h5>Laboratoire Etudes de Sol(Géotechnique) :</h5>
                                                                        <label for="email" class="form-label">Dénomination *
                                                                         <!--   <span class="text-muted">(Optional)</span> --></label>
                                                                         <input id="userName-2"  name="laboratoire" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control"placeholder="Entrer Dénomination ">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label for="Adresse" class="form-label">Adresse *</label>
                                                                         <input id="userName-2" name="laboratoireAdresse" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control" placeholder="Entrer Adresse">
                                                                    </div>
                                                                    <div class="row g-3">
                                                                        <div class="col-sm-6">
                                                                            <label for="lastName" class="form-label">Email</label>
                                                                            <input type="text" class="form-control"name="laboratoireEmail"placeholder="Entrer Tél" value="">
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label for="lastName" class="form-label">Tél</label>
                                                                            <input type="text" class="form-control" name="laboratoireTél" placeholder="Entrer Tél" value="">
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label for="lastName" class="form-label">Fax</label>
                                                                            <input type="text"  class="form-control" name="laboratoireFax" placeholder="Entrer  Fax" value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-Bureau-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Retour  Bureau d’Etudes Techniques</button>
                                                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-Batiment-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> DESCIPTION DES BATIMENTS et/ou OUVAGES</button>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="v-pills-Batiment" role="tabpanel" 
                                                        aria-labelledby="v-pills-Batiment-tab">
                                                            <table class="table align-middle table-nowrap">
                                                                <tbody>
                                                                    <tr>
                                                                    <th>Surface Totale du Terrain D’Assiette en M²</th>
                                                                    <th>Date prévisionnelle du début des travaux</th>
                                                                    <th>Délais desTravaux en Mois</th>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="text" name="SurfaceConstruitM2" ></td>
                                                                    <td><input type="date" name="DateDebuttravaux"></td>
                                                                    <td><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" name="DateDélaisTravaux" ></td>
                                                                </tr>
                                                            </tbody></table>
                                                            <table class="table" id="dynamicTable">  
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
                                                                    <td><input type="text"  name="addmore[0][NombredEtages]" oninput="this.value = this.value.toUpperCase()"  class="form-control" /></td>  
                                                                    <td><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"name="addmore[0][NombredeBatiment]"  class="form-control" /></td>  
                                                                    <td> <div class="edit">
                                                                        <button type="button" name="add" id="add" class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Ajouter une ligne</button>
                                                                    </div></td>  
                                                                </tr>  
                                                            </table> 
                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-labo-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Retour  Laboratoire Etudes de Sol</button>
                                                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-finish-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> DESCIPTION DES BATIMENTS et/ou OUVAGES</button>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="v-pills-finish" role="tabpanel" aria-labelledby="v-pills-finish-tab">
                                                            <div class="text-center pt-4 pb-2">
                                                                <div class="mb-4">
                                                                    <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                                                                </div>
                                                                <h5>Votre demande est terminée  !</h5>
                                                                <div class="col text-center">
                                                                    <button type="submit" value=" Enregistrez" class="btn btn-warning" id="submit" >Enregistrez</button>
                                                                    <button type="submit" value=" Enregistrez"style="display: none;" class="btn btn-success" id="submit" >Envoyer</button>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="row gy-3">
                                                                <h5>Note :</h5>
                                                                <p class="text-muted">Aprés l'enregistrement la Visualisation du document est possible
                                                                     <i
                                                                    class="ri-eye-line align-bottom me-2 text-muted"></i>
                                                                    </a>
                                                                </p>
                                                                <p class="text-muted">Aprés l'envoie le document  soit envoyé automatiqument vers leCTC
                                                                </p>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <!-- end tab pane -->
                                                    </div>
                                                    <!-- end tab content -->
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </form>   
                                </div>
                            </div>
                            <!-- end -->
                        </div>
                        <link href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" rel="stylesheet" type="text/css" />
                        <!-- Layout config Js -->
                        <script src="assets/js/layout.js"></script>
                           <!-- Cordonnées geo -->
                        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
                        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
                        crossorigin=""></script>
                        <script   src="https://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
                        <script>
$("#v-pills-bill-address-tab").click(function() {
    $("#gw_map1").toggle(); setTimeout(function(){ map.invalidateSize()}, 400);
});
       var map = L.map('map');
    map.setView([36.752887, 3.042048], 13);
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
    <script type="text/javascript">
        var i = 0;
        $("#add").click(function(){
            ++i;
            $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][Désignation]"  class="form-control" /></td><td><input type="text" name="addmore['+i+'][EmpriseduBatiment]"  class="form-control" /></td><td><input type="text" name="addmore['+i+'][NombredEtages]" class="form-control" /></td> <td><input type="text" name="addmore['+i+'][NombredeBatiment]" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Supprimer</button></td></tr>');
        });
        $(document).on('click', '.remove-tr', function(){  
             $(this).parents('tr').remove();
        });  
     </script>    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script><script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script type="text/javascript" src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script type="text/javascript" src="assets/libs/flatpickr/flatpickr.min.js"></script>
    <!-- form wizard init -->
    <script src="assets/js/pages/form-wizard.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>