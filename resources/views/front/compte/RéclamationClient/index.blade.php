@extends('front.layoutsfront.master')
@section('title'.'laravel')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />

    <div class="page-body">
        <div class="card">
        
        <div class="card-block email-card">
     
        <div class="row">
        
        <div class="col-lg-12 col-xl-3">
        <div class="user-body">
        <div class="p-20 text-center">
        <button id="btnGetResponse" class="btn btn-danger">Ajouter</button>
        </div>
        <ul class="page-list nav nav-tabs flex-column" id="pills-tab" role="tablist">
        <li class="nav-item mail-section">
        <a class="nav-link active" data-toggle="pill" id="btnGetReception" role="tab">
        <i class="icofont icofont-inbox"></i> Boîte de réception
        <span class="label label-primary f-right">{{App\reclamation::orderBy('created_at','desc')->where('Reponse','=','1')->count()}}</span>
        </a>
        </li>
        
        <li class="nav-item mail-section">
        <a class="nav-link" data-toggle="pill" id="btnGetSend" role="tab">
        <i class="icofont icofont-paper-plane"></i> Réclamation envoyés
        <span class="label label-info f-right">{{App\reclamation::orderBy('created_at','desc')->where('Reponse','=','0')->count()}}</span>
        </a>
        </li>
        <li class="nav-item mail-section">
        <a class="nav-link" data-toggle="pill" href="#e-trash" role="tab">
        <i class="icofont icofont-ui-delete"></i> Corbeille
        <span class="label label-info f-right">30</span>
        </a>
        </li>
        </ul>
       
        </div>
        </div>
        
        
        <div class="col-lg-12 col-xl-9">
        <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="e-inbox" role="tabpanel">
        <div class="mail-body">
        <div class="mail-body-header">
        <button type="button" class="btn btn-primary btn-xs waves-effect waves-light">
        <i class="icofont icofont-exclamation-circle"></i>
        </button>
        <button type="button" class="btn btn-success btn-xs waves-effect waves-light">
        <i class="icofont icofont-inbox"></i>
        </button>
        <button type="button" class="btn btn-danger btn-xs waves-effect waves-light">
        <i class="icofont icofont-ui-delete"></i>
        </button>
        <div class="btn-group dropdown-split-primary">
        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="icofont icofont-ui-folder"></i>
        </button>
        <div class="dropdown-menu">
        <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
        <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
        <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
        </div>
        </div>
        <div class="btn-group dropdown-split-primary">
        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        More
        </button>
        <div class="dropdown-menu">
        <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
        <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
        <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
        </div>
        </div>
        </div>
        <div class="mail-body-content">
        <div class="table-responsive">
        <table class="table">
        <tbody>
        @foreach(App\reclamation::orderBy('created_at','desc')->where('Reponse','=','1')->get() as $liste)
        <tr class="unread">
            <td>
            <div class="check-star">
            <div class="checkbox-fade fade-in-primary checkbox">
            <label>
            <input type="checkbox" value="">
            <span class="cr"><i class="cr-icon icofont icofont-verification-check txt-primary"></i></span>
            </label>
            </div>
            <i class="icofont icofont-star text-warning"></i>
            </div>
            </td>
            <td><a id="" class="email-name">CTC contact</a></td>
            <td><a id=""class="email-name">{{$liste->Intitule_projet}}vv</a></td>
            <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
            <td class="email-time">08:01 AM</td>
            </tr>
       @endforeach
        </tbody></table>
        </div>
        </div>
        </div>
        </div> 
       <div class="ssssssssssssssss"></div> 
      
        <div class="tab-pane fade" id="e-trash" role="tabpanel">
        <div class="mail-body">
        <div class="mail-body-header">
        <button type="button" class="btn btn-primary btn-xs waves-effect waves-light">
        <i class="icofont icofont-exclamation-circle"></i>
        </button>
         <div class="btn-group dropdown-split-primary">
        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="icofont icofont-ui-folder"></i>
        </button>
        <div class="dropdown-menu">
        <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
        <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
        <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
        </div>
        </div>
        <div class="btn-group dropdown-split-primary">
        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        More
        </button>
        <div class="dropdown-menu">
        <a class="dropdown-item waves-effect waves-light" href="#">Action</a>
        <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
        <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
        </div>
        </div>
        </div>
     
        </div>
        </div>
        </div>
        </div>
        
        </div>
        </div>
        
        </div>
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript">
        $(function () {
            
            $("#btnGetResponse").click(function () {
                $.ajax({
                    type: "get",
               url: '/ajouter_reclamation',
                    data: {},
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                      success:function(data){
                         // console.log(data);
      $('tbody').html(data);
                      }
                });
            });
        });
        </script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
  <script type="text/javascript">
    $(function () {
        
        $("#btnReadResponse").click(function () {
            $.ajax({
                type: "get",
                 url:  '{{url('/show_reclamation', [ $liste->id ])}} ',
                data: {},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                cache: false,
                  success:function(data){
                     // console.log(data);
  $('tbody').html(data);
                  }
            });
        });
    });
    </script>
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
<script type="text/javascript">
    $(function () {
        
        $("#btnGetSend").click(function () {
            $.ajax({
                type: "get",
                 url:  '/send_reclamation ',
                data: {},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                  success:function(data){
                     // console.log(data);
  $('tbody').html(data);
                  }
            });
        });
    });
    </script>
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

<script type="text/javascript">
    $(function () {
        
        $("#btnGetReception").click(function () {
            $.ajax({
                type: "get",
                 url:  '/boite_Reception ',
                data: {},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                  success:function(data){
                     // console.log(data);
  $('tbody').html(data);
                  }
            });
        });
    });
    </script>
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

@endsection

@push('page-scripts')




@endpush