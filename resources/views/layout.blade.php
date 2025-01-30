<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title', 'myTask Management')</title>
    <link rel="icon" href="/images/favicon.png">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link href="../../css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font-awesome-4.7.0/css/font-awesome.min.css') }}" />
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/icofont.css') }}" />
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/themify.css') }}" />
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flag-icon.css') }}" />
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/feather-icon.css') }}" />
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/slick-theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/echart.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/date-picker.css') }}" />
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}" />
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link id="color" rel="stylesheet" href="{{ asset('assets/css/color-1.css') }}" media="screen" />
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />

    {{-- CKEditor --}}
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.3.1/ckeditor5.css" />
    <link rel="stylesheet"
        href="https://cdn.ckeditor.com/ckeditor5-premium-features/43.3.1/ckeditor5-premium-features.css" />
    <script type="importmap">
        {
            "imports": {
                "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.3.1/ckeditor5.js",
                "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.3.1/",
                "ckeditor5-premium-features": "https://cdn.ckeditor.com/ckeditor5-premium-features/43.3.1/ckeditor5-premium-features.js",
                "ckeditor5-premium-features/": "https://cdn.ckeditor.com/ckeditor5-premium-features/43.3.1/"
            }
        }
    </script>
    <script type="module" src="{{ asset('assets/vendor/ckeditor5.js') }}"></script>
    @stack('styles')
    <!--/ Include css/scss -->
    <style>
        .modal-content {
            background-color: white !important;
        }

        .modal-backdrop {
            background-color: black !important;
            opacity: 0.8 !important;
        }
    </style>

</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
                    <ul class="nav-menus" style="visibility: hidden">
                        <li class="profile-nav onhover-dropdown">
                            <div class="media profile-media">
                                <div class=" p-1 rounded-pill">
                                    <img class="b-r-10" src="{{ asset('assets/images/logo/user.png') }}" alt=""
                                        style="width: 28px" />
                                </div>
                                <div class="media-body d-xxl-block d-none box-col-none">
                                    <div class="d-flex align-items-center gap-2">
                                        <span></span>
                                    </div>
                                    <p class="mb-0 font-roboto"></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Header Ends -->

        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper" style="" data-layout="stroke-svg">
                <div class="logo-wrapper">
                    <a href="javascript:void(0)">
                        <h1 class="text-light" style="font-family: cursive">myTask Management</h1>
                    </a>
                    <div class="toggle-sidebar">
                        <i class="status_toggle middle sidebar-toggle" data-feather="grid">
                        </i>
                    </div>
                </div>
                <div class="logo-icon-wrapper">
                    <a><img class="img-fluid" src="{{ asset('assets/check.png') }}" alt=""
                            style="width: 25px" /></a>
                </div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow">
                        <i data-feather="arrow-left"></i>
                    </div>
                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn">
                                <a><img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}"
                                        alt="" /></a>
                                <div class="mobile-back text-end">
                                    <span>Back </span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                                </div>
                            </li>
                            <li class="sidebar-main-title">
                                <div>
                                    <h6 class="lan"></h6>
                                </div>
                            </li>
                            <li class="sidebar-list">
                                <i class=""> </i><a class="sidebar-link" style="cursor: pointer;"
                                    href="{{ route('admin.dashboard') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                                    </svg><span class="lan">Dashboard</span></a>
                            </li>
                            <li class="sidebar-list">
                                <i class=""></i><a class="sidebar-link" style="cursor: pointer;"
                                    href="{{ route('admin.task') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-form') }}"></use>
                                    </svg><span class="lan">Tasks</span></a>
                            </li>
                            <li class="sidebar-list">
                                <i class=""></i><a class="sidebar-link" style="cursor: pointer;"
                                    href="{{ route('admin.project') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-sample-page') }}">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-sample-page') }}">
                                        </use>
                                    </svg><span class="lan">Projects</span></a>
                            </li>
                            <li class="sidebar-list">
                                <i class=""></i><a class="sidebar-link" href="{{ route('admin.team') }}"
                                    style="cursor: pointer;">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-user') }}">
                                        </use>
                                    </svg>
                                    <svg class="fill-icon">
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#fill-user') }}">
                                        </use>
                                    </svg><span class="lan">Team Members</span></a>
                            </li>
                        </ul>
                        <div class="right-arrow" id="right-arrow">
                            <i data-feather="arrow-right"></i>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Page Sidebar Ends-->
            @yield('content')
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">
                                Developed by
                                <a href="javascript:void(0)" style="text-decoration: none">Vaibhav Suthar</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- latest jquery-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar-pin.js') }}"></script>
    <!-- calendar js-->
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard_3.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/theme-customizer/customizer.js') }}"></script>
    {{-- Ckeditor --}}
    <script type="module">
        import {
            ClassicEditor,
            Essentials,
            Bold,
            Italic
        } from '../../assets/vendor/ckeditor5.js';

        ClassicEditor
            .create(document.querySelector('#editor'), {
                plugins: [Essentials, Bold, Italic],
                toolbar: ['bold', 'italic']
            })
            .then(editor => {
                console.log('Editor initialized:', editor);
            })
            .catch(error => {
                console.error('Error initializing editor:', error);
            });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                },
                customClass: {
                    popup: 'swal-toast-custom' // Optional: Add custom styling
                }
            });

            Toast.fire({
                icon: 'success',
                title: '{{ session('success') }}'
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                },
                customClass: {
                    popup: 'swal-toast-custom' // Optional: Add custom styling
                }
            });

            Toast.fire({
                icon: 'error',
                title: '{{ session('error') }}'
            });
        </script>
    @endif

    @stack('scripts')
</body>

</html>
