-->
<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Volt - Free Bootstrap 5 Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta name="author" content="Themesberg">


    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets-admin/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets-admin/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets-admin/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets-admin/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets-admin/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    < ! -- start CSS -->
        <!-- Volt CSS -->
        {{-- <link type="text/css" href="{{ asset('assets-admin/css/volt.css') }}" rel="stylesheet"> --}}
        @include('layout.admin.css');
        {{-- End CSS --}}
</head>


<body>
    {{-- star sidebar --}}


    @include('layout.admin.sidebar');
    {{-- END SIDEBAR --}}
    <main class="content">
        {{-- START HEADER  --}}
        @include('layout.admin.header')
        {{-- END HEADER  --}}


        @yield('content')


        @include('layout.admin.footer')
        {{-- end footer  --}}
    </main>
    {{-- start js  --}}
    <!-- Core -->
    {{-- <script src="{{ asset('assets-admin/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>


    <!-- Volt JS -->
    <script src="{{ asset('assets-admin/js/volt.js') }}"></script> --}}
    @include('layout.admin.js')
    {{-- end js  --}}
</body>


</html>
