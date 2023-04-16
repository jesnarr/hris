<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        HRIS | {{ $title }}
    </title>
    <!-- Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8S4EZTER6N"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-8S4EZTER6N');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @yield('og')
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/vendors.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fa-regular.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fa-duotone.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.bundle.css') }}">
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}"> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900">
    {{-- <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png"> --}}
    {{-- <link rel="mask-icon" href="{{ asset('img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5"> --}}
    <link rel="stylesheet" href="{{ asset('css/datagrid/datatables/datatables.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formplugins/bootstrap-datepicker/bootstrap-datepicker.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/notifications/sweetalert2/sweetalert2.bundle.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/notifications/toastr/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themes/cust-theme-1.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/apps.css') }}"> --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('head')
    @yield('head')
    @livewireStyles
    <style>
        swal2-container {
            transition: 0.1s filter;
            filter: blur(10px);
        }

        .swal2-container {
            z-index: 2060 !important;
        }

        .modal {
            z-index: 2050 !important;
        }

        .fade {
            -webkit-transition: none !important;
            -moz-transition: none !important;
            -ms-transition: none !important;
            -o-transition: none !important;
            transition: none !important;
        }

        .card-title {
            font-weight: bold;
        }

        .panel-toolbar {
            display: none !important;
        }

        .blur {
            filter: none !important;
        }
    </style>
</head>

<body class="mod-bg-1 nav-function-fixed header-function-fixed mod-hide-info-card">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MBWP9HM" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script>
        'use strict';

        var classHolder = document.getElementsByTagName("BODY")[0],
            themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {},
            themeURL = themeSettings.themeURL || '',
            themeOptions = themeSettings.themeOptions || '';
        if (themeSettings.themeOptions) {
            classHolder.className = themeSettings.themeOptions;
        }
        if (themeSettings.themeURL && !document.getElementById('mytheme')) {
            var cssfile = document.createElement('link');
            cssfile.id = 'mytheme';
            cssfile.rel = 'stylesheet';
            cssfile.href = themeURL;
            document.getElementsByTagName('head')[0].appendChild(cssfile);
        }
        var saveSettings = function() {
            themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item) {
                return /^(nav|header|mod|display)-/i.test(item);
            }).join(' ');
            if (document.getElementById('mytheme')) {
                themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
            };
            localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
        }
        var resetSettings = function() {
            localStorage.setItem("themeSettings", "");
        }
    </script>

    <div class="page-wrapper">
        <div class="page-inner">
            <aside class="page-sidebar">
                {{-- <div class="page-logo"> --}}
                <a href="/" class="page-logo-link press-scale-down d-flex align-items-center position-relative">
                    {{-- <img src="#" style="padding-left: -2rem; width: 10px;" alt="Logo"
                        aria-roledescription="logo">
                    <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span> --}}
                </a>
                {{-- </div> --}}
                <!-- BEGIN PRIMARY NAVIGATION -->
                @include('layouts.sidebar')
                <!-- END PRIMARY NAVIGATION -->
            </aside>
            <div class="page-content-wrapper">
                <!-- BEGIN Page Header -->
                <header class="page-header" role="banner">
                    <!-- we need this logo when user switches to nav-function-top -->
                    <div class="page-logo">
                        <a href="/"
                            class="page-logo-link press-scale-down d-flex align-items-center position-relative"
                            data-toggle="modal" data-target="#modal-shortcut">
                            <span class="page-logo-text mr-1">HRIS</span>
                            <span
                                class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                        </a>
                    </div>
                    <!-- DOC: nav menu layout change shortcut -->
                    <a href="#" class="hidden-md-down header-btn btn js-waves-off" data-action="toggle"
                        data-class="nav-function-minify" title="Minify Navigation">
                        <i class="ni ni-minify-nav"></i>
                    </a>
                    <!-- DOC: mobile button appears during mobile width -->
                    <div class="hidden-lg-up">
                        <a href="#" class="header-btn btn press-scale-down" data-action="toggle"
                            data-class="mobile-nav-on">
                            <i class="ni ni-menu"></i>
                        </a>
                    </div>
                    <div class="mt-4">
                        <ol class="breadcrumb page-breadcrumb">
                            @yield('breadcrumbs')
                        </ol>
                    </div>
                    <div class="ml-auto d-flex">
                        <!-- app user menu -->

                        @admin
                            @include('layouts.settings')
                        @endadmin

                        <div>
                            <a href="#" data-toggle="dropdown" title="drlantern@gotbootstrap.com"
                                class="header-icon d-flex align-items-center justify-content-center ml-2">
                                <img src="{{ Auth::user()->employee->image ?? asset('img/admin-logo.png') }}"
                                    class="profile-image rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                                <div
                                    class="dropdown-header bg-gradient-to-r from-green-400 to-blue-500 d-flex flex-row py-4 rounded-top">
                                    <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                        <span class="mr-2">
                                            <img src="{{ Auth::user()->employee->image ?? asset('img/admin-logo.png') }}"
                                                class="rounded-circle profile-image">
                                        </span>
                                        <div class="info-card-text">
                                            <div class="fs-lg text-truncate text-truncate-lg">
                                                {{ Auth::user()->name }}</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="dropdown-item" data-action="app-fullscreen">
                                    <span data-i18n="drpdwn.fullscreen">Fullscreen</span>
                                    <i class="float-right text-muted fw-n">F11</i>
                                </a>
                                <div class="dropdown-divider m-0"></div>
                                <a class="dropdown-item fw-500 pt-3 pb-3" href="/profile">
                                    <span>Profile</span>
                                </a>
                                <div class="dropdown-divider m-0"></div>
                                <a class="dropdown-item fw-500 pt-3 pb-3" href="javascript:void(0)" onclick="logout()">
                                    <span>Logout</span>
                                </a>
                            </div>
                        </div>
                </header>
                <!-- END Page Header -->

                <!-- BEGIN Page Content -->
                <!-- the #js-page-content id is needed for some plugins to initialize -->
                <main id="js-page-content" role="main" class="page-content">
                    <x-forms.button-dark class="mb-3" onclick="backPage()"><i class="fal fa-arrow-left"></i>
                        Back</x-forms.button-dark>
                    @yield('content')
                </main>
                <!-- this overlay is activated only when mobile menu is triggered -->
                <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>

            </div>
        </div>
    </div>
    <!-- END Page Wrapper -->

    <!-- BEGIN Quick Menu -->
    <nav class="shortcut-menu d-none d-sm-block">
        <input type="checkbox" class="menu-open" name="menu-open" id="menu_open" />
        <label for="menu_open" class="menu-open-button ">
            <span class="app-shortcut-icon d-block"></span>
        </label>
        <a href="#" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Scroll Top">
            <i class="fal fa-arrow-up"></i>
        </a>
        <a href="/logout" class="menu-item btn" data-toggle="tooltip" data-placement="left" title="Logout">
            <i class="fal fa-sign-out"></i>
        </a>
        <a href="#" class="menu-item btn" data-action="app-fullscreen" data-toggle="tooltip"
            data-placement="left" title="Full Screen">
            <i class="fal fa-expand"></i>
        </a>
    </nav>
    <p id="js-color-profile" class="d-none">
        <span class="color-primary-50"></span>
        <span class="color-primary-100"></span>
        <span class="color-primary-200"></span>
        <span class="color-primary-300"></span>
        <span class="color-primary-400"></span>
        <span class="color-primary-500"></span>
        <span class="color-primary-600"></span>
        <span class="color-primary-700"></span>
        <span class="color-primary-800"></span>
        <span class="color-primary-900"></span>
        <span class="color-info-50"></span>
        <span class="color-info-100"></span>
        <span class="color-info-200"></span>
        <span class="color-info-300"></span>
        <span class="color-info-400"></span>
        <span class="color-info-500"></span>
        <span class="color-info-600"></span>
        <span class="color-info-700"></span>
        <span class="color-info-800"></span>
        <span class="color-info-900"></span>
        <span class="color-danger-50"></span>
        <span class="color-danger-100"></span>
        <span class="color-danger-200"></span>
        <span class="color-danger-300"></span>
        <span class="color-danger-400"></span>
        <span class="color-danger-500"></span>
        <span class="color-danger-600"></span>
        <span class="color-danger-700"></span>
        <span class="color-danger-800"></span>
        <span class="color-danger-900"></span>
        <span class="color-warning-50"></span>
        <span class="color-warning-100"></span>
        <span class="color-warning-200"></span>
        <span class="color-warning-300"></span>
        <span class="color-warning-400"></span>
        <span class="color-warning-500"></span>
        <span class="color-warning-600"></span>
        <span class="color-warning-700"></span>
        <span class="color-warning-800"></span>
        <span class="color-warning-900"></span>
        <span class="color-success-50"></span>
        <span class="color-success-100"></span>
        <span class="color-success-200"></span>
        <span class="color-success-300"></span>
        <span class="color-success-400"></span>
        <span class="color-success-500"></span>
        <span class="color-success-600"></span>
        <span class="color-success-700"></span>
        <span class="color-success-800"></span>
        <span class="color-success-900"></span>
        <span class="color-fusion-50"></span>
        <span class="color-fusion-100"></span>
        <span class="color-fusion-200"></span>
        <span class="color-fusion-300"></span>
        <span class="color-fusion-400"></span>
        <span class="color-fusion-500"></span>
        <span class="color-fusion-600"></span>
        <span class="color-fusion-700"></span>
        <span class="color-fusion-800"></span>
        <span class="color-fusion-900 z-10 z-20 z-30 z-40 z-50"></span>
    </p>
    @livewire('test-livewire')
    <!-- END Quick Menu -->
    @livewireScripts
    @yield('modals')
    @stack('modals')

    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        // Echo.channel('notification')
        //     .listen('NewNotification', (e) => {
        //         Livewire.emit('new-notification')
        //     })
    </script>
    <script src="{{ asset('js/vendors.bundle.js') }}"></script>
    <script src="{{ asset('js/app.bundle.js') }}"></script>
    <script src="{{ asset('js/datagrid/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    {{-- <script src="{{ asset('js/notifications/sweetalert2/sweetalert2.bundle.js') }}"></script> --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/notifications/toastr/toastr.js') }}"></script>
    <script src="{{ asset('js/_app.js') }}"></script>
    <script src="{{ asset('js/api.js') }}"></script>
    <script type="text/javascript">
        const backPage = () => {
            location.href = "{!! url()->previous() !!}"
        }
        $('#js-page-content').smartPanel();

        const logout = async () => {
            const res = await callApi('post', '/logout', {})
            displayMessage('success', 'Logout Successfully.')
            return location.reload()
        }

        const closeModal = (id) => {
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Undo Changes?',
                showConfirmButton: true,
                confirmButtonColor: '#3B82F6',
                showCancelButton: true,
                cancelButtonColor: '#EF4444',
                preConfirm: async () => {
                    Livewire.emit('close-modal')
                    $(`#${id}`).modal('toggle')
                }
            })
        }

        window.addEventListener('close-modal', event => {
            $(`#${event.detail.id}`).modal('toggle')
            $('.dt-basic').DataTable().ajax.reload(null, false)
        })

        window.addEventListener('reload-datatable', event => {
            $('.dt-basic').DataTable().ajax.reload(null, false)
        })
    </script>
    @stack('scripts')
    @yield('scripts')
</body>

</html>
