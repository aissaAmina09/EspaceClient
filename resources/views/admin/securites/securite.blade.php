

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

    <div class="container-fluid m-2">
        <div class="row mb-2">
            <div class="col-6">
                <h1> Liste des securites </h1>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="mb-3 d-flex justify-content-center">
        
        @if ( $insertion==1)
        <button data-info=""
        class="btn btn-success add-btn"data-bs-toggle="modal" data-bs-target="#showModal"
        title="Editer les champs de cet enregistrement" data-toggle="tooltip"
        data-placement="bottom">
            <i class="nav-icon fa fa-plus mr-1"></i>
            Ajouter un profil
        </button>

      


        
        @endif

    </div>
   
     
    <div class="card">
        <div class="card-body">
            <table id="table_data" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Code</th>
                        <th>Libellé</th>
                        <th>Description</th>
                        <th>Limitation</th>
                        <th>Action</th>
                    </tr>
                </thead>
    
                <tbody>
                    @foreach ($securites as $securite)
                        <tr>
                            <td> {{ $loop->index + 1 }} </td>
                            <td> {{ $securite->code }} </td>
                            <td class="tdlibelle"> {{ $securite->libelle }} </td>
                            <td class="tdlibelle"> {{ $securite->description }} </td>
                            <td> {{ $securite->limitation }} </td>
                          
                            <td>
                                @if ($modification == 1)
                                <button data-info=""
                                class="btn btn-success add-btn"data-bs-toggle="modal" data-bs-target="#secuUpdateModal"
                                title="Editer les champs de cet enregistrement" data-toggle="tooltip"
                                data-placement="bottom">
                                <i class="far fa-edit"></i>
                                    
                                </button>
                                    {{-- <a href="/securite/modif/{{$securite->code}}" class="link-success fs-15 " title="Editer les champs de cet enregistrement" 
                                        data-toggle="tooltip" data-placement="bottom">
                                        <i class="far fa-edit"></i>
                                    </a> --}}

                                   


                                @endif
                                @if ($consultation == 1)
                                    <a href="/securite/privilege/{{ $securite->code }}" class="btn btn-sm btn-warning "
                                        title="Attribuer les privilèges" data-toggle="tooltip" data-placement="bottom"><i
                                            class="ri-update-bin-line"></i></a>
                                @endif 
                                @if (($suppression == '1') and (Auth::guard('admin')->user()->profile != $securite->code))
                                    <a href="/securite/delete/{{ $securite->code }}" onclick="return myFunction();"
                                        class="btn btn-sm btn-danger " title="Supprimer cet enregistrement"
                                        data-toggle="tooltip" data-placement="bottom"><i class="ri-delete-bin-line"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
    
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <div class="modal fade zoomIn" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0">
                <div class="modal-header p-3 bg-soft-info">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                </div>
                <form method="post" action="/securite/store" class="container">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-4">
                                <label for="my-input">Code</label>
                                <input type="text" name="code" value="{{old('code')}}" id="code"
                                    class="form-control {{$errors->has('code')? 'is-invalid' :''}}"
                                    placeholder="exemple: 00001" aria-label="code" aria-describedby="basic-addon1">
                                @error('code')
                                <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                                @enderror
                            </div>
                            <div class="form-group col-8">
                                <label for="my-input">Libellé</label>
                                <input type="text" name="libelle" value="{{old('libelle')}}" id="libelle"
                                    class="form-control {{$errors->has('libelle')? 'is-invalid' :''}}"
                                    placeholder="exemple: zekri" aria-label="libelle" aria-describedby="basic-addon1">
                                @error('libelle')
                                <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="my-input">Description</label>
                                <input type="text" name="description" value="{{old('description')}}" id="description"
                                    class="form-control {{$errors->has('description')? 'is-invalid' :''}}"
                                    placeholder="exemple: amar" aria-label="description"
                                    aria-describedby="basic-addon1">
                                @error('description')
                                <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                                @enderror
                            </div>
                            <div class="form-group col-12">
                                <label for="my-input">Visibilité</label>
                                <select class="form-control {{$errors->has('visibilite')? 'is-invalid' :''}}" value=""
                                    id="limitation" name="limitation">
                                    <option value="">Sélectionner l'étendu de la visibilité </option>
                                    @if($p=='N') <option value="N"> N - Visibilité article échelle Entreprise</option>
                                    @endif
                                    @if($p=='N' or $p=='R' ) <option value="R"> R - Visibilité article échelle Régionale
                                    </option>@endif
                                    @if($p=='N' or $p=='R' or $p=='L') <option value="L"> L - Visibilité article échelle
                                        Local</option>
                                    @endif
                                    <option value="P"> P - Visibilité article échelle Individuelle</option>

                                </select>

                                @error('visibilite')
                                <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                                @enderror
                            </div>
                        </div>
                        
                        <!--end row-->
                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" id="close-modal" data-bs-dismiss="modal">Fermé</button>
                            <button type="submit" class="btn btn-success" id="add-btn">Enregistrer le nouveau profil</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- The Modal -->
    <div class="modal" id="secuUpdateModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
    
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modifier le profil</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
    
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <form method="post" action="/securite/update" class="container">
                            @csrf
                            <div class="row">
                                <div class="form-group col-4">
                                    <label for="my-input">Code</label>
                                    <input type="text" name="code" value="{{ old('code') }}" id="code"
                                        class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}"
                                        placeholder="exemple: 00001" aria-label="code" aria-describedby="basic-addon1" readonly>
                                    @error('code')
                                        <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-8">
                                    <label for="my-input">Libellé</label>
                                    <input type="text" name="libelle" value="{{ old('libelle') }}" id="libelle"
                                        class="form-control {{ $errors->has('libelle') ? 'is-invalid' : '' }}"
                                        placeholder="exemple: zekri" aria-label="libelle" aria-describedby="basic-addon1">
                                    @error('libelle')
                                        <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                                <div class="form-group ">
                                    <label for="my-input">Description</label>
                                    <input type="text" name="description" value="{{ old('description') }}" id="description"
                                        class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                                        placeholder="exemple: amar" aria-label="description"
                                        aria-describedby="basic-addon1">
                                    @error('description')
                                        <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group ">
                                    <label for="my-input">Visibilité</label>
                                    <select class="form-control {{ $errors->has('visibilite') ? 'is-invalid' : '' }}"
                                        value="" id="limitation" name="limitation">
                                        <option value="">Sélectionner l'étendu de la visibilité </option>
                                        @if ($p == 'N')
                                            <option value="N"> N - Visibilité article échelle Entreprise</option>
                                        @endif
                                        @if ($p == 'N' or $p == 'R')
                                            <option value="R"> R - Visibilité article échelle Régionale
                                            </option>
                                        @endif
                                        @if ($p == 'N' or $p == 'R' or $p == 'L')
                                            <option value="L"> L - Visibilité article échelle
                                                Local</option>
                                        @endif
                                        <option value="P"> P - Visibilité article échelle Individuelle</option>
    
                                    </select>
    
                                    @error('visibilite')
                                        <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            
                            <div class="row justify-content-center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary "> Modifier le profil</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
    
            </div>
        </div>
    </div>
    
    

    






