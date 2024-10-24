<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.css') }}">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/ekko-lightbox/ekko-lightbox.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

  
  <style>
    .sidebar-color{
      color:white !important;
    }
    .nav-link.active {
      font-weight: bold; /* Example styling */
      color: white !important; /* Example styling */
      background-color:#6f42c1;
      border-radius:3px;
      /* Add your desired active state styles here */
    }
    .active{
      background-color:#6f42c1 !important;
      color:white !important;
    }
    .background-image {
        width: 800px;
        height: 400px;
        background-image: url('{{ asset('adminlte/dist/img/nerp-sales.png') }}'); /* Replace with your image path */
        background-size: cover; /* Ensures the image covers the entire div */
        background-position: center; /* Centers the image within the div */
        margin: auto; /* Center the div horizontally */
        margin-top: 50px; /* Example: Adds some top margin */
    }
    .modal {
      margin-top:30px;
    }
  </style>
  </head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

      @include('layouts/module_list')

    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('adminlte/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('adminlte/dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('adminlte/dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " data-widget="control-sidebar" data-control sidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar  elevation-4" style="background:{{$theme->hexa}};color:{{$theme->font_color}} !important;font-weight:bolder;">
    <!-- Brand Logo -->
    <a href="javascript:void(0)" class="brand-link" style="margin-bottom:1px;text-align:center;">
      @if($company_now->id == 1)
          <img src="{{ Storage::url('public/website-logo/').$company_now->image }}" style="width:60%;height:60px;">
      @elseif($company_now->id == 2)
          <img src="{{ Storage::url('public/website-logo/').$company_now->image }}" style="width:100%;height:100px;">
      @elseif($company_now->id == 3)
          <p style="width:100%;height:10px;">Suktura V2</p>
      @elseif($company_now->id == 4)
          <p style="width:100%;height:10px;">Nebraska V2</p>
      @elseif($company_now->id == 5)
          <img src="{{ Storage::url('public/website-logo/').$company_now->image }}" style="width:80%;height:70px;">
      @elseif($company_now->id == 6)
          <p style="width:100%;height:10px;">Glowing</p>
      @elseif($company_now->id == 7) 
          <img src="{{ Storage::url('public/website-logo/').$company_now->image }}" style="width:90%;height:40px;">
      @elseif($company_now->id == 8) 
          <img src="{{ Storage::url('public/website-logo/').$company_now->image }}" style="width:90%;height:40px;">
      @elseif($company_now->id == 9) 
          <img src="{{ Storage::url('public/website-logo/').$company_now->image }}" style="width:90%;height:40px;">
      @else
          -
      @endif
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <select id="Select" class="form-control  " style="width: 100%;" >
          @forelse($companies as $company)
              <option 
                  value="{{ $company->id }}" 
                  style="padding-top:5px;margin-bottom:5px;"
                  @if($company->name == $company_now->name) selected @endif>
                  Company {{ $company->name }}
              </option>
          @empty
              <option value="">-</option>
          @endforelse
        </select>

        <select id="outletSelect" class="form-control select2 " style="width: 100%;" >
          @forelse($outlets as $outlet)
            <option value="{{ $outlet->id }}" style="padding-top:5px;margin-bottom:5px;"> Outlet {{ $outlet->name }} </option>
            @empty
            <option value="">-</option>
          @endforelse
        </select>
      <hr class="bg-white">
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search Menu" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw text-white"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard-erp.html" class="nav-link text-white">
              <i class="nav-icon fa fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('companies.index')}}" class="nav-link text-white {{ request()->routeIs('companies.index') ? 'active' : '' }}">
              <i class="nav-icon fa fa-briefcase"></i>
              <p>
                Company
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('departments.index')}}" class="nav-link text-white {{ request()->routeIs('departments.index') ? 'active' : '' }}">
              <i class="nav-icon fa fa-briefcase"></i>
              <p>
                Department
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('outlets.index')}}" class="nav-link text-white {{ request()->routeIs('outlets.index') ? 'active' : '' }}">
              <i class="nav-icon fa fa-store"></i>
              <p>
                Outlet
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('brands.index')}}" class="nav-link text-white {{ request()->routeIs('brands.index') ? 'active' : '' }}">
              <i class="nav-icon fa fa-tags"></i>
              <p>
                Brand
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('banks.index')}}" class="nav-link text-white {{ request()->routeIs('banks.index') ? 'active' : '' }}">
              <i class="nav-icon fa fa-university"></i>
              <p>
                Bank
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('roles.index')}}" class="nav-link text-white {{ request()->routeIs('roles.index') ? 'active' : '' }}">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Roles
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Content Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-3">
              <li class="nav-item">
                <a href="../../../content_management/topic_pages.html" class="nav-link text-white">
                  <i class="far fa-file-alt nav-icon"></i>
                  <p>Topics (Pages)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../../content_management/message_templates.html" class="nav-link text-white">
                  <i class="fa fa-envelope-open-text nav-icon"></i>
                  <p>Message Templates</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../../content_management/news_items.html" class="nav-link text-white">
                  <i class="far fa-newspaper  nav-icon"></i>
                  <p>News Items</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../../content_management/news_comments.html" class="nav-link text-white">
                  <i class="far fa-comment  nav-icon"></i>
                  <p>News Comments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../../content_management/blog_posts.html" class="nav-link text-white">
                  <i class="fa fa-blog  nav-icon"></i>
                  <p>Blog Posts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../../content_management/blog_commens.html" class="nav-link text-white">
                  <i class="far fa-comment  nav-icon"></i>
                  <p>Blog Comments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../../content_management/polls.html" class="nav-link text-white">
                  <i class="fa fa-poll  nav-icon"></i>
                  <p>Polls </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../../content_management/forums.html" class="nav-link text-white">
                  <i class="fa fa-comments-dollar nav-icon"></i>
                  <p>Forums </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white">
              <i class="nav-icon fa fa-cogs"></i>
              <p>
                Configuration
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-3">
              <li class="nav-item">
                <a href="#" class="nav-link text-white">
                  <i class="fa fa-cog  nav-icon"></i>
                  <p>
                    Settings
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview ml-3">
                  <li class="nav-item">
                    <a href="../../../configuration/settings/general_settings.html" class="nav-link text-white">
                      <i class="fa fa-cogs  nav-icon"></i>
                      <p>General Settings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/settings/customer_settings.html" class="nav-link text-white">
                      <i class="fa fa-users-cog nav-icon"></i>
                      <p>Customer Settings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/settings/order_settings.html" class="nav-link text-white">
                      <i class="fa fa-shopping-cart nav-icon"></i>
                      <p>Order Settings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/settings/shipping_settings.html" class="nav-link text-white">
                      <i class="fa fa-truck  nav-icon"></i>
                      <p>Shipping Settings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/settings/tax_settings.html" class="nav-link text-white">
                      <i class="fa fa-percent  nav-icon"></i>
                      <p>Tax Settings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/settings/catalog_settings.html" class="nav-link text-white">
                      <i class="fa fa-book-open nav-icon"></i>
                      <p>Catalog Settings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/settings/shopping_settings.html" class="nav-link text-white">
                      <i class="fa fa-shopping-bag nav-icon"></i>
                      <p>Shopping Cart Settings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/settings/reward_settings.html" class="nav-link text-white">
                      <i class="fa fa-gift  nav-icon"></i>
                      <p>Reward Points</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/settings/gdpr_settings.html" class="nav-link text-white">
                      <i class="fa fa-user-lock nav-icon"></i>
                      <p>GDPR Settings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/settings/vendor_settings.html" class="nav-link text-white">
                      <i class="fa fa-store  nav-icon"></i>
                      <p>Vendor Settings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/settings/blog_settings.html" class="nav-link text-white">
                      <i class="fa fa-blog  nav-icon"></i>
                      <p>Blog Settings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/settings/news_settings.html" class="nav-link text-white">
                      <i class="far fa-newspaper  nav-icon"></i>
                      <p>News Settings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/settings/forum_settings.html" class="nav-link text-white">
                      <i class="far fa-comments  nav-icon"></i>
                      <p>Forum Settings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/settings/media_settings.html" class="nav-link text-white">
                      <i class="far fa-images nav-icon"></i>
                      <p>Media Settings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/settings/all_settings_advances.html" class="nav-link text-white">
                      <i class="fa fa-cogs  nav-icon"></i>
                      <p>All Settings (Advances)</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/email_account.html" class="nav-link text-white">
                      <i class="far fa-envelope  nav-icon"></i>
                      <p>Email Accounts</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/stores.html" class="nav-link text-white">
                      <i class="fa fa-store-alt nav-icon"></i>
                      <p>Stores</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/countries.html" class="nav-link text-white">
                      <i class="fa fa-globe  nav-icon"></i>
                      <p>Countries</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/languages.html" class="nav-link text-white">
                      <i class="fa fa-language  nav-icon"></i>
                      <p>Languages</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/currencies.html" class="nav-link text-white">
                      <i class="fa fa-dollar-sign nav-icon"></i>
                      <p>Currencies</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/payment_methods.html" class="nav-link text-white">
                      <i class="far fa-credit-card nav-icon"></i>
                      <p>Payment Methods</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/payment_restrictions.html" class="nav-link text-white">
                      <i class="fa fa-ban  nav-icon"></i>
                      <p>Payment Restrictions</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/tax_providers.html" class="nav-link text-white">
                      <i class="fa fa-landmark  nav-icon"></i>
                      <p>Tax Providers</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../../configuration/tax_categories.html" class="nav-link text-white">
                      <i class="fa fa-tags  nav-icon"></i>
                      <p>Tax Categories</p>
                    </a>
                  </li>
                  

                  <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                      <i class="fa fa-shipping-fast nav-icon"></i>
                      <p>
                        Shipping
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview ml-3">
                      <li class="nav-item">
                        <a href="../../../configuration/shippings/shipping_providers.html" class="nav-link text-white">
                          <i class="fas fa-shipping-box nav-icon"></i>
                          <p>Shipping Providers</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../../../configuration/shippings/warehouses.html" class="nav-link text-white">
                          <i class="far fa-warehouse  nav-icon"></i>
                          <p>Warehouses</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../../../configuration/shippings/pickup_points.html" class="nav-link text-white">
                          <i class="far fa-map-marker-alt nav-icon"></i>
                          <p>Pickup Points</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../../../configuration/shippings/dates_ranges.html" class="nav-link text-white">
                          <i class="far fa-calendar-alt nav-icon"></i>
                          <p>Dates and Ranges</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../../../configuration/shippings/measures.html" class="nav-link text-white">
                          <i class="far fa-ruler-combined nav-icon"></i>
                          <p>Measures</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                      <i class="fa fa-cash-register nav-icon"></i>
                      <p>
                        POS
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="../../../configuration/pos/paypal_zettle.html" class="nav-link text-white">
                          <i class="fa fa-paypal  nav-icon"></i>
                          <p>PayPal Zettle</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../../../configuration/shippings/access_control_list.html" class="nav-link text-white">
                          <i class="fa fa-lock  nav-icon"></i>
                          <p>Accesss control list</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../../../configuration/shippings/widgets.html" class="nav-link text-white">
                          <i class="fa fa-cogs  nav-icon"></i>
                          <p>Widgets</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link text-white">
                          <i class="fa fa-user-lock nav-icon"></i>
                          <p>
                            Authentication
                            <i class="fas fa-angle-left right"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="../../../configuration/authentication/external_authentication.html" class="nav-link text-white">
                              <i class="fa fa-user-shield nav-icon"></i>
                              <p>External Authentication</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="../../../configuration/authentication/multi_factor_authentication.html" class="nav-link text-white">
                              <i class="fa fa-shield-alt nav-icon"></i>
                              <p>Multi-factor Authentication</p>
                            </a>
                          </li>
                          
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link text-white">
                          <i class="fa fa-globe  nav-icon"></i>
                          <p>Web API</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link text-white">
                          <i class="fa fa-puzzle-piece nav-icon"></i>
                          <p>Local Plugins</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link text-white">
                          <i class="fa fa-cube  nav-icon"></i>
                          <p>All Plugins and Themes</p>
                        </a>
                      </li>
                    </ul>
                  </li>

                </ul>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link text-white">
                  <i class="fa fa-box  nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link text-white">
                  <i class="far fa-list-alt nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link text-white">
                  <i class="fa fa-industry  nav-icon"></i>
                  <p>Manufacturers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link text-white">
                  <i class="far fa-star nav-icon"></i>
                  <p>Product Reviews</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link text-white">
                  <i class="fa fa-tags  nav-icon"></i>
                  <p>Product Tags</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white">
              <i class="nav-icon fa fa-cogs"></i>
              <p>
                System
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-3">
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link text-white">
                  <i class="fa fa-info-circle nav-icon"></i>
                  <p>System Information</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link text-white">
                  <i class="fa fa-file-alt nav-icon"></i>
                  <p>Log</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link text-white">
                  <i class="fa fa-exclamation-triangle nav-icon"></i>
                  <p>Warnings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link text-white">
                  <i class="fa fa-wrench  nav-icon"></i>
                  <p>Maintenance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link text-white">
                  <i class="fa fa-envelope  nav-icon"></i>
                  <p>Message Queue</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link text-white">
                  <i class="fa fa-clock  nav-icon"></i>
                  <p>Schedule Tasks</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link text-white">
                  <i class="fa fa-file  nav-icon"></i>
                  <p>Search Engine Friendly Pages Names</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link text-white">
                  <i class="fa fa-paint-brush nav-icon"></i>
                  <p>Templates</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white">
              <i class="nav-icon fa fa-question-circle"></i>
              <p>
                Help
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-3">
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link text-white">
                  <i class="fa fa-chalkboard-teacher nav-icon"></i>
                  <p>Training</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link text-white">
                  <i class="fa fa-file-alt nav-icon"></i>
                  <p>Documentation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link text-white">
                  <i class="fa fa-users  nav-icon"></i>
                  <p>Community Forums</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link text-white">
                  <i class="fa fa-handshake  nav-icon"></i>
                  <p>Premium Support Services</p>
                </a>
              </li>>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link text-white">
                  <i class="fa fa-handshake-alt-slash nav-icon"></i>
                  <p>Solution Partners</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="../../../attributes/product_attributes.html" class="nav-link text-white">
              <i class="far fa-star nav-icon"></i>
              <p>Service Report</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../../attributes/specification_attributes.html" class="nav-link text-white">
              <i class="far fa-star nav-icon"></i>
              <p>Reservation Report</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../../attributes/specification_attributes.html" class="nav-link text-white">
              <i class="far fa-star nav-icon"></i>
              <p>Reservation & Utilization Report</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="dashboard-erp.html" class="nav-link text-white">
              <i class="nav-icon fa fa-sign-out-alt"></i>
              <p>
                Sign Out
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper kanban">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <div class="modal fade" id="modal-lg" >
    <div class="modal-dialog modal-lg">
      <div class="modal-content" style="background-color:#43114d">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body background-image">

        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <footer class="main-footer">
    NERP 2024
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>



<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('adminlte/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('adminlte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('adminlte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('adminlte/dist/js/pages/dashboard.js') }}"></script>
<!-- Ekko Lightbox -->
<script src="{{ asset('adminlte/plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- Filterizr-->
<script src="{{ asset('adminlte/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('adminlte/dist/js/pages/dashboard.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>


<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('adminlte/') }}dist/js/pages/dashboard3.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>



@stack('scripts')

</body>
</html>
