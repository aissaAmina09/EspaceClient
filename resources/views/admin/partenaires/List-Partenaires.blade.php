@include('admin.layouts.headn')
<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
       
        <!-- ========== App Menu ========== -->
        @include('admin.layouts.headern')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid"><!-- start page title -->
                   <div class="row">

                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Customers</h4>
    
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Customers</li>
                                        </ol>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card" id="customerList">
                                    <div class="card-header border-bottom-dashed">
    
                                        <div class="row g-4 align-items-center">
                                            <div class="col-sm">
                                                <div>
                                                    <h5 class="card-title mb-0">Customer List</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto">
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body border-bottom-dashed border-bottom">
                                        <form>
                                            <div class="row g-3">
                                                <div class="col-xl-6">
                                                    <div class="search-box">
                                                        <input type="text" class="form-control search" placeholder="Search for customer, email, phone, status or something...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xl-6">
                                                    <div class="row g-3">
                                                        <div class="col-sm-4">
                                                            <div class="">
                                                                <input type="text" class="form-control flatpickr-input" id="datepicker-range" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" placeholder="Select date" readonly="readonly">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-sm-4">
                                                            <div>
                                                                <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-control choices__input" data-plugin="choices" data-choices="" data-choices-search-false="" name="choices-single-default" id="idStatus" hidden="" tabindex="-1" data-choice="active"><option value="all" data-custom-properties="[object Object]">All</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="all" data-custom-properties="[object Object]" aria-selected="true">All</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--idStatus-item-choice-4" class="choices__item choices__item--choice choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="4" data-value="" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Status</div><div id="choices--idStatus-item-choice-1" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="1" data-value="Active" data-select-text="Press to select" data-choice-selectable="">Active</div><div id="choices--idStatus-item-choice-2" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="2" data-value="all" data-select-text="Press to select" data-choice-selectable="">All</div><div id="choices--idStatus-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Block" data-select-text="Press to select" data-choice-selectable="">Block</div></div></div></div>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
    
                                                        <div class="col-sm-4">
                                                            <div>
                                                                <button type="button" class="btn btn-primary w-100" onclick="SearchData();"> <i class="ri-equalizer-fill me-2 align-bottom"></i>Filters</button>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <div class="table-responsive table-card mb-1">
                                                <table class="table align-middle" id="customerTable">
                                                    <thead class="table-light text-muted">
                                                        <tr>
                                                            <th scope="col" style="width: 50px;">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                                </div>
                                                            </th>
    
                                                            <th class="sort" data-sort="customer_name">Nom</th>
                                                            <th class="sort" data-sort="email">Qualite</th>
                                                            <th class="sort" data-sort="phone">Type</th>
                                                            <th class="sort" data-sort="date">Wilaya </th>
                                                            <th class="sort" data-sort="status">Commune</th>
                                                            <th class="sort" data-sort="action">Raisonsocial</th>
                                                            <th class="sort" data-sort="phone">Telephone <br>Fax </th>
                                                            <th class="sort" data-sort="status">Compte_email</th>
                                                            <th class="sort" data-sort="status">Compte</th>
                                                            <th class="sort" data-sort="status">Bon de commande</th>
                                                            <th class="sort" data-sort="status">Date de création</th>
                                                            <th class="sort" data-sort="status">Détails</th>
                                                            <th class="sort" data-sort="status">désactivé</th>
                                                            
     </tr>
                                                    </thead>
                                                    <tbody class="list form-check-all">
                                                        @if($users->count()>0)

                                                        @foreach($users as $use)
                                                        <tr>
                                                            <th scope="row">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                                </div>
                                                            </th>
                                                            <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ10</a></td>
                                                            <td class="customer_name">{{$use->Nom}}</td>
                                                            <td class="email">{{$use->Qualite}}</td>
                                                            <td class="phone">  @if($use->type==1)BureauEtude
                                                                @elseif($use->type==3) Bmaitre
                                                                @elseif($use->type==2)Laboratoir
                                                                @endif</td>
                                                            <td class="date"> @foreach(App\Bwilaya::where('CODE_Wilaya','=',$use->wilaya)->get() as $dd){{$dd->nom_wilaya}}  @endforeach</td>
                                                               
                                                            <td class="status"><span class="badge badge-soft-success text-uppercase">@foreach(App\Bcommune::where('ccom','=',$use->commune)->get() as $roleb) {{$roleb->commune}} @endforeach</span></td>
                                                            <td class=""><span class="">{{$use->Raisonsocial}}</span></td>
                                                            <td class=""><span class="">{{$use->Telephone}}<br>{{$use->Fax}}</span></td>
                                                            <td class=""><span class="">{{$use->email}}</span></td>
                                                            <td class=""><span class="badge badge-soft-success text-uppercase"> 
                                                                 @if($use->is_activated)   Actif
                                                                @else
                                                                Inactifs
                                                                @endif</td>
                                                            <td class="status"><span class="badge badge-soft-success text-uppercase">{{ App\B_bcommande::where('client_id', $use->id)->count() }}</span></td>
                                                         
                                                           <td class="">{{$use->created_at->format('d M Y') }}</td>
                                                           <td> <a href="{{ route('boncom.show', $use->id) }}"
                                                            class="btn btn-success"><i class="icofont icofont-eye-alt"></i> </a></td>
                                                            <td>
                                                                <ul class="list-inline hstack gap-2 mb-0">
                                                                  
                                                                    <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                        <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                            <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>   @endforeach
         

                                                        @else
                                                        <div data-item-id="16437222" class="results-item">
                                                            <h1 style="color: #ff9600;"> AUCUN BON DE COMMANDE TROUVÉE
                                                        </div>
                                                        @endif</tbody>
                                                </table>
                                                <div class="noresult" style="display: none">
                                                    <div class="text-center">
                                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                                        <p class="text-muted mb-0">We've searched more than 150+ customer We did not find any customer for you search.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <div class="pagination-wrap hstack gap-2" style="display: flex;">
                                                    <a class="page-item pagination-prev disabled" href="#">
                                                        Previous
                                                    </a>
                                                    <ul class="pagination listjs-pagination mb-0"><li class="active"><a class="page" href="#" data-i="1" data-page="8">1</a></li><li><a class="page" href="#" data-i="2" data-page="8">2</a></li></ul>
                                                    <a class="page-item pagination-next" href="#">
                                                        Next
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        
    
                                        <!-- Modal -->
                                        <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mt-2 text-center">
                                                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                                <h4>Are you sure ?</h4>
                                                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this record ?</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn w-sm btn-danger" id="delete-record">Yes, Delete It!</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end modal -->
                                    </div>
                                </div>
    
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
    
                    </div>
    
    </div>
    
    
   










    @include('admin.layouts.footern')