
    <div class="page-body">
        <div class="card">

            <div class="card-block email-card">
           
            <div class="row">
            
            
            
            
            <div class="col-lg-12 col-xl-9">
            <div class="mail-body">
            <div class="mail-body">
            <div class="mail-body-content">
            <form action=""id="offreformsave" method="POST"enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="form-group">
                <input type="text" class="form-control"  name="Ref_Bon_commande"placeholder="Référence du Bon de commande">
               
            </div>
            <div class="form-group">
            <div class="row">
            <div class="col-md-6">
              
                  
                    <select name="ObjetReclamation" class="form-control form-control-primary">
                    <option >Sélectionner type nature de réclamation</option>
                   
                    @foreach(App\ObjetReclamation::all() as $obje)
                   
                    <option value="{{$obje->id}}" >{{$obje->objet}}</option>
                    @endforeach
                    </select>
                  
             </div>
            <div class="col-md-6">
                <select name="wilaya" class="form-control form-control-primary">
                    <option value="opt1">Site d'implantation projet</option>
                    @foreach(App\Bwilaya::all() as $role)
                   
                    <option value="{{$role->CODE_Wilaya}}" >{{$role->nom_wilaya}}</option>
                    @endforeach
                    </select>
            </div>
            </div>
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="Intitule_projet"placeholder="Intitulé du projet ">
            </div>  
            <div class="form-group">
                <input type="file" name="reclamation" class="form-control">
            </div>
            <textarea name="Message" rows="5" cols="94" class="form-control tinymce-editor"></textarea>
           
           <br> 
            <button type="submit"  id="storereclamation"  class="btn btn-primary"> Envoyer</button>
             </div>
            </form>
            </div>
            </div>
            </div>
            </div>
            
            </div>
            </div>
            </div>
    </div> 

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
      $(document).on('click','#storereclamation',function(e){
     e.preventDefault();
     var formData= new FormData($('#offreformsave')[0])
                                                        $.ajax({
                                                            type: 'post',
                                                            enctype:'multipart/form-data',
                                                          
                                                            url: '/store_reclamation ',
                                                            data: formData,
                                                            processData:false,
                                                            contentType:false,
                                                            cache:false,
                                                            success:function(data){
                     // console.log(data);
  $('tbody').html(data);
                  },error:function(reject){
    
                                                                  }
                                                    });
      
      });
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
