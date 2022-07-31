

@extends('front.layoutsDatable.master')
@section('title'.'laravel')
@section('content')







<div class="card">
    <div class="card-header">
        <h5>(Dossier recevable, 1er rapport de contrôle non entamé)</h5>
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
               
                <li><i class="icofont icofont-refresh reload-card"></i></li>
              
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-8">
            <div class="card">
                          
                           <div class="card-body">
                               <div class="basic-form">
                                   <form action="{{route('filterTraitement')}}"method="POST"enctype="multipart/form-data">
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
<a class="btn btn-success" href="/Traitement" role="button">  Réinitialiser</a>
                                    </div>
                                   </form>
                                </div>
                            </div>


                        </div>
                    </div>
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
                   
                                    <th>N rapport contrôle </th>
                                        <th>Date rapport contrôle </th>
                                        <th>Taux d'avancement Contrôle plan</th>
                           
                                          
                      
                    </tr>
                </thead>
                <tbody>
                    @if($Traitements->count()>0)
                    @foreach($Traitements as $Traitement)
                    <tr>
                        <th>{{ $Traitement->IntituleAffaire}}</th>
                        <th>{{ $Traitement->commune}}</th>
                        <td><span class="label bg-warning">{{ $Traitement->nom_wilaya}}</span></td>
                        <td>{{ $Traitement->Code_Affaire}}</td>
                        <td>/</td>
                        <td>/</td>
                        <td>/</td>
                        
                    </tr>
                   
                   @endforeach
                   @else
                   <div data-item-id="16437222" class="results-item">
                       <h1 style="color: #ff9600;"> AUCUN dossier TROUVÉE
                   </div>
                   @endif
                </tbody>
            </table>
        </div><div class="dataTables_paginate paging_simple_numbers" id="e-product-list_paginate">{{ $Traitements->links() }}</div>
    </div>
</div>





@endsection

@push('page-scripts')




@endpush