@extends('admin.layout.home')

@section('title')
    @parent Danh mục
@endsection

@push('style')
    <style>
        .menu-item form {
            border: 0;
        }
    </style>
@endpush

@section('content')
    <div class="card card-flush">
        <div class="card-title">
            @if (session('mess'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session('mess') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <div class="card-title">
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span
                            class="path2"></span></i> <input type="text" data-kt-ecommerce-category-filter="search"
                        class="form-control form-control-solid w-250px ps-12" placeholder="Search Category" />
                </div>
            </div>

            <div class="card-toolbar">
                <a href="{{ route('categorys.create') }}" class="btn btn-primary">
                    Thêm danh mục
                </a>
            </div>
        </div>

        <div class="card-body pt-0">

            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-10px">
                            <div class="form-check form-check-sm form-check-custom form-check-solid p-0">
                                ID
                            </div>
                        </th>
                        <th class="min-w-150px ps-5">Category Name</th>
                        <th class="min-w-150px ps-5">Created</th>
                        <th class="text-start min-w-70px">Actions</th>
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
                                <div class="d-flex">
                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="edit-category.html"
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1"
                                            data-kt-ecommerce-category-filter="category_name">{{ $value->name }}</a>
                                        <!--end::Title-->

                                    </div>
                                </div>
                            </td>
                            <td>
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">{{ $value->created_at }}</div>
                                <!--end::Badges-->
                            </td>
                            <td class="text-start">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    Actions
                                    <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="{{ route('categorys.update', $value->id) }}" class="menu-link px-3">
                                            Edit
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <form action="{{ route('categorys.delete', $value->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('Bạn chắc chắn muốn xoá không')"
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
            {{ $data->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
