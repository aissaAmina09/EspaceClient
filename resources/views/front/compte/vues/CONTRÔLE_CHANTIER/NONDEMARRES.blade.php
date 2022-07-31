@extends('front.layoutsDatable.master')
@section('title'.'laravel')
@section('content')







<div class="card">
    <div class="card-header">
        <h5>PROJETS NON DEMARRÉS</h5>
       
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
                        <th>N  Convention</th>
                        <th>Intitulé du projet </th>
                        <th>Commune</th>
                        <th>Wilaya</th>
                       
                    
                    </tr>
                </thead>
                <tbody>
                    @if($NONDEMARRES->count()>0)
                    @foreach($NONDEMARRES as $NONDEMARRE)
                    <tr>
                        <td>{{ $NONDEMARRE->Code_Affaire}}</td>
                        <td>{{ $NONDEMARRE->IntituleAffaire}}</td>
                        <td>{{ $NONDEMARRE->commune}}</td>
                        <td>{{ $NONDEMARRE->nom_wilaya}}</td>
                        
                        
                    </tr>
                   
                   @endforeach
                   @else
                   <div data-item-id="16437222" class="results-item">
                       <h1 style="color: #ff9600;"> AUCUN dossier TROUVÉE
                   </div>
                   @endif
                </tbody>
            </table>
        </div> <div class="dataTables_paginate paging_simple_numbers" id="e-product-list_paginate">{{ $NONDEMARRES->links() }}</div>
    </div>
</div>






@endsection

@push('page-scripts')




@endpush