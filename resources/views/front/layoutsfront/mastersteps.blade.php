
<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title'){{ config('app.name') }}</title>
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
    
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
  <!-- navbar -->@include('front.layoutsfront.header')
 <!-- sideBar -->@include('front.layoutsfront.sidebar')
 <!-- Page-container start -->
 <div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header card">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <i class="icofont icofont icofont icofont-file-document bg-c-pink"></i>
                                <div class="d-inline">
                                    <h4>Sample Page</h4>
                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <i class="icofont icofont-home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">{{ $title }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                <div class="page-body">
                  @yield('content')
                </div>
            </div>
        </div>
      
    </div>
</div>
 <!-- Page-Endcontainer start -->
</div>
        </div>
    </div>

   

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
    <!--  <script src="{{asset('front/pages/forms-wizard-validation/form-wizard.js')}}"></script>Custom js -->
   
    <script src="{{asset('front/js/pcoded.min.js')}}"></script>
    <script src="{{asset('front/js/demo-12.js')}}"></script>
    <script src="{{asset('front/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/script.js')}}"></script>
   <!-- phone js -->

    <script src="{{asset('front/pages/form-masking/inputmask.js')}}"></script>
    <script src="{{asset('front/pages/form-masking/jquery.inputmask.js')}}"></script>
    <script src="{{asset('front/pages/form-masking/autoNumeric.js')}}"></script>
    <script src="{{asset('front/pages/form-masking/form-mask.js')}}"></script>
</body>

</html>




</html>
