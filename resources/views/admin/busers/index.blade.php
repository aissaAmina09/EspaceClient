

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
                            <div class="col-lg-12">
                                <div class="card" id="customerList">
                                    <div class="card-header border-bottom-dashed">
    
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm">
                                                <div>
                                                    <h5 class="card-title mb-0">Liste utilisateures pas encore sécurité</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto">
                                                <div>
                                                  
                                                 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body border-bottom-dashed border-bottom">
                                        <form action="{{route('filteradvancedBUseres')}}"class="test_form" method="get"enctype="multipart/form-data" >
                                            {{ csrf_field() }}
                                            <div class="row g-3">
                                                <!--   <div class="col-xl-6">
                                                    <div class="search-box">
                                                        <input type="text" name="search" class="form-control search" 
                                                        placeholder="Recheche par Nom, Prénom ...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>-->
                                                <div class="col-xl-6">
                                                    <div class="search-box">
                                                       <select name="DRR" id="DRR" class="form-control">
                            
                                                                    @foreach(App\Bagence::select('Nom_DR')->groupBy('Nom_DR')->get() as $Region)
                                                                      <option value="{{ $Region->Nom_DR }}" {{ (collect(old('region'))->contains($Region->id_région)) ? 'selected':'' }}>{{ $Region->Nom_DR }}</option>
                                                                   
                                                                        
                                                                        @endforeach
                                                                      </select>
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="search-box">
                                                        <select name="agencee" id="agencee" class="form-control">
                                                                    <option>--Agence--</option>
                                                                  </select>
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xl-6">
                                                    <div class="row g-3">
                                                        <div class="col-sm-4">
                                                            <div class="">
                                                               
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                     
                                                        <!--end col-->
    
                                                        <div class="list-grid-nav hstack gap-1">
                                                            <div>
                                                                <button type="submit" class="btn btn-primary w-100" > <i class="ri-equalizer-fill me-2 align-bottom"></i>Filters</button>
                                                           
                                                                
                                                            </div>
                                                            <div>     <a href="/gestion_busers" class="btn btn-primary">Rénitialiser</a></div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <div class="table-responsive table-card mb-1">
                                                <table class="table align-middle" id="customerTable">
                                                    <thead class="table-light text-muted">
                                                        <tr>
                                                            <th scope="col" style="width: 50px;">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                                </div>
                                                            </th>
    
                                                            <th class="sort" data-sort="customer_name">Matricule</th>
                                                            <th class="sort" data-sort="email">Nom </th>
                                                            <th class="sort" data-sort="phone">Profile</th>
                                                            <th class="sort" data-sort="date">Direction Antenne</th>
                                                            <th class="sort" data-sort="status">Structure</th>
                                                            <th class="sort" data-sort="action">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="list form-check-all">
                                                    @foreach($users as $user)
                                                    <tr>
                                                            <th scope="row">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                                </div>
                                                            </th>
                                                            <td class="id" style="display:none;"></td>
                                                            <td class="customer_name">{{$user->nb}}</td>
                                                            <td class="email">{{$user->Nom}} - {{$user->Prénom}}</td>
                                                            <td class="phone">{{$user->libelle}}</td>
                                                            <td class="phone"><span class="badge badge-soft-success text-uppercase">{{$user->nomdr}}</span></td>
                                                            <td class="date">{{$user->nom_ag}}</td>
                                                           
                                                            <td>
                                                                <ul class="list-inline hstack gap-2 mb-0">
                                                                    
                                                                    <button data-info="{{$user}}"
                                        class="dropdown-item " data-bs-toggle="modal" data-bs-target="#showModal"
                                        title="Editer les champs de cet enregistrement" data-toggle="tooltip"
                                        data-placement="bottom"><i
                                        class=" ri-send-plane-fill align-bottom me-2 text-muted"></i>
                                        Affectation Profile  </button>
                                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                        <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                            <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    @endforeach</tbody>
                                                </table>
                                                <div class="noresult" style="display: none">
                                                    <div class="text-center">
                                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                                        <p class="text-muted mb-0">We've searched more than 150+ customer We did not find any customer for you search.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <div class="pagination-wrap hstack gap-2" style="display: flex;">
                                                    {{ $users->appends(Request::except('page'))->links()}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="showModal" tabindex="-1" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                                                <form action="#">
                                                                    
                                                                    <!--end row-->
                                                                </form>
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="modal-header bg-light p-3">
                                                        <h5 class="modal-title" id="exampleModalLabel">Affetcation profil<input id="feed_id" name="codeBC" type="hidden" /></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                    </div>
                                                    <form action="{{route('ajouter_Busers')}}"class="test_form" method="POST"enctype="multipart/form-data" >
                                                        {{ csrf_field() }}
                                                        <div class="modal-body">
                                                           <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="firstnameInput" class="form-label">Nom</label>
                                                                                <input type="text" name="Nom" value="{{ old('Nom') }}"
                                                                                id="Nom"  class="form-control  text-center {{ $errors->has('Nom') ? 'is-invalid' : '' }}"
                                                                                placeholder="exemple: 00001" aria-label="Nom"
                                                                                aria-describedby="basic-addon1" readonly>

                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="lastnameInput" class="form-label">Prénom</label>
                                                                                <input type="text" name="Nom" value="{{ old('Prénom') }}"
                                                                                id="Prénom"  class="form-control  text-center {{ $errors->has('Prénom') ? 'is-invalid' : '' }}"
                                                                                placeholder="exemple: 00001" aria-label="Prénom"
                                                                                aria-describedby="basic-addon1" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        
                                                                        <!--end col-->
                                                                        
                                                                        <!--end col-->
                                                                        
                                                                        <!--end col-->
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label for="cityidInput" class="form-label">Direction Antenne</label>
                                                                                <input type="text" name="Nom" value="{{ old('nomdr') }}"
                                                                                id="nomdr"  class="form-control  text-center {{ $errors->has('nomdr') ? 'is-invalid' : '' }}"
                                                                                placeholder="exemple: 00001" aria-label="nomdr"
                                                                                aria-describedby="basic-addon1" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label for="countryidInput" class="form-label">Structure</label>
                                                                                <input type="text" name="Nom" value="{{ old('nom_ag') }}"
                                                                                id="nom_ag"  class="form-control  text-center {{ $errors->has('nom_ag') ? 'is-invalid' : '' }}"
                                                                                placeholder="exemple: 00001" aria-label="nomdr"
                                                                                aria-describedby="basic-addon1" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label for="zipcodeidInput" class="form-label">Matricule</label>
                                                                                <input type="text" name="nb" value="{{ old('nb') }}"
                                                                                id="nb"  class="form-control  text-center {{ $errors->has('nb') ? 'is-invalid' : '' }}"
                                                                                placeholder="exemple: 00001" aria-label="nb"
                                                                                aria-describedby="basic-addon1" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <!--end col-->
                                                                        <div>
                                                                            <label for="status-field" class="form-label">Profile</label>
                                                                            <select class="form-select"name="profile" id="state">
                                                                                @foreach(App\Profile::all() as $profile)
            
            
                                                                                            <option 
                                                                                                name="limitation"value="{{$profile->code}}"> {{$profile->libelle}}
                                                                                            </option>
                                                                                            @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <!--end col-->
                                                                        
                                                                        <!--end col-->
                                                                    </div>
                                                            <div>
                                                                <label for="status-field" class="form-label">Notification</label>
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" name="insertion"
                                                              
                                                                placeholder="exemple: amar" aria-label="insertion"
                                                                aria-describedby="basic-addon1" readonly>
                                                                <label class="form-check-label" for="same-address">Notification nouveau partenaire inscrit</label>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <input type="checkbox" class="form-check-input" name="insertion"
                                                              
                                                                placeholder="exemple: amar" aria-label="insertion"
                                                                aria-describedby="basic-addon1" readonly>
                                                                <label class="form-check-label" for="same-address">Notification nouveau Bon de commande </label>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                        <div class="modal-footer" style="display: block;">
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-success" id="add-btn" style="display: block;">Ajouter Utilisateur</button>
                                                                <button type="button" class="btn btn-success" id="edit-btn" style="display: none;">Update</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
    
                                        <!-- Modal -->
                                        <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mt-2 text-center">
                                                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                                <h4>Are you sure ?</h4>
                                                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this record ?</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn w-sm btn-danger" id="delete-record">Yes, Delete It!</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end modal -->
                                    </div>
                                </div>
    
                            </div>
                            <!--end col-->
                        </div>
        @include('admin.layouts.footern') 

        <script type="text/javascript">
        
        
        $('#DRR').on('change',function(e){
        
        
        console.log(e);
        var cat_id =e.target.value;
        
        $.get('/getstatelist?cat_id=' + cat_id,function(data){
                                      
        $('#agencee').empty();
        $('#agencee').append('<option value=""></option>');
        $.each(data,function(index, subcatObj){

        $('#agencee').append('<option value="'+subcatObj+'">'+subcatObj+' - '+index+'</option>');
        
        
        })
        
        })
        
        
        });
        
        </script>   
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
            $('#showModal').on('show.bs.modal', function(event) {
            var buttonFamille = $(event.relatedTarget) // Button that triggered the modal
            var AffectationInfo = buttonFamille.data('info') // Extract info from data-* attributes
            var modal = $(this)
         
         
            modal.find('#Nom').val(AffectationInfo['Nom'])
            modal.find('#Prénom').val(AffectationInfo['Prénom'])
            modal.find('#nomdr').val(AffectationInfo['nomdr'])
            modal.find('#nom_ag').val(AffectationInfo['nom_ag'])
            modal.find('#nb').val(AffectationInfo['nb'])
            modal.find('#profile').val(AffectationInfo['profile'])
            
            // modal.find('#libellefam_up').val(AffectationInfo['LIB'])
        });
        </script>
		