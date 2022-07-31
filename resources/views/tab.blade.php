@extends('front.layoutsDatable.master')
@section('title'.'laravel')
@section('content')
<body>
    <!-- Pre-loader start -->
   
    <!-- Pre-loader end -->

  
                            <!-- Main-body start -->
                      
                                    <!-- Page-header end -->
                                    
                                    <div class="page-body">
                                        <!-- Config. table start -->
                                        <div class="card">
                                           
                                            <div class="card-block">
                                                <div class="table-responsive">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="new-cons" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>Intitulé du projet </th>
                                                                    <th>Commune</th>
                                                                    <th>Wilaya</th>
                                                                    <th>N  Convention</th>
                                                                    <th>Taux d'avancement</br> Contrôle plan</th>
                                                                        <th>Date Bordereau</th>
                                                                            <th>N</br> Bordereau</th>
                                                                                <th>N rapport contrôle </th>
                                                                                    <th>Date rapport contrôle </th>
                                                                                        <th>Ref rapport contrôle  </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               @if($EXAMINES->count()>0)
                    @foreach($EXAMINES as $EXAMINE)
                    <tr>
                    
                        
                        <td> <?php  echo $txt = $EXAMINE->IntituleAffaire.PHP_EOL; ?> </td>
                        <td>{{ $EXAMINE->commune}}</td>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <!-- Config. table end -->
                                       
                                       
                                        <!-- Immediately Show Hidden Details table end -->
                                    </div>
                                </div>
                            </div>
                            <!-- Warning Section Starts -->
                           




    @endsection

    @push('page-scripts')
    
    
    
    
    @endpush