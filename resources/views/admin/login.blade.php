<!DOCTYPE html>
<html lang="en">
    <head><base href="{{asset('design')}}/"/>
        <title>Admin Login - SchoolLink</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="dist/assets/media/logos/favicon.ico" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <link href="dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    </head>
    <body id="kt_body" class="auth-bg">
        <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
        <div class="d-flex flex-column flex-root">
            <div class="d-flex flex-column flex-lg-row flex-column-fluid">
                <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                    <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                        <div class="w-lg-500px p-10">
                            <form class="form w-100" action="/admin/signin" method="POST">
                            @csrf
                                <div class="text-center mb-11">
                                    <h1 class="text-dark display-4 fw-bolder mb-3">Admin Portal</h1>
                                    <h1 class="text-dark display-8 mb-3">Sign In</h1>
                                </div>
                                <div class="separator separator-content my-14">
                                    <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
                                </div>
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
                                <div class="fv-row mb-8">
                                    <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
                                </div>
                                <div class="fv-row mb-3">
                                    <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" />
                                </div>
                                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                    <div></div>
                                    <a href="/admin/forgot-password" class="link-primary">Forgot Password ?</a>
                                </div>
                                <div class="d-grid mb-10">
                                    <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                        <span class="indicator-label">Sign In</span>
                                        <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                                <div class="text-gray-500 text-center fw-semibold fs-6">Not an Admin?
                                <a href="/login" class="link-primary">User Login</a></div>
                            </form>
                        </div>
                    </div>
                    <div class="w-lg-500px d-flex flex-stack mx-auto">
                        <div class="d-flex fw-semibold text-primary fs-base gap-5">
                            <a href="/terms" target="_blank">Terms</a>
                            <a href="/faqs" target="_blank">FAQS</a>
                            <a href="/contact" target="_blank">Contact Us</a>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
        <script>var hostUrl = "dist/assets/";</script>
        <script src="dist/assets/plugins/global/plugins.bundle.js"></script>
        <script src="dist/assets/js/scripts.bundle.js"></script>
        <script src="dist/assets/js/custom/authentication/sign-in/general.js"></script>
    </body>
</html>
