<!DOCTYPE html>


<!-- =========================================================
* sneat - Bootstrap Dashboard PRO | v2.0.0
==============================================================

* Product Page: https://themeselection.com/item/sneat-dashboard-pro-bootstrap/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->


<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template" data-style="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>VerdIES @yield('title')</title>


    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 Admin Dashboard built for developers!">
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/">


    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://res.cloudinary.com/dxtlbsa62/image/upload/v1717962322/Verdies/srx3xflk0atk71jzrmdq.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="{{ asset('Cliente/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap') }}" rel="stylesheet">


    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('Cliente/assets/vendor/fonts/boxicons.css') }}">
    <link rel="stylesheet" href="{{ asset('Cliente/assets/vendor/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('Cliente/assets/vendor/fonts/flag-icons.css') }}">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('Cliente/assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css">
    <link rel="stylesheet" href="{{ asset('Cliente/assets/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css">
    <link rel="stylesheet" href="{{ asset('Cliente/assets/css/demo.css') }}">


    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('Cliente/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('Cliente/assets/vendor/libs/typeahead-js/typeahead.css') }}">
    <link rel="stylesheet" href="{{ asset('Cliente/assets/vendor/libs/apex-charts/apex-charts.css') }}">



    <!-- Page CSS -->


    <!-- Helpers -->
    <script src="{{ asset('Cliente/assets/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('Cliente/assets/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('Cliente/assets/js/config.js') }}"></script>



    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />


    <!-- EcoTienda fontss -->
    @if(isset($ecoTiendaFonts) && $ecoTiendaFonts)
    <!-- font -->
    <link rel="stylesheet" href="{{ asset('Cliente/assets/fonts/fonts.css') }}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('Cliente/assets/fonts/font-icons.css') }}">
    @endif


    <!-- customCSS -->
    <link rel="stylesheet" href="{{ asset('Cliente/assets/scss/custom_layout.css') }}">

</head>

<body class="{{ session('theme', 'light') }}">

    @include('cliente.layouts.loader')




    <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <!-- Menu -->
            @if(isset($dontshownavbarWindow) && $dontshownavbarWindow)
            <style>
                #layout-menu {
                    display: none !important;
                }


                @media (min-width: 1200px) {
                    .layout-menu-fixed.layout-menu-collapsed .layout-page {
                        padding-left: 0 !important;
                    }
                }

                @media (min-width: 1200px) {

                    .layout-menu-fixed:not(.layout-menu-collapsed) .layout-page,
                    .layout-menu-fixed-offcanvas:not(.layout-menu-collapsed) .layout-page {
                        padding-left: 0 !important;
                    }
                }

                .layout-navbar-fixed .layout-navbar.navbar-detached {
                    width: 80% !important;
                }

                @media (min-width: 1200px) {

                    .layout-navbar-fixed:not(.layout-menu-collapsed) .layout-content-navbar:not(.layout-without-menu) .layout-navbar,
                    .layout-menu-fixed.layout-navbar-fixed:not(.layout-menu-collapsed) .layout-content-navbar:not(.layout-without-menu) .layout-navbar,
                    .layout-menu-fixed-offcanvas.layout-navbar-fixed:not(.layout-menu-collapsed) .layout-content-navbar:not(.layout-without-menu) .layout-navbar {
                        left: 0 !important;
                    }
                }
            </style>
            @else
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo ">

                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">

                            <img src="{{ asset('assets/img/logo/VerdIESLogo_sin_letras.png') }}" alt="" width="50">

                        </span>

                        <style>
                            .app-brand-logo {
                                margin-right: -18.6px !important;
                            }
                        </style>
                        <span class="app-brand-text demo menu-text fw-bold ms-2 span-firstWord">erd<span class="span-enphasisWord">IES</span></span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>



                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item active">
                        <a href="/clientes/inicios" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-home"></i>
                            <div class="text-truncate" data-i18n="Inicio">Inicio</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/clientes/residuos" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-recycle"></i>
                            <div class="text-truncate" data-i18n="Residuos">Residuos</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/clientes/canje" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-package"></i>
                            <div class="text-truncate" data-i18n="Canje">Canje</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/clientes/promociones" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-purchase-tag-alt"></i>
                            <div class="text-truncate" data-i18n="Promociones">Promociones</div>
                        </a>
                    </li>
                </ul>



            </aside>
            @endif
            <!-- / Menu -->



            <!-- Layout container -->
            <div class="layout-page">





                <!-- Navbar -->




                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">











                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0   d-xl-none ">
                        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                            <i class="bx bx-menu bx-md"></i>
                        </a>
                    </div>


                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">




                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item navbar-search-wrapper mb-0">
                                <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                                    <i class="bx bx-search bx-md"></i>
                                    <span class="d-none d-md-inline-block text-muted fw-normal ms-4">Buscar...</span>
                                </a>
                            </div>
                        </div>
                        <!-- /Search -->





                        <ul class="navbar-nav flex-row align-items-center ms-auto">



                            <!-- Notification -->
                            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <span class="position-relative">
                                        <i class="bx bx-bell bx-md"></i>
                                        <span class="badge rounded-pill bg-success badge-dot badge-notifications border"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-0">
                                    <li class="dropdown-menu-header border-bottom">
                                        <div class="dropdown-header d-flex align-items-center py-3">
                                            <h6 class="mb-0 me-auto">Notification</h6>
                                            <div class="d-flex align-items-center h6 mb-0">
                                                <span class="badge bg-label-primary me-2">8 New</span>
                                                <a href="javascript:void(0)" class="dropdown-notifications-all p-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="bx bx-envelope-open text-heading"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-notifications-list scrollable-container">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="{{ asset('Cliente/assets/img/avatars/1.png') }}" alt="" class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="small mb-0">Congratulation Lettie 🎉</h6>
                                                        <small class="mb-1 d-block text-body">Won the monthly best seller gold badge</small>
                                                        <small class="text-muted">1h ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="small mb-0">Charles Franklin</h6>
                                                        <small class="mb-1 d-block text-body">Accepted your connection</small>
                                                        <small class="text-muted">12hr ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="{{ asset('Cliente/assets/img/avatars/2.png') }}" alt="" class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="small mb-0">New Message ✉️</h6>
                                                        <small class="mb-1 d-block text-body">You have new message from Natalie</small>
                                                        <small class="text-muted">1h ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-cart"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="small mb-0">Whoo! You have new order 🛒 </h6>
                                                        <small class="mb-1 d-block text-body">ACME Inc. made new order $1,154</small>
                                                        <small class="text-muted">1 day ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="{{ asset('Cliente/assets/img/avatars/9.png') }}" alt="" class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="small mb-0">Application has been approved 🚀 </h6>
                                                        <small class="mb-1 d-block text-body">Your ABC project application has been approved.</small>
                                                        <small class="text-muted">2 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-pie-chart-alt"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="small mb-0">Monthly report is generated</h6>
                                                        <small class="mb-1 d-block text-body">July monthly financial report is generated </small>
                                                        <small class="text-muted">3 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="{{ asset('Cliente/assets/img/avatars/5.png') }}" alt="" class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="small mb-0">Send connection request</h6>
                                                        <small class="mb-1 d-block text-body">Peter sent you connection request</small>
                                                        <small class="text-muted">4 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="{{ asset('Cliente/assets/img/avatars/6.png') }}" alt="" class="rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="small mb-0">New message from Jane</h6>
                                                        <small class="mb-1 d-block text-body">Your have new message from Jane</small>
                                                        <small class="text-muted">5 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bx-error"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="small mb-0">CPU is running high</h6>
                                                        <small class="mb-1 d-block text-body">CPU Utilization Percent is currently at 88.63%,</small>
                                                        <small class="text-muted">5 days ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="border-top">
                                        <div class="d-grid p-4">
                                            <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                                                <small class="align-middle">View all notifications</small>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Notification -->






                            <!-- Style Switcher -->
                            <!-- <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <i class='bx bx-md'></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                            <span><i class='bx bx-sun bx-md me-3'></i>Claro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                            <span><i class="bx bx-moon bx-md me-3"></i>Oscuro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                            <span><i class="bx bx-desktop bx-md me-3"></i>Sistema</span>
                                        </a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- / Style Switcher-->

                            <!-- Cart -->
                            @if(isset($showCart) && $showCart)
                            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#shoppingCart" data-bs-toggle="modal">
                                    <span class="position-relative">
                                        <i class="bx bx-cart
                                    bx-md"></i>
                                        <span id="notificationCartSpan" class="badge rounded-pill bg-success badge-dot badge-notifications border" style="display:none;"></span>
                                    </span>
                                </a>
                            </li>
                            @endif

                            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#paymentMethods" data-bs-toggle="modal">
                                    <i class='bx bx-wallet'></i>
                                </a>
                            </li>




                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{Session::get('Foto') }}" rounded="true" alt="" class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{Session::get('Foto')}}" rounded="true" alt="" class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0">{{Session::get('nombre') }}</h6>
                                                    <small class="text-muted">Cliente</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-profile-user.html">
                                            <i class="bx bx-user bx-md me-3"></i><span>Mi cuenta</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a id="theme-toggle" class="dropdown-item" href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <i id="theme-icon" class="bx bx-sun bx-md"></i><span id="theme-text" class="ms-2">Modo Claro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <i class="bx bx-cog bx-md me-3"></i><span>Configuración</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider my-1"></div>
                                    </li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button class="dropdown-item" type="submit"> <i class="bx bx-power-off bx-md me-3"></i>Logout</button>
                                        </form>
                                    </li>

                                </ul>
                            </li>
                            <!--/ User -->


                        </ul>
                    </div>


                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper  d-none">
                        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
                        <i class="bx bx-x bx-md search-toggler cursor-pointer"></i>
                    </div>


                </nav>



                <!-- / Navbar -->

                <!-- Layout wrapper -->
                <div class="layout-wrapper layout-content-navbar">
                    @if(isset($dontshownavbarphone) && $dontshownavbarphone)
                    @else
                    <div class="nav__menu" id="nav-menu">
                        <ul class="nav__list">
                            <li class="nav__item">
                                <a href="/clientes/inicios" class="nav__link active-link">
                                    <i class='bx bxs-home nav__icon'></i>
                                    <span class="nav__name">Inicio</span>
                                </a>
                            </li>

                            <li class="nav__item">
                                <a href="/clientes/residuos" class="nav__link">
                                    <i class='bx bx-recycle nav__icon'></i>
                                    <span class="nav__name">Residuos</span>
                                </a>
                            </li>

                            <li class="nav__item">
                                <a href="/clientes/canje" class="nav__link">
                                    <i class='bx bx-package nav__icon'></i>
                                    <span class="nav__name">Canje</span>
                                </a>
                            </li>

                            <li class="nav__item">
                                <a href="/clientes/promociones" class="nav__link">
                                    <i class='menu-icon tf-icons bx bx-purchase-tag-alt'></i>
                                    <span class="nav__name">Promociones</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    @endif





                    <!-- Content wrapper -->
                    <div class="content-wrapper">

                        <!-- Content -->

                        <div class="container-xxl flex-grow-1 container-p-y">

                            @yield('content')










                            <div class="content-backdrop fade"></div>
                        </div>
                        <!-- Content wrapper -->
                    </div>
                    <!-- / Layout page -->
                </div>



                <!-- Overlay -->
                <div class="layout-overlay layout-menu-toggle"></div>


                <!-- Drag Target Area To SlideIn Menu On Small Screens -->
                <div class="drag-target"></div>

            </div>
            <!-- / Layout wrapper -->


        </div>


    </div>

    <!-- Se crea el modal para el total de monedas que tiene el usuario -->
    <livewire:TotalMonedasUser />








    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('Cliente/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('Cliente/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('Cliente/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('Cliente/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('Cliente/assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('Cliente/assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('Cliente/assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
    <script src="{{ asset('Cliente/assets/vendor/js/menu.js') }}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('Cliente/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('Cliente/assets/vendor/libs/toastr/toastr.js') }}"></script>





    <!-- Main JS -->
    <script src="{{ asset('Cliente/assets/js/main.js') }}"></script>


    <!-- Page JS -->
    <script src="{{ asset('Cliente/assets/js/dashboards-analytics.js') }}"></script>





</body>

</html>

<!-- beautify ignore:end -->


<script>
    // // Muestra el loader
    // function showLoader() {
    //     document.getElementById('loader').style.display = 'flex';
    //     document.body.style.overflow = 'hidden';
    // }

    // // Oculta el loader
    // function hideLoader() {
    //     document.getElementById('loader').style.display = 'none';
    //     document.body.style.overflow = '';
    // }


    // function someFunction() {
    //     showLoader();

    //     // Espera a que todas las assets (imágenes, scripts, etc.) se carguen
    //     window.onload = function() {
    //         hideLoader();
    //     };
    // }

    // someFunction();


    // // Ejemplo de ocultar el loader cuando la página está completamente cargada
    // // window.addEventListener('load', function() {
    // //     hideLoader();
    // // });


    document.addEventListener("DOMContentLoaded", function() {
        // Obtener la URL actual
        const currentUrl = window.location.pathname;

        // Seleccionar todos los elementos de menú en la primera navbar
        const menuItems1 = document.querySelectorAll(".menu-item");

        // Recorrer todos los elementos de menú de la primera navbar
        menuItems1.forEach(item => {
            // Obtener el enlace dentro del elemento de menú
            const link = item.querySelector("a");

            // Verificar si la URL del enlace coincide con la URL actual
            if (link.getAttribute("href") === currentUrl) {
                // Agregar la clase "active" al elemento de menú
                item.classList.add("active");
            } else {
                // Asegurarse de que los demás elementos no tengan la clase "active"
                item.classList.remove("active");
            }
        });

        // Seleccionar todos los elementos de menú en la segunda navbar
        const menuItems2 = document.querySelectorAll(".nav__item");

        // Recorrer todos los elementos de menú de la segunda navbar
        menuItems2.forEach(item => {
            // Obtener el enlace dentro del elemento de menú
            const link = item.querySelector("a");

            // Verificar si la URL del enlace coincide con la URL actual
            if (link.getAttribute("href") === currentUrl) {
                // Agregar la clase "active-link" al enlace
                link.classList.add("active-link");
            } else {
                // Asegurarse de que los demás enlaces no tengan la clase "active-link"
                link.classList.remove("active-link");
            }
        });
    });
</script>


<script>

</script>