</section>
<!-- /.content -->

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Ajouter un profil</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <form method="post" action="/securite/store" class="container">
                        @csrf
                        <div class="row">
                            <div class="form-group col-4">
                                <label for="my-input">Code</label>
                                <input type="text" name="code" value="{{old('code')}}" id="code"
                                    class="form-control {{$errors->has('code')? 'is-invalid' :''}}"
                                    placeholder="exemple: 00001" aria-label="code" aria-describedby="basic-addon1">
                                @error('code')
                                <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                                @enderror
                            </div>
                            <div class="form-group col-8">
                                <label for="my-input">Libellé</label>
                                <input type="text" name="libelle" value="{{old('libelle')}}" id="libelle"
                                    class="form-control {{$errors->has('libelle')? 'is-invalid' :''}}"
                                    placeholder="exemple: zekri" aria-label="libelle" aria-describedby="basic-addon1">
                                @error('libelle')
                                <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="my-input">Description</label>
                                <input type="text" name="description" value="{{old('description')}}" id="description"
                                    class="form-control {{$errors->has('description')? 'is-invalid' :''}}"
                                    placeholder="exemple: amar" aria-label="description"
                                    aria-describedby="basic-addon1">
                                @error('description')
                                <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                                @enderror
                            </div>
                            <div class="form-group col-12">
                                <label for="my-input">Visibilité</label>
                                <select class="form-control {{$errors->has('visibilite')? 'is-invalid' :''}}" value=""
                                    id="limitation" name="limitation">
                                    <option value="">Sélectionner l'étendu de la visibilité </option>
                                    @if($p=='N') <option value="N"> N - Visibilité article échelle Entreprise</option>
                                    @endif
                                    @if($p=='N' or $p=='R' ) <option value="R"> R - Visibilité article échelle Régionale
                                    </option>@endif
                                    @if($p=='N' or $p=='R' or $p=='L') <option value="L"> L - Visibilité article échelle
                                        Local</option>
                                    @endif
                                    <option value="P"> P - Visibilité article échelle Individuelle</option>

                                </select>

                                @error('visibilite')
                                <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="form-group" >
                                <button type="submit" class="btn btn-primary "> Enregistrer le nouveau profil</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
</div>

@include('admin.layouts.footern')
@push('secu_Scripts')
<script>
    $('#secuUpdateModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var secuInfo = button.data('whatever') // Extract info from data-* attributes
        var modal = $(this)
        console.log(secuInfo)
        modal.find('#code').val(secuInfo['code'])
        modal.find('#libelle').val(secuInfo['libelle'])
        modal.find('#description').val(secuInfo['description'])
        $('#limitation').val(secuInfo['limitation']).change()
       
        

    });

    
</script>
@endpush