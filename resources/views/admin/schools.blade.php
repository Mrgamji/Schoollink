@extends('admin.layout')
@section('content')
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <!--begin::Header-->
    <div id="kt_header" class="header align-items-stretch">
        <!--begin::Brand-->
        <div class="header-brand">
            <!--begin::Aside minimize-->
            <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
                <i class="ki-duotone ki-entrance-right fs-1 me-n1 minimize-default">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <i class="ki-duotone ki-entrance-left fs-1 minimize-active">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
            <!--end::Aside minimize-->
            <!--begin::Aside toggle-->
            <div class="d-flex align-items-center d-lg-none me-n2" title="Show aside menu">
                <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
                    <i class="ki-duotone ki-abstract-14 fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
            </div>
            <!--end::Aside toggle-->
        </div>
        <!--end::Brand-->
        <!--begin::Toolbar-->
        <div class="toolbar d-flex align-items-stretch">
            <!--begin::Toolbar container-->
            <div class="container-xxl py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
                <!--begin::Page title-->
                <div class="page-title d-flex justify-content-center flex-column me-5">
                    <!--begin::Title-->
                    <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Schools Management</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="/admin" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->

    <!--begin::Container-->
    <div class="container-xxl mt-2">
        <!--begin::Row-->
        <div class="row g-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xl-12">
                <!--begin::Tables Widget 5-->
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">All Schools</span>
                            <span class="text-muted mt-1 fw-semibold fs-7">{{App\Models\school::count()}} Schools</span>
                        </h3>
                        <div class="card-toolbar">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1 active" data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Verified</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4" data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Pending</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4" data-bs-toggle="tab" href="#kt_table_widget_5_tab_4">Rejected</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <div class="tab-content">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4 custom-table-width">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="border-0">
                                                <th class="p-0 w-50px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-140px"></th>
                                                <th class="p-0 min-w-110px"></th>
                                                <th class="p-0 min-w-110px"></th>
                                                <th class="p-0 min-w-50px"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            @foreach($schools as $school)
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                        <span class="symbol-label">
                                                            <img src="{{ asset('storage/' . $school->logo) }}" class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="/admin/school/{{$school->id}}" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{$school->name}}</a>
                                                    <span class="text-muted d-block">{{$school->type}} School</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">{{$school->address}}</td>
                                               
                                                <td class="text-end">
                                                    <span class="badge 
                                                        @if($school->status == 'pending') badge-light-warning 
                                                        @elseif($school->status == 'verified') badge-light-success 
                                                        @elseif($school->status == 'rejected') badge-light-danger 
                                                        @endif">
                                                        {{$school->status}}
                                                    </span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-success">{{$school->created_at}}</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="/admin/school/{{$school->id}}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-duotone ki-arrow-right fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i> View
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4 custom-table-width">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="border-0">
                                                <th class="p-0 w-50px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-140px"></th>
                                                <th class="p-0 min-w-110px"></th>
                                                <th class="p-0 min-w-50px"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                           <!--begin::Table body-->
                                           <tbody>
                                            @foreach($verified as $school)
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                        <span class="symbol-label">
                                                            <img src="{{ asset('storage/' . $school->logo) }}" class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="/admin/school/{{$school->id}}" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{$school->name}}</a>
                                                    <span class="text-muted d-block">{{$school->type}} School</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">{{$school->address}}</td>
                                               
                                                <td class="text-end">
                                                    <span class="badge 
                                                        @if($school->status == 'pending') badge-light-warning 
                                                        @elseif($school->status == 'verified') badge-light-success 
                                                        @elseif($school->status == 'rejected') badge-light-danger 
                                                        @endif">
                                                        {{$school->status}}
                                                    </span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-success">{{$school->created_at}}</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="/admin/school/{{$school->id}}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-duotone ki-arrow-right fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i> View
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_table_widget_5_tab_3">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4 custom-table-width">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="border-0">
                                                <th class="p-0 w-50px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-140px"></th>
                                                <th class="p-0 min-w-110px"></th>
                                                <th class="p-0 min-w-50px"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                         <!--begin::Table body-->
                                         <tbody>
                                            @foreach($pending as $school)
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                        <span class="symbol-label">
                                                            <img src="{{ asset('storage/' . $school->logo) }}" class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="/admin/school/{{$school->id}}" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{$school->name}}</a>
                                                    <span class="text-muted d-block">{{$school->type}} School</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">{{$school->address}}</td>
                                               
                                                <td class="text-end">
                                                    <span class="badge 
                                                        @if($school->status == 'pending') badge-light-warning 
                                                        @elseif($school->status == 'verified') badge-light-success 
                                                        @elseif($school->status == 'rejected') badge-light-danger 
                                                        @endif">
                                                        {{$school->status}}
                                                    </span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-success">{{$school->created_at}}</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="/admin/school/{{$school->id}}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-duotone ki-arrow-right fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i> View
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Tap pane-->
                               <!--begin::Tap pane-->
                               <div class="tab-pane fade" id="kt_table_widget_5_tab_4">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4 custom-table-width">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="border-0">
                                                <th class="p-0 w-50px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-140px"></th>
                                                <th class="p-0 min-w-110px"></th>
                                                <th class="p-0 min-w-50px"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                         <!--begin::Table body-->
                                         <tbody>
                                            @foreach($rejected as $school)
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-45px me-2">
                                                        <span class="symbol-label">
                                                            <img src="{{ asset('storage/' . $school->logo) }}" class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="/admin/school/{{$school->id}}" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{$school->name}}</a>
                                                    <span class="text-muted d-block">{{$school->type}} School</span>
                                                </td>
                                                <td class="text-end text-muted fw-bold">{{$school->address}}</td>
                                               
                                                <td class="text-end">
                                                    <span class="badge 
                                                        @if($school->status == 'pending') badge-light-warning 
                                                        @elseif($school->status == 'verified') badge-light-success 
                                                        @elseif($school->status == 'rejected') badge-light-danger 
                                                        @endif">
                                                        {{$school->status}}
                                                    </span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="badge badge-light-success">{{$school->created_at}}</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="/admin/school/{{$school->id}}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-duotone ki-arrow-right fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i> View
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Tap pane-->
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Tables Widget 5-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
@endsection
