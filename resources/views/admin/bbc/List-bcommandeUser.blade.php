@extends('admin.layoutadmin.master')
@section('title'.'laravel')
@section('content')











<div class="page-body">


    <div class="card">
        <div class="card-header">
            <h5>Client</h5>
            <span> fhfgh
</span>
            <div class="card-header-right">  
                  <ul class="list-unstyled card-option">    
                    <li><i class="icofont icofont-simple-left "></i></li>   
                        
                                
                                  <li><i class="icofont icofont-refresh reload-card"></i></li>      
                                    
                 </ul>
                </div>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Client</th>
                                                        <th>intitule_proj</th>
                                                        <th>CodeWilaya</th>
                                                        <th>CodeCommune</th>
                                                        <th>adress_proj</th>
                                                        <th>bureau_etud</th>

                                                        <th>maitre_oeuv</th>
                                                        <th>laboratoire</th>
                                                        <th>Date de création</th>
                                                        <th>Dossier Architecture</th>
                                                        <th>Dossier Génie Civil</th>
                                                        <th>Détails</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        @if($bcommande->count()>0)

                                                    @foreach($bcommande as $use)
                                                    <tr>
                                                        <td>

                                                            @foreach(App\User::all() as $roleb)

                                                            @if($roleb['id']== $use['client_id'] )

                                                            {{$roleb->Nom}} /{{$roleb->Prenom}}
                                                            @endif
                                                            @endforeach


                                                        </td>


                                                        <td>{{$use->intitule_proj}}</td>
                                                        <td>

                                                            <?php 
                                             $wilaya = '%'.$use->CodeWilaya.'%';
      $str = substr($wilaya, 1,2); ?>

                                                            @foreach(App\Bwilaya::all() as $dd)
                                                            @if($dd['CODE_Wilaya']== $str )

                                                            <span class="label bg-green"> {{$dd->nom_wilaya}}</span>
                                                            @endif
                                                            @endforeach</td>
                                                        <td>

                                                            @foreach(App\Bcommune::all() as $roleb)

                                                            @if($roleb['ccom']== $use['CodeCommune'] )

                                                            <span class="label bg-green"> {{$roleb->commune}}</span>
                                                            @endif
                                                            @endforeach
                                                        </td>
                                                        <td>

                                                            {{$use->adress_proj}}


                                                        </td>
                                                        <td>

                                                            {{$use->bureau_etud}}

                                                        </td>
                                                        <td> <span class="label bg-green"> {{$use->maitre_oeuv}}</span>
                                                        </td>

                                                        <td><span class="label label-warning">
                                                                {{$use->IngControlleSite}}</span></td>

                                                        <td>{{$use->laboratoire}}</td>

                                                        <td> <a href="{{ route('DossierArchitecture', $use->code) }}"
                                                         >Lien1</a></td>

                                                     <td><a href="{{ route('Dossiergeniecivil', $use->code) }}"
                                                        >Lien2</a></td>


                                                        <td>
                                                            <a href="{{ route('boncom.showPDF', $use->code) }}"
                                                                class="btn btn-success" target="_blank"><i class="icofont icofont-eye-alt"></i> </a>
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
