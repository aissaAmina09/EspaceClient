

    
    <div class="card">
    <div class="card-header">
        @foreach($show as $sho)
    <h5></h5>
    <h6 class="f-right">{{$sho->created_at}}</h6>
    </div>
   
    <div class="card-block">
    <div class="media m-b-20">

    <div class="media-left photo-table">
    <a href="#">
    <img class="media-object img-radius" src="{{asset('front/images/avatar-4.jpg')}}" alt="E-mail User">
    </a>
    </div>

    <div class="media-body photo-contant">
    <a href="#">
    <h6 class="user-name txt-primary">{{$sho->Nom}}</h6>
    </a>
    <a class="user-mail txt-muted" href="#">
    <h6>From:{{$sho->email}}</h6>
    </a>
    <div>
   
    <p class="email-content">
   {{$sho->Intitule_projet}}
     </p>
    </div>
    <div>
        
        <p class="email-content">
            {{$sho->Message}}  </div>
    <div class="m-t-15">
    <i class="icofont icofont-clip f-20 m-r-10"></i>Attachments <b>(1)</b>
    <div class="row mail-img">
  
    <div class="col-sm-4 col-md-2 col-xs-12">
    <a href="#"><img class="card-img-top img-fluid img-thumbnail" src="{{ asset('reclamation_image/vvvvv.jpeg') }}" alt="Card image cap"></a>
    </div>
    </div>
     <!-- card1 end  <textarea class="form-control m-t-30 col-xs-12 email-textarea" id="exampleTextarea-1" placeholder="Reply Your Thoughts" rows="4"></textarea>
 --></div>
    </div>
    </div>
   

@endforeach</div>
    </div>
    </div>
    </div>
    </div></div>
</div>
</div>
</div>