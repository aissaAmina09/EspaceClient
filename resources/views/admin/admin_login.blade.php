<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="description" content="CodedThemes">
<meta name="keywords" content="flat ui, admin  Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="CodedThemes">
<!-- Favicon icon -->
<link rel="icon" href="{{asset('front/images/favicon.ico')}}" type="image/x-icon">
<!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
<!-- Required Fremwork -->
<link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap/css/bootstrap.min.css')}}">
<!-- themify-icons line icon -->
<link rel="stylesheet" type="text/css" href="{{asset('front/icon/themify-icons/themify-icons.css')}}">
<!-- ico font -->
<link rel="stylesheet" type="text/css" href="{{asset('front/icon/icofont/css/icofont.css')}}">
<!-- Style.css -->
<link rel="stylesheet" type="text/css" href="{{asset('front/pages/flag-icon/flag-icon.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('front/pages/menu-search/css/component.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/css/jquery.mCustomScrollbar.css')}}">
<script async src="{{asset('front/js/invisible.js')}}"></script></head>
<body>

<div class="theme-loader">
<div class="ball-scale">
<div class='contain'>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
</div>
</div>
</div>

<div id="pcoded" class="pcoded load-height">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">
<nav class="navbar header-navbar pcoded-header auth-header" header-theme="theme1">
<div class="navbar-wrapper">
<div class="navbar-logo" logo-theme="theme1" navbar-theme="theme4">
<a class="mobile-search morphsearch-search" href="#">
<i class="ti-search"></i>
</a>
<a href="index.html">
<img class="img-fluid" src="{{asset('front/images/logo.png')}}" alt="Theme-Logo" />
</a>
<a class="mobile-options">
<i class="ti-more"></i>
 </a>
</div>
<div class="navbar-container container-fluid">
<div>
<ul class="nav-left">
<li>
<a href="#!" onclick="javascript:toggleFullScreen()">
<i class="ti-fullscreen"></i>
</a>
</li>

</ul>
</li>
</ul>

</li>



</ul>
</div>
</div>
</div>
</nav>
</div>

<section class="login header p-fixed d-flex text-center bg-primary common-img-bg">

<div class="container-fluid">
    <img style="float:center;margin:-52px 5px -40px;" src="https://espacefournisseur.ctc-dz.org/web/images/logo-ctc.png" alt="">
<div class="row">
<div class="col-sm-12">

<div class="signin-card card-block auth-body mr-auto ml-auto">
<form class="md-float-material" action="{{ route('admin.login') }}"  method="POST">
    @csrf
  
    @if (count($errors) > 0)
    @foreach($errors->all() as $error)
    <p class="alert alert-danger">{{ $error}}</p>
    @endforeach
    @endif
    
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
    </div>
    @endif
<div class="auth-box">



<p class="text-inverse b-b-default text-left p-b-5">Connectez-vous avec votre compte Admin</p>
<div class="input-group">
<input type="text" class="form-control"name="Matricule" placeholder="Matricule" required>
<span class="md-line"></span>
 </div>
<div class="input-group">
<input type="password" class="form-control" placeholder="Mot de passe" name="password"required>
<span class="md-line"></span>
</div>
<div class="row m-t-25 text-left">
<div class="col-12">
<div class="checkbox-fade fade-in-primary">
<label>
<input type="checkbox" value="">
<span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
<span class="text-inverse">Se souvenir de moi</span>
</label>
</div>
<div class="forgot-phone text-right f-right">
<a href="auth-reset-password.html" class="text-right f-w-600 text-inverse"> Mot de passe oublié?</a>
</div>
</div>
</div>
<div class="row m-t-30">
<div class="col-md-12">
<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
</div>
</div>



</div>
</form>

</div>

</div>

</div>

</div>

</section>
<div class="footer bg-inverse">
<p class="text-center">Copyright &copy; {{ now()->year }} Espace Client Admin, Tous les droits sont réservés.</p>
</div>
</div>


<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->

<script type="text/javascript" src="{{asset('front/js/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/popper.js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('front/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('front/js/modernizr/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/modernizr/css-scrollbars.js')}}"></script>
<!-- reclamation js -->


<!-- reclamation js -->
<!-- classie js -->
<script type="text/javascript" src="{{asset('front/js/classie/classie.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{asset('front/js/script.js')}}"></script>
<script src="{{asset('front/js/pcoded.min.js')}}"></script>
<script src="{{asset('front/js/demo-12.js')}}"></script>
<script src="{{asset('front/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
</html>
