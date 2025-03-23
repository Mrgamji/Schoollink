@extends('layout')

@section('content')
		<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Post-->
						@if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                @if(session('error'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('error') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Layout-->
								<div class="d-flex flex-column flex-xl-row">
									<!--begin::Content-->
									<div class="d-flex flex-row-fluid me-xl-9 mb-10 mb-xl-0">
										<!--begin::Pos food-->
										<div class="card card-flush card-p-0 bg-transparent border-0">
											<!--begin::Body-->
											<div class="card-body">
												<!--begin::Nav-->
          
				<!--begin::Post-->
				<div class="post d-flex flex-column-fluid px-4" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Form-->
								<form action="/search" method=get>
									<!--begin::Card-->
									<div class="card mb-7">
										<!--begin::Card body-->
										<div class="card-body">
											<!--begin::Compact form-->
											<div class="d-flex align-items-center mt-4 ml-4">
												<!--begin::Input group-->
												<div class="position-relative w-md-400px me-md-2">
													<i class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 translate-middle ms-6">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													<input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Search" />
												</div>
												<!--end::Input group-->
												<!--begin:Action-->
												<div class="d-flex align-items-center">
													<button type="submit" class="btn btn-primary me-5">Search</button>
												</div>
												<!--end:Action-->
											</div>
											<!--end::Compact form-->
											<!--begin::Advance form-->
											<div class="p-6" id="kt_advanced_search_form">
												<!--begin::Separator-->
												<div class="separator separator-dashed mt-9 mb-6"></div>
												<!--end::Separator-->
											
												<!--begin::Row-->
												<div class="row g-8">
													<!--begin::Col-->
													<div class="col-xxl-7">
														<!--begin::Row-->
														<div class="row g-8">
														
															<!--begin::Col-->
<div class="col-lg-4">
    <label class="fs-6 form-label fw-bold text-dark">State</label>
    <select id="state" class="form-control form-control-solid" name="state" onchange="updateLocalGovernments()">
        <option value="">Select State</option>
        <option value="kano">Kano</option>
    </select>
</div>
<div class="col-lg-4">
    <label class="fs-6 form-label fw-bold text-dark">Local Government</label>
    <select id="lga" class="form-control form-control-solid" name="lga" disabled onchange="updateCities()">
        <option value="">Select Local Government</option>
    </select>
</div>
<div class="col-lg-4">
    <label class="fs-6 form-label fw-bold text-dark">City</label>
    <select id="city" class="form-control form-control-solid" name="city" disabled>
        <option value="">Select City</option>
    </select>
</div>
<!--end::Col-->

<script>
    const data = {
        kano: {
            "Ungogo": ["Rijiyar Zaki", "Rimin Gata", "Rimin Zakara"],

            "Tarauni": ["Hotoro", "Gyadi-Gyadi"],
			"Nassarawa": ["Kwanar Dawaki", "Kwanar Gafan"],
			"Dala": ["Kofar Nassarawa", "Kofar Kudu"],
			"Fagge": ["Kofar Wambai", "Kofar Kudu"],
			"Nasarawa": ["Kofar Kudu", "Kofar Ruwa"],
			"Dawakin Tofa": ["Dawakin Tofa", "Dawakin Kudu"],
			"Bebeji": ["Bebeji", "Bebeji Kudu"],
			"Rogo": ["Rogo", "Rogo Kudu"],
			"Gaya": ["Gaya", "Gaya Kudu"],
			"Ajingi": ["Ajingi", "Ajingi Kudu"],
			"Madobi": ["Madobi", "Madobi Kudu"],
			"Minjibir": ["Minjibir", "Minjibir Kudu"],
			"Sumaila": ["Sumaila", "Sumaila Kudu"],
			"Tofa": ["Tofa", "Tofa Kudu"],
			"Warawa": ["Warawa", "Warawa Kudu"],
			"Bagwai": ["Bagwai", "Bagwai Kudu"],
			"Bunkure": ["Bunkure", "Bunkure Kudu"],
			"Garun Malam": ["Garun Malam", "Garun Malam Kudu"],
			"Gabasawa": ["Gabasawa", "Gabasawa Kudu"],
			"Kiru": ["Kiru", "Kiru Kudu"],
			"Kumbotso": ["Kumbotso", "Kumbotso Kudu"],
			"Makoda": ["Makoda", "Makoda Kudu"],
			"Rimin Gado": ["Rimin Gado", "Rimin Gado Kudu"],
			"Takai": ["Takai", "Takai Kudu"],
			"Tsanyawa": ["Tsanyawa", "Tsanyawa Kudu"],
        },
    };

	function updateLocalGovernments() {
		const stateSelect = document.getElementById("state");
		const lgaSelect = document.getElementById("lga");
		const citySelect = document.getElementById("city");
		const selectedState = stateSelect.value;

		lgaSelect.innerHTML = '<option value="">Select Local Government</option>';
		citySelect.innerHTML = '<option value="">Select City</option>';
		citySelect.disabled = true;

		if (selectedState && data[selectedState]) {
			lgaSelect.disabled = false;
			Object.keys(data[selectedState]).forEach(lga => {
				let option = document.createElement("option");
				option.value = lga;
				option.textContent = lga;
				if (lga !== "Ungogo") {
					option.disabled = true;
				}
				lgaSelect.appendChild(option);
			});
		} else {
			lgaSelect.disabled = true;
		}
	}

	function updateCities() {
		const stateSelect = document.getElementById("state");
		const lgaSelect = document.getElementById("lga");
		const citySelect = document.getElementById("city");
		const selectedState = stateSelect.value;
		const selectedLGA = lgaSelect.value;

		citySelect.innerHTML = '<option value="">Select City</option>';

		if (selectedState && selectedLGA && data[selectedState][selectedLGA]) {
			citySelect.disabled = false;
			data[selectedState][selectedLGA].forEach(city => {
				let option = document.createElement("option");
				option.value = city;
				option.textContent = city;
				citySelect.appendChild(option);
			});
		} else {
			citySelect.disabled = true;
		}
	}
</script>

														</div>
														<!--end::Row-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-xxl-5">
														<!--begin::Row-->
														<div class="row g-8">
															<!--begin::Col-->
															<div class="col-lg-6">
																<label class="fs-6 form-label fw-bold text-dark">Category</label>
																<!--begin::Select-->
																<select name="category" class="form-select form-select-solid" data-control="select2" data-placeholder="Select Category" data-hide-search="true">
																	<option value="" disabled selected>Select Category</option>
																	<option value="day">Day Schools</option>
																	<option value="boarding">Boarding Schools</option>
																	<option value="islamiyya">Islamiyya Schools</option>
																	<option value="tsangaya">Tsangaya Schools</option>
																	<option value="public">Public Schools</option>
																	<option value="private">Private Schools</option>
																</select>
																<!--end::Select-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-lg-6">
																<label class="fs-6 form-label fw-bold text-dark">Apply Filter</label>
																<div class="form-check form-switch form-check-custom form-check-solid mt-1">
																	<input class="btn btn-primary" value="Apply" type="submit"/>
																	
																</div>

													</div>
													
															<!--end::Col-->
														</div>
														
														<!--end::Row-->
													</div>
												<div class="alert alert-info mt-4" role="alert">
													<i class="ki-duotone ki-information fs-2 me-2"></i>
													Note: the system displays schools around 2km radius from your search
												</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Advance form-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</form>
								<!--end::Form-->
								
							</div>
							<!--end::Container-->
	</div>
						<!--end::Post-->
				


<script>
    document.addEventListener('DOMContentLoaded', function () {
        var triggerTabList = [].slice.call(document.querySelectorAll('.nav-link'));
        triggerTabList.forEach(function (triggerEl) {
            triggerEl.addEventListener('click', function (event) {
                event.preventDefault();
                var tabTrigger = new bootstrap.Tab(triggerEl);
                tabTrigger.show();
            });
        });
    });
</script>

												<!--end::Nav-->


                                                
												<!--begin::Tab Content-->
												<div class="tab-content">
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_pos_food_content_1">
														<!--begin::Wrapper-->
														<div class="d-flex flex-wrap d-grid gap-5 gap-xxl-9">
															@foreach($schools as $school)
															<!--begin::Card-->
															<div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
																<!--begin::Body-->
																<div class="card-body text-center">
																	<!--begin::Food img-->
																	<img src="{{asset('storage/'.$school->logo)}}" class="rounded-3 mb-4 w-150px h-150px w-xxl-200px h-xxl-200px" alt="{{$school->name}} Logo" />
																	<!--end::Food img-->
																	<!--begin::Info-->
																	<div class="mb-2">
																		<!--begin::Title-->
																		<div class="text-center">
																			<span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1"><a href="/view/{{$school->id}}">{{$school->name}}</a></span>
																			<span class="text-gray-400 fw-semibold d-block fs-6 mt-n1">{{$school->type}}</span>
																		</div>
																		<!--end::Title-->
																	</div>
																	<!--end::Info-->
																	<!--begin::Total-->
																	<a href="/view/{{$school->id}}" class="btn btn-primary fw-bold fs-6 py-2 px-4">
																		<i class="ki-duotone ki-eye fs-2"></i> Click here to view
																	</a>
																	<!--end::Total-->
																</div>
																<!--end::Body-->
															</div>
															<!--end::Card-->
															@endforeach
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Tap pane-->
												</div>
												<!--end::Tab Content-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Pos food-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Layout-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
					@endsection