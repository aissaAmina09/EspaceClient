@extends('front.layoutsfront.master')

@section('content')










<div class="card">
    <div class="card-header">
        <h5>PROJETS À L'ARRÊT</h5>
       
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
               
                <li><i class="icofont icofont-refresh reload-card"></i></li>
              
            </ul>
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        
                        <th>Intitulé du projet </th>
                        <th>Commune</th>
                        <th>Wilaya</th>
                        <th>N  Convention</th>
                        <th>Taux d'avancement  <br>  contrôle chantier</th>
                        <th>Début des travaux</th>
                       
                    
                    </tr>
                </thead>
                <tbody>
                    @if($Projet_Arrets->count()>0)
                    @foreach($Projet_Arrets as $Projet_Arret)
                    <tr>
                        
                        <td>{{ $Projet_Arret->IntituleAffaire}}</td>
                        <td>{{ $Projet_Arret->commune}}</td>
                        <td> <span class="label bg-warning">{{ $Projet_Arret->nom_wilaya}}</span></td>
                        <td>{{ $Projet_Arret->Code_Affaire}}</td>
                        <td class="browser-card b-t-default p-t-15 p-b-15 ">@if($Projet_Arret->TauxAvancementChantier > 50 )
                            <button class="btn bg-c-green btn-round float-center btn-browser ">{{ $Projet_Arret->TauxAvancementChantier}}%</button></td>
                            @elseif($Projet_Arret->TauxAvancementChantier <= 50 )
                          
                            <button class="btn bg-c-yellow btn-round float-center btn-browser  ">{{ $Projet_Arret->TauxAvancementChantier}}%</button></td>
                             @endif</td>
                             <td>{{ $Projet_Arret->ddeb_chantier}} </td>

                        
                    </tr>
                   
                   @endforeach
                   @else
                   <div data-item-id="16437222" class="results-item">
                       <h1 style="color: #ff9600;"> AUCUN dossier TROUVÉE
                   </div>
                   @endif
                </tbody>
            </table>
        </div>
    </div>
</div>












@endsection

@push('page-scripts')




@endpush