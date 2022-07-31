<div class="mail-body-content">
    <div class="table-responsive">
    <table class="table">
    <tbody>
    @foreach(App\reclamation::where('Reponse','=','0')->orderBy('created_at','desc')->get() as $liste)
    <tr class="deleteComment" data-id="{{ $liste->id }}" data-token="{{ csrf_token() }}">
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
        <td><a class="deleteComment" data-id="{{ $liste->id }}" data-token="{{ csrf_token() }}" class="email-name">CTC contact{{$liste->id}}</a></td>
        <td><a class="deleteComment" data-id="{{ $liste->id }}" data-token="{{ csrf_token() }}">{{$liste->Intitule_projet}}</a></td>
        
            <p class="email-content">
        <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a>f</td>
        <td class="email-time">{{ $liste->created_at->diffForHumans() }}  </td>
        </tr>
   @endforeach
    </tbody></table>
    </div>
    </div><div class="table-ddddd"></div>
    <script language="javascript" type="text/javascript">
        
$(".deleteComment").click(function(){
    var id = $(this).data("id");
    var token = $(this).data("token");
   
$.ajax({
                type: "get",
                url: "/show_reclamation/"+id,
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
    </script>
   