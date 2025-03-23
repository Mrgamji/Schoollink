
@extends('admin.layout')
@section('content')

<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <!--begin::Header-->
	@if(session('success'))
		<div class="alert alert-success">
			{{ session('success') }}
		</div>
	@endif

	@if(session('error'))
		<div class="alert alert-danger">
			{{ session('error') }}
		</div>
	@endif
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
									<div class="col-xl-4 mb-xl-10">
										<!--begin::Lists Widget 19-->
										<div class="card card-flush h-xl-100">
											<!--begin::Heading-->
											<div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"  data-bs-theme="light">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column text-danger pt-15">
													<span class="fw-bold fs-2x mb-3">{{$school->name}}</span>
													<div class="fs-4 text-dark">
														<span class="opacity-75">{{$school->motto}}</span>
													</div>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<div class="card-toolbar pt-5">
													<!--begin::Menu-->
													<button class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
														<i class="ki-duotone ki-dots-square fs-4">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</button>
													
													<!--end::Menu-->
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Heading-->
											<!--begin::Body-->
											<div class="card-body mt-n20">
												<!--begin::Stats-->
												<div class="mt-n20 position-relative">
													<!--begin::Row-->
													<div class="row g-3 g-lg-6">
														<!--begin::Col-->
														<div class="col-6">
															<!--begin::Items-->
															<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-30px me-5 mb-8">
																	<span class="symbol-label">
																		<i class="ki-duotone ki-flask fs-1 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Stats-->
																<div class="m-0">
																	<!--begin::Number-->
																	<span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{$school->id}}</span>
																	<!--end::Number-->
																	<!--begin::Desc-->
																	<span class="text-gray-500 fw-semibold fs-6">School ID</span>
																	<!--end::Desc-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Items-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-6">
															<!--begin::Items-->
															<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-30px me-5 mb-8">
																	<span class="symbol-label">
																		<i class="ki-duotone ki-bank fs-1 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Stats-->
																<div class="m-0">
																	<!--begin::Number-->
																	<span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{$school->established_date}}</span>
																	<!--end::Number-->
																	<!--begin::Desc-->
																	<span class="text-gray-500 fw-semibold fs-6">Established Date</span>
																	<!--end::Desc-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Items-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-6">
															<!--begin::Items-->
															<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-30px me-5 mb-8">
																	<span class="symbol-label">
																		<i class="ki-duotone ki-award fs-1 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Stats-->
																<div class="m-0">
																	<!--begin::Number-->
                                                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">
                                                                        @if($school->size = 'micro')
                                                                         <100
                                                                        @elseif($school->size = 'mini')
                                                                           100-500
                                                                        @elseif($school->size='midi')
                                                                           501-1000
                                                                        @else
                                                                            1000+
                                                                        @endif
                                                                    </span>
																	<!--end::Number-->
																	<!--begin::Desc-->
																	<span class="text-gray-500 fw-semibold fs-6">School Size</span>
																	<!--end::Desc-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Items-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-6">
															<!--begin::Items-->
															<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-30px me-5 mb-8">
																	<span class="symbol-label">
																		<i class="ki-duotone ki-timer fs-1 text-primary">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Stats-->
																<div class="m-0">
																	<!--begin::Number-->
																	<span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{$school->visitcount}}</span>
																	<!--end::Number-->
																	<!--begin::Desc-->
																	<span class="text-gray-500 fw-semibold fs-6">Visit Count</span>
																	<!--end::Desc-->
																</div>
																<!--end::Stats-->
															</div>
															<!--end::Items-->

                                                            <!--begin::Verification Status-->
                                                            <div class="rounded-2 px-3 py-2 mt-3 d-inline-block 
                                                                @if($school->status == 'verified') bg-success 
                                                                @elseif($school->status == 'pending') bg-warning 
                                                                @else bg-danger 
                                                                @endif">
                                                                <div class="symbol symbol-20px me-2">
                                                                    <span class="symbol-label">
                                                                        <i class="ki-duotone ki-shield-check fs-6 
                                                                            @if($school->status == 'verified') text-white 
                                                                            @elseif($school->status == 'pending') text-dark 
                                                                            @else text-white 
                                                                            @endif">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </span>
                                                                </div>
                                                                <div class="d-inline-block">
                                                                    <span class="text-gray-700 fw-bolder fs-6">
                                                                        @if($school->status == 'verified')
                                                                            Verified
                                                                        @elseif($school->status == 'pending')
                                                                            Pending
                                                                        @else
                                                                            Rejected
                                                                        @endif
                                                                    </span>
                                                                    <span class="text-gray-500 fw-semibold fs-7 d-block">Verification Status</span>
                                                                </div>
                                                            </div>
                                                            <!--end::Verification Status-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Lists Widget 19-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-8 mb-5 mb-xl-10">
										<!--begin::Row-->
										<div class="row g-5 g-xl-10">
											<!--begin::Col-->
											<div class="col-xl-6 mb-xl-10">
												<!--begin::Slider Widget 1-->
												<div id="kt_sliders_widget_1_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5000">
													<!--begin::Header-->
													<div class="card-header pt-5">
														<!--begin::Title-->
														<h4 class="card-title d-flex align-items-start flex-column">
															<span class="card-label fw-bold text-gray-800">School Logo</span>
															<span class="text-gray-400 mt-1 fw-bold fs-7">A Badge of {{$school->name}}</span>
														</h4>
														<!--end::Title-->
														<!--begin::Toolbar-->
														<div class="card-toolbar">
															<!--begin::Carousel Indicators-->
															<ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
																<li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="0" class="active ms-1"></li>
																<li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="1" class="ms-1"></li>
																<li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="2" class="ms-1"></li>
															</ol>
															<!--end::Carousel Indicators-->
														</div>
														<!--end::Toolbar-->
													</div>
													<!--end::Header-->
													<!--begin::Body-->
													<div class="card-body py-6">
                                                        <!--begin::Carousel-->
                                                        <div class="d-flex justify-content-center">
                                                            <img src="{{ asset('storage/' . $school->logo) }}" alt="School Logo" class="img-fluid">
                                                        </div>
                                                        <!--end::Carousel-->
													</div>
													<!--end::Body-->
												</div>
												<!--end::Slider Widget 1-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-xl-6 mb-5 mb-xl-10">
												<!--begin::Slider Widget 2-->
												<div id="kt_sliders_widget_2_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5500">
													<!--begin::Header-->
													<div class="card-header pt-5">
														<!--begin::Title-->
														<h4 class="card-title d-flex align-items-start flex-column">
															<span class="card-label fw-bold text-gray-800">School Address </span>
															<span class="text-gray-400 mt-1 fw-bold fs-7">Contact Address and Location of {{$school->name}}</span>
														</h4>
														<!--end::Title-->
														<!--begin::Toolbar-->
														<div class="card-toolbar">
															<!--begin::Carousel Indicators-->
															<ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
																<li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="0" class="active ms-1"></li>
																<li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="1" class="ms-1"></li>
																<li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="2" class="ms-1"></li>
															</ol>
															<!--end::Carousel Indicators-->
														</div>
														<!--end::Toolbar-->
													</div>
													<!--end::Header-->
													<!--begin::Body-->
													<div class="card-body py-6">
                                                        <!--begin::Details-->
                                                        <div class="d-flex flex-column mb-9">
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-3">
                                                                <!--begin::Label-->
                                                                <span class="fw-bold text-gray-800 me-2">Country:</span>
                                                                <!--end::Label-->
                                                                <!--begin::Value-->
                                                                <span class="text-gray-600">{{$school->country}}</span>
                                                                <!--end::Value-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-3">
                                                                <!--begin::Label-->
                                                                <span class="fw-bold text-gray-800 me-2">State:</span>
                                                                <!--end::Label-->
                                                                <!--begin::Value-->
                                                                <span class="text-gray-600">{{$school->state}}</span>
                                                                <!--end::Value-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-3">
                                                                <!--begin::Label-->
                                                                <span class="fw-bold text-gray-800 me-2">LGA:</span>
                                                                <!--end::Label-->
                                                                <!--begin::Value-->
                                                                <span class="text-gray-600">{{$school->lga}}</span>
                                                                <!--end::Value-->
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Item-->
                                                            <div class="d-flex align-items-center mb-3">
                                                                <!--begin::Label-->
                                                                <span class="fw-bold text-gray-800 me-2">Address:</span>
                                                                <!--end::Label-->
                                                                <!--begin::Value-->
                                                                <span class="text-gray-600">{{$school->address}}</span>
                                                                <!--end::Value-->
                                                            </div>
                                                            <!--end::Item-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Action-->
                                                        <div class="m-0">
                                                            <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($school->name.' '.$school->address) }}" target="_blank" class="btn btn-sm btn-success mb-2">View Address on Map</a>
                                                        </div>
                                                        <!--end::Action-->
													</div>
													<!--end::Body-->
												</div>
												<!--end::Slider Widget 2-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
										<!--begin::Engage widget 4-->
										<div class="card border-transparent" data-bs-theme="light" >
											<!--begin::Body-->
											<div class="card-body d-flex ps-xl-15">
												<!--begin::Wrapper-->
												<div class="m-0">
													<!--begin::Title-->
                                                    <div class="position-relative fs-2x z-index-2 fw-bold text-dark mb-7">
                                                        <span class="me-2">Contact Details</span>
                                                        <div class="d-flex flex-column">
                                                            <span class="text-gray-600 fs-6">Phone: {{$school->contact_number}}</span>
                                                            <span class="text-gray-600 fs-6">Email: {{$school->email}}</span>
                                                            <span class="text-gray-600 fs-6">Website: {{$school->website}}</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Action-->
                                                    <div class="mb-3">
                                                        <a href="tel:{{$school->phone}}" class="btn btn-primary fw-semibold me-2">Call Now</a>
                                                        <a href="mailto:{{$school->email}}" class="btn btn-success fw-semibold">Email Now</a>
                                                        <a href="{{$school->website}}" target="_blank" class="btn btn-info fw-semibold">Visit Website</a>
                                                    </div>
                                                    <!--begin::Action-->
												</div>
												<!--begin::Wrapper-->
												<!--begin::Illustration-->
												<img src="dist/assets/media/illustrations/sigma-1/17-dark.png" class="position-absolute me-3 bottom-0 end-0 h-200px" alt="" />
												<!--end::Illustration-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Engage widget 4-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-5 g-xl-10">
									<!--begin::Col-->
									<div class="col-xl-4 mb-xl-10">
										<!--begin::List widget 20-->
										<div class="card h-xl-100">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bold text-dark">Actions</span>
													<span class="text-muted mt-1 fw-semibold fs-7">Verify School Here</span>
												</h3>
												<!--begin::Toolbar-->
												<div class="card-toolbar">
													<a href="#" class="btn btn-sm btn-light">All Actions</a>
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-6">
												<!--begin::Item-->
												<div class="d-flex flex-stack">
												
													<!--begin::Section-->
													<div class="d-flex align-items-center flex-row-fluid flex-wrap">
														<!--begin:Author-->
														<div class="flex-grow-1 me-2">
															<a href="" class="text-gray-800 text-hover-primary fs-6 fw-bold">School Registration Number</a>
															<span class="text-muted fw-semibold d-block fs-7">{{$school->registration_number}}</span>
														</div>
														<!--end:Author-->
														<!--begin::Actions-->
														
														</a>
														<!--begin::Actions-->
													</div>
													<!--end::Section-->
												</div>
												<!--end::Item-->
												<!--begin::Separator-->
												<div class="separator separator-dashed my-4"></div>
												<!--end::Separator-->
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-success">D</div>
													</div>
													<!--end::Symbol-->
													<!--begin::Section-->
													<div class="d-flex align-items-center flex-row-fluid flex-wrap">
														<!--begin:Author-->
														<div class="flex-grow-1 me-2">
															<a href="/admin/viewdocument/{{$school->id}}" class="text-gray-800 text-hover-primary fs-6 fw-bold">View Registration Document</a>
															<span class="text-muted fw-semibold d-block fs-7">View and Verify Registration Document
                                                            </span>
														</div>
														<!--end:Author-->
														<!--begin::Actions-->
														<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
															<i class="ki-duotone ki-arrow-right fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</a>
														<!--begin::Actions-->
													</div>
													<!--end::Section-->
												</div>
												<!--end::Item-->
												<!--begin::Separator-->
												<div class="separator separator-dashed my-4"></div>
												<!--end::Separator-->
                                                @if($school->status != 'verified')
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<div class="symbol-label fs-2 fw-semibold bg-success text-inverse-success">V</div>
													</div>
													<!--end::Symbol-->
													<!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <!--begin:Author-->
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="/admin/school/verified/{{$school->id}}" class="text-gray-800 text-hover-primary fs-6 fw-bold">Mark School as Verified</a>
                                                            <span class="text-muted fw-semibold d-block fs-7">Mark this school as verified</span>
                                                        </div>
                                                        <!--end:Author-->
                                                        <!--begin::Actions-->
                                                        <a href="" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-check fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                        <!--begin::Actions-->
                                                    </div>
													<!--end::Section-->
												</div>
												<!--end::Item-->
                                               
												<!--begin::Separator-->
												<div class="separator separator-dashed my-4"></div>
												<!--end::Separator-->
                                                @endif
                                                @if($school->status != 'pending')
												<!--begin::Item-->
												<div class="d-flex flex-stack">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<div class="symbol-label fs-2 fw-semibold bg-warning text-inverse-warning">P</div>
													</div>
													<!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <!--begin:Author-->
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="/admin/school/pending/{{$school->id}}" class="text-gray-800 text-hover-primary fs-6 fw-bold">Set School as Pending</a>
                                                            <span class="text-muted fw-semibold d-block fs-7">Mark this school as pending</span>
                                                        </div>
                                                        <!--end:Author-->
                                                        <!--begin::Actions-->
                                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-clock fs-2">
                                                                <span class="path1"></span>
																<span class="path2"></span>
															</i>
														</a>
														<!--begin::Actions-->
													</div>
													<!--end::Section-->
												</div>
												<!--end::Item-->
                                                
												<!--begin::Separator-->
												<div class="separator separator-dashed my-4"></div>
												<!--end::Separator-->
                                                @endif
												@if($school->status != 'rejected')
                                                <!--begin::Item-->
												<div class="d-flex flex-stack">
													<!--begin::Symbol-->
													<div class="symbol symbol-40px me-4">
														<div class="symbol-label fs-2 fw-semibold bg-danger text-inverse-danger">R</div>
													</div>
													<!--end::Symbol-->
													<!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <!--begin:Author-->
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="/admin/school/rejected/{{$school->id}}" class="text-gray-800 text-hover-primary fs-6 fw-bold">Set School as Rejected</a>
                                                            <span class="text-muted fw-semibold d-block fs-7">Mark this school as rejected</span>
                                                        </div>
                                                        <!--end:Author-->
                                                        <!--begin::Actions-->
                                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-close fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                        <!--begin::Actions-->
                                                    </div>
                                                    <!--end::Section-->
												</div>
												<!--end::Item-->
                                               
												<!--begin::Separator-->
												<div class="separator separator-dashed my-4"></div>
												<!--end::Separator-->
                                                @endif
												<!--begin::Item-->
												<div class="d-flex flex-stack">
												
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <!--begin:Author-->
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="/admin/school/edit/{{$school->id}}" class="btn btn-sm btn-warning me-2">Edit School</a>
                                                            <form action="/admin/school/delete/{{$school->id}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this school?');" style="display:inline-block;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger">Delete School</button>
                                                            </form>
                                                        </div>
                                                        <!--end:Author-->
                                                    </div>
                                                    <!--end::Section-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::List widget 20-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-8 mb-5 mb-xl-10">
										<!--begin::Timeline Widget 1-->
										<div class="card card-flush h-xl-100">
											<!--begin::Card header-->
											<div class="card-header pt-5">
												<!--begin::Card title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bold text-dark">School Gallery</span>
													<span class="text-gray-400 pt-2 fw-semibold fs-6">{{$school_images->count()}} Images</span>
												</h3>
												<!--end::Card title-->
												
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pb-0">
                                                <!--begin::Carousel-->
                                                <div id="schoolGalleryCarousel" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        
                                                            @foreach($school_images as $index => $image)
                                                            <div class="carousel-item @if($index == 0) active @endif">
                                                            <img src="{{asset('storage/'.$image->image_path)}}" class="d-block w-100" alt="School Photo" style="max-height: 400px; object-fit: cover;">
                                                            </div>
                                                            @endforeach
                                                      
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#schoolGalleryCarousel" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#schoolGalleryCarousel" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                                <!--end::Carousel-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Timeline Widget 1-->
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
<!--end::Script-->

@endsection