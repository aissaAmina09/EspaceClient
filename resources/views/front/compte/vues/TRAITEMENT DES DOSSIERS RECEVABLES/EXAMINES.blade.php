

@extends('front.layoutsfront.master')

@section('content')






<div class="card">
    <div class="card-header">
        <h5>(Dossier recevable, dernier rapport de contrôle validé)</h5>
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
               
                <li><i class="icofont icofont-refresh reload-card"></i></li>
              
            </ul>
        </div> <div class="row">
            <div class="col-lg-8">
            <div class="card">
                          
                           <div class="card-body">
                               <div class="basic-form">
                                   <form action="{{route('filterEXAMINES')}}"method="POST"enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row align-items-center">
                                        <div class="form-group col-md-4">
                                            <label >N Convention</label>
                                            <input type="text" class="form-control mb-2" name="NConvention" placeholder=" Recherche par N Convention ">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label >Intitulé du projet</label>
                                            <input type="text" class="form-control mb-2" name="IntituleAffaire" placeholder=" Recherche par Intitulé du projet	 ">
                                        </div>
                                        
                                   <div class="col-12">
                                    <button type="submit"   class="btn btn-success">Rechercher</button> 
<a class="btn btn-success" href="/EXAMINES" role="button">  Réinitialiser</a>
                                    </div>
                                   </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
    </div>
    </div>
    <div class="card-block table-border-style">
        <div class="dt-responsive table-responsive">
            <table id="new-cons" class="table table-striped table-bordered nowrap">
                <thead>
                    <tr>
                        
                       
                        <th >Intitulé du projet </th>
                        <th>Commune</th>
                        <th>Wilaya</th>
                        <th>N  Convention</th>
                        <th>Taux d'avancement Contrôle plan</th>
                            <th>Date Bordereau</th>
                                <th>N Bordereau</th>
                                    <th>N rapport contrôle </th>
                                        <th>Date rapport contrôle </th>
                                            <th>Ref rapport contrôle  </th>
                       
                      
                    </tr>
                </thead>
                <tbody>
                    @if($EXAMINES->count()>0)
                    @foreach($EXAMINES as $EXAMINE)
                    <tr>
                    
                        
                        <th>{{ $EXAMINE->IntituleAffaire}} </th>
                        <th>{{ $EXAMINE->commune}}</th>
                        <td><span class="label bg-warning">{{ $EXAMINE->nom_wilaya}}</span></td>
                        <td>{{ $EXAMINE->Code_Affaire}}</td>
                       
                        <td class="browser-card b-t-default p-t-15 p-b-15 ">@if($EXAMINE->TauxAvancementPlan > 50 )
                            <button class="btn bg-c-green btn-round float-center btn-browser ">{{ $EXAMINE->TauxAvancementPlan}}%</button></td>
                            @elseif($EXAMINE->TauxAvancementPlan <= 50 )
                          
                            <button class="btn bg-c-yellow btn-round float-center btn-browser  ">{{ $EXAMINE->TauxAvancementPlan}}%</button></td>
                             @endif</td>
                             <td>{{ $EXAMINE->DateDepot}}</td>
                        <td>{{ $EXAMINE->NumBordereau}}</td>
                 
                        <td>{{ $EXAMINE->NumCtrlExecution}}</td>
                        <td> {{ $EXAMINE->NumCtrlConception}}</td>
                        
                                <td>{{ $EXAMINE->RefNumeroRCT}}</td>
                              
                    </tr>
                   
                   @endforeach
                   @else
                   <div data-item-id="16437222" class="results-item">
                       <h1 style="color: #ff9600;"> AUCUN dossier TROUVÉE
                   </div>
                   @endif
                </tbody>
            </table>
        </div><div class="dataTables_paginate paging_simple_numbers" id="e-product-list_paginate">{{ $EXAMINES->links() }}</div>
    </div>
</div>





@endsection

@push('page-scripts')




@endpush