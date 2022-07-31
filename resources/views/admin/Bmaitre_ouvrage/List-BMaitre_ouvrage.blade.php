

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
                     <div class="container-fluid"><!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Maitre d'Ouvrage</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                        <li class="breadcrumb-item active">Sellers</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="card">
        <form action="{{route('filterMaitreOuvrage')}}" method="post">
            {{csrf_field()}}
        <div class="card-header border-0 rounded">
            <div class="row g-2">
                <div class="col-xl-3">
                    <div class="search-box">
                        <input type="text" name="nom"class="form-control search" placeholder="recherchepar nom , Abrevation , code  ..."> <i class="ri-search-line search-icon"></i>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xl-3">
                    <div>
                        <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false">
                            <div class="">
                                <select class="form-select"name="famille" aria-label="Default select example">
                                    <option >Sélectionnée une Famille</option>
                                    @foreach(App\CFamilleMouvrage::select('Code_FamilleMouvrage')->groupBy('Code_FamilleMouvrage')->get() as $famille)
                                    <option value="{{$famille->Code_FamilleMouvrage}}"{{$famille->Code_FamilleMouvrage ===  request('famille') ? ' selected' : '' }}>{{$famille->Code_FamilleMouvrage}}</option>
                                   @endforeach
                                  </select>
                               
                            </div>
                        
                    </div>
                   
                </div> </div>  
            
                
                <div class="col-lg-auto">
                    <div class="hstack gap-2">
                        <button type="submit" class="btn btn-danger"><i class="ri-equalizer-fill me-1 align-bottom"></i> Filters</button>
                    </div>
                </div>
               
             </div>
                </div>
                <!--end col-->
                <div class="">
                       
                       
                  
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
    </form>
    <div class="col-lg-auto">
        <div class="hstack gap-2">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addSeller">
                
                
                
                <i class="ri-add-fill me-1 align-bottom"></i> Ajouter Maitre d'Ouvrage
            </button>
        </div>
    </div>
    </div>
    <div class="row mt-4">
        @if($bmaitre->count()>0)

                                                    @foreach($bmaitre as $use)
        <div class="col-xl-3 col-lg-6">
            <div class="card ribbon-box right overflow-hidden">
                <div class="card-body text-center p-4">
                   
                    <img src="assets/images/companies/img-1.png" alt="" height="45">
                    <h4 class="mb-1 mt-4"><a href="apps-ecommerce-seller-details.html" class="link-primary">{{$use->code}}</a></h4>
                    <h5 class="mb-1 mt-4"><a href="apps-ecommerce-seller-details.html" class="link-primary">{{$use->nom}}</a></h5>
                    <p class="text-muted mb-4">{{$use->Abrevation}}</p>
                    
                    <div class="row mt-4">
                        <div class="col-lg-6 border-end-dashed border-end">
                            <h5>{{$use->nbr_totale}}</h5>
                            <span class="text-muted">Nombre totale de projet</span>
                        </div>
                        <div class="col-lg-6">
                            <h5>{{$use->Nom_DR}}</h5>
                            <span class="text-muted">Direction</span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="apps-ecommerce-seller-details.html" class="btn btn-light w-100">View Details</a>
                    </div>
                </div>
            </div>
        </div>
       @endforeach
       @endif
        <!--end col-->
        
        <!--end col-->
        
        <!--end col-->
        
        <!--end col-->
        
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row g-0 text-center text-sm-start align-items-center mb-3">
        <div class="col-sm-6">
            <div>
                <p class="mb-sm-0">Showing 1 to 8 of 12 entries</p>
            </div>
        </div> <!-- end col -->
        <div class="col-sm-6">
            <ul class="pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0">
                {{ $bmaitre->appends(Request::except('page'))->links() }}
            </ul>
        </div><!-- end col -->
    </div><!-- end row -->

    <!-- Modal -->
    <div class="modal fade zoomIn" id="addSeller" tabindex="-1" aria-labelledby="addSellerLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSellerLabel"> Ajouter Maitre d'Ouvrage</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-content border-0 mt-3">
                    <ul class="nav nav-tabs nav-tabs-custom nav-success p-2 pb-0 bg-light" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="true">
                                Code Tiers  : NM
                            </a> 
                        </li>
                        
                       
                    </ul>
                </div>
                <div class="modal-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                           
                                <form class="wizard-form" id="example-advanced-form"  action="{{route('storeMaitreOuvrage')}}" method="POST"enctype="multipart/form-data" style="height:1200% !important">
                                    {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="lastnameInput" class="form-label">Nom Tiers </label>
                                            <input type="text" class="form-control"name="nom" id="lastnameInput" placeholder="Entrer le nom">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="contactnumberInput" class="form-label">Abréviation</label>
                                            <input type="number" class="form-control"name="Abréviation" id="contactnumberInput" placeholder="Entrer l'Abréviation ">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="phonenumberInput" class="form-label">Catégorie</label>
                                            <input type="number" class="form-control"name="Catégorie" id="phonenumberInput" placeholder="Entrer une Catégorie ">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="emailidInput" class="form-label">Secteur</label>
                                            <select class="form-select"name="Secteur" aria-label="Default select example">
                                                <option >Sélectionnée un Secteur</option>
                                                @foreach(App\Cgroupestiers::select('Secteur')->groupBy('Secteur')->get() as $famille)
                                                <option value="{{$famille->Secteur}}"{{$famille->Secteur ===  request('famille') ? ' selected' : '' }}>{{$famille->Secteur}}</option>
                                               @endforeach
                                              </select>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="birthdayidInput" class="form-label">Tutelle</label>
                                            <select class="form-select"name="Tutelle" aria-label="Default select example">
                                                <option >Sélectionnée un Tutelle</option>
                                                @foreach(App\Cgroupestiers::select('Tutelletiers')->groupBy('Tutelletiers')->get() as $famille)
                                                <option value="{{$famille->Tutelletiers}}"{{$famille->Tutelletiers ===  request('famille') ? ' selected' : '' }}>{{$famille->Tutelletiers}}</option>
                                               @endforeach
                                              </select>                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="birthdayidInput" class="form-label">Famille</label>
                                            <select class="form-select"name="famille" aria-label="Default select example">
                                                <option >Sélectionnée une Famille</option>
                                                @foreach(App\Cgroupestiers::select('Familletiers')->groupBy('Familletiers')->get() as $famille)
                                                <option value="{{$famille->Familletiers}}"{{$famille->Familletiers ===  request('famille') ? ' selected' : '' }}>{{$famille->Familletiers}}</option>
                                               @endforeach
                                              </select>                                          </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="cityidInput" class="form-label">Groupe</label>
                                            <select class="form-select"name="Groupe" aria-label="Default select example">
                                                <option >Sélectionnée un Groupe</option>
                                                @foreach(App\Cgroupestiers::select('Groupetiers')->groupBy('Groupetiers')->get() as $famille)
                                                <option value="{{$famille->Groupetiers}}"{{$famille->Groupetiers ===  request('famille') ? ' selected' : '' }}>{{$famille->Groupetiers}}</option>
                                               @endforeach
                                              </select>                                         </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="countryidInput" class="form-label">Wilaya</label>
                                            <select class="form-select" name="Wilaya"  id="country">
                                                <option value="">Veuillez choisir une Wilaya...</option>
                                             
@foreach(App\Bwilaya::all() as $countryData)

<option value="{{$countryData->CODE_Wilaya}}" selected>{{$countryData->nom_wilaya}}</option>
@endforeach
                                            </select>                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="zipcodeidInput" class="form-label"> Commune</label>
                                            <select name="Commune" id="state" class="form-control">
                                                <option>--Commune--</option>
                                                </select>                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Adresse </label>
                                            <textarea class="form-control" name="Adresse"id="exampleFormControlTextarea1" rows="3" placeholder="Entrer une Adresse"></textarea>
                                        </div>
                                    </div>
                                    <!--end col--> <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="cityidInput" class="form-label">Tel</label>
                                            <input type="text" class="form-control"name="Tel" id="cityidInput" placeholder="Entrer Tel">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="countryidInput" class="form-label">Fax</label>
                                            <input type="text" class="form-control"  name="Fax"id="countryidInput" placeholder="Entrer  Fax">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="zipcodeidInput" class="form-label"> Email</label>
                                            <input type="email" class="form-control" name="Email"id="zipcodeidInput" placeholder="Entrer  Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="countryidInput" class="form-label">site Web</label>
                                            <input type="text" class="form-control"  name="siteWeb"id="countryidInput" placeholder="Entrer  site Web">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label for="zipcodeidInput" class="form-label"> Cpt Comptable</label>
                                            <input type="text" class="form-control" name="CptComptable"id="zipcodeidInput" placeholder="Entrer Cpt Comptable">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button class="btn btn-link link-success text-decoration-none fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                            <button type="submit" class="btn btn-primary"><i class="ri-save-3-line align-bottom me-1"></i> Save</button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end modal-->

</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
@include('admin.layouts.footern')
<!-- App js -->
<script src="assets/js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="assets/js/pages/datatables.init.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- sellers init js -->
    <script src="assets/js/pages/sellers.init.js"></script>
</body>
</html>