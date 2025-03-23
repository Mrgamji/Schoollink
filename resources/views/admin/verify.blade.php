@extends('admin.layout')
@section('content')

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
                    <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">View {{$school->name}}</h1>
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

    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Row-->
                <div class="row g-5 g-xl-10">
                    <!--begin::Col-->
                    <div class="col-xl-12 mb-5 mb-xl-10">
                        <!--begin::Card-->
                        <div class="card card-flush h-xl-100">
                            <!--begin::Card header-->
                            <div class="card-header pt-5">
                                <!--begin::Card title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">School Verification Document</span>
                                    <span class="text-gray-400 mt-1 fw-bold fs-7">A Document Submitted by {{$school->name}}</span>
                                </h3>
                                <!--end::Card title-->
                                @if($school->status == 'verified')
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="/admin/school/pending/{{$school->id}}" class="btn btn-warning me-3">Mark Pending</a>
                                        <a href="/admin/school/rejected/{{$school->id}}" class="btn btn-danger me-3">Reject</a>
                                        <a href="/admin/school/{{$school->id}}" class="btn btn-secondary">Back</a>
                                    </div>
                                @elseif($school->status== 'rejected')
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="/admin/school/verified/{{$school->id}}" class="btn btn-success me-3">Verify</a>
                                        <a href="/admin/school/pending/{{$school->id}}" class="btn btn-warning me-3">Mark Pending</a>
                                        <a href="/admin/school/{{$school->id}}" class="btn btn-secondary">Back</a>
                                    </div>
                                @else
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="/admin/school/verified/{{$school->id}}" class="btn btn-success me-3">Verify</a>
                                        <a href="/admin/school/rejected/{{$school->id}}" class="btn btn-danger me-3">Reject</a>
                                        <a href="/admin/school/{{$school->id}}" class="btn btn-secondary">Back</a>
                                    </div>
                                @endif
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body py-12">
                                <!--begin::Image-->
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('storage/' . $school->registration_document) }}" alt="School Logo" class="img-fluid" style="width: 100%; height: 100%;">
                                </div>
                                <!--end::Image-->
                                <!--begin::Actions-->
                                @if($school->status == 'verified')
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="/admin/school/pending/{{$school->id}}" class="btn btn-warning me-3">Mark Pending</a>
                                        <a href="/admin/school/rejected/{{$school->id}}" class="btn btn-danger me-3">Reject</a>
                                        <a href="/admin/school/{{$school->id}}" class="btn btn-secondary">Back</a>
                                    </div>
                                @elseif($school->status== 'rejected')
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="/admin/school/verified/{{$school->id}}" class="btn btn-success me-3">Verify</a>
                                        <a href="/admin/school/pending/{{$school->id}}" class="btn btn-warning me-3">Mark Pending</a>
                                        <a href="/admin/school/{{$school->id}}" class="btn btn-secondary">Back</a>
                                    </div>
                                @else
                                    <div class="d-flex justify-content-end mt-3">
                                        <a href="/admin/school/verified/{{$school->id}}" class="btn btn-success me-3">Verify</a>
                                        <a href="/admin/school/rejected/{{$school->id}}" class="btn btn-danger me-3">Reject</a>
                                        <a href="/admin/school/{{$school->id}}" class="btn btn-secondary">Back</a>
                                    </div>
                                @endif
                                <!--end::Actions-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
</div>
<!--end::App Wrapper-->

<!--begin::Script-->
<!--begin::Third Party Plugin(OverlayScrollbars)-->
<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ=" crossorigin="anonymous"></script>
<!--end::Third Party Plugin(OverlayScrollbars)-->
<!--begin::Required Plugin(popperjs for Bootstrap 5)-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<!--end::Required Plugin(popperjs for Bootstrap 5)-->
<!--begin::Required Plugin(Bootstrap 5)-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<!--end::Required Plugin(Bootstrap 5)-->
<!--begin::Required Plugin(AdminLTE)-->
<script src="dist/js/adminlte.js"></script>
<!--end::Required Plugin(AdminLTE)-->
<!--begin::OverlayScrollbars Configure-->
<script>
    const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
    const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
    };
    document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                scrollbars: {
                    theme: Default.scrollbarTheme,
                    autoHide: Default.scrollbarAutoHide,
                    clickScroll: Default.scrollbarClickScroll,
                },
            });
        }
    });
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="dist/assets/plugins/global/plugins.bundle.js"></script>
<script src="dist/assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="dist/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="dist/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="dist/assets/js/widgets.bundle.js"></script>
<script src="dist/assets/js/custom/widgets.js"></script>
<script src="dist/assets/js/custom/apps/chat/chat.js"></script>
<script src="dist/assets/js/custom/utilities/modals/create-app.js"></script>
<script src="dist/assets/js/custom/utilities/modals/create-campaign.js"></script>
<script src="dist/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="dist/assets/js/custom/utilities/modals/create-project/type.js"></script>
<script src="dist/assets/js/custom/utilities/modals/create-project/budget.js"></script>
<script src="dist/assets/js/custom/utilities/modals/create-project/settings.js"></script>
<script src="dist/assets/js/custom/utilities/modals/create-project/team.js"></script>
<script src="dist/assets/js/custom/utilities/modals/create-project/targets.js"></script>
<script src="dist/assets/js/custom/utilities/modals/create-project/files.js"></script>
<script src="dist/assets/js/custom/utilities/modals/create-project/complete.js"></script>
<script src="dist/assets/js/custom/utilities/modals/create-project/main.js"></script>
<script src="dist/assets/js/custom/utilities/modals/users-search.js"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
<!--end::OverlayScrollbars Configure-->

@endsection
