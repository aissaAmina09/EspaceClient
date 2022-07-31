@extends('front.layoutsDatable.master')
@section('title'.'laravel')
@section('content')










<div class="card">
    <div class="card-header">
        <h5>DOSSIERS NON RECEVABLES</h5>
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
                                   <form action="{{route('filterNonrecevable')}}"method="POST"enctype="multipart/form-data">
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
<a class="btn btn-success" href="/NonRecevable" role="button">  Réinitialiser</a>
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
            <table id="new-cons" class="table table-striped table-bordered nowrap" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th>N  Convention</th>
                        <th>Intitulé du projet </th>
                        <th>Commune</th>
                        <th>Wilaya</th>
                       
                        <th>Date de dépot de la demande</th>
                    </tr>
                </thead>
                <tbody>
                    @if($nonrecevables->count()>0)
                    @foreach($nonrecevables as $nonrecevable)
                    <tr>
                        <th scope="row">1</th>
                        <td >{{ $nonrecevable->Code_Affaire}}</td>
                        <td >{{ $nonrecevable->IntituleAffaire}}</td>
                        <td >{{ $nonrecevable->commune}}</td>
                        <td ><span class="label bg-warning">{{ $nonrecevable->nom_wilaya}}</span></td>
                        
                        <td>{{ \Carbon\Carbon::parse($nonrecevable->dent_dem)->format('Y- m-d') }}</td>
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

<script>

window.onload = () => {
    console.log("ok");
    document.querySelector('#new-cons').style.cssText = `
    border: 1px solid black !important; width: 100% !important; word-wrap:break-word !important;
table-layout: fixed !important;
`
}


</script>





@endsection

@push('page-scripts')




@endpush