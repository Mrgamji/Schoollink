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
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!-- Timelime example  -->
            <div class="row">
              <div class="col-md-12">
                <!-- The time line -->
                <div class="text-center mb-4">
                    <img src="{{ asset('storage/' . $school->logo) }}" alt="School Logo" class="img-fluid" style="width: 150px;height: 150px; border-radius: 100px;">
                    <h2 class="mt-2">{{$school->name}}</h2>
                    <p class="mt-2"><strong>Motto:</strong> {{$school->motto}}</p>
                </div>
                <div class="timeline">
                  <!-- timeline time label -->
                  <div class="time-label"><span class="text-bg-danger">Established @if($school->established_date == NULL) Recently @else {{ $school->established_date }} @endif</span></div>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <div>
                    <i class="timeline-icon bi bi-envelope text-bg-primary"></i>
                    <div class="timeline-item">
                      <span class="time"> <i class="bi bi-clock-fill"></i> 12:05 </span>
                      <h3 class="timeline-header">
                       School Description
                      </h3>
                      <div class="timeline-body">
                        {!! nl2br(e($school->description)) !!}
                      </div>
                      <div class="timeline-footer">
                        <a href="{{ $school->website }}" class="btn btn-primary btn-sm" target="_blank">Visit Website</a>
                      </div>
                    </div>
                  </div>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <div>
                    <i class="timeline-icon bi bi-person text-bg-success"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header">
                        School Address
                      </h3>
                      <div class="timeline-body">
                        {{$school->address}}
                      </div>
                      <div class="timeline-footer">
                        <a href="https://www.google.com/maps/search/?api=1&query={{urlencode( $school->name.' '.$school->address) }}" class="btn btn-primary btn-sm" target="_blank">View on Map</a>
                      </div>
                    </div>
                  </div>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <div>
                    <i class="timeline-icon bi bi-chat-text-fill text-bg-warning"></i>
                    <div class="timeline-item">
                      <span class="time"> <i class="bi bi-clock-fill"></i> 27 mins ago </span>
                      <h3 class="timeline-header">
                        Contact Details
                      </h3>
                      <div class="timeline-body">
                        <p><i class="bi bi-envelope-fill"></i> Email: {{$school->email}}</p>
                        <p><i class="bi bi-telephone-fill"></i> Phone: {{$school->contact_number}}</p>
                      </div>
                      <div class="timeline-footer">
                        <a href="mailto:{{$school->email}}" class="btn btn-info btn-sm">Email Now</a>
                        <a href="tel:{{$school->phone}}" class="btn btn-success btn-sm">Call Now</a>
                      </div>
                    </div>
                  </div>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <div class="time-label"><span class="text-bg-success">More of {{$school->name}}</span></div>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <div>
                    <i class="timeline-icon bi bi-camera text-bg-primary"></i>
                    <div class="timeline-item" style="height: 500px;">
                      <h3 class="timeline-header">School Photos</h3>
                      <div class="timeline-body d-flex justify-content-center">
                       <div id="schoolPhotosCarousel" class="carousel slide" data-bs-ride="carousel" style="width: 50%;">
                        <div class="carousel-inner">
                            @foreach($school_images as $index => $image)
                            <div class="carousel-item @if($index == 0) active @endif">
                              <img src="{{asset('storage/'.$image->image_path)}}" class="d-block w-100" alt="School Photo" style="max-height: 400px; object-fit: cover;">
                            </div>
                            @endforeach
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#schoolPhotosCarousel" data-bs-slide="prev" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 50%; width: 50px; height: 50px;">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#schoolPhotosCarousel" data-bs-slide="next" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 50%; width: 50px; height: 50px;">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                
                  <!-- END timeline item -->
                  <div><i class="timeline-icon bi bi-clock-fill text-bg-secondary"></i></div>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!--end::Container-->
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
