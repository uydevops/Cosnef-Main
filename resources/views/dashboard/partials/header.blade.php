<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Cosneff Laser Technology</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Altf4 Yazılım" name="description" />
    <meta content="Altf4 L-MasterBM" name="author" />
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}">
    <link href="{{ asset('assets/libs/metrojs/release/MetroJs.Full/MetroJs.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />


</head>

<body data-topbar="dark">
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <div class="navbar-brand-box">
                        <a href="{{route('dashboard')}}" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{asset('images/logo.png')}}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{asset('images/logo.png')}}" alt="" height="55px">
                            </span>
                        </a>
                    </div>
                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </div>
                 <div class="search-wrap" id="search-wrap">
                    <div class="search-bar">
                        <input class="search-input form-control" placeholder="Search" />
                        <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                            <i class="mdi mdi-close-circle"></i>
                        </a>
                    </div>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect notification-step" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="badge bg-danger rounded-pill">2</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <h6 class="m-0">Bildirimler (258) </h6>
                            </div>

                            <div data-simplebar style="max-height: 230px;">
                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="mdi mdi-cart-outline"></i>
                                            </span>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-1 font-size-15">Test Bildirim</h6>
                                            <div class="text-muted">
                                                <p class="mb-1 font-size-12">Test Bildirimi</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>


                            </div>
                            <div class="p-2 border-top d-grid">
                                <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle me-1"></i> Tüm Bildirimleri Gör
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- full-screen -->
                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="mdi mdi-fullscreen"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect user-step" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{ asset(Auth::user()->image) }}" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()->name }}</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- öğe-->
                            <a class="dropdown-item" href="#"><i class="dripicons-user d-inline-block text-muted me-2"></i> Profil</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-wallet d-inline-block text-muted me-2"></i> Cüzdanım</a>
                            <a class="dropdown-item" href="#"><i class="dripicons-lock d-inline-block text-muted me-2"></i> Ekranı Kilitle</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"><i class="dripicons-exit d-inline-block text-muted me-2"></i> Çıkış Yap</a>
                        </div>
                    </div>


                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Main</li>

                        <li>
                            <a href="{{route('dashboard')}}" class="waves-effect">
                                <i class="mdi mdi-speedometer"></i>
                                <span>Analiz</span>
                            </a>
                        </li>


                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-spin mdi-cog"></i>
                                <span>Ayarlar</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('users')}}"><i class="mdi mdi-account-settings"></i>Kullanıcı Ayarları</a> </li>
                                <li><a href="#"><i class="mdi mdi-bell-ring"></i>Bildirim Ayarları</a> </li>
                                <li><a href="#"><i class="mdi mdi-account-multiple"></i>Personel Ayarları</a> </li>
                                <li><a href="#"><i class="mdi mdi-account-group"></i>Departman Ayarları</a> </li>
                            </ul>
                        </li>


                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-account-multiple"></i>
                                <span>Müsteriler</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('companies')}}"><i class="mdi mdi-account-plus"></i>Müsteri Listesi</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-cart"></i>
                                <span>Satışlar</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#"><i class="mdi mdi-cart-plus"></i>Satış Ekle</a></li>
                                <li><a href="#"><i class="mdi mdi-cart-minus"></i>Satış İptal</a></li>
                                <li><a href="#"><i class="mdi mdi-cart-arrow-down"></i>Satış İade</a></li>
                                <li><a href="#"><i class="mdi mdi-cart-outline"></i>Satış Listesi</a></li>
                                <li><a href="#"><i class="mdi mdi-cart-remove"></i>Satış Sil</a></li>
                                <li><a href="#"><i class="mdi mdi-cart-plus"></i>Satış Düzenle</a></li>
                            </ul>
                        </li>


                        <!---Ürühler-->
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-package-variant-closed"></i>
                                <span>Ürünler</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{route('products')}}"><i class="mdi mdi-package-variant"></i>Ürün Listesi</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>