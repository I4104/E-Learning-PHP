<!DOCTYPE html>
<html lang="vi" xml:lang="vi">
<head>
    <title>Đăng ký tài khoản</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="index,follow" />

    <link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link rel="stylesheet" href="assets/plugins/global/plugins.bundle.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.bundle.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.custom.css?v=1697465741" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.avatar.css?v=0.0.1" type="text/css" />

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" rel="stylesheet" type="text/css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

    <style>
        body, html {
            font-family: 'Roboto',Helvetica,Arial,sans-serif;
        }
    </style>
    <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
</head>
<body id="kt_body" data-kt-app-page-loading-enabled="true" data-kt-app-page-loading="on" data-kt-app-header-stacked="true" data-kt-app-header-primary-enabled="true" data-kt-app-header-secondary-enabled="false" class="app-default">
<div class="d-flex flex-column flex-root app-root">
    <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
        <div class="app-container container-xxl d-flex flex-row flex-column-fluid">
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center container-xxl">
                    <div id="kt_app_content" class="app-content flex-row-fluid flex-lg-row-auto justify-content-center">
                        <div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10 mt-0 mt-lg-5 mb-5 mb-lg-0 w-md-400px">
                            <form class="form w-100" novalidate="novalidate" id="login" method="POST">
                                <div class="text-center mb-11">
                                    <h1 class="text-dark fw-bolder mb-3">Đăng Nhập</h1>
                                    <div class="text-gray-500 fw-semibold fs-6">Đăng Nhập Tài Khoản</div>
                                </div>
                                <div class="fv-row mb-8">
                                    <input type="text" placeholder="Tài khoản" name="username" class="form-control bg-transparent">
                                </div>
                                <div class="fv-row mb-8">
                                    <input type="password" placeholder="Mật khẩu" name="password" class="form-control bg-transparent">
                                </div>
                                <div class="d-grid mb-10">
                                    <button type="submit" class="btn btn-success">
                                        <span class="indicator-label">Đăng Nhập</span>
                                    </button>
                                </div>
                                <div class="text-gray-500 text-center fw-semibold fs-6">Chưa có tài khoản?
                                    <a href="/register.php" class="link-success">Đăng ký ngay</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/luvnove.custom.js?v=<?php echo time();?>"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
</body>
</html>