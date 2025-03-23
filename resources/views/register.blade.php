<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.1.8
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="{{asset('design')}}/" />
		<title>School Registration</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="dist/assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="auth-bg">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Multi-steps-->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep" id="kt_create_account_stepper">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-500px">
					<div class="d-flex flex-column position-lg-fixed top-0 bottom-0 w-lg-350px w-xl-500px scroll-y bgi-size-cover bgi-position-center" style="background-image: url(dist/assets/media/misc/auth-bg.png)">
						<!--begin::Header-->
						<div class="d-flex flex-center py-10 py-lg-20 mt-lg-20">
							<!--begin::Logo-->
    <a href="/" class="mb-12 text-decoration-none">
        <h3 class="display-6 text-white">SchoolLink</h3>
		<p class="text-white text-italic">......Find Schools Around You</p>
    </a>
    </a>
							<!--end::Logo-->
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="d-flex flex-row-fluid justify-content-center p-10">
							<!--begin::Nav-->
							<div class="stepper-nav">
								<!--begin::Step 1-->
								<div class="stepper-item current" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">1</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title fs-2">School Type</h3>
											<div class="stepper-desc fw-normal">Tell us about your school...</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Line-->
									<div class="stepper-line h-40px"></div>
									<!--end::Line-->
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">2</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title fs-2">School Info</h3>
											<div class="stepper-desc fw-normal">Setup your school..</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Line-->
									<div class="stepper-line h-40px"></div>
									<!--end::Line-->
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">3</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title fs-2">School Details</h3>
											<div class="stepper-desc fw-normal">More Details about your school</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Line-->
									<div class="stepper-line h-40px"></div>
									<!--end::Line-->
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">4</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title">Other Details</h3>
											<div class="stepper-desc fw-normal">Further complete details of your school...</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Line-->
									<div class="stepper-line h-40px"></div>
									<!--end::Line-->
								</div>
								<!--end::Step 4-->
								
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Body-->
						<!--begin::Footer-->
						<div class="d-flex flex-center flex-wrap px-5 py-10">
							<!--begin::Links-->
							<div class="d-flex fw-normal">
								<a href="https://keenthemes.com" class="text-success px-5" target="_blank">About School Link</a>
								<a href="https://devs.keenthemes.com" class="text-success px-5" target="_blank">FAQS</a>
								<a href="https://1.envato.market/EA4JP" class="text-success px-5" target="_blank">Contact Us</a>
							</div>
							<!--end::Links-->
						</div>
						<!--end::Footer-->
					</div>
				</div>
				<!--begin::Aside-->


				<!--begin::Body-->
	@if ($errors->has('missing_fields'))
		<div id="error-container" class="position-fixed top-0 end-0 mt-3 me-3" style="z-index: 1050;">
			@foreach ($errors->get('missing_fields') as $index => $field)
				<div class="alert alert-danger alert-dismissible fade shadow-lg rounded-pill py-2 px-4 mb-2" role="alert" style="display: none;">
					<strong>{{ ucfirst(str_replace('_', ' ', $field)) }} can't be empty</strong>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			@endforeach
		</div>

		<script>
			document.addEventListener('DOMContentLoaded', function() {
				const alerts = document.querySelectorAll('#error-container .alert');
				
				// Show all alerts with a slight delay between each
				alerts.forEach((alert, index) => {
					setTimeout(() => {
						alert.style.display = 'block';
						alert.classList.add('show');
					}, index * 300); // Delay each alert by 300ms
				});

				// Hide all alerts after all are displayed for a certain period
				const totalDisplayTime = (alerts.length * 300) + 3000; // Time to show all alerts + 3s display time
				
				setTimeout(() => {
					alerts.forEach(alert => {
						alert.classList.remove('show');
					});
				}, totalDisplayTime);

				// Remove alerts from DOM after fade-out
				setTimeout(() => {
					alerts.forEach(alert => {
						alert.style.display = 'none';
					});
				}, totalDisplayTime + 500); // Extra time for fade-out
			});
		</script>
	@endif


				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-650px w-xl-700px p-10 p-lg-15 mx-auto">
							<!--begin::Form-->
						
							<form action='/signup' method="post" enctype="multipart/form-data">
								<!--begin::Step 1-->
								<div class="current" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold d-flex align-items-center text-dark">Choose School Type
											<span class="ms-1" data-bs-toggle="tooltip" title="It helps us categorize schools better">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span></h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-semibold fs-6">Choose the type of school as either government owned or privately owned</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row">
											<!--begin::Row-->
											<div class="row">
												<!--begin::Col-->
												<div class="col-lg-6">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="type" value="public" checked="checked" id="kt_create_account_form_account_type_personal" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_personal">
														<i class="ki-duotone ki-badge fs-3x me-5">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
														</i>
														<!--begin::Info-->
														<span class="d-block fw-semibold text-start">
															<span class="text-dark fw-bold d-block fs-4 mb-2">Public School</span>
															<span class="text-muted fw-semibold fs-6">Owned by government</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-6">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="type" value="privatee" id="kt_create_account_form_account_type_corporate" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_create_account_form_account_type_corporate">
														<i class="ki-duotone ki-briefcase fs-3x me-5">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<!--begin::Info-->
														<span class="d-block fw-semibold text-start">
															<span class="text-dark fw-bold d-block fs-4 mb-2">Private School</span>
															<span class="text-muted fw-semibold fs-6">Owned by individual(s)</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								@error('type')
        									<div class="invalid-feedback">{{ $message }}</div>
    							@enderror
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div class="" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold text-dark">School Info</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-semibold fs-6">Fill in the details of your school</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="mb-10 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center form-label mb-3">Specify School size
											<span class="ms-1" data-bs-toggle="tooltip" title="Provide your team size to help us setup your billing">
												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
												</i>
											</span></label>
											<!--end::Label-->
											<!--begin::Row-->
											<div class="row mb-2" data-kt-buttons="true">
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
														<input type="radio" class="btn-check" name="size" value="micro" />
														<span class="fw-bold fs-3"><100</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4 active">
														<input type="radio" class="btn-check" name="size" checked="checked" value="mini" />
														<span class="fw-bold fs-3">100-500</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
														<input type="radio" class="btn-check" name="size" value="midi" />
														<span class="fw-bold fs-3">501-1000</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col">
													<!--begin::Option-->
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
														<input type="radio" class="btn-check" name="size" value="maxi" />
														<span class="fw-bold fs-3">1000+</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
											<!--begin::Hint-->
											<div class="form-text">Visitors will see this information about your school</div>
											<!--end::Hint-->
											@error('size')
        									<div class="invalid-feedback">{{ $message }}</div>
    										@enderror
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-10">
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<label class="form-label mb-3">School Name</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="Enter the name of your school"  />
												<!--end::Input-->
											</div>
											@error('name')
        									<div class="invalid-feedback">{{ $message }}</div>
    										@enderror
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<label class="form-label mb-3">Description</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-lg form-control-solid" name="description" placeholder="Describe your school" />
												<!--end::Input-->
											</div>
											@error('description')
        									<div class="invalid-feedback">{{ $message }}</div>
    										@enderror
										</div>
											<div class="mb-10 fv-row">
												<!--begin::Label-->
												<label class="form-label mb-3">School Category</label>
												<!--end::Label-->
												<!--begin::Row-->
												<div class="row">
													<!--begin::Col-->
													<div class="col-lg-3">
														<!--begin::Option-->
														<input type="checkbox" class="btn-check" name="school_category[]" value="day" id="kt_create_account_form_school_category_day" />
														<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="kt_create_account_form_school_category_day">
															<span class="d-block fw-semibold text-start">
																<span class="text-dark fw-bold d-block fs-4 ">Day</span>
															</span>
														</label>
														<!--end::Option-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-lg-3">
														<!--begin::Option-->
														<input type="checkbox" class="btn-check" name="school_category[]" value="boarding" id="kt_create_account_form_school_category_boarding" />
														<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="kt_create_account_form_school_category_boarding">
															<span class="d-block fw-semibold text-start">
																<span class="text-dark fw-bold d-block fs-4 ">Boarding</span>
															</span>
														</label>
														<!--end::Option-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-lg-3">
														<!--begin::Option-->
														<input type="checkbox" class="btn-check" name="school_category[]" value="islamiyya" id="kt_create_account_form_school_category_islamiyya" />
														<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="kt_create_account_form_school_category_islamiyya">
															<span class="d-block fw-semibold text-start">
																<span class="text-dark fw-bold d-block fs-4 ">Islamiyya</span>
															</span>
														</label>
														<!--end::Option-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-lg-3">
														<!--begin::Option-->
														<input type="checkbox" class="btn-check" name="school_category[]" value="tsangaya" id="kt_create_account_form_school_category_tsangaya" />
														<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="kt_create_account_form_school_category_tsangaya">
															<span class="d-block fw-semibold text-start">
																<span class="text-dark fw-bold ">Tsangaya</span>
															</span>
														</label>
														<!--end::Option-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											@error('school_category[]')
        									<div class="invalid-feedback">{{ $message }}</div>
    										@enderror
                                        <div class="mb-10 fv-row">
											<!--begin::Label-->
											<label class="form-label mb-3">Motto</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-lg form-control-solid" name="motto" placeholder="Write the motton of your school"  />
											<!--end::Input-->
										</div>
										@error('motto')
        									<div class="invalid-feedback">{{ $message }}</div>
    										@enderror
										<div class="row mb-10">
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<label class="form-label mb-3">Email</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-lg form-control-solid" name="email" placeholder="Write the school email here"  />
												<!--end::Input-->
											</div>

											@error('email')
        									<div class="invalid-feedback">{{ $message }}</div>
    										@enderror

											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<label class="form-label mb-3">Contact Phone</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="text" class="form-control form-control-lg form-control-solid" name="phone" placeholder="Write the Contact Phone here" />
												<!--end::Input-->
											</div>
										</div>
									</div>
									@error('phone')
        									<div class="invalid-feedback">{{ $message }}</div>
    										@enderror
									<!--end::Wrapper-->
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div class="" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-12">
											<!--begin::Title-->
											<h2 class="fw-bold text-dark">School Details</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-semibold fs-6">More details about your school</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="form-label required">Registration/License Number</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input name="registration_number" class="form-control form-control-lg form-control-solid" />
											<!--end::Input-->
											@error('registration_number')
											<div class="invalid-feedback">{{ $message }}</div>
											@enderror
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="d-flex align-items-center form-label">
												<span class="required">Registration/License Date</span>
											</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input name="registration_date" class="form-control form-control-lg form-control-solid" type=date />
											<!--end::Input-->
											<!--begin::Hint-->
											<div class="form-text">We will keep this date private</div>
											<!--end::Hint-->
											@error('registration_date')
											<div class="invalid-feedback">{{ $message }}</div>
											@enderror
										</div>
										<!--end::Input group-->

										<!--begin::Input group-->
										<div class="row mb-10">
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<label class="form-label required">Opening Hours</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="time" class="form-control form-control-lg form-control-solid" name="opening_hours" />
												<!--end::Input-->
												@error('opening_hours')
												<div class="invalid-feedback">{{ $message }}</div>
												@enderror
											</div>
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<label class="form-label required">Closing Hours</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input type="time" class="form-control form-control-lg form-control-solid" name="closing_hours" />
												<!--end::Input-->
												@error('closing_hours')
												<div class="invalid-feedback">{{ $message }}</div>
												@enderror
											</div>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="form-label required">Average Tuition Fee</label>
											<!--end::Label-->
											<!--begin::Row-->
											<div class="row">
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Label-->
													<label class="form-label">Primary</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="number" class="form-control form-control-lg form-control-solid" name="tuition_fee_primary" placeholder="Enter fee for Primary" />
													<!--end::Input-->
													@error('tuition_fee_primary')
													<div class="invalid-feedback">{{ $message }}</div>
													@enderror
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Label-->
													<label class="form-label">JSS</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="number" class="form-control form-control-lg form-control-solid" name="tuition_fee_jss" placeholder="Enter fee for JSS" />
													<!--end::Input-->
													@error('tuition_fee_jss')
													<div class="invalid-feedback">{{ $message }}</div>
													@enderror
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Label-->
													<label class="form-label">SSS</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="number" class="form-control form-control-lg form-control-solid" name="tuition_fee_sss" placeholder="Enter fee for SSS" />
													<!--end::Input-->
													@error('tuition_fee_sss')
													<div class="invalid-feedback">{{ $message }}</div>
													@enderror
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Input group-->

										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="form-label required">Admission Period</label>
											<!--end::Label-->
											<!--begin::Input group-->
											<div class="row">
												<div class="col-md-6">
													<!--begin::Label-->
													<label class="form-label">Starting Date</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="date" name="admission_start_date" class="form-control form-control-lg form-control-solid" />
													<!--end::Input-->
													@error('admission_start_date')
													<div class="invalid-feedback">{{ $message }}</div>
													@enderror
												</div>
												<div class="col-md-6">
													<!--begin::Label-->
													<label class="form-label">Ending Date</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="date" name="admission_end_date" class="form-control form-control-lg form-control-solid" />
													<!--end::Input-->
													@error('admission_end_date')
													<div class="invalid-feedback">{{ $message }}</div>
													@enderror
												</div>
											</div>
											<!--end::Input group-->
										</div>
										<!--end::Input group-->
							
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="form-label required">Upload Document</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="file" name="document" class="form-control form-control-lg form-control-solid" />
										<!--end::Input-->
										<!--begin::Hint-->
										<div class="form-text">Please upload a valid document file. Max size: 2MB</div>
										<!--end::Hint-->
										@error('document')
										<div class="invalid-feedback">{{ $message }}</div>
										@enderror
									</div>
									<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div class="" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold text-dark">Other Details</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-semibold fs-6">Fill below to complete informations about your school.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
												<span class="required">Address</span>
												<span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
													<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
													</i>
												</span>
											</label>
											<!--end::Label-->
											<input type="text" class="form-control form-control-solid" placeholder=" Input Address" name="address" />
											@error('address')
											<div class="invalid-feedback">{{ $message }}</div>
											@enderror
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-10">
											<!--begin::Col-->
											<div class="col-md-4 fv-row">
												<!--begin::Label-->
												<label class=" fs-6 fw-semibold form-label mb-2">State</label>
												<!--end::Label-->
												<!--begin::Select-->
												<select name="state" class="form-select form-select-solid" data-control="select2" data-placeholder="Select a country" >
													<option></option>
													<option value="Kano">Nigeria</option>
													<option value="Jigawa">Ghana</option>
													<option value="Kaduna">Benin</option>
													<!-- Add more countries as needed -->
												</select>
												<!--end::Select-->
												@error('state')
												<div class="invalid-feedback">{{ $message }}</div>
												@enderror
											</div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-4 fv-row">
                                                <!--begin::Label-->
                                                <label class=" fs-6 fw-semibold form-label mb-2">Local Government</label>
                                                <!--end::Label-->
                                                <!--begin::Select-->
                                                <select name="lga" class="form-select form-select-solid" data-control="select2" data-placeholder="Select a state" >
                                                    <option></option>
                                                    <option value="Kano">KMC</option>
                                                    <option value="Jigawa">Gwale</option>
                                                    <option value="Yobe">Fagge</option>
                                                    <!-- Add more states as needed -->
                                                </select>
                                                <!--end::Select-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-4 fv-row">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-semibold form-label mb-2">City</label>
                                                <!--end::Label-->
                                                <!--begin::Select-->
                                                <select name="city" class="form-select form-select-solid" data-control="select2" data-placeholder="Select a local government">
                                                    <option></option>
                                                    <option value="Local Government 1">Kabuga</option>
                                                    <option value="Local Government 2">Dorayi</option>
                                                    <option value="Local Government 3">Janbulo</option>
                                                    <!-- Add more local cities as needed -->
                                                </select>
                                                <!--end::Select-->
												@error('city')
        									<div class="invalid-feedback">{{ $message }}</div>
    										@enderror
                                            </div>
                                            <!--end::Col-->
                                        </div>
										<!--end::Input group-->
										<!--begin::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label required">Upload School Logo</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="file" name="logo" class="form-control form-control-lg form-control-solid" />
                                            <!--end::Input-->
                                            <!--begin::Hint-->
                                            <div class="form-text">Please upload a valid image file. Max size: 2MB</div>
                                            <!--end::Hint-->
											@error('logo')
        									<div class="invalid-feedback">{{ $message }}</div>
    										@enderror
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label required">Upload Images of School</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="file" name="images[]" class="form-control form-control-lg form-control-solid" multiple />
                                            <!--end::Input-->
                                            <!--begin::Hint-->
                                            <div class="form-text">Please upload valid image files. Max size per image: 2MB</div>
											@error('images[]')
        									<div class="invalid-feedback">{{ $message }}</div>
    											@enderror
                                            <!--end::Hint-->
                                        </div>
                                        <!--end::Input group-->
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-stack">
											<!--begin::Label-->
											<div class="me-5">
												<label class="fs-6 fw-semibold form-label">Are you sure all these informations about your school are valid?</label>
												<div class="fs-7 fw-semibold text-muted">Read and agreed with our <a href=''>terms and Conditions</a>?</div>
											</div>
											<!--end::Label-->
											<!--begin::Switch-->
											<label class="form-check form-switch form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="1" checked="checked" />
												<span class="form-check-label fw-semibold text-muted">Yes</span>
											</label>
											<!--end::Switch-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 4-->
								<!--begin::Actions-->
								<div class="d-flex flex-stack pt-15">
									<div class="mr-2">
										<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
										<i class="ki-duotone ki-arrow-left fs-4 me-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>Previous</button>
									</div>
									<div>
									
										<button type="submit" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
											<span class="indicator-label">Submit
											<i class="ki-duotone ki-arrow-right fs-4 ms-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i></span>
											<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
										<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
										<i class="ki-duotone ki-arrow-right fs-4 ms-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i></button>
									</div>
								</div>
								<!--end::Actions-->
								
				
							<!--end::Form-->
							@csrf
							</form>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Multi-steps-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "dist/assets/";</script>

		</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="dist/assets/plugins/global/plugins.bundle.js"></script>
		<script src="dist/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="dist/assets/js/custom/utilities/modals/create-account.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>