<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>Inscrivez-vous |Espace client CTC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="index.html" class="d-inline-block auth-logo">
                                    <img src="assets/images/logo-am.png" alt="" height="20">
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium">Espace client</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Créer un nouveau compte</h5>
                                    <p class="text-muted">Obtenez votre compte Espace client gratuit maintenant</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form class="needs-validation" novalidate  action="{{ route('register.store') }}" method="POST"enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>
{{ $message }}
</p>
</div>
@endif
@if ($message = Session::get('warning'))
<div class="alert alert-warning">
<p>
{{ $message }}
</p>
</div>@endif

                                                        <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="gen-info-email-input">{{ __('messages.Raison sociale') }} * </label>
                                                                <input type="text" class="form-control" id="gen-info-email-input"name="Raisonsocial" value="{{ old('Raison sociale') }}"  placeholder=" Raison sociale ">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="gen-info-username-input">NIF *</label>
                                                                <input type="text" class="form-control" name="nif"id="gen-info-username-input" placeholder=" NIF">
                                                            </div>
                                                        </div>
                                                    </div>
													 <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="gen-info-email-input">Nom  * </label>
                                                                <input type="text" class="form-control" name="Nom"  value="{{ old('name') }}"id="gen-info-email-input" placeholder=" Nom  ">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="gen-info-username-input">Prénom *</label>
                                                                <input type="text" class="form-control" name="Prenom"value="{{ old('prenom_four') }}"id="gen-info-username-input" placeholder="  Prénom">
                                                            </div>
                                                        </div>
                                                    </div>
													 <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                            <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="useremail" name="email" value="{{ old('email') }}"placeholder=" email address" required>
                                            <div class="invalid-feedback">
                                                Veuillez saisir un e-mail
                                            </div>
                                        </div>
                                                        </div>
														<div class="col-lg-6">
                                                            <div class="mb-3">
                                                                 <label class="form-label" for="password-input">Mot de passe *</label>
                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="password" class="form-control pe-5 password-input" name="password"value="{{ old('password') }}"onpaste="return false" placeholder=" password" id="password-input" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                <div class="invalid-feedback">
                                                    Please enter password
                                                </div>
                                            </div>
                                                            </div>
                                                        </div>
													<div class="mb-4">
                                            <p class="mb-0 fs-12 text-muted fst-italic">En vous inscrivant, vous acceptez les conditions d'utilisation de L'Espace Client CTC <a href="#" class="text-primary text-decoration-underline fst-normal fw-medium">Terms of Use</a></p>
                                        </div>

                                        <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                            <h5 class="fs-13">Le mot de passe doit contenir:</h5>
                                            <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 caractères</b></p>
                                            <p id="pass-lower" class="invalid fs-12 mb-2">À <b> la lettre</b> minuscule (a-z)</p>
                                            <p id="pass-upper" class="invalid fs-12 mb-2">Au moins <b>majuscule</b> letter (A-Z)</p>
                                            <p id="pass-number" class="invalid fs-12 mb-0"> Un moins <b>numéro</b> (0-9)</p>
                                        </div> 
                                        <div class="col-lg-6">
                                                                        <label for="country" class="form-label">Wilaya *</label>
                                                                        <select class="form-select" name="country"  id="country">
                                                                            <option value="">Veuillez choisir une Wilaya...</option>
                                                                         
@foreach(App\Bwilaya::all() as $countryData)

