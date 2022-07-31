@extends('front.layoutsfront.mastersteps')
@section('title'.'laravel')
@section('content')
<div class="page-body">@foreach($use as $uses)
    <div class="col-sm-12">
        <div class="card card-border-primary">
            <div class="card-header">
                <h5>{{$uses->intitule_proj}} </h5>
                <!-- <span class="label label-default f-right"> 28 January, 2015 </span> -->
                <div class="dropdown-secondary dropdown f-right">
                    <button class="btn btn-primary btn-mini dropdown-toggle waves-effect waves-light" type="button"
                     id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actif</button>
                    <!-- end of dropdown menu -->
                    <span class="f-left m-r-5 text-inverse">Status : </span>
                </div>
            </div>
            <div class="card-block">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="list list-unstyled">
                            <li>Code Affaire #:???</li>
                            <li>Date de création : <span class="text-semibold">????/??/??</span></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list list-unstyled text-right">
                            <li>$8,750</li>
                            <li>Type Ouvrage: <span class="text-semibold">???</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="task-list-table">
                    <p class="task-due"><strong> Due : </strong><strong class="label label-primary">?? hours</strong></p>
                </div>
                <!-- end of pull-right class -->
            </div>
            <!-- end of card-footer -->
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card card-border-primary">
            <div class="card-header">
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Charger Vos Dossiers 
        </a>
    
      <div class="collapse" id="collapseExample">
      
     
    <!-- Choose Your Payment Method start -->
    <div class="card">
        <div class="card-header">
          
            <div class="card-header-right">    <ul class="list-unstyled card-option">    
                    <li><i class="icofont icofont-simple-left "></i></li>    
                                   <li><i class="icofont icofont-refresh reload-card"></i></li>   
                                       </ul></div>
        </div>
        <div class="card-block payment-tabs">
            <ul class="nav nav-tabs md-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#credit-card" role="tab" aria-expanded="false">Dossier Architecture</a>
                    <div class="slide"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#debit-card" role="tab" aria-expanded="false">Dossier Génie civil</a>
                    <div class="slide"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#emi" role="tab" aria-expanded="true">Note de calcul</a>
                    <div class="slide"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#net-banking" role="tab">Rapport géothenique </a>
                    <div class="slide"></div>
                </li>
            </ul>
            <div class="tab-content m-t-15">
                <div class="tab-pane" id="credit-card" role="tabpanel" aria-expanded="false">
                    <div class="demo-container card-block">
                        <div class="row">
                            <div class="col-sm-6">
                                <form class="payment-form" action="" method="POST"enctype="multipart/form-data" >
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">plan de masse<span
                                                class="text-danger">*</span></label>
                                        <input type="file" class="form-control-file"  accept=".pdf"id="Plan_de_masse"
                                               name="Plan_de_masse" value="{{old('Plan_de_masse')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">plan levée topographique<span
                                                class="text-danger">*</span></label>
                                        <input type="file" class="form-control-file"  accept=".pdf"id="plan_levée_topographique"
                                               name="plan_levée_topographique" value="{{old('plan_levée_topographique')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Vue en plan RDC<span
                                                class="text-danger">*</span></label>
                                        <input type="file" class="form-control-file"  accept=".pdf"id="vue_plan_RDC"
                                               name="vue_plan_RDC" value="{{old('vue_plan_RDC')}}">
                                    </div>
                                    <div class="text-center">
                                        <a href="#!" class="btn btn-primary waves-effect waves-light">Envoyer</a>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Vue en plan 1 étage<span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control-file"  accept=".pdf"id="vue_plan_RDC"
                                           name="vue_plan_RDC" value="{{old('vue_plan_RDC')}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Vue en plan 2 étage<span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control-file"  accept=".pdf"id="vue_plan_RDC"
                                           name="vue_plan_RDC" value="{{old('vue_plan_RDC')}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Vue en plan 3 étage<span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control-file"  accept=".pdf"id="vue_plan_RDC"
                                           name="vue_plan_RDC" value="{{old('vue_plan_RDC')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="debit-card" role="tabpanel" aria-expanded="false">
                    <div class="debitCardForm card-block p-b-0">
                        <div class="payment">
                            <form class="payment-form" action="" method="POST"enctype="multipart/form-data" >
                                <div class="row">
                                    <div class="col-sm-6">
                                        <form class="payment-form">
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">plan d'infrastructure <span
                                                        class="text-danger">*</span></label>
                                                <input type="file" class="form-control-file"  accept=".pdf"id="Plan_infrastructure"
                                                       name="Plan_infrastructure " value="{{old('Plan_infrastructure ')}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">plan d'Superstructure  <span
                                                        class="text-danger">*</span></label>
                                                <input type="file" class="form-control-file"  accept=".pdf"id="Plan_Superstructure"
                                                       name="Plan_Superstructure" value="{{old('Plan_Superstructure')}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">plan  de Fondation<span
                                                        class="text-danger">*</span></label>
                                                <input type="file" class="form-control-file"  accept=".pdf"id="vue_plan_RDC"
                                                       name="vue_plan_RDC" value="{{old('vue_plan_RDC')}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">plan  de Vue en plan <span
                                                        class="text-danger">*</span></label>
                                                <input type="file" class="form-control-file"  accept=".pdf"id="vue_plan_RDC"
                                                       name="vue_plan_RDC" value="{{old('vue_plan_RDC')}}">
                                            </div>
                                            <div class="text-center">
                                                <a href="#!" class="btn btn-primary waves-effect waves-light">Envoyer</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Vue  poutres<span
                                                    class="text-danger">*</span></label>
                                            <input type="file" class="form-control-file"  accept=".pdf"id="vue_plan_RDC"
                                                   name="vue_plan_RDC" value="{{old('vue_plan_RDC')}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Vue poteaux<span
                                                    class="text-danger">*</span></label>
                                            <input type="file" class="form-control-file"  accept=".pdf"id="vue_plan_RDC"
                                                   name="vue_plan_RDC" value="{{old('vue_plan_RDC')}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Voile<span
                                                    class="text-danger">*</span></label>
                                            <input type="file" class="form-control-file"  accept=".pdf"id="vue_plan_RDC"
                                                   name="vue_plan_RDC" value="{{old('vue_plan_RDC')}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Etanchiété<span
                                                    class="text-danger">*</span></label>
                                            <input type="file" class="form-control-file"  accept=".pdf"id="vue_plan_RDC"
                                                   name="vue_plan_RDC" value="{{old('vue_plan_RDC')}}">
                                        </div>
                                    </div>
                                  
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane active" id="emi" role="tabpanel" aria-expanded="true">
                    <div class="card-block p-b-0">
                        <div class="row">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Note de calcule<span
                                        class="text-danger">*</span></label>
                                <input type="file" class="form-control-file"  accept=".pdf"id="vue_plan_RDC"
                                       name="vue_plan_RDC" value="{{old('vue_plan_RDC')}}">
                            </div>
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary waves-effect waves-light m-t-20">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="net-banking" role="tabpanel">
                    <div class="card-block p-b-0">
                        <div class="row">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Rapport géothenique<span
                                        class="text-danger">*</span></label>
                                <input type="file" class="form-control-file"  accept=".pdf"id="rapport_géothenique"
                                       name="rapport_géothenique" value="{{old('rapport_géothenique')}}">
                            </div>  <div class="col-sm-12 text-center">
                                <a href="#!" class="btn btn-primary waves-effect waves-light m-t-20">Envoyer</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="cod" role="tabpanel">
                    <div class="card-block p-b-0">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input name="number" type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Pincode">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control">
                <option>Select country</option>
                <option>India</option>
                <option>Pakistan</option>
                <option>Amerika</option>
                <option>China</option>
                <option>Dubai</option>
                <option>Nepal</option>
            </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                <option>Select state</option>
                <option>Gujarat</option>
                <option>Maharastra</option>
                <option>Rajastan</option>
                <option>Maharastra</option>
                <option>Rajastan</option>
                <option>Gujarat</option>
            </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control f">
                <option>Select city</option>
                <option>Surat</option>
                <option>Baroda</option>
                <option>Navsari</option>
                <option>Baroda</option>
                <option>Surat</option>
            </select>
                                </div>
                                <input type="number" class="form-control" placeholder="Mobile no.">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary waves-effect waves-light m-t-20">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Upload multi file -->
        <div class="card">
            <div class="card-header">
            <h5>Image Upload</h5>
            <div class="card-header-right"> <ul class="list-unstyled card-option"> <li><i class="icofont icofont-simple-left "></i></li> <li><i class="icofont icofont-maximize full-card"></i></li> <li><i class="icofont icofont-minus minimize-card"></i></li> <li><i class="icofont icofont-refresh reload-card"></i></li> <li><i class="icofont icofont-error close-card"></i></li> </ul></div>
            </div>
            <div class="card-block">
            <div class="sub-title">Example 2</div>
            <div class="jFiler jFiler-theme-default">
                <input type="file" name="files[]" id="filer_input" multiple="multiple" style="position: absolute; left: -9999px; top: -9999px; z-index: -9999;">
                <div class="jFiler-input">
                    <div class="jFiler-input-caption">
                        <span>Choose files To Upload</span>
                    
                    
                    </div>
                    <div class="jFiler-input-button">Choose Files</div>
                </div>
            </div>
            </div>
            </div>
    </div>  </div> 
    
    @endforeach

    <script src="{{asset('front/files/assets/pages/jquery.filer/js/jquery.filer.min.js')}}"></script>
    <script src="{{asset('front/files/assets/pages/filer/custom-filer.js')}}" type="text/javascript"></script>
    <script src="{{asset('front/files/assets/pages/filer/jquery.fileuploads.init.js')}}" type="text/javascript"></script>
    <script type="text/javascript">(function(){window['__CF$cv$params']={r:'71a2ccc53f6676af',m:'9a2eXWOj_IJP3D.CgVonid6j75Z9ND.owyJIC9Dnf00-1655039145-0-AS31k7zersl9CxxiSswi63Py9AaRSae0D/9/4n2GFEVeg3Rjv7V74iooHvOT3SAbBhe9Vo06ibwXOwhn/msu/TBtOjFHIT6HJ0oed9I+ZGnO/+P+DnMCf6e4jqa+iwAKg9ZdUJaS8xISv6qMVSKG4wmeu0E3/2b8S4r+JwahnLJy1kOnI/JN9X9EHO6UmmDOxg==',s:[0x8ccca4f165,0xe01889fc76],u:'/cdn-cgi/challenge-platform/h/g'}})();</script>
</div>
  </div>@endsection