<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('assets') }}" data-template="vertical-menu-template-no-customizer">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ MetadataHelper::metadata()->title }}</title>
    <meta name="description" content="{{ MetadataHelper::metadata()->description }}">
    <meta name="keywords" content="{{ MetadataHelper::metadata()->keywords }}" />

    {{-- * Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon.ico') }}" />

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
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    {{-- * Vendor CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />

    {{-- * Page CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />

    {{-- * JQuery --}}
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>

    {{-- * Animate --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />

    {{-- * Block UI --}}
    <script src="{{ asset('assets/vendor/libs/block-ui/block-ui.js') }}"></script>

    {{-- * Form Validation --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/form-validation/dist/css/formValidation.min.css') }}" />
    <script src="{{ asset('assets/vendor/libs/form-validation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/form-validation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/form-validation/dist/js/plugins/AutoFocus.min.js') }}"></script>

    {{-- * Izi Toast --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/izi-toast/css/iziToast.min.css') }}">
    <script src="{{ asset('assets/vendor/libs/izi-toast/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('assets/helper/izi-toast.js') }}"></script>

    {{-- * SweetAlert2 --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>

    {{-- * Helpers --}}
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>

    @yield('custom_head')

</head>

@yield('custom_css')

<body>
    @include('partials.alert')

    <div class="container-xxl">
        @yield('content')
    </div>

    {{-- * Core JS --}}
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

    {{-- * Block Card --}}
    <script src="{{ asset('assets/helper/block-card.js') }}"></script>

    {{-- * Menu --}}
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>

    @yield('custom_js')

</body>

</html>