<option value="{{$countryData->CODE_Wilaya}}" selected>{{$countryData->nom_wilaya}}</option>
@endforeach
                                                                        </select>
                                                                    </div>
										  <div class="col-lg-6">
                                                                        <label for="state" class="form-label">Veuillez choisir une Commune *</label>
                                                                        <select class="form-select" id="state">
                                                                            <select name="state" id="state" class="form-control"required="">
                                                                                <option>--Commune--</option>
                                                                        </select>

  </div>  
  
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="cleave-phone" class="form-label">Téléphone  * </label>
                                                              
                                                                <input type="text"name="Telephone" class="form-control" id="cleave-phone" placeholder="(xxx)xxx-xxxx">

                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="cleave-fax" class="form-label">Fax *</label>
                                                                <input type="text" class="form-control"name="Fax" value="{{ old('Fax') }}"
                                                                id="cleave-fax" placeholder="(xxx)xxx-xxxx">
                                                            </div>
                                                        </div>
                                                   
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="gen-info-email-input">Adresse  * </label>
                                                                <input type="text" class="form-control" name="Adresse"  value="{{ old('Adresse') }}"id="gen-info-email-input" placeholder=" Adresse ">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="gen-info-username-input">Qualité *</label>
                                                                <input type="text" class="form-control"value="{{ old('Qualite') }}"  name="Qualite"id="gen-info-username-input" placeholder=" Qualité">
                                                            </div>
                                                        </div>
                                                   <div class="col-lg-6">
                                                <div class="mt-4 mt-lg-0">
                                                    <div class="form-check form-switch form-check-inline" dir="ltr">
                                                        <input type="checkbox" class="form-check-input" id="inlineswitch5"name="type" value="3" @if(old('Bmaitre') ==  1) checked="checked" @endif  >
                                                        <label class="form-check-label" for="inlineswitch5">Maitre de l'ouvrage </label>
                                                    </div>
                                                    <div class="form-check form-switch form-check-inline" dir="ltr">
                                                        <input type="checkbox" class="form-check-input" id="inlineswitch6"value="1"name="type" @if(old('BureauEtude') ==  1) checked="checked" @endif>
                                                        <label class="form-check-label" for="inlineswitch6">Bureau Etude</label>
                                                    </div>
                                                    <div class="form-check form-switch form-check-inline" dir="ltr">
                                                        <input type="checkbox" class="form-check-input" id="inlineswitchdisabled2"value="2" @if(old('Laboratoir') ==  1) checked="checked" @endif  >
                                                        <label class="form-check-label" for="inlineswitchdisabled2">Laboratoire</label>
                                                    </div>
                                                </div>
                                            </div>
                                       
                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">S'INSCRIRE</button>
                                        </div>

                                       
                                    </form>

                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">J’ai déjà un compte sur l’espace client du CTC? <a href="/" class="fw-semibold text-primary text-decoration-underline"> S'identifier </a> </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div> 
            <!-- end container<img src="assets/images/silhouette-of-a-city-213.png" width="100%" height="100%"> -->
        </div>
		 
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                              Copyright CTC  
                               2022 
                               Espace Client 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- particles js -->
    <script src="assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="assets/js/pages/particles.app.js"></script>
    <!-- validation init -->
    <script src="  {{asset('assets/js/pages/form-validation.init.js')}}"></script>
    <script src="assets/libs/cleave.js/cleave.min.js"></script>
    <!-- password create init -->
    <script src=" {{asset('assets/js/pages/passowrd-create.init.js')}}"></script>
    <script>var cleaveBlocks = new Cleave('#cleave-phone', {
        delimiters: ['(', ')', '-'],
        blocks: [0, 3, 3, 4]
    });</script>

<script>var cleaveBlocks = new Cleave('#cleave-fax', {
    delimiters: ['(', ')', '-'],
    blocks: [0, 3, 3, 4]
});</script>

  
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
      $(document).ready(function() {
      $('#country').change(function(){
      var countryID = $(this).val();
      if(countryID){
      $.ajax({
      type:"GET",
      url:"{{url('getstatelistInscription')}}?countryid="+countryID,
      success:function(res){
      if(res){
      $("#state").empty();
      $("#state").append('<option>Select</option>');
      $.each(res,function(key,value){
      $("#state").append('<option value="'+key+'">'+key+' -'+value+'</option>');
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
</body>

</html>