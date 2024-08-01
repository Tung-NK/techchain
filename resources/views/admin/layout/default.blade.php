<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        @section('title')
            Techchain |
        @show
    </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <link rel="shortcut icon" href="{{ asset('assets_admin/media/logos/favicon.ico') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('assets_admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets_admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <style href="{{ asset('assets_admin/css/custom.css') }}"></style>


    <meta name="csrf-token" content="{{ csrf_token() }} " />
    @stack('style') {{-- chèn css riêng vào vị trí có tên style --}}
</head>


<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default dark-sidebar">

    @yield('main')


    @stack('script')
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('assets_admin/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets_admin/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->


</body>

</html>
