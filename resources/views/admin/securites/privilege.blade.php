

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
                    <h1> Attribution des privileges </h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content ">
        <div class="m-3">
            <div>
                <form method="post" action="/securite/privilegeajout">

                    @csrf
                    @foreach ($privilegeuser_enr as $privilegeuser_enrs)
                        <div class="row justify-content-center text-center mb-3 mt-3">
                            <div class="form-group col-3">
                                <label for="my-input">Code</label>
                                <input type="text" name="code" value="{{ $privilegeuser_enrs->code }}" id="code"
                                    class="form-control  text-center {{ $errors->has('code') ? 'is-invalid' : '' }}"
                                    placeholder="exemple: 00001" aria-label="code" aria-describedby="basic-addon1" readonly>
                                @error('code')
                                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                                @enderror
                            </div>
                            <div class="form-group col-3">
                                <label for="my-input">Libellé</label>
                                <input type="text" name="libelle" value="{{ $privilegeuser_enrs->libelle }}" id="libelle"
                                    class="form-control  text-center {{ $errors->has('libelle') ? 'is-invalid' : '' }}"
                                    placeholder="exemple: zekri" aria-label="libelle" aria-describedby="basic-addon1"
                                    readonly>
                                @error('libelle')
                                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                                @enderror
                            </div>
                            <div class="form-group col-3">
                                <label for="my-input">Description</label>
                                <input type="text" name="description" value="{{ $privilegeuser_enrs->description }}"
                                    id="description"
                                    class="form-control  text-center {{ $errors->has('description') ? 'is-invalid' : '' }}"
                                    placeholder="exemple: amar" aria-label="description" aria-describedby="basic-addon1"
                                    readonly>
                                @error('description')
                                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                                @enderror
                            </div>

                        </div>

                        <div class="row justify-content-center  text-center mb-3 mt-3">

                            <div class="form-group col-4">
                                <label for="my-input">Visibilité</label>
                                <input type="hidden" value="{{ $privilegeuser_enrs->limitation }}" name="visibilite">
                                <div>
                                    @if ($privilegeuser_enrs->limitation == 'N')
                                        <input type="text" value="N - Visibilité à l'échelle nationale"
                                            class="form-control  text-center" readonly>
                                    @endif
                                    @if ($privilegeuser_enrs->limitation == 'R')
                                        <input type="text" value="R - Visibilité à l'échelle régionale"
                                            class="form-control  text-center" readonly>
                                    @endif
                                    @if ($privilegeuser_enrs->limitation == 'L')
                                        <input type="text" value="L - Visibilité à l'échelle local"
                                            class="form-control  text-center" readonly>
                                    @endif
                                    @if ($privilegeuser_enrs->limitation == 'P')
                                        <input type="text" value="P - Visibilité à l'échelle individuelle"
                                            class="form-control  text-center" readonly>
                                    @endif

                                </div>
                                @error('visibilite')
                                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                                @enderror
                            </div>

                        </div>
                        <div class="text-center mb-3 mt-3">
                            @if ($insertion == 1)
                                @if ($privilegecollect == 0)
                                    <button type="submit" class="btn btn-primary boutonajout"> Ajout objets pour attribution
                                        des
                                        privilèges</button>
                                @endif
                            @endif
                        </div>
                    @endforeach

                </form>

            </div>

            

            <div class="card">
                <div class="card-body">
                    <table id="table_data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Profile code</th>
                                <th>Application volet</th>
                                <th>Description</th>
                                <th>Consultation</th>
                                <th>Modification</th>
                                <th>Insertion</th>
                                <th>Suppression</th>
                                <th>Visibilité</th>
                                <th>Action</th>
                            </tr>
                        </thead>
        
                        <tbody>
                            @foreach ($privilegeuser as $privilegeusers)
                                <tr>
                                    <td> {{ $loop->index + 1 }} </td>
                                    <td> {{ $privilegeusers->profile_code }} </td>
                                    <td class="tdlibelle"> {{ $privilegeusers->volet_app }} </td>
                                    <td class="tdlibelle"> {{ $privilegeusers->description }} </td>
                                    <td> {{ $privilegeusers->consultation }} </td>
                                    <td> {{ $privilegeusers->modification }} </td>
                                    <td> {{ $privilegeusers->insertion }} </td>
                                    <td> {{ $privilegeusers->suppression }} </td>
                                    <td> {{ $privilegeusers->visibilite }} </td>
                                    <td>
                                        @if ($modification == 1)
                                           
                                            <button data-info="{{ $privilegeusers }}"
                                            class="dropdown-item"data-bs-toggle="modal" data-bs-target="#prvlgUpdateModal"
                                            title="Editer les champs de cet enregistrement" data-toggle="tooltip"
                                            data-placement="bottom">
                                            
                                            <i class="far fa-edit"></i>
                                            {{-- <a href="/securite/privilegemodif/{{$privilegeusers->profile_code}}/{{$privilegeusers->volet_app}}"
                                        class="btn btn-sm btn-success " title="Editer les champs de cet enregistrement" data-toggle="tooltip"
                                        data-placement="bottom">  <i class="far fa-edit"></i></a> --}}
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
            <div class="modal fade zoomIn" id="prvlgUpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content border-0">
                        <div class="modal-header p-3 bg-soft-info">
                            <h5 class="modal-title" id="exampleModalLabel">Affectation affaire</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                        </div>
                        <form action="/securite/privilegeupdate"class="test_form" method="POST"enctype="multipart/form-data" >
                            {{ csrf_field() }}
                            <div class="modal-body">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="address" class="form-label">Code profile</label><input id="feed_id" name="codeBC" type="hidden" />
                                        <input type="text" name="profile_code" value="{{ old('profile_code') }}"
                                        id="profile_code"  class="form-control  text-center {{ $errors->has('profile_code') ? 'is-invalid' : '' }}"
                                        placeholder="exemple: 00001" aria-label="profile_code"
                                        aria-describedby="basic-addon1" readonly>
                                        @error('profile_code')
                                        <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="address2" class="form-label">Libellé </label>
                                        <input type="text"name="libelle" value="{{ old('libelle') }}"
                                        id="libelleModal"
                                        class="form-control  text-center {{ $errors->has('libelle') ? 'is-invalid' : '' }}"
                                        placeholder="exemple: zekri" aria-label="libelle"
                                        aria-describedby="basic-addon1" readonly>
                                    </div>
                                    <div class="col-12">
                                        <label for="address2" class="form-label">Volet d'application </label>
                                        <input type="text"name="volet_app" value="{{ old('volet_app') }}"
                                        id="volet_app"
                                        class="form-control  text-center {{ $errors->has('volet_app') ? 'is-invalid' : '' }}"
                                        placeholder="exemple: amar" aria-label="volet_app"
                                        aria-describedby="basic-addon1" readonly>
                                    </div>
                                    <div class="col-12">

                                    <label for="my-input">Visibilité</label>
                                    <select class="form-control {{ $errors->has('visibilite') ? 'is-invalid' : '' }}"
                                        value="{{ old('visibilite') }}" id="visibilite" name="visibilite">
                                        <option value="">Sélectionner l'étendu de la visibilité </option>
                                        @if ($p == 'N')
                                            <option value="N">
                                                N - Visibilité à l'échelle nationale </option>
                                        @endif
                                        @if (($p == 'N') || ($p == 'R'))
                                            <option value="R">
                                                R - Visibilité à l'échelle régionale </option>
                                        @endif
                                        @if (($p == 'N') || ($p == 'R') || ($p == 'L'))
                                            <option value="L">
                                                L - Visibilité à l'échelle local </option>
                                        @endif
                                        <option value="P">
                                            P - Visibilité à l'échelle individuelle </option>
                                    </select>
                                    @error('visibilite')
                                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                    
                                </div>

                                <hr class="my-4 text-muted">

                                <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input"name="consultation"  @if ($privilegeuser_enrs->consultation == 1) checked @endif
                                    value="{{ $privilegeuser_enrs->consultation }}" id="consultation"
                                    class="form-control
                            {{ $errors->has('consultation') ? 'is-invalid' : '' }}"
                                    placeholder="exemple: amar" aria-label="consultation"
                                    aria-describedby="basic-addon1" readonly>
                                    <label class="form-check-label" for="same-address">consultation</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input"  name="modification"
                                    @if ($privilegeuser_enrs->modification == 1) checked @endif
                                    value="{{ $privilegeuser_enrs->modification }}" id="modification"
                                    class="form-control
                            {{ $errors->has('modification') ? 'is-invalid' : '' }}"
                                    placeholder="exemple: amar" aria-label="modification"
                                    aria-describedby="basic-addon1" readonly>
                                    <label class="form-check-label" for="same-address">modification</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" name="insertion"
                                    @if ($privilegeuser_enrs->insertion == 1) checked @endif
                                    value="{{ $privilegeuser_enrs->insertion }}" id="insertion"
                                    class="form-control
                            {{ $errors->has('insertion') ? 'is-invalid' : '' }}"
                                    placeholder="exemple: amar" aria-label="insertion"
                                    aria-describedby="basic-addon1" readonly>
                                    <label class="form-check-label" for="same-address">insertion</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" name="suppression"
                                    @if ($privilegeuser_enrs->suppression == 1) checked @endif id="suppression"
                                    class="form-control {{ $errors->has('suppression') ? 'is-invalid' : '' }}"
                                    placeholder="exemple: amar" aria-label="suppression"
                                    aria-describedby="basic-addon1" readonly>
                                    <label class="form-check-label" for="same-address">suppression</label>
                                </div>

                               
                            </div>
                           
                           
                           
                            <div class="modal-footer">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" id="close-modal" data-bs-dismiss="modal">Fermé</button>
                                    <button type="submit"  class="btn btn-success"> <i
                                        class="nav-icon fa fa-save m-1"></i> Enregistrer les privilèges</button>
                                   
                                </div>
                            </div>->
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        
            <!-- The Modal -->
           

        
        </div>
        
    </section>
    <!-- /.content -->
