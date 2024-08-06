<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ MetadataHelper::metadata()->title }}</title>
    <meta name="description" content="{{ MetadataHelper::metadata()->description }}">
    <meta name="keywords" content="{{ MetadataHelper::metadata()->keywords }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/logo.png') }}">

    {{-- * Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    {{-- * Icons --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}" />

    {{-- * Core CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    {{-- * Vendor CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />

    {{-- * JQuery --}}
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>

    {{-- * Jquery Repeater --}}
    <script src="{{ asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>

    {{-- * Animate --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />

    {{-- * Block UI --}}
    <script src="{{ asset('assets/vendor/libs/block-ui/block-ui.js') }}"></script>

    {{-- * BS Stepper --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />

    {{-- * Datatable --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />

    {{-- * Dropify --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropify/css/dropify.css') }}">

    {{-- * Flatpickr --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/themes/material_blue.css') }}" />

    {{-- * Form Validation --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/form-validation/dist/css/formValidation.min.css') }}" />
    <script src="{{ asset('assets/vendor/libs/form-validation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/form-validation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/form-validation/dist/js/plugins/AutoFocus.min.js') }}"></script>

    {{-- * Izi Toast --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/izi-toast/css/iziToast.min.css') }}">
    <script src="{{ asset('assets/vendor/libs/izi-toast/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('assets/helper/izi-toast.js') }}"></script>

    {{-- * Moment --}}
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>

    {{-- * Quil Editor --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/editor.css') }}" />

    {{-- * SweetAlert2 --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>

    {{-- * Select2 --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />

    {{-- * Helpers --}}
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>

    {{-- * Style --}}
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    @yield('custom_head')
</head>

@yield('custom_css')

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            @include('partials.sidebar')

            <div class="layout-page">

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">

                        @include('partials.alert')

                        @yield('content')

                        @yield('modal')

                    </div>

                    @include('partials.footer')

                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>

        {{-- * Overlay --}}
        <div class="layout-overlay layout-menu-toggle"></div>

        {{-- * Drag Target Area To SlideIn Menu On Small Screens --}}
        <div class="drag-target"></div>
    </div>

    {{-- * Core JS --}}
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

    {{-- * Axios --}}
    <script src="{{ asset('assets/vendor/libs/axios/axios.min.js') }}"></script>

    {{-- * Block Card --}}
    <script src="{{ asset('assets/helper/block-card.js') }}"></script>

    {{-- * BS Stepper --}}
    <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>

    {{-- * Datatable --}}
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

    {{-- * Dropify --}}
    <script src="{{ asset('assets/vendor/libs/dropify/js/dropify.js') }}"></script>
    <script src="{{ asset('assets/helper/dropify.js') }}"></script>

    {{-- * Flatpickr --}}
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/l10n/id.js') }}"></script>
    <script src="{{ asset('assets/helper/flatpickr.js') }}"></script>

    {{-- * Preview Image --}}
    <script src="{{ asset('assets/helper/preview-image.js') }}"></script>

    {{-- * Regex --}}
    <script src="{{ asset('assets/helper/regex.js') }}"></script>

    {{-- * Select2 --}}
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/helper/select2-translation.js') }}"></script>
    <script src="{{ asset('assets/helper/select2.js') }}"></script>

    {{-- * Sortable --}}
    <script src="{{ asset('assets/vendor/libs/sortablejs/sortable.js') }}"></script>

    {{-- * Menu --}}
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

    {{-- * Main --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @yield('custom_js')
</body>

</html>
