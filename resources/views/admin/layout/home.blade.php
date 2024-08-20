@extends('admin.layout.default')

@stack('style')

@section('main')
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!-- Page -->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

            <!--Header-->
            @include('admin.layout.header')
            <!--end::Header-->


            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                <!--begin::Sidebar-->
                @include('admin.layout.sidebar')
                <!--end::Sidebar-->


                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    @yield('content')

                    <!--begin::Footer-->
                    @include('admin.layout.footer')
                    <!--end::Footer-->
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->


        </div>
        <!--end::Page-->
    </div>

    <!--begin::Chat drawer-->
    @include('admin.layout.chat')
    <!--end::Chat drawer-->
@endsection
