@extends('front.layoutsDatable.master')
@section('title'.'laravel')
@section('content')

<style></style>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<div class="page-body">


<div class="card">
    <div class="card-header">
        <h5>Basic table</h5>
        <span>use class <code>to create </code> search form inside element</span>
        <div class="card-header-right">  
              <ul class="list-unstyled card-option">    
                <li><i class="icofont icofont-simple-left "></i></li>   
                    
                            
                              <li><i class="icofont icofont-refresh reload-card"></i></li>      
                                
             </ul>
            </div>
    </div>
    <div class="table-responsive">
        <div class="dt-responsive table-responsive">
            <table id="nemptableid" class="table table-striped ">
                <thead>
                    <tr>
                      
                        <th>Code_Affaire</th>
                        <th>IntituleAffaire</th>
                       
                        <th>code_agence	</th>
                        <th>dent_dem</th>
                        <th>DateEtablConv</th>
                        <th>dapprob_conv</th>
                        <th>descript_projet</th>
                        <th>MaitreOuvrage</th>
                        <th>Typeouvrage</th>
                        <th>TypeSousouvrage</th>
                        <th>TypeCocontractant</th>
                        <th>chargedaffaire</th>
                    </tr>
                </thead>
                <tbody>
                  
                    <tr>
                       
                        <td ></td>
                        <td>


                          

                            <span class="label label-warning"> </span>
                           </td>
                       
                       
                        <td>

                           

                        </td>
                        <td> <span class="label bg-green"></span></td>

                  

                        <td></td>


                        <td>    <a href="{{ route('boncom.showPDF', $use->code) }}" target="_blank" role="button"class="btn btn-success btn-outline-success"data-container="body" data-toggle="popover" title="Imprimer"><i class="icofont icofont-printer"></i></button>
                           <a href="{{ url('DetaillProjet',$use->code)}}" role="button" class="btn btn-warning btn-outline-warning" data-container="body" data-toggle="popover" title="Détails projet" data-placement="bottom" data-content=""><i class="icofont icofont-eye-alt"></i></a>
                           </td>
                    </tr>
                   
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){

$("#emptableid").DaTable({
      serverSide : true,
      ajax:{
          url:'{{url(affaire_list)}}',
          data: function(data){
              data.params = {
                  sac :"helo"
              }
          }
      },
      buttons :false,
      searching :true,
      scrollY: 500,
      scrollX: true,
      scrollCollapse :true,
      columns :[
           {data :"users_id" , className :'uid'},
           {data :"users_id" , className :'uid'},
           {data :"users_id" , className :'uid'},
           {data :"users_id" , className :'uid'},
      ]
});


});
</script>










@endsection

@push('page-scripts')




@endpush