<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
  <base href="{{asset('design1')}}/" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{{$school->name}}</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE 4 | Timeline Elements" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS."
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"
    />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
      integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="dist/css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content bg-light">
  <div class="container-fluid py-4">
    <ul class="nav nav-tabs justify-content-center shadow-sm bg-white rounded p-2" id="schoolTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">Overview</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="false">Description</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="address-tab" data-bs-toggle="tab" data-bs-target="#address" type="button" role="tab" aria-controls="address" aria-selected="false">Address</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="photos-tab" data-bs-toggle="tab" data-bs-target="#photos" type="button" role="tab" aria-controls="photos" aria-selected="false">Photos</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="fees-tab" data-bs-toggle="tab" data-bs-target="#fees" type="button" role="tab" aria-controls="fees" aria-selected="false">Tuition Fees</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="admission-tab" data-bs-toggle="tab" data-bs-target="#admission" type="button" role="tab" aria-controls="admission" aria-selected="false">Admission</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="achievements-tab" data-bs-toggle="tab" data-bs-target="#achievements" type="button" role="tab" aria-controls="achievements" aria-selected="false">Achievements</button>
      </li>
    </ul>
    
    <style>
      .nav-tabs .nav-link {
        font-weight: bold;
        color: #495057;
        transition: all 0.3s;
      }
      .nav-tabs .nav-link:hover {
        color: #007bff;
        border-bottom: 3px solid #007bff;
      }
      .nav-tabs .nav-link.active {
        background-color: #007bff;
        color: white;
        border-radius: 8px;
      }
      .timeline-item {
        background: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
      }
    </style>
    
    <div class="tab-content py-4 bg-white shadow-sm rounded p-3" id="schoolTabContent">
      <div class="tab-pane fade show active text-center" id="overview" role="tabpanel">
        <img src="{{ asset('storage/' . $school->logo) }}" alt="School Logo" class="img-fluid rounded-circle shadow" style="width: 150px; height: 150px;">
        <h2 class="mt-3 text-primary">{{$school->name}}</h2>
        <p class="mt-2"><strong>Motto:</strong> {{$school->motto}}</p>
      </div>
      <div class="tab-pane fade" id="description" role="tabpanel">
        <div class="timeline-item">
          <h3 class="text-danger">School Description</h3>
          <p>{!! nl2br(e($school->description)) !!}</p>
          <a href="{{ $school->website }}" class="btn btn-outline-primary">Visit Website</a>
        </div>
      </div>
      <div class="tab-pane fade" id="address" role="tabpanel">
        <div class="timeline-item">
          <h3 class="text-success">School Address</h3>
          <p>{{$school->address}}</p>
          <a href="https://www.google.com/maps/search/?api=1&query={{urlencode($school->name.' '.$school->address)}}" class="btn btn-outline-success">View on Map</a>
        </div>
      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel">
        <div class="timeline-item">
          <h3 class="text-warning">Contact Details</h3>
          <p><i class="bi bi-envelope-fill"></i> Email: {{$school->email}}</p>
          <p><i class="bi bi-telephone-fill"></i> Phone: {{$school->contact_number}}</p>
          <a href="mailto:{{$school->email}}" class="btn btn-outline-info">Email Now</a>
          <a href="tel:{{$school->phone}}" class="btn btn-outline-success">Call Now</a>
        </div>
      </div>
      <div class="tab-pane fade" id="photos" role="tabpanel">
        <div class="timeline-item">
          <h3 class="text-primary">School Photos</h3>
          <div id="schoolPhotosCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              @foreach($school_images as $index => $image)
                <div class="carousel-item @if($index == 0) active @endif">
                  <img src="{{asset('storage/'.$image->image_path)}}" class="d-block w-100 rounded" alt="School Photo">
                </div>
              @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#schoolPhotosCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#schoolPhotosCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="admission" role="tabpanel">
        <div class="timeline-item">
          <h3 class="text-info">Admission Details</h3>
          <p><strong>Start Date:</strong> {{$school->adm_start}}</p>
          <p><strong>End Date:</strong> {{$school->adm_end}}</p>
          <span class="badge bg-danger">Applications Closed</span>
        </div>
      </div>
      <div class="tab-pane fade" id="fees" role="tabpanel">
        <div class="timeline-item">
          <h3 class="text-secondary">Tuition Fees</h3>
          <p><strong>Primary Section:</strong> {{$school->fee_primary}}</p>
          <p><strong>JSS Fees:</strong> {{$school->fee_jss}}</p>
          <p><strong>SSS Fees:</strong> {{$school->fee_sss}}</p>
        </div>
      </div>
      <style>
  .achievements-container {
      padding: 20px;
  }

  .timeline-item h3 {
      font-size: 1.8rem;
      font-weight: bold;
      text-transform: uppercase;
      margin-bottom: 20px;
      text-align: center;
      color: #007bff;
  }

  .custom-card {
      display: flex;
      flex-direction: column;
      overflow: hidden;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .custom-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
  }

  .card-img {
      height: 200px;
      object-fit: cover;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
  }

  .card-body {
      padding: 15px;
  }

  .fade-in {
      opacity: 0;
      transform: translateY(30px);
      animation: fadeIn 0.8s ease-out forwards;
  }

  @keyframes fadeIn {
      to {
          opacity: 1;
          transform: translateY(0);
      }
  }
</style>

<div class="tab-pane fade achievements-container" id="achievements" role="tabpanel">
    <div class="timeline-item">
        <h3 class="text-primary">Achievements</h3>

        <!-- Alumni Section -->
        <h4 class="mt-4">Alumni</h4>
        <div class="row">
            @foreach($school_alumni as $alumnus)
            <div class="col-lg-6 col-md-6 col-sm-12 fade-in mb-4">
                <div class="card custom-card">
                    <img src="{{ asset('storage/' . $alumnus->image) }}" class="card-img" alt="{{ $alumnus->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $alumnus->name }}</h5>
                        <br><br><p class="card-text"><strong>Current Role:</strong> {{ $alumnus->current_role }}</p>
                        <p class="card-text"><strong>Phone:</strong> {{ $alumnus->contact }}</p>
                        <p class="card-text"><strong>Email:</strong> {{ $alumnus->email }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <hr>

        <!-- Competitions Section -->
        <h4 class="mt-4">Competitions and Medals</h4>
        <div class="row">
            @foreach($school_competition as $competition)
            <div class="col-lg-6 col-md-6 col-sm-12 fade-in mb-4">
                <div class="card custom-card">
                    <img src="{{ asset('storage/' . $competition->image) }}" class="card-img" alt="{{ $competition->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $competition->name }}</h5>
                        <p class="card-text"><strong>Position:</strong> {{ $competition->position }}</p>
                        <p class="card-text"><strong>Organizer:</strong> {{ $competition->organizer }}</p>
                        <p class="card-text"><strong>Date:</strong> {{ $competition->date }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

      </div>
    </div>
  </div>
</div>

        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <footer class="app-footer">
        <!--begin::To the end-->
        <!--begin::Copyright-->
        <strong>
          Copyright &copy; 2025&nbsp;
          <a href="https/mrgamji.vercel.app" class="text-decoration-none">Mrgamji</a>.
        </strong>
        All rights reserved.
        <!--end::Copyright-->
      </footer>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
      integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="dist/js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
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
    <!--end::OverlayScrollbars Configure-->
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
