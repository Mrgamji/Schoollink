@extends('admin.layout')
@section('content')
	<!--begin::Wrapper-->
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
									<h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Dashboard</h1>
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
								<div class="row g-5 g-xl-8">
									<div class="col-xl-4">
										<!--begin::Statistics Widget 5-->
										<a href="#" class="card bg-body-white hoverable card-xl-stretch mb-xl-8">
											<!--begin::Body-->
											<div class="card-body">
												<i class="ki-duotone ki-basket text-primary fs-2x ms-n1">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
												<div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">Total Schools</div>
												<div class="fw-semibold text-gray-400">{{App\Models\school::count()}}</div>
											</div>
											<!--end::Body-->
										</a>
										<!--end::Statistics Widget 5-->
									</div>
									<div class="col-xl-4">
										<!--begin::Statistics Widget 5-->
										<a href="#" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
											<!--begin::Body-->
											<div class="card-body">
												<i class="ki-duotone ki-element-11 text-white fs-2x ms-n1">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
												<div class="text-white fw-bold fs-2 mb-2 mt-5">Verified Schools</div>
												<div class="fw-semibold text-white">{{App\Models\school::where('status', 'verified')->count()}}</div>
											</div>
											<!--end::Body-->
										</a>
										<!--end::Statistics Widget 5-->
									</div>
									<div class="col-xl-4">
										<!--begin::Statistics Widget 5-->
										<a href="#" class="card bg-dark hoverable card-xl-stretch mb-5 mb-xl-8">
											<!--begin::Body-->
											<div class="card-body">
												<i class="ki-duotone ki-chart-simple text-gray-100 fs-2x ms-n1">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
												<div class="text-gray-100 fw-bold fs-2 mb-2 mt-5">Most Visited School</div>
												<div class="fw-semibold text-gray-100">Kuntau Science Academy</div>
											</div>
											<!--end::Body-->
										</a>
										<!--end::Statistics Widget 5-->
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-5 g-xl-8">
									<!--begin::Col-->
									<div class="col-xl-4">
										<!--begin::List Widget 1-->
										<div class="card card-xl-stretch mb-xl-8">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bold text-dark">Recently Verified Schools</span>
													<span class="text-muted mt-1 fw-semibold fs-7">Pending 10 tasks</span>
												</h3>
												<div class="card-toolbar">
													<!--begin::Menu-->
													<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<i class="ki-duotone ki-category fs-6">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</button>
													<!--begin::Menu 1-->
													<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_641ad53cec8c6">
														<!--begin::Header-->
														<div class="px-7 py-5">
															<div class="fs-5 text-dark fw-bold">Filter Options</div>
														</div>
														<!--end::Header-->
														<!--begin::Menu separator-->
														<div class="separator border-gray-200"></div>
														<!--end::Menu separator-->
														<!--begin::Form-->
														<div class="px-7 py-5">
															<!--begin::Input group-->
															<div class="mb-10">
																<!--begin::Label-->
																<label class="form-label fw-semibold">Status:</label>
																<!--end::Label-->
																<!--begin::Input-->
																<div>
																	<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_641ad53cec8c6" data-allow-clear="true">
																		<option></option>
																		<option value="1">Approved</option>
																		<option value="2">Pending</option>
																		<option value="2">In Process</option>
																		<option value="2">Rejected</option>
																	</select>
																</div>
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="mb-10">
																<!--begin::Label-->
																<label class="form-label fw-semibold">Member Type:</label>
																<!--end::Label-->
																<!--begin::Options-->
																<div class="d-flex">
																	<!--begin::Options-->
																	<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" value="1" />
																		<span class="form-check-label">Author</span>
																	</label>
																	<!--end::Options-->
																	<!--begin::Options-->
																	<label class="form-check form-check-sm form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																		<span class="form-check-label">Customer</span>
																	</label>
																	<!--end::Options-->
																</div>
																<!--end::Options-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="mb-10">
																<!--begin::Label-->
																<label class="form-label fw-semibold">Notifications:</label>
																<!--end::Label-->
																<!--begin::Switch-->
																<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
																	<label class="form-check-label">Enabled</label>
																</div>
																<!--end::Switch-->
															</div>
															<!--end::Input group-->
															<!--begin::Actions-->
															<div class="d-flex justify-content-end">
																<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
																<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
															</div>
															<!--end::Actions-->
														</div>
														<!--end::Form-->
													</div>
													<!--end::Menu 1-->
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-5">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-7">
													<!--begin::Symbol-->
													<div class="symbol symbol-50px me-5">
														<span class="symbol-label bg-light-success">
															<i class="ki-duotone ki-abstract-26 fs-2x text-success">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Text-->
													<div class="d-flex flex-column">
														<a href="#" class="text-dark text-hover-primary fs-6 fw-bold">Project Briefing</a>
														<span class="text-muted fw-bold">Project Manager</span>
													</div>
													<!--end::Text-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::List Widget 1-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-8">
										<!--begin::Tables Widget 5-->
										<div class="card card-xl-stretch mb-5 mb-xl-8">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bold fs-3 mb-1">New Registrations</span>
													<span class="text-muted mt-1 fw-semibold fs-7">20 Schools</span>
												</h3>
												<div class="card-toolbar">
													<ul class="nav">
														<li class="nav-item">
															<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1 active" data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Month</a>
														</li>
														<li class="nav-item">
															<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Week</a>
														</li>
														<li class="nav-item">
															<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4" data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Day</a>
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
															<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
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
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Kamfa Science School</a>
																			<span class="text-muted fw-semibold d-block">Private School</span>
																		</td>
																		<td class="text-end text-muted fw-bold">kabuga Housing Estate, Kano</td>
																		<td class="text-end">
																			<span class="badge badge-light-success">pending</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<i class="ki-duotone ki-arrow-right fs-2">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</a>
																		</td>
																	</tr>
																	
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
															<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
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
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brad Simmons</a>
																			<span class="text-muted fw-semibold d-block">Movie Creator</span>
																		</td>
																		<td class="text-end text-muted fw-bold">React, HTML</td>
																		<td class="text-end">
																			<span class="badge badge-light-success">Approved</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<i class="ki-duotone ki-arrow-right fs-2">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Popular Authors</a>
																			<span class="text-muted fw-semibold d-block">Most Successful</span>
																		</td>
																		<td class="text-end text-muted fw-bold">Python, MySQL</td>
																		<td class="text-end">
																			<span class="badge badge-light-warning">In Progress</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<i class="ki-duotone ki-arrow-right fs-2">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Active Customers</a>
																			<span class="text-muted fw-semibold d-block">Movie Creator</span>
																		</td>
																		<td class="text-end text-muted fw-bold">AngularJS, C#</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Rejected</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<i class="ki-duotone ki-arrow-right fs-2">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</a>
																		</td>
																	</tr>
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
															<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
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
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Bestseller Theme</a>
																			<span class="text-muted fw-semibold d-block">Best Customers</span>
																		</td>
																		<td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
																		<td class="text-end">
																			<span class="badge badge-light-warning">In Progress</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<i class="ki-duotone ki-arrow-right fs-2">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Active Customers</a>
																			<span class="text-muted fw-semibold d-block">Movie Creator</span>
																		</td>
																		<td class="text-end text-muted fw-bold">AngularJS, C#</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Rejected</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<i class="ki-duotone ki-arrow-right fs-2">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">New Users</a>
																			<span class="text-muted fw-semibold d-block">Awesome Users</span>
																		</td>
																		<td class="text-end text-muted fw-bold">Laravel,Metronic</td>
																		<td class="text-end">
																			<span class="badge badge-light-primary">Success</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<i class="ki-duotone ki-arrow-right fs-2">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">Popular Authors</a>
																			<span class="text-muted fw-semibold d-block">Most Successful</span>
																		</td>
																		<td class="text-end text-muted fw-bold">Python, MySQL</td>
																		<td class="text-end">
																			<span class="badge badge-light-warning">In Progress</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<i class="ki-duotone ki-arrow-right fs-2">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</a>
																		</td>
																	</tr>
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
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-semibold me-1">2023&copy;</span>
								<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
								<li class="menu-item">
									<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
@endsection