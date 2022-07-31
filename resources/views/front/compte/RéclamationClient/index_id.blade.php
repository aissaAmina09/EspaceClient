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
        <td><a id="btnReadResponse" class="email-name">CTC contact</a></td>
        <td><a id="btnReadResponse"class="email-name">{{$liste->Intitule_projet}}vv</a></td>
        <td class="email-attch"><a href="#"><i class="icofont icofont-clip"></i></a></td>
        <td class="email-time">{{ $liste->created_at->diffForHumans() }}  </td>
        </tr>
   @endforeach
    </tbody></table>
    </div>
    </div>