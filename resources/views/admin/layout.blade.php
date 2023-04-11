<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('assets') }}" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Codepilot | @yield('title')</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ url('assets/admin/img/fav.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ url('assets/admin/vendor/fonts/boxicons.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('assets/vendor/px-pagination/px-pagination.css') }}" rel="stylesheet">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ url('assets/admin/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ url('assets/admin/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ url('assets/admin/css/demo.css') }}" />
    <link href="{{ asset('assets/vendor/px-pagination/px-pagination.css') }}" rel="stylesheet">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ url('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ url('assets/admin/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ url('assets/admin/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ url('assets/admin/js/config.js') }}"></script>

    @yield('custom-css')
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{ url('/dashboard') }}" class="app-brand-link">

                        <img src="{{ asset('assets/admin/img/logo.png') }}"
                            style="width: 30%; position:absolute; left:80px" alt="DC-West Karbi Anglong">

                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">

                    {{-- <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Pages</span>
                </li> --}}
                    <!-- Dashboard -->
                    <li class="menu-item @if ($page == 'dashboard') active @endif">
                        <a href="{{ url('/dashboard') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    {{-- <li class="menu-item @if ($page == 'portfolio-admin') active @endif">
                        <a href="{{ url('/portfolioAdmin') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Portfolio</div>
                        </a>
                    </li> --}}

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Blog</span>
                    </li>
                    <li class="menu-item @if (in_array($page, ['add_category', 'view_category', 'add-blog', 'view-blog'])) active open @endif">
                        <a class="menu-link menu-toggle nav-link " data-bs-target="#blognav" data-bs-toggle="collapse">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Blog Settings</div>
                        </a>
                        <ul id="blognav" class="menu-sub nav-content collapse" data-bs-parent="#sidebar-nav">
                            <li class="menu-item @if ($page == 'add_category') active @endif">
                                <a href="{{ url('/addBlogCat') }}" class="menu-link">
                                    <div data-i18n="Account">Add Blog Category</div>
                                </a>
                            </li>
                            <li class="menu-item @if ($page == 'view_category') active @endif">
                                <a href="{{ url('/viewBlogCat') }}" class="menu-link">
                                    <div data-i18n="Account">View Blog Category</div>
                                </a>
                            </li>
                            <li class="menu-item @if ($page == 'add-blog') active @endif">
                                <a href="{{ url('/addBlogAdmin') }}" class="menu-link">
                                    <div data-i18n="Notifications">Add Blog</div>
                                </a>
                            </li>
                            <li class="menu-item @if ($page == 'view-blog') active @endif">
                                <a href="{{ url('/viewBlog') }}" class="menu-link">
                                    <div data-i18n="Notifications">View Blog</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Case Study</span>
                    </li>
                    <li class="menu-item @if (in_array($page, ['casestudy', 'viewCasestudy'])) active open @endif">
                        <a class="menu-link menu-toggle nav-link " data-bs-target="#blognav" data-bs-toggle="collapse">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Case Study Settings</div>
                        </a>
                        <ul id="blognav" class="menu-sub nav-content collapse" data-bs-parent="#sidebar-nav">
                            <li class="menu-item @if ($page == 'casestudy') active @endif">
                                <a href="{{ url('/addCaseStudy') }}" class="menu-link">
                                    <div data-i18n="Account">Add Case Study</div>
                                </a>
                            </li>
                            <li class="menu-item @if ($page == 'viewCasestudy') active @endif">
                                <a href="{{ url('/viewCaseStudy') }}" class="menu-link">
                                    <div data-i18n="Account">View Case Study</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Career</span>
                    </li>
                    <li class="menu-item @if (in_array($page, ['add-career', 'view-career'])) active open @endif">
                        <a class="menu-link menu-toggle nav-link " data-bs-target="#blognav"
                            data-bs-toggle="collapse">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Career Settings</div>
                        </a>
                        <ul id="blognav" class="menu-sub nav-content collapse" data-bs-parent="#sidebar-nav">
                            <li class="menu-item @if ($page == 'add-career') active @endif">
                                <a href="{{ url('/add-career') }}" class="menu-link">
                                    <div data-i18n="Account">Add Career</div>
                                </a>
                            </li>
                            <li class="menu-item @if ($page == 'view-career') active @endif">
                                <a href="{{ url('/view-career') }}" class="menu-link">
                                    <div data-i18n="Account">View Career</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Layouts -->

                    <li class="menu-item @if ($page == 'logout') active @endif">
                        <a href="{{ url('/logout') }}" class="menu-link text-danger">
                            <i class="menu-icon tf-icons bx bx-power-off"></i>
                            <div data-i18n="Analytics">Logout</div>
                        </a>
                    </li>

                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <h3 class="text-primary fw-bold text-uppercase my-auto">@yield('page-title')</h3>

                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/admin/img/avatar.png') }}" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar ">
                                                        <img src="{{ asset('assets/admin/img/avatar.png') }}" alt
                                                            class="w-px-50 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span
                                                        class="fw-semibold d-block">{{ session()->get('user_name', 'User') }}</span>
                                                    <small
                                                        class="text-muted">{{ session()->get('user_role', 'User') }}</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    {{-- <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li> --}}
                                    <li>
                                        {{-- <div class="dropdown-divider"></div> --}}
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ url('logout') }}">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">

                        @yield('body')

                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">

                                <p>
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | Developed by <a
                                        href="https://www.codepilot.in/" target="_blank">Codepilot Technologies</a>
                                </p>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->

    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ url('assets/admin/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ url('assets/admin/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ url('assets/admin/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ url('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    {{-- <script src="{{ url('assets/vendor/ckeditor5-build-classic/ckeditor.js') }}"></script> --}}
    <script src="{{ url('assets/vendor/ckeditor5/build/ckeditor.js') }}"></script>

    <script src="{{ url('assets/admin/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ url('assets/admin/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ url('assets/admin/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ url('assets/admin/js/dashboards-analytics.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script src="{{ asset('assets/vendor/px-pagination/px-pagination.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

    @yield('custom-js')
</body>

</html>
