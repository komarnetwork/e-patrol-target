<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

   <title>E-PatrolTarget</title>

   <meta name="description"
      content="E-PatrolTarget &amp; Security created by komarudin and published on Target Security">
   <meta name="author" content="komarudin">
   <meta name="robots" content="noindex, nofollow">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- Icons -->
   <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
   <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
   <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">
   @yield('css_before')
   <!-- <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}"> -->
   <!-- Fonts and Styles -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
   <link rel="stylesheet" id="css-main" href="{{ mix('css/dashmix.css') }}">
   <!-- Page JS Plugins CSS -->
   <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
   <!-- <link rel="stylesheet" id="css-theme" href="{{ mix('css/themes/xwork.css') }}"> -->
   @yield('css_after')

   <!-- Scripts -->
   <script>
      window.Laravel = {
         "csrfToken": "{{ csrf_token() }}"
      };
   </script>
</head>

<body>
   <div id="page-container" class="page-header-dark main-content-boxed">

      <!-- Header -->
      <header id="page-header">
         <!-- Header Content -->
         <div class="content-header">
            <!-- Left Section -->
            <div class="d-flex align-items-center">
               <!-- Logo -->
               <a class="fw-semibold text-dual tracking-wide" href="/">
                  <span class="fw-normal">E-Patrol-Target</span>
               </a>
               <!-- END Logo -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div>
               <!-- User Dropdown -->
               <div class="dropdown d-inline-block">
                  <button type="button" class="btn btn-alt-secondary dropdown-toggle" id="page-header-user-dropdown"
                     data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <span class="d-none d-sm-inline me-1">{{ auth()->user()->username }}</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                     aria-labelledby="page-header-user-dropdown">
                     <div class="rounded-top fw-semibold text-white text-center bg-primary-dark-op">
                        <div class="p-3">
                           <img class="img-avatar img-avatar-thumb" src="{{ asset('media/avatars/avatar10.jpg') }}"
                              alt="">
                        </div>
                        <div class="p-3 bg-primary-dark-op">
                           <a class="text-white fw-semibold" href="#">{{ auth()->user()->username }}</a>
                           <div class="text-white-75">{{ auth()->user()->email }}</div>
                        </div>
                     </div>
                     <div class="p-2">
                        <a class="dropdown-item d-flex justify-content-between align-items-center"
                           href="javascript:void(0)">
                           Profile
                           <i class="fa fa-fw fa-user-circle opacity-50 ms-1"></i>
                        </a>
                        <div role="separator" class="dropdown-divider"></div>

                        <form action="{{ route('logout') }}" method="post">
                           @csrf
                           {{-- <a class="dropdown-item d-flex justify-content-between align-items-center"
                              href="op_auth_signin.html">
                              Log Out
                              <i class="fa fa-fw fa-sign-out-alt text-danger ms-1"></i>
                           </a> --}}
                           <button type="submit" class="dropdown-item d-flex justify-content-between "> Logout
                              <i class="fa fa-fw fa-sign-out-alt text-danger ms-1"></i></button>
                        </form>

                     </div>
                  </div>
               </div>
               <!-- END User Dropdown -->
            </div>
            <!-- END Right Section -->
         </div>
         <!-- END Header Content -->

         <!-- Header Loader -->
         <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
         <div id="page-header-loader" class="overlay-header bg-primary">
            <div class="content-header">
               <div class="w-100 text-center">
                  <i class="fa fa-fw fa-2x fa-spinner fa-spin text-white"></i>
               </div>
            </div>
         </div>
         <!-- END Header Loader -->
      </header>
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
         <!-- Navigation -->
         <div class="bg-sidebar-dark">
            <div class="content">
               <!-- Toggle Main Navigation -->
               <div class="d-lg-none push">
                  <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
                  <button type="button" class="btn w-100 btn-primary d-flex justify-content-between align-items-center"
                     data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                     Menu
                     <i class="fa fa-bars"></i>
                  </button>
               </div>

               <!-- END Toggle Main Navigation -->

               <!-- Main Navigation -->
               <div id="main-navigation" class="d-none d-lg-block push">
                  <ul class="nav-main nav-main-horizontal nav-main-hover nav-main-dark">
                     <li class="nav-main-item">
                        <a class="nav-main-link active" href="{{ route('dashboard') }}">
                           <i class="nav-main-link-icon fa fa-chart-pie"></i>
                           <span class="nav-main-link-name">Dashboard</span>
                        </a>
                     </li>
                     <li class="nav-main-item">
                        <a class="nav-main-link" href="db_analytics.html">
                           <i class="nav-main-link-icon fa fa-chart-pie"></i>
                           <span class="nav-main-link-name">Data Area</span>
                        </a>
                     </li>
                     <li class="nav-main-item">
                        <a class="nav-main-link" href="db_analytics.html">
                           <i class="nav-main-link-icon fa fa-users"></i>
                           <span class="nav-main-link-name">Data Personil</span>
                        </a>
                     </li>
                     <li class="nav-main-item">
                        <a class="nav-main-link" href="db_analytics.html">
                           <i class="nav-main-link-icon fa fa-clock"></i>
                           <span class="nav-main-link-name">Data Absensi</span>
                        </a>
                     </li>
                     <li class="nav-main-item">
                        <a class="nav-main-link" href="db_analytics.html">
                           <i class="nav-main-link-icon fa fa-chart-pie"></i>
                           <span class="nav-main-link-name">Data Asset</span>
                        </a>
                     </li>
                     <li class="nav-main-item">
                        <a class="nav-main-link" href="db_analytics.html">
                           <i class="nav-main-link-icon fa fa-chart-pie"></i>
                           <span class="nav-main-link-name">Data Patroli</span>
                        </a>
                     </li>
                  </ul>
               </div>
               <!-- END Main Navigation -->
            </div>
         </div>
         <!-- END Navigation -->
         @include('layouts.breadcrumb')
         @yield('content')
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <footer id="page-footer" class="bg-body-light">
         <div class="content py-0">
            <div class="row fs-sm">
               <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                  Development <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold"
                     target="_blank">komarudin</a>
               </div>
               <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                  <a class="fw-semibold" href="http://targetsecurindo.co.id/" target="_blank">PT Target Kelola
                     Securindo</a> &copy;
                  <span data-toggle="year-copy"></span>
               </div>
            </div>
         </div>
      </footer>
      <!-- END Footer -->
   </div>
   <!-- END Page Container -->

   <!-- Dashmix Core JS -->
   <script src="{{ mix('js/dashmix.app.js') }}"></script>

   <!-- Laravel Original JS -->
   {{-- <script src="{{ mix('/js/laravel.app.js') }}"></script> --}}
   <script src="{{ asset('js/lib/jquery.min.js') }}"></script>
   <!-- Page JS Plugins -->
   @yield('js_after')
</body>

</html>