</div>

@include('admin.layouts.footern')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $('#prvlgUpdateModal').on('show.bs.modal', function(event) {
    var buttonFamille = $(event.relatedTarget) // Button that triggered the modal
    var AffectationInfo = buttonFamille.data('info') // Extract info from data-* attributes
    var modal = $(this)
    // console.log(AffectationInfo )
    modal.find('#feed_id').val(AffectationInfo['code'])
    // modal.find('#libellefam_up').val(AffectationInfo['LIB'])
});
</script>
<script>
    $('#prvlgUpdateModal').on('show.bs.modal', function(event) {
       //  console.log('hi');
        var button = $(event.relatedTarget); // Button that triggered the modal
        var prvlgInfo = button.data('info'); // Extract info from data-* attributes
       var libelleInfo = $('#libelle').val()
       var modal = $(this);
        
        console.log(prvlgInfo);
         modal.find('#profile_code').val(prvlgInfo['profile_code'])
         modal.find('#volet_app').val(prvlgInfo['volet_app'])
        modal.find('#libelleModal').val(libelleInfo)
         $('#visibilite').val(prvlgInfo['visibilite']).change()

         if (prvlgInfo['consultation'] == 1) {
             modal.find('#consultation').prop('checked', true);
         } else {
           modal.find('#consultation').prop('checked', false);
       }

         if (prvlgInfo['insertion'] == 1) {
             modal.find('#insertion').prop('checked', true);
        } else {
            modal.find('#insertion').prop('checked', false);
         }

        if (prvlgInfo['modification'] == 1) {
            modal.find('#modification').prop('checked', true);
         } else {
            modal.find('#modification').prop('checked', false);
        }

        if (prvlgInfo['suppression'] == 1) {
           modal.find('#suppression').prop('checked', true);
        } else {
           modal.find('#suppression').prop('checked', false);
         }

    });
</script>

