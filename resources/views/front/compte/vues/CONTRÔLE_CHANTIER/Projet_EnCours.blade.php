@extends('front.layoutsDatable.master')
@section('title'.'laravel')
@section('content')


<div class="card">
    <div class="card-header">
        <h5>PROJETS EN COURS</h5>
       
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
               
                <li><i class="icofont icofont-refresh reload-card"></i></li>
              
            </ul>
        </div>

       




    </div>
    <div class="table-responsive">
        <div class="dt-responsive table-responsive">
            <table id="new-cons" class="table table-striped table-bordered nowrap">
                <thead>
                    <tr>
                      
                        <th>Intitulé du projet </th>
                        <th>Commune</th>
                        <th>Wilaya</th>
                        <th>N  Convention</th>
                        <th>Taux d'avancement <br> contrôle chantier</th>
                        <th>Début des travaux</th>
                       
                    
                    </tr>
                </thead>
                <tbody>
                    @if($ProjetEnCours->count()>0)
                    @foreach($ProjetEnCours as $ProjetEnCour)
                    <tr>
                       
                        <td>{{ $ProjetEnCour->IntituleAffaire}}</td>
                        <td>{{ $ProjetEnCour->commune}}</td>
                        <td> <span class="label bg-warning"> {{ $ProjetEnCour->nom_wilaya}} </span></td>
                        <td>{{ $ProjetEnCour->Code_Affaire}}</td>
                        <td class="browser-card b-t-default p-t-15 p-b-15 ">@if($ProjetEnCour->TauxAvancementChantier > 50 )
                            <button class="btn bg-c-green btn-round float-center btn-browser ">{{ $ProjetEnCour->TauxAvancementChantier}}%</button></td>
                            @elseif($ProjetEnCour->TauxAvancementChantier <= 50 )
                          
                            <button class="btn bg-c-yellow btn-round float-center btn-browser  ">{{ $ProjetEnCour->TauxAvancementChantier}}%</button></td>
                             @endif</td>
                            <td>{{ $ProjetEnCour->ddeb_chantier}} </td>
                    </tr>
                   
                   @endforeach  
                   @else
                   <div data-item-id="16437222" class="results-item">
                       <h1 style="color: #ff9600;"> AUCUN dossier TROUVÉE
                   </div>
                   @endif
                  
                
                </tbody> 
            </table><br>
        </div>
        <div class="dataTables_paginate paging_simple_numbers" id="e-product-list_paginate">{{ $ProjetEnCours->links() }}</div>
    </div>
</div>












@endsection

@push('page-scripts')

>


@endpush