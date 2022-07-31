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
                        <div class="container-fluid">

                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                        <h4 class="mb-sm-0">Projects</h4>
        
                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                                <li class="breadcrumb-item active">Projects</li>
                                            </ol>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                            <!-- end page title -->
        
                            <div class="row project-wrapper">
                                <div class="col-xxl-8">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="card card-animate">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase text-primary"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden ms-3">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Active Projects</p>
                                                            <div class="d-flex align-items-center mb-3">
                                                                <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="825">825</span></h4>
                                                                <span class="badge badge-soft-danger fs-12"><i class="ri-arrow-down-s-line fs-13 align-middle me-1"></i>5.02 %</span>
                                                            </div>
                                                            <p class="text-muted text-truncate mb-0">Projects this month</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end card body -->
                                            </div>
                                        </div>
                                        <!-- end col -->
        
                                        <div class="col-xl-4">
                                            <div class="card card-animate">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-warning text-warning rounded-2 fs-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award text-warning"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <p class="text-uppercase fw-medium text-muted mb-3">New Leads</p>
                                                            <div class="d-flex align-items-center mb-3">
                                                                <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="7522">7,522</span></h4>
                                                                <span class="badge badge-soft-success fs-12"><i class="ri-arrow-up-s-line fs-13 align-middle me-1"></i>3.58 %</span>
                                                            </div>
                                                            <p class="text-muted mb-0">Leads this month</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end card body -->
                                            </div>
                                        </div>
                                        <!-- end col -->
        
                                        <div class="col-xl-4">
                                            <div class="card card-animate">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm flex-shrink-0">
                                                            <span class="avatar-title bg-soft-info text-info rounded-2 fs-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock text-info"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden ms-3">
                                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Total Hours</p>
                                                            <div class="d-flex align-items-center mb-3">
                                                                <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="168">168</span>h <span class="counter-value" data-target="40">40</span>m</h4>
                                                                <span class="badge badge-soft-danger fs-12"><i class="ri-arrow-down-s-line fs-13 align-middle me-1"></i>10.35 %</span>
                                                            </div>
                                                            <p class="text-muted text-truncate mb-0">Work this month</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end card body -->
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
        
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-header border-0 align-items-center d-flex">
                                                    <h4 class="card-title mb-0 flex-grow-1">Projects Overview</h4>
                                                    <div>
                                                        <button type="button" class="btn btn-soft-secondary btn-sm">
                                                            ALL
                                                        </button>
                                                        <button type="button" class="btn btn-soft-secondary btn-sm">
                                                            1M
                                                        </button>
                                                        <button type="button" class="btn btn-soft-secondary btn-sm">
                                                            6M
                                                        </button>
                                                        <button type="button" class="btn btn-soft-primary btn-sm">
                                                            1Y
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- end card header -->
        
                                                <div class="card-header p-0 border-0 bg-soft-light">
                                                    <div class="row g-0 text-center">
                                                        <div class="col-6 col-sm-3">
                                                            <div class="p-3 border border-dashed border-start-0">
                                                                <h5 class="mb-1"><span class="counter-value" data-target="9851">9,851</span></h5>
                                                                <p class="text-muted mb-0">Number of Projects</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-6 col-sm-3">
                                                            <div class="p-3 border border-dashed border-start-0">
                                                                <h5 class="mb-1"><span class="counter-value" data-target="1026">1,026</span></h5>
                                                                <p class="text-muted mb-0">Active Projects</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-6 col-sm-3">
                                                            <div class="p-3 border border-dashed border-start-0">
                                                                <h5 class="mb-1">$<span class="counter-value" data-target="228.89">228.89</span>k</h5>
                                                                <p class="text-muted mb-0">Revenue</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-6 col-sm-3">
                                                            <div class="p-3 border border-dashed border-start-0 border-end-0">
                                                                <h5 class="mb-1 text-success"><span class="counter-value" data-target="10589">10,589</span>h</h5>
                                                                <p class="text-muted mb-0">Working Hours</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                </div>
                                                <!-- end card header -->
                                                <div class="card-body p-0 pb-2">
                                                    <div>
                                                        <div id="projects-overview-chart" data-colors="[&quot;--vz-primary&quot;, &quot;--vz-warning&quot;, &quot;--vz-success&quot;]" dir="ltr" class="apex-charts" style="min-height: 389px;"><div id="apexchartsurim8vox" class="apexcharts-canvas apexchartsurim8vox apexcharts-theme-light" style="width: 1161px; height: 374px;"><svg id="SvgjsSvg1810" width="1161" height="374" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="1161" height="374"><div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 10px 20px; position: absolute; max-height: 187px;"><div class="apexcharts-legend-series" rel="1" seriesname="NumberxofxProjects" data:collapsed="false" style="margin: 0px 10px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(64, 81, 137) !important; color: rgb(64, 81, 137); height: 9px; width: 9px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 6px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Number%20of%20Projects" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Number of Projects</span></div><div class="apexcharts-legend-series" rel="2" seriesname="Revenue" data:collapsed="false" style="margin: 0px 10px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(247, 184, 75) !important; color: rgb(247, 184, 75); height: 9px; width: 9px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 6px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Revenue" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Revenue</span></div><div class="apexcharts-legend-series" rel="3" seriesname="ActivexProjects" data:collapsed="false" style="margin: 0px 10px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(10, 179, 156) !important; color: rgb(10, 179, 156); height: 9px; width: 9px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 6px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Active%20Projects" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Active Projects</span></div></div><style type="text/css">	
                
              .apexcharts-legend {	
                display: flex;	
                overflow: auto;	
                padding: 0 10px;	
              }	
              .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {	
                flex-wrap: wrap	
              }	
              .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
                flex-direction: column;	
                bottom: 0;	
              }	
              .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
                justify-content: flex-start;	
              }	
              .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {	
                justify-content: center;  	
              }	
              .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {	
                justify-content: flex-end;	
              }	
              .apexcharts-legend-series {	
                cursor: pointer;	
                line-height: normal;	
              }	
              .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{	
                display: flex;	
                align-items: center;	
              }	
              .apexcharts-legend-text {	
                position: relative;	
                font-size: 14px;	
              }	
              .apexcharts-legend-text *, .apexcharts-legend-marker * {	
                pointer-events: none;	
              }	
              .apexcharts-legend-marker {	
                position: relative;	
                display: inline-block;	
                cursor: pointer;	
                margin-right: 3px;	
                border-style: solid;
              }	
                  
              .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{	
                display: inline-block;	
              }	
              .apexcharts-legend-series.apexcharts-no-click {	
                cursor: auto;	
              }	
              .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {	
                display: none !important;	
              }	
              .apexcharts-inactive-legend {	
                opacity: 0.45;	
              }</style></foreignObject><g id="SvgjsG1812" class="apexcharts-inner apexcharts-graphical" transform="translate(81.78069957386364, 30)"><defs id="SvgjsDefs1811"><clipPath id="gridRectMaskurim8vox"><rect id="SvgjsRect1818" width="1097.5117187499998" height="268.303" x="-22.397887073863636" y="-0.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskurim8vox"></clipPath><clipPath id="nonForecastMaskurim8vox"></clipPath><clipPath id="gridRectMarkerMaskurim8vox"><rect id="SvgjsRect1819" width="1100.7159446022727" height="315.303" x="-24" y="-24" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1817" x1="0" y1="0" x2="0" y2="267.303" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="267.303" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1904" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1905" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1907" font-family="Helvetica, Arial, sans-serif" x="0" y="296.303" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1908">Jan</tspan><title>Jan</title></text><text id="SvgjsText1910" font-family="Helvetica, Arial, sans-serif" x="95.70144950929753" y="296.303" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1911">Feb</tspan><title>Feb</title></text><text id="SvgjsText1913" font-family="Helvetica, Arial, sans-serif" x="191.40289901859506" y="296.303" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1914">Mar</tspan><title>Mar</title></text><text id="SvgjsText1916" font-family="Helvetica, Arial, sans-serif" x="287.10434852789257" y="296.303" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1917">Apr</tspan><title>Apr</title></text><text id="SvgjsText1919" font-family="Helvetica, Arial, sans-serif" x="382.8057980371901" y="296.303" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1920">May</tspan><title>May</title></text><text id="SvgjsText1922" font-family="Helvetica, Arial, sans-serif" x="478.5072475464876" y="296.303" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1923">Jun</tspan><title>Jun</title></text><text id="SvgjsText1925" font-family="Helvetica, Arial, sans-serif" x="574.208697055785" y="296.303" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1926">Jul</tspan><title>Jul</title></text><text id="SvgjsText1928" font-family="Helvetica, Arial, sans-serif" x="669.9101465650825" y="296.303" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1929">Aug</tspan><title>Aug</title></text><text id="SvgjsText1931" font-family="Helvetica, Arial, sans-serif" x="765.61159607438" y="296.303" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1932">Sep</tspan><title>Sep</title></text><text id="SvgjsText1934" font-family="Helvetica, Arial, sans-serif" x="861.3130455836775" y="296.303" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1935">Oct</tspan><title>Oct</title></text><text id="SvgjsText1937" font-family="Helvetica, Arial, sans-serif" x="957.014495092975" y="296.303" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1938">Nov</tspan><title>Nov</title></text><text id="SvgjsText1940" font-family="Helvetica, Arial, sans-serif" x="1052.7159446022727" y="296.303" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1941">Dec</tspan><title>Dec</title></text></g></g><g id="SvgjsG1954" class="apexcharts-grid"><g id="SvgjsG1955" class="apexcharts-gridlines-horizontal"></g><g id="SvgjsG1956" class="apexcharts-gridlines-vertical"><line id="SvgjsLine1957" x1="0" y1="0" x2="0" y2="267.303" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1958" x1="95.70144950929752" y1="0" x2="95.70144950929752" y2="267.303" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1959" x1="191.40289901859504" y1="0" x2="191.40289901859504" y2="267.303" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1960" x1="287.10434852789257" y1="0" x2="287.10434852789257" y2="267.303" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1961" x1="382.8057980371901" y1="0" x2="382.8057980371901" y2="267.303" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1962" x1="478.5072475464876" y1="0" x2="478.5072475464876" y2="267.303" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1963" x1="574.2086970557851" y1="0" x2="574.2086970557851" y2="267.303" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1964" x1="669.9101465650826" y1="0" x2="669.9101465650826" y2="267.303" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1965" x1="765.6115960743801" y1="0" x2="765.6115960743801" y2="267.303" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1966" x1="861.3130455836776" y1="0" x2="861.3130455836776" y2="267.303" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1967" x1="957.0144950929752" y1="0" x2="957.0144950929752" y2="267.303" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1968" x1="1052.7159446022727" y1="0" x2="1052.7159446022727" y2="267.303" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><line id="SvgjsLine1970" x1="0" y1="267.303" x2="1052.7159446022727" y2="267.303" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1969" x1="0" y1="1" x2="0" y2="267.303" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1820" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1821" class="apexcharts-series" seriesName="Revenue" data:longestSeries="true" rel="1" data:realIndex="1"><path id="SvgjsPath1847" d="M 0 267.303L 0 68.49639374999998C 33.49550732825413 68.49639374999998 62.20594218104339 47.71358549999999 95.70144950929752 47.71358549999999C 129.19695683755165 47.71358549999999 157.90739169034092 114.1829315 191.40289901859504 114.1829315C 224.89840634684919 114.1829315 253.60884119963845 24.79235324999999 287.10434852789257 24.79235324999999C 320.5998558561467 24.79235324999999 349.31029070893595 94.58071149999998 382.8057980371901 94.58071149999998C 416.3013053654442 94.58071149999998 445.01174021823346 80.12407424999998 478.5072475464876 80.12407424999998C 512.0027548747418 80.12407424999998 540.713189727531 153.164619 574.2086970557851 153.164619C 607.7042043840393 153.164619 636.4146392368285 203.66261075 669.9101465650826 203.66261075C 703.4056538933368 203.66261075 732.116088746126 61.10101075 765.6115960743801 61.10101075C 799.1071034026343 61.10101075 827.8175382554235 172.945041 861.3130455836776 172.945041C 894.8085529119318 172.945041 923.518987764721 70.14476224999999 957.0144950929752 70.14476224999999C 990.5100024212293 70.14476224999999 1019.2204372740185 185.84241075 1052.7159446022727 185.84241075C 1052.7159446022727 185.84241075 1052.7159446022727 185.84241075 1052.7159446022727 267.303M 1052.7159446022727 185.84241075z" fill="rgba(153,153,153,0.1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="3" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 0 267.303L 0 68.49639374999998C 33.49550732825413 68.49639374999998 62.20594218104339 47.71358549999999 95.70144950929752 47.71358549999999C 129.19695683755165 47.71358549999999 157.90739169034092 114.1829315 191.40289901859504 114.1829315C 224.89840634684919 114.1829315 253.60884119963845 24.79235324999999 287.10434852789257 24.79235324999999C 320.5998558561467 24.79235324999999 349.31029070893595 94.58071149999998 382.8057980371901 94.58071149999998C 416.3013053654442 94.58071149999998 445.01174021823346 80.12407424999998 478.5072475464876 80.12407424999998C 512.0027548747418 80.12407424999998 540.713189727531 153.164619 574.2086970557851 153.164619C 607.7042043840393 153.164619 636.4146392368285 203.66261075 669.9101465650826 203.66261075C 703.4056538933368 203.66261075 732.116088746126 61.10101075 765.6115960743801 61.10101075C 799.1071034026343 61.10101075 827.8175382554235 172.945041 861.3130455836776 172.945041C 894.8085529119318 172.945041 923.518987764721 70.14476224999999 957.0144950929752 70.14476224999999C 990.5100024212293 70.14476224999999 1019.2204372740185 185.84241075 1052.7159446022727 185.84241075C 1052.7159446022727 185.84241075 1052.7159446022727 185.84241075 1052.7159446022727 267.303M 1052.7159446022727 185.84241075z" pathFrom="M -1 267.303L -1 267.303L 95.70144950929752 267.303L 191.40289901859504 267.303L 287.10434852789257 267.303L 382.8057980371901 267.303L 478.5072475464876 267.303L 574.2086970557851 267.303L 669.9101465650826 267.303L 765.6115960743801 267.303L 861.3130455836776 267.303L 957.0144950929752 267.303L 1052.7159446022727 267.303"></path><path id="SvgjsPath1848" d="M 0 68.49639374999998C 33.49550732825413 68.49639374999998 62.20594218104339 47.71358549999999 95.70144950929752 47.71358549999999C 129.19695683755165 47.71358549999999 157.90739169034092 114.1829315 191.40289901859504 114.1829315C 224.89840634684919 114.1829315 253.60884119963845 24.79235324999999 287.10434852789257 24.79235324999999C 320.5998558561467 24.79235324999999 349.31029070893595 94.58071149999998 382.8057980371901 94.58071149999998C 416.3013053654442 94.58071149999998 445.01174021823346 80.12407424999998 478.5072475464876 80.12407424999998C 512.0027548747418 80.12407424999998 540.713189727531 153.164619 574.2086970557851 153.164619C 607.7042043840393 153.164619 636.4146392368285 203.66261075 669.9101465650826 203.66261075C 703.4056538933368 203.66261075 732.116088746126 61.10101075 765.6115960743801 61.10101075C 799.1071034026343 61.10101075 827.8175382554235 172.945041 861.3130455836776 172.945041C 894.8085529119318 172.945041 923.518987764721 70.14476224999999 957.0144950929752 70.14476224999999C 990.5100024212293 70.14476224999999 1019.2204372740185 185.84241075 1052.7159446022727 185.84241075" fill="none" fill-opacity="1" stroke=" #f7b84b" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="3" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 0 68.49639374999998C 33.49550732825413 68.49639374999998 62.20594218104339 47.71358549999999 95.70144950929752 47.71358549999999C 129.19695683755165 47.71358549999999 157.90739169034092 114.1829315 191.40289901859504 114.1829315C 224.89840634684919 114.1829315 253.60884119963845 24.79235324999999 287.10434852789257 24.79235324999999C 320.5998558561467 24.79235324999999 349.31029070893595 94.58071149999998 382.8057980371901 94.58071149999998C 416.3013053654442 94.58071149999998 445.01174021823346 80.12407424999998 478.5072475464876 80.12407424999998C 512.0027548747418 80.12407424999998 540.713189727531 153.164619 574.2086970557851 153.164619C 607.7042043840393 153.164619 636.4146392368285 203.66261075 669.9101465650826 203.66261075C 703.4056538933368 203.66261075 732.116088746126 61.10101075 765.6115960743801 61.10101075C 799.1071034026343 61.10101075 827.8175382554235 172.945041 861.3130455836776 172.945041C 894.8085529119318 172.945041 923.518987764721 70.14476224999999 957.0144950929752 70.14476224999999C 990.5100024212293 70.14476224999999 1019.2204372740185 185.84241075 1052.7159446022727 185.84241075" pathFrom="M -1 267.303L -1 267.303L 95.70144950929752 267.303L 191.40289901859504 267.303L 287.10434852789257 267.303L 382.8057980371901 267.303L 478.5072475464876 267.303L 574.2086970557851 267.303L 669.9101465650826 267.303L 765.6115960743801 267.303L 861.3130455836776 267.303L 957.0144950929752 267.303L 1052.7159446022727 267.303"></path><g id="SvgjsG1822" class="apexcharts-series-markers-wrap" data:realIndex="1"><g id="SvgjsG1824" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskurim8vox)"><circle id="SvgjsCircle1825" r="4" cx="0" cy="68.49639374999998" class="apexcharts-marker wp1hrokc1h" stroke="#ffffff" fill=" #f7b84b" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="4"></circle><circle id="SvgjsCircle1826" r="4" cx="95.70144950929752" cy="47.71358549999999" class="apexcharts-marker wplj83tf" stroke="#ffffff" fill=" #f7b84b" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1827" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskurim8vox)"><circle id="SvgjsCircle1828" r="4" cx="191.40289901859504" cy="114.1829315" class="apexcharts-marker w8ahccl8b" stroke="#ffffff" fill=" #f7b84b" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1829" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskurim8vox)"><circle id="SvgjsCircle1830" r="4" cx="287.10434852789257" cy="24.79235324999999" class="apexcharts-marker w5qg58jc2i" stroke="#ffffff" fill=" #f7b84b" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1831" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskurim8vox)"><circle id="SvgjsCircle1832" r="4" cx="382.8057980371901" cy="94.58071149999998" class="apexcharts-marker wqb8r8l9l" stroke="#ffffff" fill=" #f7b84b" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1833" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskurim8vox)"><circle id="SvgjsCircle1834" r="4" cx="478.5072475464876" cy="80.12407424999998" class="apexcharts-marker wdvk92o2x" stroke="#ffffff" fill=" #f7b84b" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1835" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskurim8vox)"><circle id="SvgjsCircle1836" r="4" cx="574.2086970557851" cy="153.164619" class="apexcharts-marker wnojegdr1" stroke="#ffffff" fill=" #f7b84b" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1837" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskurim8vox)"><circle id="SvgjsCircle1838" r="4" cx="669.9101465650826" cy="203.66261075" class="apexcharts-marker wtm5s2ykt" stroke="#ffffff" fill=" #f7b84b" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="7" j="7" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1839" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskurim8vox)"><circle id="SvgjsCircle1840" r="4" cx="765.6115960743801" cy="61.10101075" class="apexcharts-marker whkcrxqqh" stroke="#ffffff" fill=" #f7b84b" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="8" j="8" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1841" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskurim8vox)"><circle id="SvgjsCircle1842" r="4" cx="861.3130455836776" cy="172.945041" class="apexcharts-marker welmhgn9v" stroke="#ffffff" fill=" #f7b84b" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="9" j="9" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1843" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskurim8vox)"><circle id="SvgjsCircle1844" r="4" cx="957.0144950929752" cy="70.14476224999999" class="apexcharts-marker whwnikg5si" stroke="#ffffff" fill=" #f7b84b" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="10" j="10" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1845" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskurim8vox)"><circle id="SvgjsCircle1846" r="4" cx="1052.7159446022727" cy="185.84241075" class="apexcharts-marker w2v1lgg7k" stroke="#ffffff" fill=" #f7b84b" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="11" j="11" index="1" default-marker-size="4"></circle></g></g></g></g><g id="SvgjsG1849" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1850" class="apexcharts-series" rel="1" seriesName="NumberxofxProjects" data:realIndex="0"><path id="SvgjsPath1854" d="M -14.355217426394626 267.303L -14.355217426394626 191.56715Q -14.355217426394626 191.56715 -14.355217426394626 191.56715L 0 191.56715Q 0 191.56715 0 191.56715L 0 191.56715L 0 267.303L 0 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskurim8vox)" pathTo="M -14.355217426394626 267.303L -14.355217426394626 191.56715Q -14.355217426394626 191.56715 -14.355217426394626 191.56715L 0 191.56715Q 0 191.56715 0 191.56715L 0 191.56715L 0 267.303L 0 267.303z" pathFrom="M -14.355217426394626 267.303L -14.355217426394626 267.303L 0 267.303L 0 267.303L 0 267.303L 0 267.303L 0 267.303L -14.355217426394626 267.303" cy="191.56715" cx="0" j="0" val="34" barHeight="75.73585" barWidth="14.355217426394626"></path><path id="SvgjsPath1856" d="M 81.34623208290289 267.303L 81.34623208290289 122.51387499999998Q 81.34623208290289 122.51387499999998 81.34623208290289 122.51387499999998L 95.70144950929752 122.51387499999998Q 95.70144950929752 122.51387499999998 95.70144950929752 122.51387499999998L 95.70144950929752 122.51387499999998L 95.70144950929752 267.303L 95.70144950929752 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 81.34623208290289 267.303L 81.34623208290289 122.51387499999998Q 81.34623208290289 122.51387499999998 81.34623208290289 122.51387499999998L 95.70144950929752 122.51387499999998Q 95.70144950929752 122.51387499999998 95.70144950929752 122.51387499999998L 95.70144950929752 122.51387499999998L 95.70144950929752 267.303L 95.70144950929752 267.303z" pathFrom="M 81.34623208290289 267.303L 81.34623208290289 267.303L 95.70144950929752 267.303L 95.70144950929752 267.303L 95.70144950929752 267.303L 95.70144950929752 267.303L 95.70144950929752 267.303L 81.34623208290289 267.303" cy="122.51387499999998" cx="95.70144950929752" j="1" val="65" barHeight="144.789125" barWidth="14.355217426394626"></path><path id="SvgjsPath1858" d="M 177.0476815922004 267.303L 177.0476815922004 164.83685Q 177.0476815922004 164.83685 177.0476815922004 164.83685L 191.40289901859504 164.83685Q 191.40289901859504 164.83685 191.40289901859504 164.83685L 191.40289901859504 164.83685L 191.40289901859504 267.303L 191.40289901859504 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 177.0476815922004 267.303L 177.0476815922004 164.83685Q 177.0476815922004 164.83685 177.0476815922004 164.83685L 191.40289901859504 164.83685Q 191.40289901859504 164.83685 191.40289901859504 164.83685L 191.40289901859504 164.83685L 191.40289901859504 267.303L 191.40289901859504 267.303z" pathFrom="M 177.0476815922004 267.303L 177.0476815922004 267.303L 191.40289901859504 267.303L 191.40289901859504 267.303L 191.40289901859504 267.303L 191.40289901859504 267.303L 191.40289901859504 267.303L 177.0476815922004 267.303" cy="164.83685" cx="191.40289901859504" j="2" val="46" barHeight="102.46615" barWidth="14.355217426394626"></path><path id="SvgjsPath1860" d="M 272.74913110149794 267.303L 272.74913110149794 115.8313Q 272.74913110149794 115.8313 272.74913110149794 115.8313L 287.10434852789257 115.8313Q 287.10434852789257 115.8313 287.10434852789257 115.8313L 287.10434852789257 115.8313L 287.10434852789257 267.303L 287.10434852789257 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 272.74913110149794 267.303L 272.74913110149794 115.8313Q 272.74913110149794 115.8313 272.74913110149794 115.8313L 287.10434852789257 115.8313Q 287.10434852789257 115.8313 287.10434852789257 115.8313L 287.10434852789257 115.8313L 287.10434852789257 267.303L 287.10434852789257 267.303z" pathFrom="M 272.74913110149794 267.303L 272.74913110149794 267.303L 287.10434852789257 267.303L 287.10434852789257 267.303L 287.10434852789257 267.303L 287.10434852789257 267.303L 287.10434852789257 267.303L 272.74913110149794 267.303" cy="115.8313" cx="287.10434852789257" j="3" val="68" barHeight="151.4717" barWidth="14.355217426394626"></path><path id="SvgjsPath1862" d="M 368.45058061079544 267.303L 368.45058061079544 158.15427499999998Q 368.45058061079544 158.15427499999998 368.45058061079544 158.15427499999998L 382.8057980371901 158.15427499999998Q 382.8057980371901 158.15427499999998 382.8057980371901 158.15427499999998L 382.8057980371901 158.15427499999998L 382.8057980371901 267.303L 382.8057980371901 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 368.45058061079544 267.303L 368.45058061079544 158.15427499999998Q 368.45058061079544 158.15427499999998 368.45058061079544 158.15427499999998L 382.8057980371901 158.15427499999998Q 382.8057980371901 158.15427499999998 382.8057980371901 158.15427499999998L 382.8057980371901 158.15427499999998L 382.8057980371901 267.303L 382.8057980371901 267.303z" pathFrom="M 368.45058061079544 267.303L 368.45058061079544 267.303L 382.8057980371901 267.303L 382.8057980371901 267.303L 382.8057980371901 267.303L 382.8057980371901 267.303L 382.8057980371901 267.303L 368.45058061079544 267.303" cy="158.15427499999998" cx="382.8057980371901" j="4" val="49" barHeight="109.148725" barWidth="14.355217426394626"></path><path id="SvgjsPath1864" d="M 464.15203012009295 267.303L 464.15203012009295 131.42397499999998Q 464.15203012009295 131.42397499999998 464.15203012009295 131.42397499999998L 478.5072475464876 131.42397499999998Q 478.5072475464876 131.42397499999998 478.5072475464876 131.42397499999998L 478.5072475464876 131.42397499999998L 478.5072475464876 267.303L 478.5072475464876 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 464.15203012009295 267.303L 464.15203012009295 131.42397499999998Q 464.15203012009295 131.42397499999998 464.15203012009295 131.42397499999998L 478.5072475464876 131.42397499999998Q 478.5072475464876 131.42397499999998 478.5072475464876 131.42397499999998L 478.5072475464876 131.42397499999998L 478.5072475464876 267.303L 478.5072475464876 267.303z" pathFrom="M 464.15203012009295 267.303L 464.15203012009295 267.303L 478.5072475464876 267.303L 478.5072475464876 267.303L 478.5072475464876 267.303L 478.5072475464876 267.303L 478.5072475464876 267.303L 464.15203012009295 267.303" cy="131.42397499999998" cx="478.5072475464876" j="5" val="61" barHeight="135.879025" barWidth="14.355217426394626"></path><path id="SvgjsPath1866" d="M 559.8534796293906 267.303L 559.8534796293906 173.74695Q 559.8534796293906 173.74695 559.8534796293906 173.74695L 574.2086970557851 173.74695Q 574.2086970557851 173.74695 574.2086970557851 173.74695L 574.2086970557851 173.74695L 574.2086970557851 267.303L 574.2086970557851 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 559.8534796293906 267.303L 559.8534796293906 173.74695Q 559.8534796293906 173.74695 559.8534796293906 173.74695L 574.2086970557851 173.74695Q 574.2086970557851 173.74695 574.2086970557851 173.74695L 574.2086970557851 173.74695L 574.2086970557851 267.303L 574.2086970557851 267.303z" pathFrom="M 559.8534796293906 267.303L 559.8534796293906 267.303L 574.2086970557851 267.303L 574.2086970557851 267.303L 574.2086970557851 267.303L 574.2086970557851 267.303L 574.2086970557851 267.303L 559.8534796293906 267.303" cy="173.74695" cx="574.2086970557851" j="6" val="42" barHeight="93.55605" barWidth="14.355217426394626"></path><path id="SvgjsPath1868" d="M 655.5549291386881 267.303L 655.5549291386881 169.2919Q 655.5549291386881 169.2919 655.5549291386881 169.2919L 669.9101465650826 169.2919Q 669.9101465650826 169.2919 669.9101465650826 169.2919L 669.9101465650826 169.2919L 669.9101465650826 267.303L 669.9101465650826 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 655.5549291386881 267.303L 655.5549291386881 169.2919Q 655.5549291386881 169.2919 655.5549291386881 169.2919L 669.9101465650826 169.2919Q 669.9101465650826 169.2919 669.9101465650826 169.2919L 669.9101465650826 169.2919L 669.9101465650826 267.303L 669.9101465650826 267.303z" pathFrom="M 655.5549291386881 267.303L 655.5549291386881 267.303L 669.9101465650826 267.303L 669.9101465650826 267.303L 669.9101465650826 267.303L 669.9101465650826 267.303L 669.9101465650826 267.303L 655.5549291386881 267.303" cy="169.2919" cx="669.9101465650826" j="7" val="44" barHeight="98.0111" barWidth="14.355217426394626"></path><path id="SvgjsPath1870" d="M 751.2563786479856 267.303L 751.2563786479856 93.55605Q 751.2563786479856 93.55605 751.2563786479856 93.55605L 765.6115960743801 93.55605Q 765.6115960743801 93.55605 765.6115960743801 93.55605L 765.6115960743801 93.55605L 765.6115960743801 267.303L 765.6115960743801 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 751.2563786479856 267.303L 751.2563786479856 93.55605Q 751.2563786479856 93.55605 751.2563786479856 93.55605L 765.6115960743801 93.55605Q 765.6115960743801 93.55605 765.6115960743801 93.55605L 765.6115960743801 93.55605L 765.6115960743801 267.303L 765.6115960743801 267.303z" pathFrom="M 751.2563786479856 267.303L 751.2563786479856 267.303L 765.6115960743801 267.303L 765.6115960743801 267.303L 765.6115960743801 267.303L 765.6115960743801 267.303L 765.6115960743801 267.303L 751.2563786479856 267.303" cy="93.55605" cx="765.6115960743801" j="8" val="78" barHeight="173.74695" barWidth="14.355217426394626"></path><path id="SvgjsPath1872" d="M 846.9578281572831 267.303L 846.9578281572831 151.4717Q 846.9578281572831 151.4717 846.9578281572831 151.4717L 861.3130455836776 151.4717Q 861.3130455836776 151.4717 861.3130455836776 151.4717L 861.3130455836776 151.4717L 861.3130455836776 267.303L 861.3130455836776 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 846.9578281572831 267.303L 846.9578281572831 151.4717Q 846.9578281572831 151.4717 846.9578281572831 151.4717L 861.3130455836776 151.4717Q 861.3130455836776 151.4717 861.3130455836776 151.4717L 861.3130455836776 151.4717L 861.3130455836776 267.303L 861.3130455836776 267.303z" pathFrom="M 846.9578281572831 267.303L 846.9578281572831 267.303L 861.3130455836776 267.303L 861.3130455836776 267.303L 861.3130455836776 267.303L 861.3130455836776 267.303L 861.3130455836776 267.303L 846.9578281572831 267.303" cy="151.4717" cx="861.3130455836776" j="9" val="52" barHeight="115.8313" barWidth="14.355217426394626"></path><path id="SvgjsPath1874" d="M 942.6592776665806 267.303L 942.6592776665806 126.96892499999998Q 942.6592776665806 126.96892499999998 942.6592776665806 126.96892499999998L 957.0144950929752 126.96892499999998Q 957.0144950929752 126.96892499999998 957.0144950929752 126.96892499999998L 957.0144950929752 126.96892499999998L 957.0144950929752 267.303L 957.0144950929752 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 942.6592776665806 267.303L 942.6592776665806 126.96892499999998Q 942.6592776665806 126.96892499999998 942.6592776665806 126.96892499999998L 957.0144950929752 126.96892499999998Q 957.0144950929752 126.96892499999998 957.0144950929752 126.96892499999998L 957.0144950929752 126.96892499999998L 957.0144950929752 267.303L 957.0144950929752 267.303z" pathFrom="M 942.6592776665806 267.303L 942.6592776665806 267.303L 957.0144950929752 267.303L 957.0144950929752 267.303L 957.0144950929752 267.303L 957.0144950929752 267.303L 957.0144950929752 267.303L 942.6592776665806 267.303" cy="126.96892499999998" cx="957.0144950929752" j="10" val="63" barHeight="140.334075" barWidth="14.355217426394626"></path><path id="SvgjsPath1876" d="M 1038.360727175878 267.303L 1038.360727175878 118.05882499999998Q 1038.360727175878 118.05882499999998 1038.360727175878 118.05882499999998L 1052.7159446022727 118.05882499999998Q 1052.7159446022727 118.05882499999998 1052.7159446022727 118.05882499999998L 1052.7159446022727 118.05882499999998L 1052.7159446022727 267.303L 1052.7159446022727 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 1038.360727175878 267.303L 1038.360727175878 118.05882499999998Q 1038.360727175878 118.05882499999998 1038.360727175878 118.05882499999998L 1052.7159446022727 118.05882499999998Q 1052.7159446022727 118.05882499999998 1052.7159446022727 118.05882499999998L 1052.7159446022727 118.05882499999998L 1052.7159446022727 267.303L 1052.7159446022727 267.303z" pathFrom="M 1038.360727175878 267.303L 1038.360727175878 267.303L 1052.7159446022727 267.303L 1052.7159446022727 267.303L 1052.7159446022727 267.303L 1052.7159446022727 267.303L 1052.7159446022727 267.303L 1038.360727175878 267.303" cy="118.05882499999998" cx="1052.7159446022727" j="11" val="67" barHeight="149.244175" barWidth="14.355217426394626"></path><g id="SvgjsG1852" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1853" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1855" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1857" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1859" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1861" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1863" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1865" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1867" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1869" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1871" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1873" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1875" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1877" class="apexcharts-series" rel="2" seriesName="ActivexProjects" data:realIndex="2"><path id="SvgjsPath1881" d="M 0 267.303L 0 249.4828Q 0 249.4828 0 249.4828L 14.355217426394626 249.4828Q 14.355217426394626 249.4828 14.355217426394626 249.4828L 14.355217426394626 249.4828L 14.355217426394626 267.303L 14.355217426394626 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 0 267.303L 0 249.4828Q 0 249.4828 0 249.4828L 14.355217426394626 249.4828Q 14.355217426394626 249.4828 14.355217426394626 249.4828L 14.355217426394626 249.4828L 14.355217426394626 267.303L 14.355217426394626 267.303z" pathFrom="M 0 267.303L 0 267.303L 14.355217426394626 267.303L 14.355217426394626 267.303L 14.355217426394626 267.303L 14.355217426394626 267.303L 14.355217426394626 267.303L 0 267.303" cy="249.4828" cx="14.355217426394626" j="0" val="8" barHeight="17.8202" barWidth="14.355217426394626"></path><path id="SvgjsPath1883" d="M 95.70144950929752 267.303L 95.70144950929752 240.5727Q 95.70144950929752 240.5727 95.70144950929752 240.5727L 110.05666693569215 240.5727Q 110.05666693569215 240.5727 110.05666693569215 240.5727L 110.05666693569215 240.5727L 110.05666693569215 267.303L 110.05666693569215 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 95.70144950929752 267.303L 95.70144950929752 240.5727Q 95.70144950929752 240.5727 95.70144950929752 240.5727L 110.05666693569215 240.5727Q 110.05666693569215 240.5727 110.05666693569215 240.5727L 110.05666693569215 240.5727L 110.05666693569215 267.303L 110.05666693569215 267.303z" pathFrom="M 95.70144950929752 267.303L 95.70144950929752 267.303L 110.05666693569215 267.303L 110.05666693569215 267.303L 110.05666693569215 267.303L 110.05666693569215 267.303L 110.05666693569215 267.303L 95.70144950929752 267.303" cy="240.5727" cx="110.05666693569214" j="1" val="12" barHeight="26.7303" barWidth="14.355217426394626"></path><path id="SvgjsPath1885" d="M 191.40289901859504 267.303L 191.40289901859504 251.710325Q 191.40289901859504 251.710325 191.40289901859504 251.710325L 205.75811644498967 251.710325Q 205.75811644498967 251.710325 205.75811644498967 251.710325L 205.75811644498967 251.710325L 205.75811644498967 267.303L 205.75811644498967 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 191.40289901859504 267.303L 191.40289901859504 251.710325Q 191.40289901859504 251.710325 191.40289901859504 251.710325L 205.75811644498967 251.710325Q 205.75811644498967 251.710325 205.75811644498967 251.710325L 205.75811644498967 251.710325L 205.75811644498967 267.303L 205.75811644498967 267.303z" pathFrom="M 191.40289901859504 267.303L 191.40289901859504 267.303L 205.75811644498967 267.303L 205.75811644498967 267.303L 205.75811644498967 267.303L 205.75811644498967 267.303L 205.75811644498967 267.303L 191.40289901859504 267.303" cy="251.710325" cx="205.75811644498967" j="2" val="7" barHeight="15.592675" barWidth="14.355217426394626"></path><path id="SvgjsPath1887" d="M 287.10434852789257 267.303L 287.10434852789257 229.43507499999998Q 287.10434852789257 229.43507499999998 287.10434852789257 229.43507499999998L 301.4595659542872 229.43507499999998Q 301.4595659542872 229.43507499999998 301.4595659542872 229.43507499999998L 301.4595659542872 229.43507499999998L 301.4595659542872 267.303L 301.4595659542872 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 287.10434852789257 267.303L 287.10434852789257 229.43507499999998Q 287.10434852789257 229.43507499999998 287.10434852789257 229.43507499999998L 301.4595659542872 229.43507499999998Q 301.4595659542872 229.43507499999998 301.4595659542872 229.43507499999998L 301.4595659542872 229.43507499999998L 301.4595659542872 267.303L 301.4595659542872 267.303z" pathFrom="M 287.10434852789257 267.303L 287.10434852789257 267.303L 301.4595659542872 267.303L 301.4595659542872 267.303L 301.4595659542872 267.303L 301.4595659542872 267.303L 301.4595659542872 267.303L 287.10434852789257 267.303" cy="229.43507499999998" cx="301.4595659542872" j="3" val="17" barHeight="37.867925" barWidth="14.355217426394626"></path><path id="SvgjsPath1889" d="M 382.8057980371901 267.303L 382.8057980371901 220.52497499999998Q 382.8057980371901 220.52497499999998 382.8057980371901 220.52497499999998L 397.1610154635847 220.52497499999998Q 397.1610154635847 220.52497499999998 397.1610154635847 220.52497499999998L 397.1610154635847 220.52497499999998L 397.1610154635847 267.303L 397.1610154635847 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 382.8057980371901 267.303L 382.8057980371901 220.52497499999998Q 382.8057980371901 220.52497499999998 382.8057980371901 220.52497499999998L 397.1610154635847 220.52497499999998Q 397.1610154635847 220.52497499999998 397.1610154635847 220.52497499999998L 397.1610154635847 220.52497499999998L 397.1610154635847 267.303L 397.1610154635847 267.303z" pathFrom="M 382.8057980371901 267.303L 382.8057980371901 267.303L 397.1610154635847 267.303L 397.1610154635847 267.303L 397.1610154635847 267.303L 397.1610154635847 267.303L 397.1610154635847 267.303L 382.8057980371901 267.303" cy="220.52497499999998" cx="397.1610154635847" j="4" val="21" barHeight="46.778025" barWidth="14.355217426394626"></path><path id="SvgjsPath1891" d="M 478.5072475464876 267.303L 478.5072475464876 242.800225Q 478.5072475464876 242.800225 478.5072475464876 242.800225L 492.8624649728822 242.800225Q 492.8624649728822 242.800225 492.8624649728822 242.800225L 492.8624649728822 242.800225L 492.8624649728822 267.303L 492.8624649728822 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 478.5072475464876 267.303L 478.5072475464876 242.800225Q 478.5072475464876 242.800225 478.5072475464876 242.800225L 492.8624649728822 242.800225Q 492.8624649728822 242.800225 492.8624649728822 242.800225L 492.8624649728822 242.800225L 492.8624649728822 267.303L 492.8624649728822 267.303z" pathFrom="M 478.5072475464876 267.303L 478.5072475464876 267.303L 492.8624649728822 267.303L 492.8624649728822 267.303L 492.8624649728822 267.303L 492.8624649728822 267.303L 492.8624649728822 267.303L 478.5072475464876 267.303" cy="242.800225" cx="492.8624649728822" j="5" val="11" barHeight="24.502775" barWidth="14.355217426394626"></path><path id="SvgjsPath1893" d="M 574.2086970557851 267.303L 574.2086970557851 256.165375Q 574.2086970557851 256.165375 574.2086970557851 256.165375L 588.5639144821797 256.165375Q 588.5639144821797 256.165375 588.5639144821797 256.165375L 588.5639144821797 256.165375L 588.5639144821797 267.303L 588.5639144821797 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 574.2086970557851 267.303L 574.2086970557851 256.165375Q 574.2086970557851 256.165375 574.2086970557851 256.165375L 588.5639144821797 256.165375Q 588.5639144821797 256.165375 588.5639144821797 256.165375L 588.5639144821797 256.165375L 588.5639144821797 267.303L 588.5639144821797 267.303z" pathFrom="M 574.2086970557851 267.303L 574.2086970557851 267.303L 588.5639144821797 267.303L 588.5639144821797 267.303L 588.5639144821797 267.303L 588.5639144821797 267.303L 588.5639144821797 267.303L 574.2086970557851 267.303" cy="256.165375" cx="588.5639144821798" j="6" val="5" barHeight="11.137625" barWidth="14.355217426394626"></path><path id="SvgjsPath1895" d="M 669.9101465650826 267.303L 669.9101465650826 247.25527499999998Q 669.9101465650826 247.25527499999998 669.9101465650826 247.25527499999998L 684.2653639914772 247.25527499999998Q 684.2653639914772 247.25527499999998 684.2653639914772 247.25527499999998L 684.2653639914772 247.25527499999998L 684.2653639914772 267.303L 684.2653639914772 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 669.9101465650826 267.303L 669.9101465650826 247.25527499999998Q 669.9101465650826 247.25527499999998 669.9101465650826 247.25527499999998L 684.2653639914772 247.25527499999998Q 684.2653639914772 247.25527499999998 684.2653639914772 247.25527499999998L 684.2653639914772 247.25527499999998L 684.2653639914772 267.303L 684.2653639914772 267.303z" pathFrom="M 669.9101465650826 267.303L 669.9101465650826 267.303L 684.2653639914772 267.303L 684.2653639914772 267.303L 684.2653639914772 267.303L 684.2653639914772 267.303L 684.2653639914772 267.303L 669.9101465650826 267.303" cy="247.25527499999998" cx="684.2653639914773" j="7" val="9" barHeight="20.047725" barWidth="14.355217426394626"></path><path id="SvgjsPath1897" d="M 765.6115960743801 267.303L 765.6115960743801 251.710325Q 765.6115960743801 251.710325 765.6115960743801 251.710325L 779.9668135007747 251.710325Q 779.9668135007747 251.710325 779.9668135007747 251.710325L 779.9668135007747 251.710325L 779.9668135007747 267.303L 779.9668135007747 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 765.6115960743801 267.303L 765.6115960743801 251.710325Q 765.6115960743801 251.710325 765.6115960743801 251.710325L 779.9668135007747 251.710325Q 779.9668135007747 251.710325 779.9668135007747 251.710325L 779.9668135007747 251.710325L 779.9668135007747 267.303L 779.9668135007747 267.303z" pathFrom="M 765.6115960743801 267.303L 765.6115960743801 267.303L 779.9668135007747 267.303L 779.9668135007747 267.303L 779.9668135007747 267.303L 779.9668135007747 267.303L 779.9668135007747 267.303L 765.6115960743801 267.303" cy="251.710325" cx="779.9668135007748" j="8" val="7" barHeight="15.592675" barWidth="14.355217426394626"></path><path id="SvgjsPath1899" d="M 861.3130455836776 267.303L 861.3130455836776 202.70477499999998Q 861.3130455836776 202.70477499999998 861.3130455836776 202.70477499999998L 875.6682630100722 202.70477499999998Q 875.6682630100722 202.70477499999998 875.6682630100722 202.70477499999998L 875.6682630100722 202.70477499999998L 875.6682630100722 267.303L 875.6682630100722 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 861.3130455836776 267.303L 861.3130455836776 202.70477499999998Q 861.3130455836776 202.70477499999998 861.3130455836776 202.70477499999998L 875.6682630100722 202.70477499999998Q 875.6682630100722 202.70477499999998 875.6682630100722 202.70477499999998L 875.6682630100722 202.70477499999998L 875.6682630100722 267.303L 875.6682630100722 267.303z" pathFrom="M 861.3130455836776 267.303L 861.3130455836776 267.303L 875.6682630100722 267.303L 875.6682630100722 267.303L 875.6682630100722 267.303L 875.6682630100722 267.303L 875.6682630100722 267.303L 861.3130455836776 267.303" cy="202.70477499999998" cx="875.6682630100723" j="9" val="29" barHeight="64.598225" barWidth="14.355217426394626"></path><path id="SvgjsPath1901" d="M 957.0144950929752 267.303L 957.0144950929752 240.5727Q 957.0144950929752 240.5727 957.0144950929752 240.5727L 971.3697125193697 240.5727Q 971.3697125193697 240.5727 971.3697125193697 240.5727L 971.3697125193697 240.5727L 971.3697125193697 267.303L 971.3697125193697 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 957.0144950929752 267.303L 957.0144950929752 240.5727Q 957.0144950929752 240.5727 957.0144950929752 240.5727L 971.3697125193697 240.5727Q 971.3697125193697 240.5727 971.3697125193697 240.5727L 971.3697125193697 240.5727L 971.3697125193697 267.303L 971.3697125193697 267.303z" pathFrom="M 957.0144950929752 267.303L 957.0144950929752 267.303L 971.3697125193697 267.303L 971.3697125193697 267.303L 971.3697125193697 267.303L 971.3697125193697 267.303L 971.3697125193697 267.303L 957.0144950929752 267.303" cy="240.5727" cx="971.3697125193698" j="10" val="12" barHeight="26.7303" barWidth="14.355217426394626"></path><path id="SvgjsPath1903" d="M 1052.7159446022727 267.303L 1052.7159446022727 189.339625Q 1052.7159446022727 189.339625 1052.7159446022727 189.339625L 1067.0711620286672 189.339625Q 1067.0711620286672 189.339625 1067.0711620286672 189.339625L 1067.0711620286672 189.339625L 1067.0711620286672 267.303L 1067.0711620286672 267.303z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskurim8vox)" pathTo="M 1052.7159446022727 267.303L 1052.7159446022727 189.339625Q 1052.7159446022727 189.339625 1052.7159446022727 189.339625L 1067.0711620286672 189.339625Q 1067.0711620286672 189.339625 1067.0711620286672 189.339625L 1067.0711620286672 189.339625L 1067.0711620286672 267.303L 1067.0711620286672 267.303z" pathFrom="M 1052.7159446022727 267.303L 1052.7159446022727 267.303L 1067.0711620286672 267.303L 1067.0711620286672 267.303L 1067.0711620286672 267.303L 1067.0711620286672 267.303L 1067.0711620286672 267.303L 1052.7159446022727 267.303" cy="189.339625" cx="1067.0711620286672" j="11" val="35" barHeight="77.963375" barWidth="14.355217426394626"></path><g id="SvgjsG1879" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG1880" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1882" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1884" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1886" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1888" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1890" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1892" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1894" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1896" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1898" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1900" className="apexcharts-bar-goals-groups"></g><g id="SvgjsG1902" className="apexcharts-bar-goals-groups"></g></g></g><g id="SvgjsG1823" class="apexcharts-datalabels" data:realIndex="1"></g><g id="SvgjsG1851" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1878" class="apexcharts-datalabels" data:realIndex="2"></g></g><line id="SvgjsLine1971" x1="-19.897887073863636" y1="0" x2="1072.6138316761362" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1972" x1="-19.897887073863636" y1="0" x2="1072.6138316761362" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1973" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1974" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1975" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1976" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1977" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1816" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1942" class="apexcharts-yaxis" rel="0" transform="translate(29.8828125, 0)"><g id="SvgjsG1943" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1944" font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1945">120.00</tspan><title>120.00</title></text><text id="SvgjsText1946" font-family="Helvetica, Arial, sans-serif" x="20" y="98.22575" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1947">90.00</tspan><title>90.00</title></text><text id="SvgjsText1948" font-family="Helvetica, Arial, sans-serif" x="20" y="165.0515" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1949">60.00</tspan><title>60.00</title></text><text id="SvgjsText1950" font-family="Helvetica, Arial, sans-serif" x="20" y="231.87725" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1951">30.00</tspan><title>30.00</title></text><text id="SvgjsText1952" font-family="Helvetica, Arial, sans-serif" x="20" y="298.703" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1953">0.00</tspan><title>0.00</title></text></g></g><g id="SvgjsG1813" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(64, 81, 137);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(247, 184, 75);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(10, 179, 156);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                                    </div>
                                                </div>
                                                <!-- end card body -->
                                            </div>
                                            <!-- end card -->
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end col -->
        
                                <div class="col-xxl-4">
                                    <div class="card">
                                        <div class="card-header border-0">
                                            <h4 class="card-title mb-0">Upcoming Schedules</h4>
                                        </div>
                                        <!-- end cardheader -->
                                        <div class="card-body pt-0">
                                            <div class="upcoming-scheduled">
                                                <input type="text" class="form-control flatpickr-input" data-provider="flatpickr" data-date-format="d M, Y" data-deafult-date="today" data-inline-date="true" readonly="readonly"><div class="flatpickr-calendar animate inline" tabindex="-1"><div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path></svg></span><div class="flatpickr-month"><div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" aria-label="Month" tabindex="-1"><option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">January</option><option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">February</option><option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">March</option><option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">April</option><option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">May</option><option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">June</option><option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">July</option><option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">August</option><option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">September</option><option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">October</option><option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">November</option><option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">December</option></select><div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div></div></div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z"></path></svg></span></div><div class="flatpickr-innerContainer"><div class="flatpickr-rContainer"><div class="flatpickr-weekdays"><div class="flatpickr-weekdaycontainer">
              <span class="flatpickr-weekday">
                Sun</span><span class="flatpickr-weekday">Mon</span><span class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat
              </span>
              </div></div><div class="flatpickr-days" tabindex="-1"><div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="June 26, 2022" tabindex="-1">26</span><span class="flatpickr-day prevMonthDay" aria-label="June 27, 2022" tabindex="-1">27</span><span class="flatpickr-day prevMonthDay" aria-label="June 28, 2022" tabindex="-1">28</span><span class="flatpickr-day prevMonthDay" aria-label="June 29, 2022" tabindex="-1">29</span><span class="flatpickr-day prevMonthDay" aria-label="June 30, 2022" tabindex="-1">30</span><span class="flatpickr-day " aria-label="July 1, 2022" tabindex="-1">1</span><span class="flatpickr-day " aria-label="July 2, 2022" tabindex="-1">2</span><span class="flatpickr-day " aria-label="July 3, 2022" tabindex="-1">3</span><span class="flatpickr-day " aria-label="July 4, 2022" tabindex="-1">4</span><span class="flatpickr-day " aria-label="July 5, 2022" tabindex="-1">5</span><span class="flatpickr-day " aria-label="July 6, 2022" tabindex="-1">6</span><span class="flatpickr-day " aria-label="July 7, 2022" tabindex="-1">7</span><span class="flatpickr-day " aria-label="July 8, 2022" tabindex="-1">8</span><span class="flatpickr-day " aria-label="July 9, 2022" tabindex="-1">9</span><span class="flatpickr-day " aria-label="July 10, 2022" tabindex="-1">10</span><span class="flatpickr-day " aria-label="July 11, 2022" tabindex="-1">11</span><span class="flatpickr-day " aria-label="July 12, 2022" tabindex="-1">12</span><span class="flatpickr-day " aria-label="July 13, 2022" tabindex="-1">13</span><span class="flatpickr-day " aria-label="July 14, 2022" tabindex="-1">14</span><span class="flatpickr-day " aria-label="July 15, 2022" tabindex="-1">15</span><span class="flatpickr-day " aria-label="July 16, 2022" tabindex="-1">16</span><span class="flatpickr-day " aria-label="July 17, 2022" tabindex="-1">17</span><span class="flatpickr-day " aria-label="July 18, 2022" tabindex="-1">18</span><span class="flatpickr-day today selected" aria-label="July 19, 2022" aria-current="date" tabindex="-1">19</span><span class="flatpickr-day " aria-label="July 20, 2022" tabindex="-1">20</span><span class="flatpickr-day " aria-label="July 21, 2022" tabindex="-1">21</span><span class="flatpickr-day " aria-label="July 22, 2022" tabindex="-1">22</span><span class="flatpickr-day " aria-label="July 23, 2022" tabindex="-1">23</span><span class="flatpickr-day " aria-label="July 24, 2022" tabindex="-1">24</span><span class="flatpickr-day " aria-label="July 25, 2022" tabindex="-1">25</span><span class="flatpickr-day " aria-label="July 26, 2022" tabindex="-1">26</span><span class="flatpickr-day " aria-label="July 27, 2022" tabindex="-1">27</span><span class="flatpickr-day " aria-label="July 28, 2022" tabindex="-1">28</span><span class="flatpickr-day " aria-label="July 29, 2022" tabindex="-1">29</span><span class="flatpickr-day " aria-label="July 30, 2022" tabindex="-1">30</span><span class="flatpickr-day " aria-label="July 31, 2022" tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="August 1, 2022" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="August 2, 2022" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="August 3, 2022" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="August 4, 2022" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="August 5, 2022" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="August 6, 2022" tabindex="-1">6</span></div></div></div></div></div>
                                            </div>
        
                                            <h6 class="text-uppercase fw-semibold mt-4 mb-3 text-muted">Events:</h6>
                                            <div class="mini-stats-wid d-flex align-items-center mt-3">
                                                <div class="flex-shrink-0 avatar-sm">
                                                    <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
                                                        09
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1">Development planning</h6>
                                                    <p class="text-muted mb-0">iTest Factory </p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <p class="text-muted mb-0">9:20 <span class="text-uppercase">am</span></p>
                                                </div>
                                            </div>
                                            <!-- end -->
                                            <div class="mini-stats-wid d-flex align-items-center mt-3">
                                                <div class="flex-shrink-0 avatar-sm">
                                                    <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
                                                        12
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1">Design new UI and check sales</h6>
                                                    <p class="text-muted mb-0">Meta4Systems</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <p class="text-muted mb-0">11:30 <span class="text-uppercase">am</span></p>
                                                </div>
                                            </div>
                                            <!-- end -->
                                            <div class="mini-stats-wid d-flex align-items-center mt-3">
                                                <div class="flex-shrink-0 avatar-sm">
                                                    <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
                                                        25
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1">Weekly catch-up </h6>
                                                    <p class="text-muted mb-0">Nesta Technologies</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <p class="text-muted mb-0">02:00 <span class="text-uppercase">pm</span></p>
                                                </div>
                                            </div>
                                            <!-- end -->
                                            <div class="mini-stats-wid d-flex align-items-center mt-3">
                                                <div class="flex-shrink-0 avatar-sm">
                                                    <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
                                                        27
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-1">James Bangs (Client) Meeting</h6>
                                                    <p class="text-muted mb-0">Nesta Technologies</p>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <p class="text-muted mb-0">03:45 <span class="text-uppercase">pm</span></p>
                                                </div>
                                            </div>
                                            <!-- end -->
        
                                            <div class="mt-3 text-center">
                                                <a href="javascript:void(0);" class="text-muted text-decoration-underline">View all Events</a>
                                            </div>
        
                                        </div>
                                        <!-- end cardbody -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
        
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="card card-height-100">
                                        <div class="card-header d-flex align-items-center">
                                            <h4 class="card-title flex-grow-1 mb-0">Active Projects</h4>
                                            <div class="flex-shrink-0">
                                                <a href="javascript:void(0);" class="btn btn-soft-info btn-sm">Export Report</a>
                                            </div>
                                        </div>
                                        <!-- end cardheader -->
                                        <div class="card-body">
                                            <div class="table-responsive table-card">
                                                <table class="table table-nowrap table-centered align-middle">
                                                    <thead class="bg-light text-muted">
                                                        <tr>
                                                            <th scope="col">Intitulé Projet</th>
                                                            <th scope="col">Project Lead</th>
                                                            <th scope="col">Progress</th>
                                                            <th scope="col">Assignee</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col" style="width: 10%;">Due Date</th>
                                                        </tr>
                                                        <!-- end tr -->
                                                    </thead>
                                                    <!-- thead -->
        
                                                    <tbody>
                                                        <tr>
                                                            <td class="fw-medium">Brand Logo Design</td>
                                                            <td>
                                                                <img src="assets/images/users/avatar-1.jpg" class="avatar-xxs rounded-circle me-1" alt="">
                                                                <a href="javascript: void(0);" class="text-reset">Donald Risher</a>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-1 text-muted fs-13">53%</div>
                                                                    <div class="progress progress-sm  flex-grow-1" style="width: 68%;">
                                                                        <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-group flex-nowrap">
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                                            <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                                            <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="badge badge-soft-warning">Inprogress</span></td>
                                                            <td class="text-muted">06 Sep 2021</td>
                                                        </tr>
                                                        <!-- end tr -->
                                                        <tr>
                                                            <td class="fw-medium">Redesign - Landing Page</td>
                                                            <td>
                                                                <img src="assets/images/users/avatar-2.jpg" class="avatar-xxs rounded-circle me-1" alt="">
                                                                <a href="javascript: void(0);" class="text-reset">Prezy William</a>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 text-muted me-1">0%</div>
                                                                    <div class="progress progress-sm flex-grow-1" style="width: 68%;">
                                                                        <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-group">
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                                            <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                                            <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="badge badge-soft-danger">Pending</span></td>
                                                            <td class="text-muted">13 Nov 2021</td>
                                                        </tr>
                                                        <!-- end tr -->
                                                        <tr>
                                                            <td class="fw-medium">Multipurpose Landing Template</td>
                                                            <td>
                                                                <img src="assets/images/users/avatar-3.jpg" class="avatar-xxs rounded-circle me-1" alt="">
                                                                <a href="javascript: void(0);" class="text-reset">Boonie Hoynas</a>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 text-muted me-1">100%</div>
                                                                    <div class="progress progress-sm flex-grow-1" style="width: 68%;">
                                                                        <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-group">
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                                            <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                                            <img src="assets/images/users/avatar-8.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="badge badge-soft-success">Completed</span></td>
                                                            <td class="text-muted">26 Nov 2021</td>
                                                        </tr>
                                                        <!-- end tr -->
                                                        <tr>
                                                            <td class="fw-medium">Chat Application</td>
                                                            <td>
                                                                <img src="assets/images/users/avatar-5.jpg" class="avatar-xxs rounded-circle me-1" alt="">
                                                                <a href="javascript: void(0);" class="text-reset">Pauline Moll</a>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 text-muted me-1">64%</div>
                                                                    <div class="progress flex-grow-1 progress-sm" style="width: 68%;">
                                                                        <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 64%" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-group">
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="badge badge-soft-warning">Progress</span></td>
                                                            <td class="text-muted">15 Dec 2021</td>
                                                        </tr>
                                                        <!-- end tr -->
                                                        <tr>
                                                            <td class="fw-medium">Create Wireframe</td>
                                                            <td>
                                                                <img src="assets/images/users/avatar-6.jpg" class="avatar-xxs rounded-circle me-1" alt="">
                                                                <a href="javascript: void(0);" class="text-reset">James Bangs</a>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 text-muted me-1">77%</div>
                                                                    <div class="progress flex-grow-1 progress-sm" style="width: 68%;">
                                                                        <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 77%" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="avatar-group">
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                                            <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                                            <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);" class="d-inline-block">
                                                                            <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><span class="badge badge-soft-warning">Progress</span></td>
                                                            <td class="text-muted">21 Dec 2021</td>
                                                        </tr>
                                                        <!-- end tr -->
                                                    </tbody>
                                                    <!-- end tbody -->
                                                </table>
                                                <!-- end table -->
                                            </div>
        
                                            <div class="align-items-center mt-xl-3 mt-4 justify-content-between d-flex">
                                                <div class="flex-shrink-0">
                                                    <div class="text-muted">Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results </div>
                                                </div>
                                                <ul class="pagination pagination-separated pagination-sm mb-0">
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link">←</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a href="#" class="page-link">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link">→</a>
                                                    </li>
                                                </ul>
                                            </div>
        
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
        
                                <div class="col-xl-5">
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1 py-1">My Tasks</h4>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown card-header-dropdown">
                                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted">All Tasks <i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">All Tasks</a>
                                                        <a class="dropdown-item" href="#">Completed </a>
                                                        <a class="dropdown-item" href="#">Inprogress</a>
                                                        <a class="dropdown-item" href="#">Pending</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card header -->
                                        <div class="card-body">
                                            <div class="table-responsive table-card">
                                                <table class="table table-borderless table-nowrap table-centered align-middle mb-0">
                                                    <thead class="table-light text-muted">
                                                        <tr>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Dedline</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Assignee</th>
                                                        </tr>
                                                    </thead>
                                                    <!-- end thead -->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask1">
                                                                    <label class="form-check-label ms-1" for="checkTask1">
                                                                        Create new Admin Template
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td class="text-muted">03 Nov 2021</td>
                                                            <td><span class="badge badge-soft-success">Completed</span></td>
                                                            <td>
                                                                <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Mary Stoner">
                                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <!-- end -->
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask2">
                                                                    <label class="form-check-label ms-1" for="checkTask2">
                                                                        Marketing Coordinator
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td class="text-muted">17 Nov 2021</td>
                                                            <td><span class="badge badge-soft-warning">Progress</span></td>
                                                            <td>
                                                                <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Den Davis">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <!-- end -->
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask3">
                                                                    <label class="form-check-label ms-1" for="checkTask3">
                                                                        Administrative Analyst
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td class="text-muted">26 Nov 2021</td>
                                                            <td><span class="badge badge-soft-success">Completed</span></td>
                                                            <td>
                                                                <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Alex Brown">
                                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <!-- end -->
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask4">
                                                                    <label class="form-check-label ms-1" for="checkTask4">
                                                                        E-commerce Landing Page
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td class="text-muted">10 Dec 2021</td>
                                                            <td><span class="badge badge-soft-danger">Pending</span></td>
                                                            <td>
                                                                <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Prezy Morin">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <!-- end -->
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask5">
                                                                    <label class="form-check-label ms-1" for="checkTask5">
                                                                        UI/UX Design
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td class="text-muted">22 Dec 2021</td>
                                                            <td><span class="badge badge-soft-warning">Progress</span></td>
                                                            <td>
                                                                <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Stine Nielsen">
                                                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <!-- end -->
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask6">
                                                                    <label class="form-check-label ms-1" for="checkTask6">
                                                                        Projects Design
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td class="text-muted">31 Dec 2021</td>
                                                            <td><span class="badge badge-soft-danger">Pending</span></td>
                                                            <td>
                                                                <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Jansh William">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xxs">
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <!-- end -->
                                                    </tbody>
                                                    <!-- end tbody -->
                                                </table>
                                                <!-- end table -->
                                            </div>
                                            <div class="mt-3 text-center">
                                                <a href="javascript:void(0);" class="text-muted text-decoration-underline">Load More</a>
                                            </div>
                                        </div>
                                        <!-- end cardbody -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
        
                            <div class="row">
                                <div class="col-xxl-4">
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Team Members</h4>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown card-header-dropdown">
                                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span class="text-muted">Last 30 Days<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Today</a>
                                                        <a class="dropdown-item" href="#">Yesterday</a>
                                                        <a class="dropdown-item" href="#">Last 7 Days</a>
                                                        <a class="dropdown-item" href="#">Last 30 Days</a>
                                                        <a class="dropdown-item" href="#">This Month</a>
                                                        <a class="dropdown-item" href="#">Last Month</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card header -->
        
                                        <div class="card-body">
        
                                            <div class="table-responsive table-card">
                                                <table class="table table-borderless table-nowrap align-middle mb-0">
                                                    <thead class="table-light text-muted">
                                                        <tr>
                                                            <th scope="col">Member</th>
                                                            <th scope="col">Hours</th>
                                                            <th scope="col">Tasks</th>
                                                            <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="d-flex">
                                                                <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                                <div>
                                                                    <h5 class="fs-13 mb-0">Donald Risher</h5>
                                                                    <p class="fs-12 mb-0 text-muted">Product Manager</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h6 class="mb-0">110h : <span class="text-muted">150h</span></h6>
                                                            </td>
                                                            <td>
                                                                258
                                                            </td>
                                                            <td style="width:5%;">
                                                                <div id="radialBar_chart_1" data-colors="[&quot;--vz-primary&quot;]" data-chart-series="50" class="apex-charts" dir="ltr" style="min-height: 37px;"><div id="apexchartsd6cwiusv" class="apexcharts-canvas apexchartsd6cwiusv apexcharts-theme-light" style="width: 36px; height: 37px;"><svg id="SvgjsSvg1503" width="36" height="37" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1505" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1504"><clipPath id="gridRectMaskd6cwiusv"><rect id="SvgjsRect1507" width="42" height="38" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskd6cwiusv"></clipPath><clipPath id="nonForecastMaskd6cwiusv"></clipPath><clipPath id="gridRectMarkerMaskd6cwiusv"><rect id="SvgjsRect1508" width="40" height="40" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1509" class="apexcharts-radialbar"><g id="SvgjsG1510"><g id="SvgjsG1511" class="apexcharts-tracks"><g id="SvgjsG1512" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.2885365853658537" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968"></path></g></g><g id="SvgjsG1514"><g id="SvgjsG1516" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1517" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 0 1 18 29.475609756097562" fill="none" fill-opacity="0.85" stroke="rgba(153,153,153,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.3902439024390247" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="180" data:value="50" index="0" j="0" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 0 1 18 29.475609756097562"></path></g><circle id="SvgjsCircle1515" r="9.831341463414635" cx="18" cy="18" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1518" x1="0" y1="0" x2="36" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1519" x1="0" y1="0" x2="36" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1506" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                                            </td>
                                                        </tr>
                                                        <!-- end tr -->
                                                        <tr>
                                                            <td class="d-flex">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                                <div>
                                                                    <h5 class="fs-13 mb-0">Jansh Brown</h5>
                                                                    <p class="fs-12 mb-0 text-muted">Lead Developer</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h6 class="mb-0">83h : <span class="text-muted">150h</span></h6>
                                                            </td>
                                                            <td>
                                                                105
                                                            </td>
                                                            <td>
                                                                <div id="radialBar_chart_2" data-colors="[&quot;--vz-primary&quot;]" data-chart-series="45" class="apex-charts" dir="ltr" style="min-height: 37px;"><div id="apexchartsn1ox6pm0j" class="apexcharts-canvas apexchartsn1ox6pm0j apexcharts-theme-light" style="width: 36px; height: 37px;"><svg id="SvgjsSvg1520" width="36" height="37" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1522" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1521"><clipPath id="gridRectMaskn1ox6pm0j"><rect id="SvgjsRect1524" width="42" height="38" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskn1ox6pm0j"></clipPath><clipPath id="nonForecastMaskn1ox6pm0j"></clipPath><clipPath id="gridRectMarkerMaskn1ox6pm0j"><rect id="SvgjsRect1525" width="40" height="40" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1526" class="apexcharts-radialbar"><g id="SvgjsG1527"><g id="SvgjsG1528" class="apexcharts-tracks"><g id="SvgjsG1529" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.2885365853658537" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968"></path></g></g><g id="SvgjsG1531"><g id="SvgjsG1533" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1534" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 0 1 21.546158435449094 28.913953436996824" fill="none" fill-opacity="0.85" stroke="rgba(153,153,153,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.3902439024390247" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="162" data:value="45" index="0" j="0" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 0 1 21.546158435449094 28.913953436996824"></path></g><circle id="SvgjsCircle1532" r="9.831341463414635" cx="18" cy="18" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1535" x1="0" y1="0" x2="36" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1536" x1="0" y1="0" x2="36" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1523" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                                            </td>
                                                        </tr>
                                                        <!-- end tr -->
                                                        <tr>
                                                            <td class="d-flex">
                                                                <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                                <div>
                                                                    <h5 class="fs-13 mb-0">Carroll Adams</h5>
                                                                    <p class="fs-12 mb-0 text-muted">Lead Designer</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h6 class="mb-0">58h : <span class="text-muted">150h</span></h6>
                                                            </td>
                                                            <td>
                                                                75
                                                            </td>
                                                            <td>
                                                                <div id="radialBar_chart_3" data-colors="[&quot;--vz-primary&quot;]" data-chart-series="75" class="apex-charts" dir="ltr" style="min-height: 37px;"><div id="apexchartskodmaonp" class="apexcharts-canvas apexchartskodmaonp apexcharts-theme-light" style="width: 36px; height: 37px;"><svg id="SvgjsSvg1537" width="36" height="37" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1539" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1538"><clipPath id="gridRectMaskkodmaonp"><rect id="SvgjsRect1541" width="42" height="38" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskkodmaonp"></clipPath><clipPath id="nonForecastMaskkodmaonp"></clipPath><clipPath id="gridRectMarkerMaskkodmaonp"><rect id="SvgjsRect1542" width="40" height="40" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1543" class="apexcharts-radialbar"><g id="SvgjsG1544"><g id="SvgjsG1545" class="apexcharts-tracks"><g id="SvgjsG1546" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.2885365853658537" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968"></path></g></g><g id="SvgjsG1548"><g id="SvgjsG1550" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1551" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 6.524390243902438 18" fill="none" fill-opacity="0.85" stroke="rgba(153,153,153,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.3902439024390247" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="270" data:value="75" index="0" j="0" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 6.524390243902438 18"></path></g><circle id="SvgjsCircle1549" r="9.831341463414635" cx="18" cy="18" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1552" x1="0" y1="0" x2="36" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1553" x1="0" y1="0" x2="36" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1540" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                                            </td>
                                                        </tr>
                                                        <!-- end tr -->
                                                        <tr>
                                                            <td class="d-flex">
                                                                <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                                <div>
                                                                    <h5 class="fs-13 mb-0">William Pinto</h5>
                                                                    <p class="fs-12 mb-0 text-muted">UI/UX Designer</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h6 class="mb-0">96h : <span class="text-muted">150h</span></h6>
                                                            </td>
                                                            <td>
                                                                85
                                                            </td>
                                                            <td>
                                                                <div id="radialBar_chart_4" data-colors="[&quot;--vz-warning&quot;]" data-chart-series="25" class="apex-charts" dir="ltr" style="min-height: 37px;"><div id="apexchartsf4d8l34o" class="apexcharts-canvas apexchartsf4d8l34o apexcharts-theme-light" style="width: 36px; height: 37px;"><svg id="SvgjsSvg1554" width="36" height="37" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1556" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1555"><clipPath id="gridRectMaskf4d8l34o"><rect id="SvgjsRect1558" width="42" height="38" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskf4d8l34o"></clipPath><clipPath id="nonForecastMaskf4d8l34o"></clipPath><clipPath id="gridRectMarkerMaskf4d8l34o"><rect id="SvgjsRect1559" width="40" height="40" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1560" class="apexcharts-radialbar"><g id="SvgjsG1561"><g id="SvgjsG1562" class="apexcharts-tracks"><g id="SvgjsG1563" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.2885365853658537" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968"></path></g></g><g id="SvgjsG1565"><g id="SvgjsG1567" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1568" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 0 1 29.475609756097562 18" fill="none" fill-opacity="0.85" stroke="rgba(153,153,153,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.3902439024390247" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="90" data:value="25" index="0" j="0" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 0 1 29.475609756097562 18"></path></g><circle id="SvgjsCircle1566" r="9.831341463414635" cx="18" cy="18" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1569" x1="0" y1="0" x2="36" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1570" x1="0" y1="0" x2="36" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1557" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                                            </td>
                                                        </tr>
                                                        <!-- end tr -->
                                                        <tr>
                                                            <td class="d-flex">
                                                                <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                                <div>
                                                                    <h5 class="fs-13 mb-0">Garry Fournier</h5>
                                                                    <p class="fs-12 mb-0 text-muted">Web Designer</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h6 class="mb-0">76h : <span class="text-muted">150h</span></h6>
                                                            </td>
                                                            <td>
                                                                69
                                                            </td>
                                                            <td>
                                                                <div id="radialBar_chart_5" data-colors="[&quot;--vz-primary&quot;]" data-chart-series="60" class="apex-charts" dir="ltr" style="min-height: 37px;"><div id="apexchartsqzmyxd0kf" class="apexcharts-canvas apexchartsqzmyxd0kf apexcharts-theme-light" style="width: 36px; height: 37px;"><svg id="SvgjsSvg1571" width="36" height="37" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1573" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1572"><clipPath id="gridRectMaskqzmyxd0kf"><rect id="SvgjsRect1575" width="42" height="38" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskqzmyxd0kf"></clipPath><clipPath id="nonForecastMaskqzmyxd0kf"></clipPath><clipPath id="gridRectMarkerMaskqzmyxd0kf"><rect id="SvgjsRect1576" width="40" height="40" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1577" class="apexcharts-radialbar"><g id="SvgjsG1578"><g id="SvgjsG1579" class="apexcharts-tracks"><g id="SvgjsG1580" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.2885365853658537" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968"></path></g></g><g id="SvgjsG1582"><g id="SvgjsG1584" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1585" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 11.254805824302231 27.28396331349787" fill="none" fill-opacity="0.85" stroke="rgba(153,153,153,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.3902439024390247" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="216" data:value="60" index="0" j="0" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 11.254805824302231 27.28396331349787"></path></g><circle id="SvgjsCircle1583" r="9.831341463414635" cx="18" cy="18" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1586" x1="0" y1="0" x2="36" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1587" x1="0" y1="0" x2="36" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1574" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                                            </td>
                                                        </tr>
                                                        <!-- end tr -->
                                                        <tr>
                                                            <td class="d-flex">
                                                                <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                                <div>
                                                                    <h5 class="fs-13 mb-0">Susan Denton</h5>
                                                                    <p class="fs-12 mb-0 text-muted">Lead Designer</p>
                                                                </div>
                                                            </td>
        
                                                            <td>
                                                                <h6 class="mb-0">123h : <span class="text-muted">150h</span></h6>
                                                            </td>
                                                            <td>
                                                                658
                                                            </td>
                                                            <td>
                                                                <div id="radialBar_chart_6" data-colors="[&quot;--vz-success&quot;]" data-chart-series="85" class="apex-charts" dir="ltr" style="min-height: 37px;"><div id="apexcharts3iwdh03h" class="apexcharts-canvas apexcharts3iwdh03h apexcharts-theme-light" style="width: 36px; height: 37px;"><svg id="SvgjsSvg1588" width="36" height="37" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1590" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1589"><clipPath id="gridRectMask3iwdh03h"><rect id="SvgjsRect1592" width="42" height="38" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask3iwdh03h"></clipPath><clipPath id="nonForecastMask3iwdh03h"></clipPath><clipPath id="gridRectMarkerMask3iwdh03h"><rect id="SvgjsRect1593" width="40" height="40" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1594" class="apexcharts-radialbar"><g id="SvgjsG1595"><g id="SvgjsG1596" class="apexcharts-tracks"><g id="SvgjsG1597" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.2885365853658537" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968"></path></g></g><g id="SvgjsG1599"><g id="SvgjsG1601" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1602" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 8.716036686502127 11.254805824302231" fill="none" fill-opacity="0.85" stroke="rgba(153,153,153,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.3902439024390247" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="306" data:value="85" index="0" j="0" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 8.716036686502127 11.254805824302231"></path></g><circle id="SvgjsCircle1600" r="9.831341463414635" cx="18" cy="18" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1603" x1="0" y1="0" x2="36" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1604" x1="0" y1="0" x2="36" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1591" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                                            </td>
                                                        </tr>
                                                        <!-- end tr -->
                                                        <tr>
                                                            <td class="d-flex">
                                                                <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-3 me-2">
                                                                <div>
                                                                    <h5 class="fs-13 mb-0">Joseph Jackson</h5>
                                                                    <p class="fs-12 mb-0 text-muted">React Developer</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h6 class="mb-0">117h : <span class="text-muted">150h</span></h6>
                                                            </td>
                                                            <td>
                                                                125
                                                            </td>
                                                            <td>
                                                                <div id="radialBar_chart_7" data-colors="[&quot;--vz-primary&quot;]" data-chart-series="70" class="apex-charts" dir="ltr" style="min-height: 37px;"><div id="apexchartsqs29jymw" class="apexcharts-canvas apexchartsqs29jymw apexcharts-theme-light" style="width: 36px; height: 37px;"><svg id="SvgjsSvg1605" width="36" height="37" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1607" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1606"><clipPath id="gridRectMaskqs29jymw"><rect id="SvgjsRect1609" width="42" height="38" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskqs29jymw"></clipPath><clipPath id="nonForecastMaskqs29jymw"></clipPath><clipPath id="gridRectMarkerMaskqs29jymw"><rect id="SvgjsRect1610" width="40" height="40" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1611" class="apexcharts-radialbar"><g id="SvgjsG1612"><g id="SvgjsG1613" class="apexcharts-tracks"><g id="SvgjsG1614" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.2885365853658537" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 17.99799712827099 6.524390418685968"></path></g></g><g id="SvgjsG1616"><g id="SvgjsG1618" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1619" d="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 7.086046563003176 21.546158435449094" fill="none" fill-opacity="0.85" stroke="rgba(153,153,153,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3.3902439024390247" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="252" data:value="70" index="0" j="0" data:pathOrig="M 18 6.524390243902438 A 11.475609756097562 11.475609756097562 0 1 1 7.086046563003176 21.546158435449094"></path></g><circle id="SvgjsCircle1617" r="9.831341463414635" cx="18" cy="18" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1620" x1="0" y1="0" x2="36" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1621" x1="0" y1="0" x2="36" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1608" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                                            </td>
                                                        </tr>
                                                        <!-- end tr -->
                                                    </tbody>
                                                    <!-- end tbody -->
                                                </table>
                                                <!-- end table -->
                                            </div>
                                        </div>
                                        <!-- end cardbody -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
        
                                <div class="col-xxl-4 col-lg-6">
                                    <div class="card card-height-100">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Chat</h4>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown card-header-dropdown">
                                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted"><i class="ri-settings-4-line align-bottom me-1"></i>Setting <i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#"><i class="ri-user-2-fill align-bottom text-muted me-2"></i> View Profile</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-inbox-archive-line align-bottom text-muted me-2"></i> Archive</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-mic-off-line align-bottom text-muted me-2"></i> Muted</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-5-line align-bottom text-muted me-2"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card header -->
        
                                        <div class="card-body p-0">
                                            <div id="users-chat">
                                                <div class="chat-conversation p-3" id="chat-conversation" data-simplebar="init" style="height: 400px;"><div class="simplebar-wrapper" style="margin: -16px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 16px;">
                                                    <ul class="list-unstyled chat-conversation-list chat-sm" id="users-conversation">
                                                        <li class="chat-list left">
                                                            <div class="conversation-list">
                                                                <div class="chat-avatar">
                                                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                                                </div>
                                                                <div class="user-chat-content">
                                                                    <div class="ctext-wrap">
                                                                        <div class="ctext-wrap-content">
                                                                            <p class="mb-0 ctext-content">Good morning 😊</p>
                                                                        </div>
                                                                        <div class="dropdown align-self-start message-box-drop">
                                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="ri-more-2-fill"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                                <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                                                <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                                                <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="conversation-name"><small class="text-muted time">09:07 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- chat-list -->
        
                                                        <li class="chat-list right">
                                                            <div class="conversation-list">
                                                                <div class="user-chat-content">
                                                                    <div class="ctext-wrap">
                                                                        <div class="ctext-wrap-content">
                                                                            <p class="mb-0 ctext-content">Good morning, How are you? What about our next meeting?</p>
                                                                        </div>
                                                                        <div class="dropdown align-self-start message-box-drop">
                                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="ri-more-2-fill"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                                <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                                                <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                                                <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="conversation-name"><small class="text-muted time">09:08 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- chat-list -->
        
                                                        <li class="chat-list left">
                                                            <div class="conversation-list">
                                                                <div class="chat-avatar">
                                                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                                                </div>
                                                                <div class="user-chat-content">
                                                                    <div class="ctext-wrap">
                                                                        <div class="ctext-wrap-content">
                                                                            <p class="mb-0 ctext-content">Yeah everything is fine. Our next meeting tomorrow at 10.00 AM</p>
                                                                        </div>
                                                                        <div class="dropdown align-self-start message-box-drop">
                                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="ri-more-2-fill"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                                <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                                                <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                                                <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ctext-wrap">
                                                                        <div class="ctext-wrap-content">
                                                                            <p class="mb-0 ctext-content">Hey, I'm going to meet a friend of mine at the department store. I have to buy some presents for my parents 🎁.</p>
                                                                        </div>
                                                                        <div class="dropdown align-self-start message-box-drop">
                                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="ri-more-2-fill"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                                <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                                                <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                                                <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="conversation-name"><small class="text-muted time">09:10 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- chat-list -->
        
                                                        <li class="chat-list right">
                                                            <div class="conversation-list">
                                                                <div class="user-chat-content">
                                                                    <div class="ctext-wrap">
                                                                        <div class="ctext-wrap-content">
                                                                            <p class="mb-0 ctext-content">Wow that's great</p>
                                                                        </div>
                                                                        <div class="dropdown align-self-start message-box-drop">
                                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="ri-more-2-fill"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                                <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                                                <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                                                <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="conversation-name"><small class="text-muted time">09:12 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- chat-list -->
        
                                                        <li class="chat-list left">
                                                            <div class="conversation-list">
                                                                <div class="chat-avatar">
                                                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                                                </div>
                                                                <div class="user-chat-content">
                                                                    <div class="ctext-wrap">
                                                                        <div class="message-img mb-0">
                                                                            <div class="message-img-list">
                                                                                <div>
                                                                                    <a class="popup-img d-inline-block" href="assets/images/small/img-1.jpg">
                                                                                        <img src="assets/images/small/img-1.jpg" alt="" class="rounded border">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="message-img-link">
                                                                                    <ul class="list-inline mb-0">
                                                                                        <li class="list-inline-item dropdown">
                                                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                <i class="ri-more-fill"></i>
                                                                                            </a>
                                                                                            <div class="dropdown-menu">
                                                                                                <a class="dropdown-item" href="assets/images/small/img-1.jpg" download=""><i class="ri-download-2-line me-2 text-muted align-bottom"></i>Download</a>
                                                                                                <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                                                <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                                                                <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                                <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
        
                                                                            <div class="message-img-list">
                                                                                <div>
                                                                                    <a class="popup-img d-inline-block" href="assets/images/small/img-2.jpg">
                                                                                        <img src="assets/images/small/img-2.jpg" alt="" class="rounded border">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="message-img-link">
                                                                                    <ul class="list-inline mb-0">
                                                                                        <li class="list-inline-item dropdown">
                                                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                <i class="ri-more-fill"></i>
                                                                                            </a>
                                                                                            <div class="dropdown-menu">
                                                                                                <a class="dropdown-item" href="assets/images/small/img-2.jpg" download=""><i class="ri-download-2-line me-2 text-muted align-bottom"></i>Download</a>
                                                                                                <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                                                                <a class="dropdown-item" href="#"><i class="ri-share-line me-2 text-muted align-bottom"></i>Forward</a>
                                                                                                <a class="dropdown-item" href="#"><i class="ri-bookmark-line me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                                <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
        
                                                                    <div class="conversation-name"><small class="text-muted time">09:30 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- chat-list -->
                                                    </ul>
                                                </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 644px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 248px; transform: translate3d(0px, 152px, 0px); display: block;"></div></div></div>
                                            </div>
                                            <div class="border-top border-top-dashed">
                                                <div class="row g-2 mx-3 mt-2 mb-3">
                                                    <div class="col">
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control border-light bg-light" placeholder="Enter Message...">
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-auto">
                                                        <button type="submit" class="btn btn-info"><span class="d-none d-sm-inline-block me-2">Send</span> <i class="mdi mdi-send float-end"></i></button>
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </div>
                                        </div>
                                        <!-- end cardbody -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
        
                                <div class="col-xxl-4 col-lg-6">
                                    <div class="card card-height-100">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Projects Status</h4>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown card-header-dropdown">
                                                    <a class="dropdown-btn text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        All Time <i class="mdi mdi-chevron-down ms-1"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">All Time</a>
                                                        <a class="dropdown-item" href="#">Last 7 Days</a>
                                                        <a class="dropdown-item" href="#">Last 30 Days</a>
                                                        <a class="dropdown-item" href="#">Last 90 Days</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card header -->
        
                                        <div class="card-body">
                                            <div id="prjects-status" data-colors="[&quot;--vz-success&quot;, &quot;--vz-primary&quot;, &quot;--vz-warning&quot;, &quot;--vz-danger&quot;]" class="apex-charts" dir="ltr" style="min-height: 212.8px;"><div id="apexchartsk4ql91voh" class="apexcharts-canvas apexchartsk4ql91voh apexcharts-theme-light" style="width: 537px; height: 212.8px;"><svg id="SvgjsSvg1978" width="537" height="212.8" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1980" class="apexcharts-inner apexcharts-graphical" transform="translate(166.5, 0)"><defs id="SvgjsDefs1979"><clipPath id="gridRectMaskk4ql91voh"><rect id="SvgjsRect1982" width="210" height="228" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskk4ql91voh"></clipPath><clipPath id="nonForecastMaskk4ql91voh"></clipPath><clipPath id="gridRectMarkerMaskk4ql91voh"><rect id="SvgjsRect1983" width="210" height="232" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1984" class="apexcharts-pie"><g id="SvgjsG1985" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1986" r="86.8390243902439" cx="103" cy="103" fill="transparent"></circle><g id="SvgjsG1987" class="apexcharts-slices"><g id="SvgjsG1988" class="apexcharts-series apexcharts-pie-series" seriesName="Completed" rel="1" data:realIndex="0"><path id="SvgjsPath1989" d="M 103 6.512195121951208 A 96.48780487804879 96.48780487804879 0 0 1 160.64719711426022 180.37374978023257 L 154.8824774028342 172.63637480220933 A 86.8390243902439 86.8390243902439 0 0 0 103 16.160975609756093 L 103 6.512195121951208 z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="143.31210191082803" data:startAngle="0" data:strokeWidth="0" data:value="125" data:pathOrig="M 103 6.512195121951208 A 96.48780487804879 96.48780487804879 0 0 1 160.64719711426022 180.37374978023257 L 154.8824774028342 172.63637480220933 A 86.8390243902439 86.8390243902439 0 0 0 103 16.160975609756093 L 103 6.512195121951208 z"></path></g><g id="SvgjsG1990" class="apexcharts-series apexcharts-pie-series" seriesName="InxProgress" rel="2" data:realIndex="1"><path id="SvgjsPath1991" d="M 160.64719711426022 180.37374978023257 A 96.48780487804879 96.48780487804879 0 0 1 83.82123957893091 197.56252766765306 L 85.73911562103783 188.10627490088774 A 86.8390243902439 86.8390243902439 0 0 0 154.8824774028342 172.63637480220933 L 160.64719711426022 180.37374978023257 z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="48.152866242038215" data:startAngle="143.31210191082803" data:strokeWidth="0" data:value="42" data:pathOrig="M 160.64719711426022 180.37374978023257 A 96.48780487804879 96.48780487804879 0 0 1 83.82123957893091 197.56252766765306 L 85.73911562103783 188.10627490088774 A 86.8390243902439 86.8390243902439 0 0 0 154.8824774028342 172.63637480220933 L 160.64719711426022 180.37374978023257 z"></path></g><g id="SvgjsG1992" class="apexcharts-series apexcharts-pie-series" seriesName="YetxtoxStart" rel="3" data:realIndex="2"><path id="SvgjsPath1993" d="M 83.82123957893091 197.56252766765306 A 96.48780487804879 96.48780487804879 0 0 1 8.634086897172239 123.12388964524445 L 18.070678207455032 121.11150068072 A 86.8390243902439 86.8390243902439 0 0 0 85.73911562103783 188.10627490088774 L 83.82123957893091 197.56252766765306 z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="66.49681528662418" data:startAngle="191.46496815286625" data:strokeWidth="0" data:value="58" data:pathOrig="M 83.82123957893091 197.56252766765306 A 96.48780487804879 96.48780487804879 0 0 1 8.634086897172239 123.12388964524445 L 18.070678207455032 121.11150068072 A 86.8390243902439 86.8390243902439 0 0 0 85.73911562103783 188.10627490088774 L 83.82123957893091 197.56252766765306 z"></path></g><g id="SvgjsG1994" class="apexcharts-series apexcharts-pie-series" seriesName="Cancelled" rel="4" data:realIndex="3"><path id="SvgjsPath1995" d="M 8.634086897172239 123.12388964524445 A 96.48780487804879 96.48780487804879 0 0 1 102.98315970125404 6.512196591544509 L 102.98484373112863 16.160976932390057 A 86.8390243902439 86.8390243902439 0 0 0 18.070678207455032 121.11150068072 L 8.634086897172239 123.12388964524445 z" fill="rgba(153,153,153,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="102.03821656050957" data:startAngle="257.96178343949043" data:strokeWidth="0" data:value="89" data:pathOrig="M 8.634086897172239 123.12388964524445 A 96.48780487804879 96.48780487804879 0 0 1 102.98315970125404 6.512196591544509 L 102.98484373112863 16.160976932390057 A 86.8390243902439 86.8390243902439 0 0 0 18.070678207455032 121.11150068072 L 8.634086897172239 123.12388964524445 z"></path></g></g></g></g><line id="SvgjsLine1996" x1="0" y1="0" x2="206" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1997" x1="0" y1="0" x2="206" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1981" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(10, 179, 156);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(64, 81, 137);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(247, 184, 75);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(240, 101, 72);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                            <div class="mt-3">
                                                <div class="d-flex justify-content-center align-items-center mb-4">
                                                    <h2 class="me-3 ff-secondary mb-0">258</h2>
                                                    <div>
                                                        <p class="text-muted mb-0">Total Projects</p>
                                                        <p class="text-success fw-medium mb-0">
                                                            <span class="badge badge-soft-success p-1 rounded-circle"><i class="ri-arrow-right-up-line"></i></span> +3 New
                                                        </p>
                                                    </div>
                                                </div>
        
                                                <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                                    <p class="fw-medium mb-0"><i class="ri-checkbox-blank-circle-fill text-success align-middle me-2"></i> Completed</p>
                                                    <div>
                                                        <span class="text-muted pe-5">125 Projects</span>
                                                        <span class="text-success fw-medium fs-12">15870hrs</span>
                                                    </div>
                                                </div>
                                                <!-- end -->
                                                <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                                    <p class="fw-medium mb-0"><i class="ri-checkbox-blank-circle-fill text-primary align-middle me-2"></i> In Progress</p>
                                                    <div>
                                                        <span class="text-muted pe-5">42 Projects</span>
                                                        <span class="text-success fw-medium fs-12">243hrs</span>
                                                    </div>
                                                </div>
                                                <!-- end -->
                                                <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                                    <p class="fw-medium mb-0"><i class="ri-checkbox-blank-circle-fill text-warning align-middle me-2"></i> Yet to Start</p>
                                                    <div>
                                                        <span class="text-muted pe-5">58 Projects</span>
                                                        <span class="text-success fw-medium fs-12">~2050hrs</span>
                                                    </div>
                                                </div>
                                                <!-- end -->
                                                <div class="d-flex justify-content-between py-2">
                                                    <p class="fw-medium mb-0"><i class="ri-checkbox-blank-circle-fill text-danger align-middle me-2"></i> Cancelled</p>
                                                    <div>
                                                        <span class="text-muted pe-5">89 Projects</span>
                                                        <span class="text-success fw-medium fs-12">~900hrs</span>
                                                    </div>
                                                </div>
                                                <!-- end -->
                                            </div>
                                        </div>
                                        <!-- end cardbody -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
        
                        </div>
@include('admin.layouts.footern')