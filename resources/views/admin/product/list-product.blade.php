@extends('admin.layout.home')

@section('title')
    @parent Danh sách sản phẩm
@endsection

@push('style')
    {{-- nhận nội dung từ @stack('style') --}}
@endpush

@section('content')
    <div id="kt_app_content" class="app-content  flex-column-fluid ">

        <div id="kt_app_content_container" class="app-container  container-xxl ">
            <!--begin::Products-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-title">
                    @if (session('mess'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{ session('mess') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span
                                    class="path2"></span></i> <input type="text"
                                data-kt-ecommerce-product-filter="search"
                                class="form-control form-control-solid w-250px ps-12" placeholder="Search Product">
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->

                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

                        <!--begin::Add product-->
                        <a href="{{ route('products.create') }}" class="btn btn-primary">
                            Add Product
                        </a>
                        <!--end::Add product-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body pt-0">

                    <!--begin::Table-->
                    <div id="kt_ecommerce_products_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer">
                        <div id="" class="table-responsive">
                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable"
                                id="kt_ecommerce_products_table" style="width: 1134.1px;">
                                <colgroup>
                                    <col data-dt-column="0" style="width: 36.4px;">
                                    <col data-dt-column="1" style="width: 270.65px;">
                                    <col data-dt-column="2" style="width: 135.325px;">
                                    <col data-dt-column="3" style="width: 270.65px;">
                                    <col data-dt-column="4" style="width: 270.325px;">
                                    {{-- <col data-dt-column="5" style="width: 135.325px;">
                                    <col data-dt-column="6" style="width: 135.325px;">
                                    <col data-dt-column="7" style="width: 137.8px;"> --}}
                                </colgroup>
                                <thead>
                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0" role="row">
                                        <th class="w-10px pe-2 dt-orderable-none" data-dt-column="0" rowspan="1"
                                            colspan="1" aria-label=" "><span class="dt-column-title">
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    ID
                                                </div>
                                            </span><span class="dt-column-order"></span></th>
                                        <th class="min-w-200px dt-orderable-asc dt-orderable-desc" data-dt-column="1"
                                            rowspan="1" colspan="1" aria-label="Product: Activate to sort"
                                            tabindex="0"><span class="dt-column-title" role="button">Product</span><span
                                                class="dt-column-order"></span></th>

                                        <th class="text-start min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc"
                                            data-dt-column="2" rowspan="1" colspan="1"
                                            aria-label="Price: Activate to sort" tabindex="0"><span
                                                class="dt-column-title" role="button">Price</span><span
                                                class="dt-column-order"></span>
                                        </th>
                                        <th class="text-start min-w-100px dt-orderable-asc dt-orderable-desc"
                                            data-dt-column="3" rowspan="1" colspan="1" tabindex="0"><span
                                                class="dt-column-title" role="button">Description</span><span
                                                class="dt-column-order"></span>
                                        </th>
                                        <th class="text-center min-w-100px dt-orderable-asc dt-orderable-desc"
                                            data-dt-column="4" rowspan="1" colspan="1"
                                            aria-label="Status: Activate to sort" tabindex="0"><span
                                                class="dt-column-title" role="button">Create</span><span
                                                class="dt-column-order"></span>
                                        </th>
                                        <th class="text-end min-w-70px dt-orderable-none" data-dt-column="7" rowspan="1"
                                            colspan="1" aria-label="Actions"><span
                                                class="dt-column-title">Actions</span><span class="dt-column-order"></span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @foreach ($data as $key => $value)
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    {{ $key + 1 }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <a href="edit-product.html" class="symbol symbol-50px">
                                                        @foreach ($value->images as $image)
                                                            @if ($image->image_type == 'main')
                                                                <span class="symbol-label"
                                                                    style="background-image:url({{ asset($image->image_url) }});"></span>
                                                            @endif
                                                        @endforeach
                                                    </a>
                                                    <!--end::Thumbnail-->

                                                    <div class="ms-5">
                                                        <!--begin::Title-->
                                                        <a href="edit-product.html"
                                                            class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                                            data-kt-ecommerce-product-filter="product_name">{{ $value->name }}</a>
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="text-start pe-0 dt-type-numeric">${{ $value->price }}</td>
                                            <td class="text-start ms-3">
                                                {{ $value->description }}
                                            </td>
                                            <td class="text-center pe-0">
                                                <!--begin::Badges-->
                                                <div class=" text-center badge badge-light-danger">{{ $value->created_at }}
                                                </div>
                                                <!--end::Badges-->
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    Actions
                                                    <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                                <!--begin::Menu-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('products.edit', $value->id) }}"
                                                            class="menu-link px-3">
                                                            Edit
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <form action="{{ route('products.destroy', $value->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button
                                                                onclick="return confirm('Bạn chắc chắn muốn xoá không')"
                                                                class="menu-link px-3">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu-->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div id="" class="row">
                            {{ $data->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Products-->
        </div>
        <!--end::Content container-->
    </div>
@endsection

@push('script')
@endpush
