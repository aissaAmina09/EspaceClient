@extends('front.layoutsDatable.master')
@section('title'.'laravel')
@section('content')

<style></style>





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
            <table id="new-cons" class="table table-striped table-bordered nowrap">
                <thead>
                    <tr>
                      
                        <th>intitulé projet</th>
                        <th>Wilaya</th>
                       
                        <th>bureau etude	</th>
                        <th>maitre oeuvrage</th>
                        <th>laboratoire</th>
                        <th>Détails</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    @if($bcommandeuser->count()>0)

                                @foreach($bcommandeuser as $use)
                    <tr>
                       
                        <td >{{$use->intitule_proj}}</td>
                        <td>


                            @foreach(App\Bwilaya::all() as $dd)
                            @if($dd->CODE_Wilaya== $use->CodeWilaya )

                            <span class="label label-warning"> {{$dd->nom_wilaya}}</span>
                            @endif
                            @endforeach</td>
                       
                       
                        <td>

                            {{$use->bureau_etud}}

                        </td>
                        <td> <span class="label bg-green"> {{$use->MaitreOuvrage}}</span></td>

                  

                        <td>{{$use->laboratoire}}</td>


                        <td>    <a href="{{ route('boncom.showPDF', $use->code) }}" 
                            target="_blank" role="button"class="btn btn-success btn-outline-success"
                            data-container="body" data-toggle="popover" title="Imprimer">
                            <i class="icofont icofont-printer"></i></button>
                            @if($use->docSig === '1')
                            <a href="{{  asset('documentsigne/'.$use->docSig)}}.pdf" 
                                role="button" class="btn btn-warning btn-outline-warning" 
                                data-container="body" data-toggle="popover"
                                 title="Téléverser document scanné" data-placement="bottom"
                                  data-content=""><i class="icofont icofont-file-document"></i></a>
                            @else
                            <a href="{{ url('chargerdocument',$use->code)}}"  role="button"
                                 class="btn btn-warning btn-outline-warning"
                                  data-container="body" data-toggle="popover" 
                                  title="Téléverser document scanné" data-placement="bottom" data-content=""><i class="icofont icofont-file-document"></i></a> @endif 
                            <a href="{{asset('documentsigne/'.$use->docSig)}}.pdf"target="_blank" role="button" class="btn btn-warning btn-outline-warning" data-container="body" data-toggle="popover" title="Visualisation document" data-placement="bottom" data-content=""><i class="icofont icofont-eye-alt"></i></a>
                                <a href="{{ route('documentsigneEnvoyer', $use->code) }}" role="button"class="btn btn-success btn-outline-success" data-container="body" data-toggle="popover" title="Envoyer" data-placement="bottom" data-content=""><i class="icofont icofont-send-mail"></i></a>
                                <!--   <a href="#" role="button"class="btn btn-warning btn-outline-warning"data-container="body" data-toggle="popover" title="charger le dossier Architecture" data-placement="bottom" data-content=""><i class="icofont icofont-file-zip"></i></a>
                                        <a href="#" role="button"class="btn btn-warning btn-outline-warning" data-container="body" data-toggle="popover" title="charger le dossier Génie Civil" data-placement="bottom" data-content=""><i class="icofont icofont-file-zip"></i></a>
                                       -->  <a href="{{ url('DetaillProjet',$use->code)}}" role="button" class="btn btn-warning btn-outline-warning" data-container="body" data-toggle="popover" title="Détails projet" data-placement="bottom" data-content=""><i class="icofont icofont-eye-alt"></i></a>
                           </td>
                    </tr>
                    @endforeach


                    @else
                    <div data-item-id="16437222" class="results-item">
                        <h1 style="color: #ff9600;"> AUCUN BON DE COMMANDE TROUVÉE
                    </div>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>










@endsection

@push('page-scripts')




@endpush