<html lang="en" data-layout="horizontal" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-layout-mode="light" data-layout-width="fluid" data-layout-position="fixed"
    data-layout-style="default">

<head>
    <meta charset="utf-8">
    <title>Inscrivez-vous |Espace client CTC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin &amp; Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">


    <!-- Layout config Js -->
    <script src="{{asset('assets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/dropzone/dropzone.css') }}" type="text/css" />
    <style id="apexcharts-css">
        .apexcharts-canvas {
            position: relative;
            user-select: none;
            /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
        }

        /* scrollbar is not visible by default for legend, hence forcing the visibility */
        .apexcharts-canvas ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 6px;
        }

        .apexcharts-canvas ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px rgba(255, 255, 255, .5);
            -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        }

        .apexcharts-inner {
            position: relative;
        }

        .apexcharts-text tspan {
            font-family: inherit;
        }

        .legend-mouseover-inactive {
            transition: 0.15s ease all;
            opacity: 0.20;
        }

        .apexcharts-series-collapsed {
            opacity: 0;
        }

        .apexcharts-tooltip {
            border-radius: 5px;
            box-shadow: 2px 2px 6px -4px #999;
            cursor: default;
            font-size: 14px;
            left: 62px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 20px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            white-space: nowrap;
            z-index: 12;
            transition: 0.15s ease all;
        }

        .apexcharts-tooltip.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-tooltip.apexcharts-theme-light {
            border: 1px solid #e3e3e3;
            background: rgba(255, 255, 255, 0.96);
        }

        .apexcharts-tooltip.apexcharts-theme-dark {
            color: #fff;
            background: rgba(30, 30, 30, 0.8);
        }

        .apexcharts-tooltip * {
            font-family: inherit;
        }

        .apexcharts-tooltip-title {
            padding: 6px;
            font-size: 15px;
            margin-bottom: 4px;
        }

        .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
            background: #ECEFF1;
            border-bottom: 1px solid #ddd;
        }

        .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
            background: rgba(0, 0, 0, 0.7);
            border-bottom: 1px solid #333;
        }

        .apexcharts-tooltip-text-y-value,
        .apexcharts-tooltip-text-goals-value,
        .apexcharts-tooltip-text-z-value {
            display: inline-block;
            font-weight: 600;
            margin-left: 5px;
        }

        .apexcharts-tooltip-title:empty,
        .apexcharts-tooltip-text-y-label:empty,
        .apexcharts-tooltip-text-y-value:empty,
        .apexcharts-tooltip-text-goals-label:empty,
        .apexcharts-tooltip-text-goals-value:empty,
        .apexcharts-tooltip-text-z-value:empty {
            display: none;
        }

        .apexcharts-tooltip-text-y-value,
        .apexcharts-tooltip-text-goals-value,
        .apexcharts-tooltip-text-z-value {
            font-weight: 600;
        }

        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            padding: 6px 0 5px;
        }

        .apexcharts-tooltip-goals-group,
        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            display: flex;
        }

        .apexcharts-tooltip-text-goals-label:not(:empty),
        .apexcharts-tooltip-text-goals-value:not(:empty) {
            margin-top: -6px;
        }

        .apexcharts-tooltip-marker {
            width: 12px;
            height: 12px;
            position: relative;
            top: 0px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .apexcharts-tooltip-series-group {
            padding: 0 10px;
            display: none;
            text-align: left;
            justify-content: left;
            align-items: center;
        }

        .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
            opacity: 1;
        }

        .apexcharts-tooltip-series-group.apexcharts-active,
        .apexcharts-tooltip-series-group:last-child {
            padding-bottom: 4px;
        }

        .apexcharts-tooltip-series-group-hidden {
            opacity: 0;
            height: 0;
            line-height: 0;
            padding: 0 !important;
        }

        .apexcharts-tooltip-y-group {
            padding: 6px 0 5px;
        }

        .apexcharts-tooltip-box,
        .apexcharts-custom-tooltip {
            padding: 4px 8px;
        }

        .apexcharts-tooltip-boxPlot {
            display: flex;
            flex-direction: column-reverse;
        }

        .apexcharts-tooltip-box>div {
            margin: 4px 0;
        }

        .apexcharts-tooltip-box span.value {
            font-weight: bold;
        }

        .apexcharts-tooltip-rangebar {
            padding: 5px 8px;
        }

        .apexcharts-tooltip-rangebar .category {
            font-weight: 600;
            color: #777;
        }

        .apexcharts-tooltip-rangebar .series-name {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .apexcharts-xaxistooltip {
            opacity: 0;
            padding: 9px 10px;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #ECEFF1;
            border: 1px solid #90A4AE;
            transition: 0.15s ease all;
        }

        .apexcharts-xaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .apexcharts-xaxistooltip:after,
        .apexcharts-xaxistooltip:before {
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .apexcharts-xaxistooltip:after {
            border-color: rgba(236, 239, 241, 0);
            border-width: 6px;
            margin-left: -6px;
        }

        .apexcharts-xaxistooltip:before {
            border-color: rgba(144, 164, 174, 0);
            border-width: 7px;
            margin-left: -7px;
        }

        .apexcharts-xaxistooltip-bottom:after,
        .apexcharts-xaxistooltip-bottom:before {
            bottom: 100%;
        }

        .apexcharts-xaxistooltip-top:after,
        .apexcharts-xaxistooltip-top:before {
            top: 100%;
        }

        .apexcharts-xaxistooltip-bottom:after {
            border-bottom-color: #ECEFF1;
        }

        .apexcharts-xaxistooltip-bottom:before {
            border-bottom-color: #90A4AE;
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
            border-bottom-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
            border-bottom-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-top:after {
            border-top-color: #ECEFF1
        }

        .apexcharts-xaxistooltip-top:before {
            border-top-color: #90A4AE;
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
            border-top-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
            border-top-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-yaxistooltip {
            opacity: 0;
            padding: 4px 10px;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #ECEFF1;
            border: 1px solid #90A4AE;
        }

        .apexcharts-yaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .apexcharts-yaxistooltip:after,
        .apexcharts-yaxistooltip:before {
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .apexcharts-yaxistooltip:after {
            border-color: rgba(236, 239, 241, 0);
            border-width: 6px;
            margin-top: -6px;
        }

        .apexcharts-yaxistooltip:before {
            border-color: rgba(144, 164, 174, 0);
            border-width: 7px;
            margin-top: -7px;
        }

        .apexcharts-yaxistooltip-left:after,
        .apexcharts-yaxistooltip-left:before {
            left: 100%;
        }

        .apexcharts-yaxistooltip-right:after,
        .apexcharts-yaxistooltip-right:before {
            right: 100%;
        }

        .apexcharts-yaxistooltip-left:after {
            border-left-color: #ECEFF1;
        }

        .apexcharts-yaxistooltip-left:before {
            border-left-color: #90A4AE;
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
            border-left-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
            border-left-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-right:after {
            border-right-color: #ECEFF1;
        }

        .apexcharts-yaxistooltip-right:before {
            border-right-color: #90A4AE;
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
            border-right-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
            border-right-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip.apexcharts-active {
            opacity: 1;
        }

        .apexcharts-yaxistooltip-hidden {
            display: none;
        }

        .apexcharts-xcrosshairs,
        .apexcharts-ycrosshairs {
            pointer-events: none;
            opacity: 0;
            transition: 0.15s ease all;
        }

        .apexcharts-xcrosshairs.apexcharts-active,
        .apexcharts-ycrosshairs.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-ycrosshairs-hidden {
            opacity: 0;
        }

        .apexcharts-selection-rect {
            cursor: move;
        }

        .svg_select_boundingRect,
        .svg_select_points_rot {
            pointer-events: none;
            opacity: 0;
            visibility: hidden;
        }

        .apexcharts-selection-rect+g .svg_select_boundingRect,
        .apexcharts-selection-rect+g .svg_select_points_rot {
            opacity: 0;
            visibility: hidden;
        }

        .apexcharts-selection-rect+g .svg_select_points_l,
        .apexcharts-selection-rect+g .svg_select_points_r {
            cursor: ew-resize;
            opacity: 1;
            visibility: visible;
        }

        .svg_select_points {
            fill: #efefef;
            stroke: #333;
            rx: 2;
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
            cursor: crosshair
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-pan {
            cursor: move
        }

        .apexcharts-zoom-icon,
        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon,
        .apexcharts-reset-icon,
        .apexcharts-pan-icon,
        .apexcharts-selection-icon,
        .apexcharts-menu-icon,
        .apexcharts-toolbar-custom-icon {
            cursor: pointer;
            width: 20px;
            height: 20px;
            line-height: 24px;
            color: #6E8192;
            text-align: center;
        }

        .apexcharts-zoom-icon svg,
        .apexcharts-zoomin-icon svg,
        .apexcharts-zoomout-icon svg,
        .apexcharts-reset-icon svg,
        .apexcharts-menu-icon svg {
            fill: #6E8192;
        }

        .apexcharts-selection-icon svg {
            fill: #444;
            transform: scale(0.76)
        }

        .apexcharts-theme-dark .apexcharts-zoom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
        .apexcharts-theme-dark .apexcharts-reset-icon svg,
        .apexcharts-theme-dark .apexcharts-pan-icon svg,
        .apexcharts-theme-dark .apexcharts-selection-icon svg,
        .apexcharts-theme-dark .apexcharts-menu-icon svg,
        .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
            fill: #f3f4f5;
        }

        .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
            fill: #008FFB;
        }

        .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
        .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
        .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
        .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
            fill: #333;
        }

        .apexcharts-selection-icon,
        .apexcharts-menu-icon {
            position: relative;
        }

        .apexcharts-reset-icon {
            margin-left: 5px;
        }

        .apexcharts-zoom-icon,
        .apexcharts-reset-icon,
        .apexcharts-menu-icon {
            transform: scale(0.85);
        }

        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            transform: scale(0.7)
        }

        .apexcharts-zoomout-icon {
            margin-right: 3px;
        }

        .apexcharts-pan-icon {
            transform: scale(0.62);
            position: relative;
            left: 1px;
            top: 0px;
        }

        .apexcharts-pan-icon svg {
            fill: #fff;
            stroke: #6E8192;
            stroke-width: 2;
        }

        .apexcharts-pan-icon.apexcharts-selected svg {
            stroke: #008FFB;
        }

        .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
            stroke: #333;
        }

        .apexcharts-toolbar {
            position: absolute;
            z-index: 11;
            max-width: 176px;
            text-align: right;
            border-radius: 3px;
            padding: 0px 6px 2px 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .apexcharts-menu {
            background: #fff;
            position: absolute;
            top: 100%;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 3px;
            right: 10px;
            opacity: 0;
            min-width: 110px;
            transition: 0.15s ease all;
            pointer-events: none;
        }

        .apexcharts-menu.apexcharts-menu-open {
            opacity: 1;
            pointer-events: all;
            transition: 0.15s ease all;
        }

        .apexcharts-menu-item {
            padding: 6px 7px;
            font-size: 12px;
            cursor: pointer;
        }

        .apexcharts-theme-light .apexcharts-menu-item:hover {
            background: #eee;
        }

        .apexcharts-theme-dark .apexcharts-menu {
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
        }

        @media screen and (min-width: 768px) {
            .apexcharts-canvas:hover .apexcharts-toolbar {
                opacity: 1;
            }
        }

        .apexcharts-datalabel.apexcharts-element-hidden {
            opacity: 0;
        }

        .apexcharts-pie-label,
        .apexcharts-datalabels,
        .apexcharts-datalabel,
        .apexcharts-datalabel-label,
        .apexcharts-datalabel-value {
            cursor: default;
            pointer-events: none;
        }

        .apexcharts-pie-label-delay {
            opacity: 0;
            animation-name: opaque;
            animation-duration: 0.3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease;
        }

        .apexcharts-canvas .apexcharts-element-hidden {
            opacity: 0;
        }

        .apexcharts-hide .apexcharts-series-points {
            opacity: 0;
        }

        .apexcharts-gridline,
        .apexcharts-annotation-rect,
        .apexcharts-tooltip .apexcharts-marker,
        .apexcharts-area-series .apexcharts-area,
        .apexcharts-line,
        .apexcharts-zoom-rect,
        .apexcharts-toolbar svg,
        .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-radar-series path,
        .apexcharts-radar-series polygon {
            pointer-events: none;
        }

        /* markers */
        .apexcharts-marker {
            transition: 0.15s ease all;
        }

        @keyframes opaque {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        /* Resize generated styles */
        @keyframes resizeanim {
            from {
                opacity: 0;
            }

            to {
                opacity: 0;
            }
        }

        .resize-triggers {
            animation: 1ms resizeanim;
            visibility: hidden;
            opacity: 0;
        }

        .resize-triggers,
        .resize-triggers>div,
        .contract-trigger:before {
            content: " ";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        .resize-triggers>div {
            background: #eee;
            overflow: auto;
        }

        .contract-trigger:before {
            width: 200%;
            height: 200%;
        }
    </style>
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/logo-am.png')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('assets/images/logo-am.png')}}" alt="" height="17">
                                </span>
                            </a>
                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/logo-am.png')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('assets/images/logo-am.png')}}" alt="" height="17">
                                </span>
                            </a>
                        </div>
                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                        <!-- App Search-->
                        <form class="app-search d-none d-md-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search..." autocomplete="off"
                                    id="search-options" value="">
                                <span class="mdi mdi-magnify search-widget-icon"></span>
                                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                    id="search-close-options"></span>
                            </div>
                            <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                <div data-simplebar="init" style="max-height: 320px;">
                                    <div class="simplebar-wrapper" style="margin: 0px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                    aria-label="scrollable content"
                                                    style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px;">
                                                        <!-- item-->
                                                        <div class="dropdown-header">
                                                            <h6 class="text-overflow text-muted mb-0 text-uppercase">
                                                                Recent Searches</h6>
                                                        </div>
                                                        <div class="dropdown-item bg-transparent text-wrap">
                                                            <a href="index.html"
                                                                class="btn btn-soft-secondary btn-sm btn-rounded">how to
                                                                setup <i class="mdi mdi-magnify ms-1"></i></a>
                                                            <a href="index.html"
                                                                class="btn btn-soft-secondary btn-sm btn-rounded">buttons
                                                                <i class="mdi mdi-magnify ms-1"></i></a>
                                                        </div>
                                                        <!-- item-->
                                                        <div class="dropdown-header mt-2">
                                                            <h6 class="text-overflow text-muted mb-1 text-uppercase">
                                                                Pages</h6>
                                                        </div>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                            <i
                                                                class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                                            <span>Analytics Dashboard</span>
                                                        </a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                            <i
                                                                class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                                            <span>Help Center</span>
                                                        </a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                            <i
                                                                class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                                            <span>My account settings</span>
                                                        </a>
                                                        <!-- item-->
                                                        <div class="dropdown-header mt-2">
                                                            <h6 class="text-overflow text-muted mb-2 text-uppercase">
                                                                Members</h6>
                                                        </div>
                                                        <div class="notification-list">
                                                            <!-- item -->
                                                            <a href="javascript:void(0);"
                                                                class="dropdown-item notify-item py-2">
                                                                <div class="d-flex">
                                                                    <img src=""
                                                                        class="me-3 rounded-circle avatar-xs"
                                                                        alt="user-pic">
                                                                    <div class="flex-1">
                                                                        <h6 class="m-0">Angela Bernier</h6>
                                                                        <span
                                                                            class="fs-11 mb-0 text-muted">Manager</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <!-- item -->
                                                            <a href="javascript:void(0);"
                                                                class="dropdown-item notify-item py-2">
                                                                <div class="d-flex">
                                                                    <img src=""
                                                                        class="me-3 rounded-circle avatar-xs"
                                                                        alt="user-pic">
                                                                    <div class="flex-1">
                                                                        <h6 class="m-0">David Grasso</h6>
                                                                        <span class="fs-11 mb-0 text-muted">Web
                                                                            Designer</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <!-- item -->
                                                            <a href="javascript:void(0);"
                                                                class="dropdown-item notify-item py-2">
                                                                <div class="d-flex">
                                                                    <img src=""
                                                                        class="me-3 rounded-circle avatar-xs"
                                                                        alt="user-pic">
                                                                    <div class="flex-1">
                                                                        <h6 class="m-0">Mike Bunch</h6>
                                                                        <span class="fs-11 mb-0 text-muted">React
                                                                            Developer</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                                    </div>
                                </div>
                                <div class="text-center pt-3 pb-1">
                                    <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results
                                        <i class="ri-arrow-right-line ms-1"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="dropdown d-md-none topbar-head-dropdown header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-search fs-22"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..."
                                                aria-label="Recipient's username">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="dropdown ms-1 topbar-head-dropdown header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img id="header-lang-img" src="" alt="Header Language"
                                    height="20" class="rounded">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language py-2"
                                    data-lang="en" title="English">
                                    <img src="" alt="user-image" class="me-2 rounded"
                                        height="18">
                                    <span class="align-middle">English</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp"
                                    title="Spanish">
                                    <img src="" alt="user-image" class="me-2 rounded"
                                        height="18">
                                    <span class="align-middle">Española</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr"
                                    title="German">
                                    <img src="" alt="user-image" class="me-2 rounded"
                                        height="18"> <span class="align-middle">Deutsche</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it"
                                    title="Italian">
                                    <img src="" alt="user-image" class="me-2 rounded"
                                        height="18">
                                    <span class="align-middle">Italiana</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru"
                                    title="Russian">
                                    <img src="" alt="user-image" class="me-2 rounded"
                                        height="18">
                                    <span class="align-middle">русский</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch"
                                    title="Chinese">
                                    <img src="" alt="user-image" class="me-2 rounded"
                                        height="18">
                                    <span class="align-middle">中国人</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr"
                                    title="French">
                                    <img src="" alt="user-image" class="me-2 rounded"
                                        height="18">
                                    <span class="align-middle">français</span>
                                </a>
                            </div>
                        </div>



                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        src="" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">@if(Auth::guard('web')->check()){{Auth::guard('web')->user()->Nom}}@endif</span>
                                        <span
                                            class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">@if(Auth::guard('web')->check()){{Auth::guard('web')->user()->Qualite}}@endif</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome Anna!</h6>
                                <a class="dropdown-item" href="pages-profile.html"><i
                                        class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href="apps-chat.html"><i
                                        class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i>
                                    <span class="align-middle">Messages</span></a>
                                <a class="dropdown-item" href="apps-tasks-kanban.html"><i
                                        class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i>
                                    <span class="align-middle">Taskboard</span></a>
                                <a class="dropdown-item" href="pages-faqs.html"><i
                                        class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Help</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages-profile.html"><i
                                        class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Balance : <b>$5971.67</b></span></a>
                                <a class="dropdown-item" href="pages-profile-settings.html"><span
                                        class="badge bg-soft-success text-success mt-1 float-end">New</span><i
                                        class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Settings</span></a>
                                <a class="dropdown-item" href="auth-lockscreen-basic.html"><i
                                        class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Lock screen</span></a>
                                <a class="dropdown-item" href="{{route('logout-compte')}}"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>
            <div id="scrollbar">
                <div class="container-fluid">
                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link collapsed active" href="{{route('compte')}}"
                                data-bs-toggle="collapse" role="button" aria-expanded="true"
                                aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Tableau de bord</span>
                            </a>
                            <div class="collapse menu-dropdown show" id="sidebarDashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('compte')}}" class="nav-link" data-key="t-analytics"> Tableau de bord </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link collapsed" href="#sidebarApps" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarApps">
                                <i class="ri-pages-line"></i><span data-key="t-apps">Bon de Commande</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarApps">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{route('createBonCommanden')}}" class="nav-link" data-key="t-calendar">
                                            Ajouter </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('list_bbcommandeClient')}}" class="nav-link collapsed"
                                            data-bs-toggle="collapse" role="button" aria-expanded="false"
                                            aria-controls="sidebarProjects" data-key="t-projects">
                                            listes
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarTasks">
                                            <ul class="nav nav-sm flex-column">

                                                <li class="nav-item">
                                                    <a href="{{route('list_bbcommandeClient')}}" class="nav-link"
                                                        data-key="t-task-details"> listes </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarTasks" class="nav-link collapsed" data-bs-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="sidebarTasks"
                                            data-key="t-tasks"> Dossier Architecture
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarTasks">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-tasks-kanban.html" class="nav-link"
                                                        data-key="t-kanbanboard">
                                                        Kanban Board </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-tasks-list-view.html" class="nav-link"
                                                        data-key="t-list-view">
                                                        List View </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-tasks-details.html" class="nav-link"
                                                        data-key="t-task-details"> Task Details </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarTasks" class="nav-link collapsed" data-bs-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="sidebarTasks"
                                            data-key="t-tasks"> Dossier Génie Civil
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarTasks">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-tasks-kanban.html" class="nav-link"
                                                        data-key="t-kanbanboard">
                                                        Kanban Board </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-tasks-list-view.html" class="nav-link"
                                                        data-key="t-list-view">
                                                        List View </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-tasks-details.html" class="nav-link"
                                                        data-key="t-task-details"> Task Details </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link collapsed" href="#sidebarLayouts" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Réclamation</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayouts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="layouts-horizontal.html" target="_blank" class="nav-link"
                                            data-key="t-horizontal">Horizontal</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link collapsed" href="#sidebarPages" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarPages">
                                <i class="ri-pages-line"></i> <span data-key="t-pages">Projets</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarPages">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="pages-starter.html" class="nav-link" data-key="t-starter"> Starter </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="pages-team.html" class="nav-link" data-key="t-team"> Group </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link collapsed" href="#sidebarMaps" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarMaps">
                                <i class="ri-map-pin-line"></i> <span data-key="t-maps">Cartographie des projets</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarMaps">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="maps-leaflet.html" class="nav-link" data-key="t-leaflet">
                                            Leaflet
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                </li>
                </ul>
            </div>
            <!-- Sidebar -->
        </div>
        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
          
                
               
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-n4 mx-n4">
                <div class="bg-soft-warning">
                    <div class="card-body pb-0 px-4">
                        <div class="row mb-3">
                            <div class="col-md">
                                <div class="row align-items-center g-3">
                                    <div class="col-md-auto">
                                        <div class="avatar-md">
                                            <div class="avatar-title bg-white rounded-circle">
                                                <img src="{{asset('assets/images/brands/ooo.png')}}" alt="" class="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div>
                                            <h4 class="fw-bold">
                                                @if(Auth::guard('web')->check()){{Auth::guard('web')->user()->Nom}}@endif </h4>
                                            

                                            <div class="hstack gap-3 flex-wrap">
                                                <div  title="Bureau d'Etudes Techniques" ><i class="ri-building-line align-bottom me-1"></i> bureau</div>
                                                <div  title="Laboratoire Etudes de Sol" ><i class="ri-building-line align-bottom me-1"></i> laboratoire</div>
                                                <div class="vr"></div>
                                                <div>Date de création : <span class="fw-medium">{{ date('Y-m-d ') }}</span></div>
                                                <div class="vr"></div>
                                                <div>Délais des Travaux : <span class="fw-medium">DateDélaisTravaux Mois</span></div>
                                                <div class="vr"></div>
                                                <div class="badge rounded-pill bg-info fs-12">Actif</div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="hstack gap-1 flex-wrap">
                                    <button type="button" class="btn py-0 fs-16 favourite-btn active">
                                        <i class="ri-star-fill"></i>
                                    </button>
                                    <button type="button" class="btn py-0 fs-16 text-body">
                                        <i class="ri-share-line"></i>
                                    </button>
                                    <button type="button" class="btn py-0 fs-16 text-body">
                                        <i class="ri-flag-line"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <ul class="nav nav-tabs-custom border-bottom-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link @if( session()->get('go') == null)  active  @endif  fw-semibold" data-bs-toggle="tab" href="#project-overview" role="tab">
                                      Bon de commande
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#project-activities" role="tab">
                                    Aperçu
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-semibold @if( session()->get('go') != null)  active  @endif " data-bs-toggle="tab" href="#project-dossiers" role="tab">
                                    Dossier Technique
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#project-documents" role="tab">
                                    Bordereaux
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#Design-extérieur" role="tab">
                                   Design extérieur 3D
                                </a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#project-team" role="tab">
                                    Group
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end card body -->
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="tab-content text-muted">
                <div class="tab-pane fade @if( session()->get('go') == null) show active  @endif" id="project-overview" role="tabpanel">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Ajouter un bon de commande
                                    </h5>
                                    <div class="acitivity-timeline py-3">
                                       
                                       
                                        <div class="card-body form-steps">
                                            <form class="vertical-navs-step" action="/saveBon" method="POST"enctype="multipart/form-data" >
                                                {{ csrf_field() }}
                                                <div class="row gy-5">
                                                    <div class="col-lg-3">
                                                        <div class="nav flex-column custom-nav nav-pills" role="tablist" aria-orientation="vertical">
                                                            <button class="nav-link active" id="v-pills-bill-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-info" type="button" role="tab" aria-controls="v-pills-bill-info" aria-selected="true" data-position="0">
                                                                <span class="step-title me-2">
                                                                    <i class="ri-close-circle-fill step-icon me-2"></i> 
                                                                    Etape 1
                                                                </span>
                                                                Maitre de l'Ouvrage  
                                                            </button>
                                                            <button class="nav-link" id="v-pills-bill-address-tab"
                                                             data-bs-toggle="pill" data-bs-target="#v-pills-bill-address" type="button" role="tab" aria-controls="v-pills-bill-address" aria-selected="false" data-position="1">
                                                                <span class="step-title me-2">
                                                                    <i class="ri-close-circle-fill step-icon me-2"></i> Etape 2
                                                                </span>
                                                                Situation du Projet 
                                                            </button>
                                                            <button class="nav-link" id="v-pills-payment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-payment" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false" data-position="2">
                                                                <span class="step-title me-2">
                                                                    <i class="ri-close-circle-fill step-icon me-2"></i> Etape 3
                                                                </span>
                                                                Maitre d’œuvre 
                                                            </button>
                                                            <button class="nav-link" id="v-pills-Bureau-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Bureau" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false" data-position="2">
                                                                <span class="step-title me-2">
                                                                    <i class="ri-close-circle-fill step-icon me-2"></i> Etape 4
                                                                </span>
                                                                Bureau d’Etudes Techniques 
                                                            </button>
                                                            <button class="nav-link" id="v-pills-labo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-labo" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false" data-position="2">
                                                                <span class="step-title me-2">
                                                                    <i class="ri-close-circle-fill step-icon me-2"></i> Etape 5
                                                                </span>
                                                                Laboratoire Etudes de Sol(Géotechnique) 
                                                            </button>
                                                            <button class="nav-link" id="v-pills-Batiment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Batiment" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false" data-position="2">
                                                                <span class="step-title me-2">
                                                                    <i class="ri-close-circle-fill step-icon me-2"></i> Etape 6
                                                                </span>
                                                              DESCIPTION DES BATIMENTS et/ou OUVAGES
                                                            </button>
                                                            
                                                            <button class="nav-link" id="v-pills-finish-tab" data-bs-toggle="pill" data-bs-target="#v-pills-finish" type="button" role="tab" aria-controls="v-pills-finish" aria-selected="false" data-position="3">
                                                                <span class="step-title me-2">
                                                                    <i class="ri-close-circle-fill step-icon me-2"></i> Etape 7
                                                                </span>
                                                                Enregistrez
                                                            </button>
                                                            <button class="nav-link" id="v-pills-imprimer-tab" data-bs-toggle="pill" data-bs-target="#v-pills-imprimer" type="button" role="tab" aria-controls="v-pills-imprimer" aria-selected="false" data-position="3">
                                                                <span class="step-title me-2">
                                                                    <i class="ri-close-circle-fill step-icon me-2"></i> Etape 8
                                                                </span>
                                                               Imprimer
                                                            </button>
                                                            <button class="nav-link" id="v-pills-envoyer-tab" data-bs-toggle="pill" data-bs-target="#v-pills-envoyer" type="button" role="tab" aria-controls="v-pills-envoyer" aria-selected="false" data-position="3">
                                                                <span class="step-title me-2">
                                                                    <i class="ri-close-circle-fill step-icon me-2"></i> Etape 9
                                                                </span>
                                                               Envoyer
                                                            </button>
                                                        </div>
                                                        <!-- end nav -->
                                                    </div>
                                                    <!-- end col-->
                                                    <div class="col-lg-6">
                                                        <div class="px-lg-4">
                                                            <div class="tab-content">
                                                                <div class="tab-pane fade active show" id="v-pills-bill-info" role="tabpanel" aria-labelledby="v-pills-bill-info-tab">
                                                                    <div>
                                                                        <h5>Maitre de l'Ouvrage</h5>
                                                                        <p class="text-muted">Fill all information below</p>
                                                                    </div>
                                                                    <div>
                                                                        <div class="col-12">
                                                                            <label for="email" class="form-label">Maitre de l’Ouvrage *
                                                                             <!--   <span class="text-muted">(Optional)</span> --></label>
                                                                             @if (Auth::guard('web')->user()->type == 3)
                                                                             <input type="text" name="MaitreOuvrage" type="text" value="{{Auth::guard('web')->user()->Nom}}" class="form-control" id="email" readonly placeholder="Entrer MaitreOuvrage">
                                                                             @else
                                                                             <input id="userName-2"  name="MaitreOuvrage" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control"placeholder="Entrer MaitreOuvrage">
                                                                             @endif
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <label for="email" class="form-label">Adresse *
                                                                             <!--   <span class="text-muted">(Optional)</span> --></label>
                                                                             @if (Auth::guard('web')->user()->type == 3)
                                                                             <input type="text"name="MaitreOuvrageAdr" type="text"value="{{Auth::guard('web')->user()->Adresse}}" readonly class="form-control" id="email" placeholder="Entrer Adresse">
                                                                             @else
                                                                             <input id="userName-2"  name="MaitreOuvrage" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control" placeholder="Entrer Adresse">
                                                                             @endif
                                                                        </div>
                                                                        <div class="row g-3">
                                                                            <div class="col-sm-6">
                                                                                <label for="firstName" class="form-label">Nif </label>
                                                                                @if (Auth::guard('web')->user()->type == 3) 
                                                                                <input type="text" class="form-control" name="MaitreOuvrageNif"   value="{{Auth::guard('web')->user()->Nif}}" readonly placeholder="Entrer Nif" value="">
                                                                                @else
                                                                                <input type="text" class="form-control" name="MaitreOuvrageNif"   oninput="this.value = this.value.toUpperCase()" name="MaitreOuvrageNif"  placeholder="Entrer Nif" value="">
                                                                                @endif
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="lastName" class="form-label">Tél</label>
                                                                                @if (Auth::guard('web')->user()->type == 3) 
                                                                                <input type="text" class="form-control" id="lastName" placeholder="Entrer Tél"value="{{Auth::guard('web')->user()->Telephone}}"name="MaitreOuvrageTel">
                                                                                @else
                                                                                <input type="text" class="form-control" name="MaitreOuvrageTel" placeholder="Entrer Tél" value="">
                                                                                @endif
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="firstName" class="form-label">
                                                                                    Email </label>
                                                                                    @if (Auth::guard('web')->user()->type == 3) 
                                                                                    <input type="text" class="form-control" name="MaitreOuvrageEmail"type="email" class="form-control "value="{{Auth::guard('web')->user()->email}}" readonly>
                                                                                    @else
                                                                                    <input  class="form-control" name="MaitreOuvrageEmail"type="email"placeholder="Entrer  Email" value="">
                                                                                    @endif
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="lastName" class="form-label">Fax</label>
                                                                                @if (Auth::guard('web')->user()->type == 3) 
                                                                                <input type="text" class="form-control" name="MaitreOuvrageFax"value="{{Auth::guard('web')->user()->Fax}}" readonly>
                                                                                @else
                                                                                <input type="text"  class="form-control" name="MaitreOuvrageFax"placeholder="Entrer  Fax" value="">
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                                        <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-bill-address-tab">
                                                                            <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>L'étape suivante</button>
                                                                    </div>
                                                                </div>
                                                                <!-- end tab pane -->
                                                                <div class="tab-pane fade" id="v-pills-bill-address" role="tabpanel" aria-labelledby="v-pills-bill-address-tab">
                                                                    <div>
                                                                        <h5>Situation du Projet :</h5>
                                                                        <p class="text-muted">Ajouter description conçernant les coordonnées géographiques
                                                                        </p>
                                                                    </div>
                                                                    <div>
                                                                        <div class="row g-3">
                                                                            <div class="col-12">
                                                                                <label for="address" class="form-label">Intitulé du Projet *</label>
                                                                                <input type="text" class="form-control" id="address"name="intitule_proj" placeholder="1234 Main St">
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <label for="address2" class="form-label">Descript projet <span class="text-muted">(Optional)</span></label>
                                                                                <textarea type="text" class="form-control" id="address2"name="descript_projet" placeholder="Apartment or suite"></textarea>
                                                                            </div>
                                                                            <div class="col-md-5">
                                                                                <label for="country" class="form-label">Wilaya</label>
                                                                                <select name="country" id="country"class="form-control" required="required" data-error="Please specify your need.">
                                                                                    @foreach(App\Bwilaya::all() as $countryData)
                                                                                    <option value="{{$countryData->CODE_Wilaya}}" selected>{{$countryData->nom_wilaya}}</option>
                                                                                    @endforeach
                                                                                    </select>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <label for="state" class="form-label">Commune</label>
                                                                                <select name="state" id="state" class="form-control">
                                                                                    <option>--Commune--</option>
                                                                                     </select>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="my-4 text-muted">
                                                                        <div>
                                                                            <div class="row g-3">
                                                                                <div class="col-md-5">
                                                                                    <label for="country" class="form-label">latitude (X)</label>
                                                                                  
                                                                                    <input id="latitude" type="text" class="form-control{{ $errors->has('latitude') ? ' is-invalid' : '' }}" name="latitude" value="{{ old('latitude', request('latitude')) }}" required>
                                                                                    {!! $errors->first('latitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <label for="state" class="form-label">longitude (Y)
                                                                                    </label>
                                                                                    <input id="longitude"  type="text" class="form-control{{ $errors->has('longitude') ? ' is-invalid' : '' }}" name="longitude" value="{{ old('longitude', request('longitude')) }}" required>
                                                                                    {!! $errors->first('longitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div id="map" id="gw_map1" style="width: 780px; height: 300px !important"></div></center>
                                                                    </div>
                                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-bill-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Retour aux informations Maitre de l'Ouvrage</button>
                                                                        <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-payment-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> 
                                                                            Maitre d’œuvre</button>
                                                                    </div>
                                                                </div>
                                                                <!-- end tab pane -->
                                                                <div class="tab-pane fade" id="v-pills-payment" role="tabpanel" aria-labelledby="v-pills-payment-tab">
                                                                    <div>
                                                                        <h5>Avancement des études à la date du Bon de Commande :
                                                                        </h5>
                                                                        <p class="text-muted">Remplissez toutes les informations ci-dessous</p>
                                                                    </div>
                                                                    <div>
                                                                        <div class="my-3">
                                                                            <div class="fform-check form-check-inline">
                                                                                <input id="debit" name="paymentMethod" name="Esquisse"  type="radio" class="form-check-input" >
                                                                                <label class="form-check-label" for="credit">Esquisse</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input id="debit" name="paymentMethod"name="AvantProjet"  type="radio" class="form-check-input" >
                                                                                <label class="form-check-label" for="debit">Avant Projet</label>
                                                                            </div>


                                                                          



                                                                            <div class="form-check form-check-inline">   
                                                                                <input id="debit" name="Projetdexécution"name="AvantProjet"  type="radio" class="form-check-input" >
                                                                                <label class="form-check-label" for="paypal">Projet d’exécution</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row gy-3">
                                                                            <div class="col-12"> <h5>Maitre d’œuvre</h5>
                                                                                <label for="email" class="form-label">Dénomination *
                                                                                 <!--   <span class="text-muted">(Optional)</span> --></label>
                                                                                 <input id="userName-2"  name="maitre_oeuv" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control"placeholder="Entrer Dénomination ">
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <label for="Adresse" class="form-label">Adresse *</label>
                                                                                 <textarea id="userName-2"  name="maitre_oeuvAdresse" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control" placeholder="Entrer Adresse">
                                                                                </textarea>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <label for="firstName" class="form-label">
                                                                                    Email </label>
                                                                                    <input  class="form-control"name="maitre_oeuvEmail"type="email"placeholder="Entrer  Email" value="">
                                                                            </div>
                                                                            <div class="row g-3">
                                                                                <div class="col-sm-6">
                                                                                    <label for="lastName" class="form-label">Tél</label>
                                                                                    <input type="text" class="form-control"name="maitre_oeuvTél" placeholder="Entrer Tél" value="">
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <label for="lastName" class="form-label">Fax</label>
                                                                                    <input type="text"  class="form-control" name="maitre_oeuvFax" placeholder="Entrer  Fax" value="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-bill-address-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Situation du Projet </button>
                                                                        <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-Bureau-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>  Bureau d’Etudes Techniques </button>
                                                                    </div>
                                                                </div>
                                                                <!-- end tab pane -->
                                                                <div class="tab-pane fade" id="v-pills-Bureau" role="tabpanel" aria-labelledby="v-pills-Bureau-tab">
                                                                    <div>
                                                                        <div class="row gy-3">
                                                                            <div class="col-12"> <h5>Bureau d’Etudes Techniques</h5>
                                                                                <label for="email" class="form-label">Dénomination *
                                                                                 <!--   <span class="text-muted">(Optional)</span> --></label>
                                                                                 @if (Auth::guard('web')->user()->type == 1) 
                                                                                 <input id="userName-2" name="bureau_etud" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control"placeholder="Entrer Dénomination "value="{{Auth::guard('web')->user()->Nom}}"readonly>
                                                                                 @else
                                                                                 <select id="sel"class="form-control" name="bureauSel"  onchange="toggle()">
                                                                                    <option   class="form-control"selected disabled>Selectionée un Bureau Etude</option>
                                                                                     <option value="new"  style="color:red" class="form-control" >Ajouter un  Nouveau Bureau Etude</option>
                                                                                     @foreach(App\B_bcommande::select('bureau_etud')->where('client_id','=',Auth::guard('web')->user()->id)->groupBy('bureau_etud')->get() as $bureau)
                                                                                                                      <option class="form-control"  value="{{$bureau->bureau_etud}}">{{$bureau->bureau_etud}}</option>
                                                                                                                       @endforeach
                                                                                 </select>@endif
                                                                                </div>
                                                                            <div id="cont" style="display:none; border:solid 1px #CCC;padding:10px;">
                                                                                <div class="col-12">
                                                                                    <label for="address" class="form-label">Dénomination*</label>
                                                                                     <input id="userName-2" name="bureau_etud"type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control" placeholder="Entrer Dénomination">
                                                                                </div>
                                                                                <div class="col-12">
                                                                                <label for="Adresse" class="form-label">Adresse *
                                                                                 <input id="userName-2"  name="bureau_etudAdr" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control" placeholder="Entrer Adresse">
                                                                            </div>
                                                                            <div class="row g-3">
                                                                                <div class="col-sm-6">
                                                                                    <label for="lastName" class="form-label">Email</label>
                                                                                    <input type="text" class="form-control"name="bureau_etudEmail" placeholder="Entrer Email" value="">
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <label for="lastName" class="form-label">Tél</label>
                                                                                    <input type="text" class="form-control"name="bureau_etudTél" placeholder="Entrer Tél" value="">
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <label for="lastName" class="form-label">Fax</label>
                                                                                    <input type="text"  class="form-control" name="bureau_etudFax" placeholder="Entrer  Fax" value="">
                                                                                </div>
                                                                            </div>
                                                                            </div>
                                                                            <div class="row g-2">
                                                                                <div class="col-sm-6">
                                                                                    <label for="lastName" class="form-label">Ingénieur Chargé de l'Etude G.Civil</label>
                                                                                    <input type="text" class="form-control"name="maitre_oeuvTél" placeholder="Entrer Chargé de l'Etude" oninput="this.value = this.value.toUpperCase()"   value="">
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <label for="lastName" class="form-label">Numéro d'agrement :(tableau des Ingénieurs) </label>
                                                                                    <input type="text"  class="form-control" name="IngNumeroagrement" placeholder="Entrer  Fax" value="">
                                                                                </div>
                                                                            </div>
                                                                            <script>
                                                                                function toggle() {
                                                                                    var cont = document.getElementById('cont');
                                                                                                                              if(document.getElementById('sel').value =="new"){
                                                                                                                                 cont.style.display = 'block';
                                                                                                                                                                                }
                                                                                                                                                                                else {
                                                                                                                                                                                  cont.style.display = 'none';
                                                                                                                                                                                }
                                                                                                   }
                                                                            </script>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-payment-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Retour  Maitre d’œuvre</button>
                                                                        <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-labo-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> Laboratoire Etudes de Sol</button>
                                                                    </div>
                                                                </div>
                                                                <!-- end tab pane -->
                                                                <div class="tab-pane fade" id="v-pills-labo" role="tabpanel" aria-labelledby="v-pills-labo-tab">
                                                                    <div>
                                                                        <div class="row gy-3">
                                                                            <div class="col-12"> <h5>Laboratoire Etudes de Sol(Géotechnique) :</h5>
                                                                                <label for="email" class="form-label">Dénomination *
                                                                                 <!--   <span class="text-muted">(Optional)</span> --></label>
                                                                                 <input id="userName-2"  name="laboratoire" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control"placeholder="Entrer Dénomination ">
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <label for="Adresse" class="form-label">Adresse *</label>
                                                                                 <input id="userName-2" name="laboratoireAdresse" type="text" value=""  oninput="this.value = this.value.toUpperCase()"  class=" form-control" placeholder="Entrer Adresse">
                                                                            </div>
                                                                            <div class="row g-3">
                                                                                <div class="col-sm-6">
                                                                                    <label for="lastName" class="form-label">Email</label>
                                                                                    <input type="text" class="form-control"name="laboratoireEmail"placeholder="Entrer Tél" value="">
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <label for="lastName" class="form-label">Tél</label>
                                                                                    <input type="text" class="form-control" name="laboratoireTél" placeholder="Entrer Tél" value="">
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <label for="lastName" class="form-label">Fax</label>
                                                                                    <input type="text"  class="form-control" name="laboratoireFax" placeholder="Entrer  Fax" value="">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-Bureau-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Retour  Bureau d’Etudes Techniques</button>
                                                                        <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-Batiment-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> DESCIPTION DES BATIMENTS et/ou OUVAGES</button>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="v-pills-Batiment" role="tabpanel" 
                                                                aria-labelledby="v-pills-Batiment-tab">
                                                                    <table class="table align-middle table-nowrap">
                                                                        <tbody>
                                                                            <tr>
                                                                            <th>Surface Totale du Terrain D’Assiette en M²</th>
                                                                            <th>Date prévisionnelle du début des travaux</th>
                                                                            <th>Délais desTravaux en Mois</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input type="text" name="SurfaceConstruitM2" ></td>
                                                                            <td><input type="date" name="DateDebuttravaux"></td>
                                                                            <td><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" name="DateDélaisTravaux" ></td>
                                                                        </tr>
                                                                    </tbody></table>
                                                                    <table class="table" id="dynamicTable">  
                                                                        <tr>
                                                                        <th>Désignation du Bâtiment et/ou Ouvrage</th>
                                                                                        <th>Emprise du Bâtimentet /ou Ouvrageau Sol enm²</th>
                                                                                        <th>Nombre  d’Etages du Bâtiment et/ou Hauteurdel’ouvrage</th>
                                                                                        <th>Nombre de Bâtimentset/ou Ouvrages</th>
                                                                                        <th>Action</th>
                                                                        </tr>
                                                                        <tr>  
                                                                            <td><textarea type="text" name="addmore[0][Désignation]" oninput="this.value = this.value.toUpperCase()" class="form-control" /></textarea> </td>  
                                                                            <td><input type="text" name="addmore[0][EmpriseduBatiment]"  oninput="this.value = this.value.toUpperCase()"class="form-control" /></td>  
                                                                            <td><input type="text"  name="addmore[0][NombredEtages]" oninput="this.value = this.value.toUpperCase()"  class="form-control" /></td>  
                                                                            <td><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"name="addmore[0][NombredeBatiment]"  class="form-control" /></td>  
                                                                            <td> <div class="edit">
                                                                                <button type="button" name="add" id="add" class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Ajouter une ligne</button>
                                                                            </div></td>  
                                                                        </tr>  
                                                                    </table> 
                                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-labo-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Retour  Laboratoire Etudes de Sol</button>
                                                                        <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-finish-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> DESCIPTION DES BATIMENTS et/ou OUVAGES</button>
                                                                    </div>
                                                                </div>
                                                                
                                                           
                                                                
                                                                <div class="tab-pane fade" id="v-pills-envoyer" role="tabpanel" aria-labelledby="v-pills-envoyer-tab">
                                                                    <div class="text-center pt-4 pb-2">
                                                                        <div class="mb-4">
                                                                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                                                                        </div>
                                                                        <h5>Votre demande est terminée  !</h5>
                                                                        <div class="col text-center">
                                                                            <button type="submit" value=" Enregistrez"class="btn btn-warning"  onclick="func()"id="submit" >Envoyer</button>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="row gy-3">
                                                                        <h5>Note :</h5>
                                                                        <p class="text-muted">Aprés l'enregistrement la Visualisation du document est possible
                                                                             <i
                                                                            class="ri-eye-line align-bottom me-2 text-muted"></i>
                                                                            </a>
                                                                        </p>
                                                                        <p class="text-muted">Aprés l'envoie le document  soit envoyé automatiqument vers leCTC
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="v-pills-finish" role="tabpanel" aria-labelledby="v-pills-finish-tab">
                                                                    <div class="text-center pt-4 pb-2">
                                                                        <div class="mb-4">
                                                                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                                                                        </div>
                                                                        <h5>Votre demande est terminée  !</h5>
                                                                        <div class="col text-center">
                                                                            <button type="submit" value=" Enregistrez"class="btn btn-warning"  onclick="func()"id="submit" >Enregistrez</button>
                                                                          
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="row gy-3">
                                                                        <h5>Note :</h5>
                                                                        <p class="text-muted">Aprés l'enregistrement la Visualisation du document est possible
                                                                             <i
                                                                            class="ri-eye-line align-bottom me-2 text-muted"></i>
                                                                            </a>
                                                                        </p>
                                                                        <p class="text-muted">Aprés l'envoie le document  soit envoyé automatiqument vers leCTC
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="v-pills-imprimer" role="tabpanel" aria-labelledby="v-pills-imprimer-tab">
                                                                    <div class="text-center pt-4 pb-2">
                                                                        <div class="mb-4">
                                                                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                                                                        </div>
                                                                        <h5>Votrevvvvvvvvvvvvvvvvvvvvvvvvvvvvv demande est terminée  !</h5>
                                                                        <div class="col text-center">
                                                                            <button class="btn btn-outline-success btn-border">Imprimer</button>
                                                                            <form action="" id="frmFileUpload"
                                                                                class="dropzone dz-clickable" method="post" enctype="multipart/form-data">
                                                                                {{ csrf_field() }}
                                                                                @if (count($errors) > 0)
                                                                        @foreach($errors->all() as $error)
                                                                        <p class="alert alert-danger">{{ $error}}</p>
                                                                        @endforeach
                                                                        @endif
                                                                            <div class="card-block">
                                                                             
                                                                                <input type="file"  id="filer_input" value="docSig" accept=".pdf" name="docSig" multiple="multiple">
                                                                            </div>
                                                                        </div> <center> <button type="submit" value=" Enregistrez" class="btn btn-success"
                                                                            id="submit">Enregistrez</button></center>
                                                                        
                                                                        </form>
                                                                            <button type="submit" value=" Enregistrez"style="display: none;" class="btn btn-success" id="submit" >Envoyer</button>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <div class="row gy-3">
                                                                        <h5>Note :</h5>
                                                                        <p class="text-muted">Aprés l'enregistrement la Visualisation du document est possible
                                                                             <i
                                                                            class="ri-eye-line align-bottom me-2 text-muted"></i>
                                                                            </a>
                                                                        </p>
                                                                        <p class="text-muted">Aprés l'envoie le document  soit envoyé automatiqument vers leCTC
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <!-- end tab pane -->
                                                            </div>
                                                            <!-- end tab content -->
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </form>
                                        </div>
                                        
                                       
                                        
                                    </div>
                                </div>
                                <!--endAissa2022 card-body-->
                            </div>
                            <!-- end card -->

                            
                            <!-- end card -->
                        </div>
                        <!-- ene col -->
                      
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end tab pane -->
                <div class="tab-pane fade" id="project-documents" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                           
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card" id="orderList">
                                        <div class="card-header  border-0">
                                            <div class="d-flex align-items-center">
                                                <h5 class="card-title mb-0 flex-grow-1">Historique des Bordereaux</h5>
                                                <div class="flex-shrink-0"><a href=""class="btn btn-success add-btn" role="button">  Ajouter un Bordereau</a>
  ff
                                              
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="card-body pt-0">
                                            <div>
                                                
        
                                                <div class="table-responsive table-card mb-1">
                                                    <table class="table table-nowrap align-middle" id="orderTable">
                                                        <thead class="text-muted table-light">
                                                            <tr class="text-uppercase">
                                                                <th scope="col" style="width: 25px;">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                                    </div>
                                                                </th>
                                                                <th class="sort" data-sort="id">code Bordereau</th>
                                                               
                                                                <th class="sort" data-sort="product_name">Catégorie Plan</th>
                                                                <th class="sort" data-sort="product_name">date_Reception</th>
                                                               
                                                                <th class="sort" data-sort="city">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="list form-check-all">
                                                            @foreach(App\b_bordereaux::where('b_bon_code','=',session()->get('go') )->get() as $dd)
                                                            <tr>
                                                                <th scope="row">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                                                    </div>
                                                                </th>
                                                                <td class="id"><a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">#VZ12</a></td>
                                                                <td class="customer_name">{{$dd->code}}</td>
                                                                <td class="date">{{$dd->date_Reception}}</td>
                                                                <td class="date"></td>
                                                              
                                                                <td>
                                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                                        <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title=" Détails bordereaux">
                                                                            <a href="" class="text-primary d-inline-block">
                                                                                <i class="ri-eye-fill fs-16"></i>
                                                                            </a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                      </tbody>
                                                    </table>
                                                    <div class="noresult" style="display: none">
                                                        <div class="text-center">
                                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px"></lord-icon>
                                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                                            <p class="text-muted">We've searched more than 150+ Orders We did not find any orders for you search.</p>
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
                                            <div class="modal fade flip" id="deleteOrder" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-body p-5 text-center">
                                                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                                                            <div class="mt-4 text-center">
                                                                <h4>You are about to delete a order ?</h4>
                                                                <p class="text-muted fs-15 mb-4">Deleting your order will remove all of your information from our database.</p>
                                                                <div class="hstack gap-2 justify-content-center remove">
                                                                    <button class="btn btn-link link-success fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                                                    <button class="btn btn-danger" id="delete-record">Yes, Delete It</button>
                                                                </div>
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
                        </div>     
                        </div>     
                   
                </div>      
                            

 <!-- end tab pane --> 





                    
                  
                <div class="tab-pane fade" id="project-team" role="tabpanel">
                    <div class="row g-4 mb-3">
                        <div class="col-sm">
                            <div class="d-flex">
                                <div class="search-box me-2">
                                    <input type="text" class="form-control" placeholder="Search member...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#inviteMembersModal"><i class="ri-share-line me-1 align-bottom"></i> Invite Member</button>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="team-list list-view-filter">
                       
                        <!--end card-->
                       
                        <!--end card-->
                       
                        <!--end card-->
                        
                        <!--end card-->
                        
                        
                        <!--end card-->
                        
                        <!--end card-->
                        
                        <!--end card-->
                        <div class="card team-box">
                            <div class="card-body px-4">
                                <div class="row align-items-center team-row">
                                    <div class="col team-settings">
                                        <div class="row align-items-center">
                                          
                                            <div class="col text-end dropdown">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill fs-17"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill text-muted me-2 align-bottom"></i>View</a></li>
                                                                                                 </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="team-profile-img">
                                            <div class="avatar-lg img-thumbnail rounded-circle">
                                                <img src="" alt="" class="img-fluid d-block rounded-circle">
                                            </div>
                                            <div class="team-content">
                                                <a href="#" class="d-block">
                                                    <h5 class="fs-16 mb-1"> bureau_etud</h5>
                                                </a>
                                                <p class="text-muted mb-0">Bureau Etude Techniques </p>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-4 col">
                                        <div class="row text-muted text-center">
                                            <div class="col-6 border-end border-end-dashed">
                                                <h5 class="mb-1">Adresse</h5>
                                                <p class="text-muted mb-0">->bureau_etudAdr</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-1">Ingénieur Chargé de L'etude G.Civil</h5>
                                                <p class="text-muted mb-0">>IngControlleSite</p>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div><br>
                                <div class="row align-items-center team-row">
                                    <div class="col team-settings">
                                        <div class="row align-items-center">
                                           
                                            <div class="col text-end dropdown">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill fs-17"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill text-muted me-2 align-bottom"></i>Visualisation Profile</a></li>
                                                     </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="team-profile-img">
                                            <div class="avatar-lg img-thumbnail rounded-circle">
                                                <img src="" alt="" class="img-fluid d-block rounded-circle">
                                            </div>
                                            <div class="team-content">
                                                <a href="#" class="d-block">
                                                    <h5 class="fs-16 mb-1"> ->laboratoire</h5>
                                                </a>
                                                <p class="text-muted mb-0">Laboratoire Etudes de Sol (Géotechnique)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col">
                                        <div class="row text-muted text-center">
                                            <div class="col-6 border-end border-end-dashed">
                                                <h5 class="mb-1">Adresse</h5>
                                                <p class="text-muted mb-0"> ->laboratoireAdresse</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-1">Email</h5>
                                                <p class="text-muted mb-0">s->laboratoireEmail</p>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                        
                        <!--end card-->
                    </div>
                   
                </div>
                <!-- end tab pane -->
                <div class="tab-pane fade" id="project-activities" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                        </div>
                    </div>
                    <!--end card-->
                </div>
                <div class="tab-pane fade @if( session()->get('go') != null) show active  @endif" id="project-dossiers" role="tabpanel">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                
                
                @if(session()->has('message'))
                
                    <div class="card-body" id="kjkjk"  style="" >
                        <div class="d-flex align-items-center mb-4">
                            <h5 class="card-title flex-grow-1">chargement des pièces jointe Dossier Arhcitecture  plan version PDF/Image/DWG</h5>
                            @if($errors->any())
                            <h4 style="colro:red">{{$errors->first()}}</h4>
                            @endif 
                        </div>  @if(session()->has('message'))
                        <div class="alert alert-success"> {{ session()->get('go') }} / <input type="text" id="go" value="{{ session()->get('go') }} ">
                            inp
                           </div>
                        @endif
                        <div class="card">
                
                
                            <div class="card">
                                <div class="card-header">
                                    <h5> Télécharger le document scannée avec pièces jointe Dossier Arhcitecture</h5>
                                   
                                    <div class="card-header-right">  
                                          <ul class="list-unstyled card-option"> 
                                                   <li><i class="icofont icofont-simple-left "></i>
                                                </li>    
                                                    <li>
                                                        <i class="icofont icofont-maximize 
                                                        full-card"></i>
                                                    </li>      
                                                <li>
                        <i class="icofont icofont-minus minimize-card"></i></li>     
                           <li><i class="icofont icofont-refresh reload-card"></i></li>   
                                <li><i class="icofont icofont-error close-card"></i></li> 
                               </ul></div>
                                </div>
                              
                                <form  id="frmFileUpload"
                                    class="dropzone dz-clickable" 
                                    method="post" action="{{route('uploabordereau',session()->get('go') )}}"
                                    enctype="multipart/form-data"class="dropzone dz-clickable"
                                     id="image-upload">
                                   @csrf
                                  
                            <div class="dz-default dz-message" >    
                                Déposez les Plans ici ou cliquez pour télécharger..<br>
                                <span class="note needsclick"></span>
                              </div>
                
                           
                            </form>
                            
                        <!-- end card body Dossier Architectures -->
                    </div>
                            
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                    </div>  @endif
                </div>
                <!-- end tab pane -->
                <div class="tab-pane fade" id="Design-extérieur" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-muted">
                                <h6 class="mb-3 fw-semibold text-uppercase">Design-extérieur</h6>
                            </div>
                        </div>
                    </div> 
                    <!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                             
                                  
                                    <div class="card">
                                        <div class="card-header">
                                            <h5> Télécharger le Design-extérieur</h5>
                                            <div class="card-header-right">  
                                                  <ul class="list-unstyled card-option"> 
                                                           <li><i class="icofont icofont-simple-left "></i>
                                                        </li>    
                                                            <li>
                                                                <i class="icofont icofont-maximize 
                                                                full-card"></i>
                                                            </li>      
                                                        <li>
                                <i class="icofont icofont-minus minimize-card"></i></li>     
                                   <li><i class="icofont icofont-refresh reload-card"></i></li>   
                                        <li><i class="icofont icofont-error close-card"></i></li> 
                                       </ul></div>
                                        </div>
                                      
                                        <form  id="frmFileUploadd"
                                            class="dropzone dz-clickable" 
                                            method="post" action=""
                                            enctype="multipart/form-data"class="dropzone dz-clickable"
                                             id="image-upload">
                                           @csrf
                                           
                                    <div class="dz-default dz-message" >    
                                        Déposez les Plans ici ou cliquez pour télécharger..<br>
                                        <span class="note needsclick"></span>
                                      </div>
                
                                   
                                    </form>
                                    
                                <!-- end card body Dossier Architectures -->
                            </div>
                            <!-- end card -->
                        </div>
                        
                        
                        
                        <!-- end col -->
                    </div>
                    <div class="row gallery-wrapper" style="position: relative; height: 2148.19px;">
                        <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project designing development" data-category="designing development" style="position: absolute; left: 0px; top: 0px;">
                            <div class="gallery-box card">
                                <div class="gallery-container">
                                    <a class="image-popup" href="{{asset('assets/images/small/1500_logs.jpg')}}" title="">
                                        <img class="gallery-img img-fluid mx-auto" src="{{asset('assets/images/small/1500_logs.jpg')}}" alt="">
                                        <div class="gallery-overlay">
                                            <h5 class="overlay-caption">s->intitule_proj</h5>
                                        </div>
                                    </a>
                                </div>

                                <div class="box-content">
                                    <div class="d-flex align-items-center mt-1">
                                        <div class="flex-grow-1 text-muted">by <a href="" class="text-body text-truncate">Ron Mackie</a></div>
                                        <div class="flex-shrink-0">
                                            <div class="d-flex gap-3">
                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                    <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                </button>
                                                <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                    <i class="ri-question-answer-fill text-muted align-bottom me-1"></i> 1.3K
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end team list -->

                   
                    <!-- end row -->
                </div>
                <!-- end tab pane -->
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
   

    <!-- JAVASCRIPT -->
    <link href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" rel="stylesheet" type="text/css" />
    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
       <!-- Cordonnées geo -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    <script   src="https://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
    <script>
$("#v-pills-bill-address-tab").click(function() {
    $("#gw_map1").toggle(); setTimeout(function(){ map.invalidateSize()}, 400);
});
       var map = L.map('map');
    map.setView([36.752887, 3.042048], 13);
   //var map = L.map('map' ,{attributionControl: false}) to hide name in the map
    var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(map);
    //get coordinat location
    var latInput = document.querySelector("[name=latitude]");
    var lngInput = document.querySelector("[name=longitude]");
    var curlocation =[36.752887, 3.042048];
    map.attributionControl.setPrefix('YOUR_ATTRIBUTION');
    var marker =new L.marker(curlocation, {
                     draggable:'true',
    });
   marker.on('dragend', function (event){
         var position = marker.getLatLng();
         marker.setLatLng(position ,{
             draggable :'true',
              }).bindPopup(position).update();
              $("#latitude").val(position.lat);
              $("#longitude").val(position.lng);
   });
   map.addLayer(marker);
   map.on("click",function(e){
       var lat=e.latlng.lat;
       var lng=e.latlng.lng;
       if(!marker){
           marker= l.marker(e.latlng).addTo(maymap);
       }else{
           marker.setLatLng(e.latlng);
       }
       latInput.value=lat;
       lngInput.value=lng;
   });
    </script>
    <script type="text/javascript">
        var i = 0;
        $("#add").click(function(){
            ++i;
            $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][Désignation]"  class="form-control" /></td><td><input type="text" name="addmore['+i+'][EmpriseduBatiment]"  class="form-control" /></td><td><input type="text" name="addmore['+i+'][NombredEtages]" class="form-control" /></td> <td><input type="text" name="addmore['+i+'][NombredeBatiment]" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Supprimer</button></td></tr>');
        });
        $(document).on('click', '.remove-tr', function(){  
             $(this).parents('tr').remove();
        });  
     </script>
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
    $('#country').change(function(){
    var countryID = $(this).val();
    if(countryID){
    $.ajax({
    type:"GET",
    url:"{{url('getstatelistInscription')}}?countryid="+countryID,
    success:function(res){
    if(res){
    $("#state").empty();
    $("#state").append('<option>Select</option>');
    $.each(res,function(key,value){
    $("#state").append('<option value="'+key+'">'+value+'</option>');
    });
    }else{
    $("#state").empty();
    }
    }
    });
    }else{
    $("#state").empty();
    }
    });
    });
    </script>
    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script><script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script type="text/javascript" src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script type="text/javascript" src="assets/libs/flatpickr/flatpickr.min.js"></script>
    <!-- form wizard init -->
    <script src="assets/js/pages/form-wizard.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body></html>
<script src="{{asset('assets/libs/dropzone/dropzone-min.js')}}"></script>

<script  src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
@include('front.layouts.scripts.dropzone')

