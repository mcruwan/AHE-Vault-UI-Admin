<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
  <title>Vault - Dashboard</title>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Vault - Dashboard" />
  <meta property="og:url" content="https://keenthemes.com/metronic" />
  <meta property="og:site_name" content="Metronic by Keenthemes" />
  <link rel="canonical" href="http://index.html" />
  <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
  <!--begin::Fonts(mandatory for all pages)-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
  <!--end::Fonts-->
  <!--begin::Vendor Stylesheets(used for this page only)-->
  <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
  <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
  <!--end::Vendor Stylesheets-->
  <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
  <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
  <!--end::Global Stylesheets Bundle-->
  <script>
    // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
  </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
  <!--begin::Theme mode setup on page load-->
  <script>
    var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
      if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
        themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
      } else {
        if (localStorage.getItem("data-bs-theme") !== null) {
          themeMode = localStorage.getItem("data-bs-theme");
        } else {
          themeMode = defaultThemeMode;
        }
      }
      if (themeMode === "system") {
        themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
      }
      document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
  </script>
  <!--end::Theme mode setup on page load-->
  <!--begin::App-->
  <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
      <!--begin::Header-->
      <div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate-="true" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
        <!--begin::Header container-->
        <div class="app-container container-xxl d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
          <!--begin::Header wrapper-->
          <div class="app-header-wrapper d-flex flex-grow-1 align-items-stretch justify-content-between" id="kt_app_header_wrapper">
            <!--begin::Menu wrapper-->
            <div class="app-header-menu app-header-mobile-drawer align-items-start align-items-lg-center w-100" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">

              <?php include_once('widgets/main-menu.php'); ?>

            </div>
            <!--end::Menu wrapper-->

            <?php include_once('widgets/sidebar-mobile.php'); ?>

          </div>
          <!--end::Header wrapper-->
        </div>
        <!--end::Header container-->
      </div>
      <!--end::Header-->
      <!--begin::Wrapper-->
      <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

        <?php include_once('widgets/sidebar.php'); ?>

        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
          <!--begin::Content wrapper-->
          <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-0">
              <!--begin::Toolbar container-->
              <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center me-3">
                  <!--begin::Title-->
                  <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Dashboard</h1>
                  <!--end::Title-->
                  <!--begin::Breadcrumb-->
                  <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                      <a href="index.html" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                      <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Dashboard</li>
                    <!--end::Item-->
                  </ul>
                  <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->

              </div>
              <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
              <!-- Content container-->
              <div id="kt_app_content_container" class="app-container container-xxl">
                <!-- Row-->
                <div class="row g-5 g-xl-10">
                  <!-- Col-->
                  <div class="col-xl-4 mb-xl-10">
                    <div class="card card-flush">
                      <!--begin::Header-->
                      <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-column">
                          <!--begin::Amount-->
                          <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">65,493</span>
                          <!--end::Amount-->
                          <!--begin::Subtitle -->
                          <span class="text-gray-500 pt-1 fw-semibold fs-6">Total Number of Students</span>
                          <!--end::Subtitle -->
                        </div>
                        <!--end::Title-->
                      </div>
                      <!--end::Header-->
                      <!--begin::Card body-->
                      <div class="card-body d-flex align-items-end">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center flex-wrap">
                          <!--begin::Chart-->
                          <div class="d-flex me-7 me-xxl-10">
                            <div id="kt_card_widget_10_chart" class="min-h-auto" style="height: 78px; width: 78px" data-kt-size="78" data-kt-line="11"></div>
                          </div>
                          <!--end::Chart -->
                          <!--begin::Labels-->
                          <div class="d-flex flex-column content-justify-center flex-grow-1">
                            <!--begin::Label -->
                            <div class="d-flex fs-6 fw-semibold align-items-center">
                              <!--begin::Bullet -->
                              <div class="bullet w-8px h-6px rounded-2 bg-success me-3"></div>
                              <!--end::Bullet -->
                              <!--begin::Label -->
                              <div class="fs-6 fw-semibold text-gray-500 flex-shrink-0">Management</div>
                              <!--end::Label -->
                              <!--begin::Separator -->
                              <div class="separator separator-dashed min-w-10px flex-grow-1 mx-2"></div>
                              <!--end:: Separator -->
                              <!--begin:: Stats -->
                              <div class="ms-auto fw-bolder text-gray-700 text-end">45%</div>
                              <!--end::Stats -->
                            </div>
                            <!--end::Label-->
                            <!--begin::Label-->
                            <div class="d-flex fs-6 fw-semibold align-items-center my-1">
                              <!--begin::Bullet-->
                              <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                              <!--end::Bullet-->
                              <!--begin::Label-->
                              <div class="fs-6 fw-semibold text-gray-500 flex-shrink-0">IT</div>
                              <!--end::Label-->
                              <!--begin::Separator-->
                              <div class="separator separator-dashed min-w-10px flex-grow-1 mx-2"></div>
                              <!--end::Separator-->
                              <!--begin::Stats-->
                              <div class="ms-auto fw-bolder text-gray-700 text-end">30%</div>
                              <!--end::Stats-->
                            </div>
                            <!--end::Label-->
                            <!--begin::Label-->
                            <div class="d-flex fs-6 fw-semibold align-items-center">
                              <!--begin::Bullet-->
                              <div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                              <!--end::Bullet-->
                              <!--begin::Label-->
                              <div class="fs-6 fw-semibold text-gray-500 flex-shrink-0">Psychology</div>
                              <!--end::Label-->
                              <!--begin::Separator-->
                              <div class="separator separator-dashed min-w-10px flex-grow-1 mx-2"></div>
                              <!--end::Separator-->
                              <!--begin::Stats-->
                              <div class="ms-auto fw-bolder text-gray-700 text-end">25%</div>
                              <!--end::Stats-->
                            </div>
                            <!--end::Label-->
                          </div>
                          <!--end::Labels-->
                        </div>
                        <!--end::Wrapper-->
                      </div>
                      <!--end::Card body-->
                    </div>
                  </div>
                  <!--end::Col-->
                  <!-- Col-->
                  <div class="col-xl-8 mb-5 mb-xl-10">
                    <!-- Engage widget 12-->
                    <div class="card card-custom border-0 h-md-100" style="background: #df4d02;">
                      <!-- Body-->
                      <div class="card-body d-flex justify-content-center flex-wrap ps-xl-15 pe-0">
                        <!-- Wrapper-->
                        <div class="flex-grow-1 mt-2 me-9 me-md-0 align-content-center" style="width: 60%;">
                          <!-- Title-->
                          <div class="position-relative text-white fs-1 z-index-2 fw-bold mb-8">
                            Welcome to Your AppliedHE Vault Dashboard
                          </div>
                          <!--end::Title-->
                          <!-- Text-->
                          <span class="text-white fw-semibold fs-6 mb-6 d-block" style="width: 93%;">Access your centralized data hub for rankings, ratings, and institutional surveys. Leverage the power of data to gain valuable insights and maximize your institution's performance</span>
                        </div>
                        <!-- Wrapper-->
                        <!-- Illustration-->
                        <img src="assets/media/illustrations/sigma-1/17.png" class="h-150px me-15" alt="" />
                        <!--end::Illustration-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Engage widget 12-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
                <!-- Row-->
                <div class="row g-5 g-xl-10">
                  <!-- Col-->
                  <div class="col-xl-4 mb-xl-10">
                    <!-- Chart widget 29-->
                    <div class="card card-flush">
                      <!--begin::Header-->
                      <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                          <span class="card-label fw-bold text-gray-900">Timeline</span>
                          <span class="text-gray-500 pt-2 fw-semibold fs-6">Latest activities</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                          <!--begin::Menu-->
                          <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <i class="ki-outline ki-dots-square fs-1 text-gray-500 me-n1"></i>
                          </button>
                          <!--begin::Menu 2-->
                          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mb-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3">New Ticket</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3">New Customer</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                              <!--begin::Menu item-->
                              <a href="#" class="menu-link px-3">
                                <span class="menu-title">New Group</span>
                                <span class="menu-arrow"></span>
                              </a>
                              <!--end::Menu item-->
                              <!--begin::Menu sub-->
                              <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                  <a href="#" class="menu-link px-3">Admin Group</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                  <a href="#" class="menu-link px-3">Staff Group</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                  <a href="#" class="menu-link px-3">Member Group</a>
                                </div>
                                <!--end::Menu item-->
                              </div>
                              <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3">New Contact</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mt-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                              <div class="menu-content px-3 py-3">
                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                              </div>
                            </div>
                            <!--end::Menu item-->
                          </div>
                          <!--end::Menu 2-->
                          <!--end::Menu-->
                        </div>
                        <!--end::Toolbar-->
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <div class="card-body pt-12">
                        <!--begin::Timeline-->
                        <div class="timeline-label">
                          <!--begin::Item-->
                          <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                              <i class="ki-outline ki-abstract-8 text-gray-600 fs-3"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Text-->
                            <div class="fw-semibold text-gray-700 ps-3 fs-7">Logged in to the AppliedHE Vault</div>
                            <!--end::Text-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                              <i class="ki-outline ki-abstract-8 text-gray-600 fs-3"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Text-->
                            <div class="fw-semibold text-gray-700 ps-3 fs-7">Submitted faculty publications data for the latest research output</div>
                            <!--end::Text-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">12:37</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                              <i class="ki-outline ki-abstract-8 text-gray-600 fs-3"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Desc-->
                            <div class="timeline-content fw-bold text-gray-800 ps-3">Profile Update</div>
                            <!--end::Desc-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">14:50</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                              <i class="ki-outline ki-abstract-8 text-gray-600 fs-3"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Text-->
                            <div class="fw-semibold text-gray-700 ps-3 fs-7">Entered graduate employment statistics for the 2022 graduating class</div>
                            <!--end::Text-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">16:03</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                              <i class="ki-outline ki-abstract-8 text-gray-600 fs-3"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Desc-->
                            <div class="timeline-content fw-semibold text-gray-800 ps-3">Added information on international student exchange programs</div>
                            <!--end::Desc-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                              <i class="ki-outline ki-abstract-8 text-gray-600 fs-3"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Text-->
                            <div class="fw-semibold text-gray-700 ps-3 fs-7">Submitted data on community service projects conducted in the past year</div>
                            <!--end::Text-->
                          </div>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">18:37</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                              <i class="ki-outline ki-abstract-8 text-gray-600 fs-3"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Desc-->
                            <div class="timeline-content fw-bold text-gray-800 ps-3">Uploaded data on recent research grants and projects.
                            </div>
                            <!--end::Desc-->
                          </div>
                          <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">20:40</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                              <i class="ki-outline ki-abstract-8 text-gray-600 fs-3"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Desc-->
                            <div class="timeline-content fw-bold text-gray-800 ps-3">Updated details of new courses and curriculum changes.
                            </div>
                            <!--end::Desc-->
                          </div>
                          <div class="timeline-item">
                            <!--begin::Label-->
                            <div class="timeline-label fw-bold text-gray-800 fs-6">21:52</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                              <i class="ki-outline ki-abstract-8 text-gray-600 fs-3"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Desc-->
                            <div class="timeline-content fw-bold text-gray-800 ps-3"> Ranking Submission
                            </div>
                            <!--end::Desc-->
                          </div>
                          <!--end::Item-->
                        </div>
                        <!--end::Timeline-->
                      </div>
                      <!--end: Card Body-->
                    </div>
                    <!--end::Chart widget 29-->
                  </div>
                  <!--end::Col-->
                  <!-- Col-->
                  <div class="col-xl-8 mb-5 mb-xl-10">
                    <!-- Table widget 6-->
                    <div class="card card-flush h-md-100">
                      <!-- Header-->
                      <div class="card-header pt-7">
                        <!-- Title-->
                        <h3 class="card-title align-items-start flex-column">
                          <span class="card-label fw-bold text-gray-800">Private University Ranking: ASEAN</span>
                          <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 100+ Universityes</span>
                        </h3>
                        <!--end::Title-->
                        <!-- Toolbar-->
                        <div class="card-toolbar">
                          <a href="#" class="btn btn-sm btn-light">View All</a>
                        </div>
                        <!--end::Toolbar-->
                      </div>
                      <!--end::Header-->
                      <!-- Body-->
                      <div class="card-body">
                        <!-- Nav-->
                        <ul class="nav nav-pills nav-pills-custom mb-3">
                          <li class="nav-item mb-3 me-3 me-lg-6">
                            <!-- Link-->
                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" data-bs-toggle="pill" href="#kt_stats_widget_6_tab_1">
                              <!-- Icon-->
                              <div class="nav-icon mb-3">
                                <i class="ki-outline ki-calendar fs-1"></i>
                              </div>
                              <!--end::Icon-->
                              <!-- Title-->
                              <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">2023</span>
                              <!--end::Title-->
                              <!-- Bullet-->
                              <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                              <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                          </li>
                          <li class="nav-item mb-3 me-3 me-lg-6">
                            <!-- Link-->
                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" href="#kt_stats_widget_6_tab_2">
                              <!-- Icon-->
                              <div class="nav-icon mb-3">
                                <i class="ki-outline ki-calendar fs-1"></i>
                              </div>
                              <!--end::Icon-->
                              <!-- Title-->
                              <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">2024</span>
                              <!--end::Title-->
                              <!-- Bullet-->
                              <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                              <!--end::Bullet-->
                            </a>
                            <!--end::Link-->
                          </li>
                        </ul>
                        <!--end::Nav-->
                        <!-- Tab Content-->
                        <div class="tab-content">
                          <!-- Tap pane-->
                          <div class="tab-pane fade active show" id="kt_stats_widget_6_tab_1">
                            <!-- Table container-->
                            <div class="table-responsive">
                              <!-- Table-->
                              <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                <!-- Table head-->
                                <thead>
                                  <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                    <th class="p-0 w-200px w-xxl-450px"></th>
                                    <th class="p-0 min-w-100px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-100px"></th>
                                    <th class="p-0 w-50px"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3 border">
                                          <img src="assets/media/logos/uni-logo-sample.jpg" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Bina Nusantara University</a>
                                          <span class="fw-semibold text-gray-500 d-block">University</span>

                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">1</span>
                                      <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Indonesia</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Country</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">69,04</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Total Score</span>
                                    </td>

                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3 border">
                                          <img src="assets/media/logos/uni-logo-sample.jpg" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Infrastructure University Kuala Lumpur</a>
                                          <span class="fw-semibold text-gray-500 d-block">University</span>

                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">2</span>
                                      <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Malaysia</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Country</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">66,60
                                      </a>
                                      <span class="text-muted fw-semibold d-block fs-7">Total Score</span>
                                    </td>

                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3 border">
                                          <img src="assets/media/logos/uni-logo-sample.jpg" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Universitas Tarumanagara</a>
                                          <span class="fw-semibold text-gray-500 d-block">University</span>

                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">3</span>
                                      <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Indonesia</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Country</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">65,83</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Total Score</span>
                                    </td>

                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3 border">
                                          <img src="assets/media/logos/uni-logo-sample.jpg" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Universitas Teknokrat Indonesia</a>
                                          <span class="fw-semibold text-gray-500 d-block">University</span>

                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">4</span>
                                      <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Indonesia</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Country</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">65,82</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Total Score</span>
                                    </td>

                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3 border">
                                          <img src="assets/media/logos/uni-logo-sample.jpg" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">University of Santo Tomas</a>
                                          <span class="fw-semibold text-gray-500 d-block">University</span>

                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">5</span>
                                      <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Philippines</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Country</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">65,17</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Total Score</span>
                                    </td>

                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="kt_stats_widget_6_tab_2">
                            <!-- Table container-->
                            <div class="table-responsive">
                              <!-- Table-->
                              <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                <!-- Table head-->
                                <thead>
                                  <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                    <th class="p-0 w-200px w-xxl-450px"></th>
                                    <th class="p-0 min-w-100px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-100px"></th>
                                    <th class="p-0 w-50px"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3 border">
                                          <img src="assets/media/logos/uni-logo-sample.jpg" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Sunway University</a>
                                          <span class="fw-semibold text-gray-500 d-block">University</span>

                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">1</span>
                                      <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Malaysia </a>
                                      <span class="text-muted fw-semibold d-block fs-7">Country</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">72,42</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Total Score</span>
                                    </td>

                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3 border">
                                          <img src="assets/media/logos/uni-logo-sample.jpg" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Krirk University</a>
                                          <span class="fw-semibold text-gray-500 d-block">University</span>

                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">2</span>
                                      <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Thailand</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Country</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">69,93</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Total Score</span>
                                    </td>

                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3 border">
                                          <img src="assets/media/logos/uni-logo-sample.jpg" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">UCSI University</a>
                                          <span class="fw-semibold text-gray-500 d-block">University</span>

                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">3</span>
                                      <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Malaysia</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Country</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">69,19</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Total Score</span>
                                    </td>

                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3 border">
                                          <img src="assets/media/logos/uni-logo-sample.jpg" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Taylor's University</a>
                                          <span class="fw-semibold text-gray-500 d-block">University</span>

                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">4</span>
                                      <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Malaysia </a>
                                      <span class="text-muted fw-semibold d-block fs-7">Country</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">69,17</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Total Score</span>
                                    </td>

                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3 border">
                                          <img src="assets/media/logos/uni-logo-sample.jpg" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Infrastructure University Kuala Lumpur</a>
                                          <span class="fw-semibold text-gray-500 d-block">University</span>

                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">5</span>
                                      <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Malaysia</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Country</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">66,82</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Total Score</span>
                                    </td>

                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <!--end::Table-->
                          </div>
                        </div>
                        <!--end::Tab Content-->
                      </div>
                      <!--end: Card Body-->
                    </div>
                    <!--end::Table widget 6-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
                <!-- Row-->
                <div class="row g-5 g-xl-10">
                  <!-- Col-->
                  <div class="col-xl-4 mb-xl-10">
                    <!-- Chart widget 29-->
                    <div class="card card-flush h-xl-100">
                      <!-- Header-->
                      <div class="card-header py-7">
                        <!-- Statistics-->
                        <div class="m-0">
                          <!-- Heading-->
                          <div class="d-flex align-items-center mb-2">
                            <!-- Title-->
                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">01</span>
                            <!--end::Title-->
                            <!-- Label-->
                            <span class="badge badge-light-success fs-base">
                              <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>5.4%</span>
                            <!--end::Label-->
                          </div>
                          <!--end::Heading-->
                          <!-- Description-->
                          <span class="fs-6 fw-semibold text-gray-500">Public University Ranking: ASEAN 2024</span>
                          <span class="d-block fs-7 text-gray-500">University Kebangsaan Malaysia (UKM)</span>
                          <!--end::Description-->
                        </div>
                        <!--end::Statistics-->

                      </div>
                      <!--end::Header-->
                      <!-- Body-->
                      <div class="card-body d-flex py-5 px-0">
                        <!-- Chart-->
                        <div id="kt_charts_widget_1_chart" class="h-300px w-100 min-h-auto ps-7 pe-0 mb-5"></div>
                        <!--end::Chart-->
                      </div>
                      <!--end::Body-->
                    </div>
                    <!--end::Chart widget 29-->
                  </div>
                  <!--end::Col-->
                  <!-- Col-->
                  <div class="col-xl-8 mb-5 mb-xl-10">
                    <!-- Table widget 6-->
                    <div class="card card-flush h-md-100">
                      <!-- Header-->
                      <div class="card-header pt-7">
                        <!-- Title-->
                        <h3 class="card-title align-items-start flex-column">
                          <span class="card-label fw-bold text-gray-800">Public University Ranking: ASEAN 2024</span>
                          <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 100+ Universityes</span>
                        </h3>
                        <!--end::Title-->
                        <!-- Toolbar-->
                        <div class="card-toolbar">
                          <a href="#" class="btn btn-sm btn-light">View All</a>
                        </div>
                        <!--end::Toolbar-->
                      </div>
                      <!--end::Header-->
                      <!-- Body-->
                      <div class="card-body">

                        <!-- Tab Content-->
                        <div class="tab-content">
                          <!-- Tap pane-->
                          <div class="tab-pane fade active show" id="kt_stats_widget_6_tab_1">
                            <!-- Table container-->
                            <div class="table-responsive">
                              <!-- Table-->
                              <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                <!-- Table head-->
                                <thead>
                                  <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                    <th class="p-0 w-200px w-xxl-450px"></th>
                                    <th class="p-0 min-w-100px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-100px"></th>
                                    <th class="p-0 w-50px"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3 border">
                                          <img src="assets/media/logos/uni-logo-sample.jpg" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">University Kebangsaan Malaysia (UKM) </a>
                                          <span class="fw-semibold text-gray-500 d-block">University</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">1</span>
                                      <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Malaysia</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Country</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">75,94</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Total Score</span>
                                    </td>
                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3 border">
                                          <img src="assets/media/logos/uni-logo-sample.jpg" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">National University of Singapore (NUS) </a>
                                          <span class="fw-semibold text-gray-500 d-block">University</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">2</span>
                                      <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Singapore</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Country</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">73,73</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Total Score</span>
                                    </td>
                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3 border">
                                          <img src="assets/media/logos/uni-logo-sample.jpg" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">IPB University (aka Bogor Agricultural University)</a>
                                          <span class="fw-semibold text-gray-500 d-block">University</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">3</span>
                                      <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Indonesia</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Country</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">73,67</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Total Score</span>
                                    </td>
                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3 border">
                                          <img src="assets/media/logos/uni-logo-sample.jpg" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Nanyang Technological University (NTU)</a>
                                          <span class="fw-semibold text-gray-500 d-block">University</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">4</span>
                                      <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Singapore</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Country</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">73,19</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Total Score</span>
                                    </td>
                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex align-items-center">
                                        <div class="symbol symbol-40px me-3 border">
                                          <img src="assets/media/logos/uni-logo-sample.jpg" />
                                        </div>
                                        <div class="d-flex justify-content-start flex-column">
                                          <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Mahidol University</a>
                                          <span class="fw-semibold text-gray-500 d-block">University</span>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <span class="text-gray-800 fw-bold d-block mb-1 fs-6">5</span>
                                      <span class="fw-semibold text-gray-500 d-block">Rank</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">Thailand</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Country</span>
                                    </td>
                                    <td>
                                      <a href="#" class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">71,12</a>
                                      <span class="text-muted fw-semibold d-block fs-7">Total Score</span>
                                    </td>
                                    <td class="text-end">
                                      <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                        <i class="ki-outline ki-black-right fs-2 text-gray-500"></i>
                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                        <!--end::Tab Content-->
                      </div>
                      <!--end: Card Body-->
                    </div>
                    <!--end::Table widget 6-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Content container-->
            </div>
            <!--end::Content-->
          </div>
          <!--end::Content wrapper-->

          <!--end::Footer-->
        </div>
        <!--end:::Main-->
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Page-->
  </div>
  <!--end::App-->
  <!--begin::Drawers-->
  <!--begin::Activities drawer-->
  <div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
    <div class="card shadow-none border-0 rounded-0">
      <!--begin::Header-->
      <div class="card-header" id="kt_activities_header">
        <h3 class="card-title fw-bold text-gray-900">Activity Logs</h3>
        <div class="card-toolbar">
          <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
            <i class="ki-outline ki-cross fs-1"></i>
          </button>
        </div>
      </div>
      <!--end::Header-->
      <!--begin::Body-->
      <div class="card-body position-relative" id="kt_activities_body">
        <!--begin::Content-->
        <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px">
          <!--begin::Timeline items-->
          <div class="timeline timeline-border-dashed">
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon">
                <i class="ki-outline ki-message-text-2 fs-2 text-gray-500"></i>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                  <!--begin::Title-->
                  <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                      <img src="assets/media/avatars/300-14.jpg" alt="img" />
                    </div>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
                <!--begin::Timeline details-->
                <div class="overflow-auto pb-5">
                  <!--begin::Record-->
                  <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                    <!--begin::Title-->
                    <a href="apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
                    <!--end::Title-->
                    <!--begin::Label-->
                    <div class="min-w-175px pe-2">
                      <span class="badge badge-light text-muted">Application Design</span>
                    </div>
                    <!--end::Label-->
                    <!--begin::Users-->
                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                      <!--begin::User-->
                      <div class="symbol symbol-circle symbol-25px">
                        <img src="assets/media/avatars/300-2.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                      <!--begin::User-->
                      <div class="symbol symbol-circle symbol-25px">
                        <img src="assets/media/avatars/300-14.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                      <!--begin::User-->
                      <div class="symbol symbol-circle symbol-25px">
                        <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Users-->
                    <!--begin::Progress-->
                    <div class="min-w-125px pe-2">
                      <span class="badge badge-light-primary">In Progress</span>
                    </div>
                    <!--end::Progress-->
                    <!--begin::Action-->
                    <a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                    <!--end::Action-->
                  </div>
                  <!--end::Record-->
                  <!--begin::Record-->
                  <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                    <!--begin::Title-->
                    <a href="apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
                    <!--end::Title-->
                    <!--begin::Label-->
                    <div class="min-w-175px">
                      <span class="badge badge-light text-muted">CRM System Development</span>
                    </div>
                    <!--end::Label-->
                    <!--begin::Users-->
                    <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                      <!--begin::User-->
                      <div class="symbol symbol-circle symbol-25px">
                        <img src="assets/media/avatars/300-20.jpg" alt="img" />
                      </div>
                      <!--end::User-->
                      <!--begin::User-->
                      <div class="symbol symbol-circle symbol-25px">
                        <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
                      </div>
                      <!--end::User-->
                    </div>
                    <!--end::Users-->
                    <!--begin::Progress-->
                    <div class="min-w-125px">
                      <span class="badge badge-light-success">Completed</span>
                    </div>
                    <!--end::Progress-->
                    <!--begin::Action-->
                    <a href="apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                    <!--end::Action-->
                  </div>
                  <!--end::Record-->
                </div>
                <!--end::Timeline details-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon me-4">
                <i class="ki-outline ki-flag fs-2 text-gray-500"></i>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n2">
                <!--begin::Timeline heading-->
                <div class="overflow-auto pe-3">
                  <!--begin::Title-->
                  <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                      <img src="assets/media/avatars/300-1.jpg" alt="img" />
                    </div>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon">
                <i class="ki-outline ki-disconnect fs-2 text-gray-500"></i>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="mb-5 pe-3">
                  <!--begin::Title-->
                  <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                      <img src="assets/media/avatars/300-23.jpg" alt="img" />
                    </div>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
                <!--begin::Timeline details-->
                <div class="overflow-auto pb-5">
                  <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                    <!--begin::Item-->
                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                      <!--begin::Icon-->
                      <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
                      <!--end::Icon-->
                      <!--begin::Info-->
                      <div class="ms-1 fw-semibold">
                        <!--begin::Desc-->
                        <a href="apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                        <!--end::Desc-->
                        <!--begin::Number-->
                        <div class="text-gray-500">1.9mb</div>
                        <!--end::Number-->
                      </div>
                      <!--begin::Info-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                      <!--begin::Icon-->
                      <img alt="apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
                      <!--end::Icon-->
                      <!--begin::Info-->
                      <div class="ms-1 fw-semibold">
                        <!--begin::Desc-->
                        <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                        <!--end::Desc-->
                        <!--begin::Number-->
                        <div class="text-gray-500">18kb</div>
                        <!--end::Number-->
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-aligns-center">
                      <!--begin::Icon-->
                      <img alt="apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
                      <!--end::Icon-->
                      <!--begin::Info-->
                      <div class="ms-1 fw-semibold">
                        <!--begin::Desc-->
                        <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                        <!--end::Desc-->
                        <!--begin::Number-->
                        <div class="text-gray-500">20mb</div>
                        <!--end::Number-->
                      </div>
                      <!--end::Icon-->
                    </div>
                    <!--end::Item-->
                  </div>
                </div>
                <!--end::Timeline details-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon">
                <i class="ki-outline ki-abstract-26 fs-2 text-gray-500"></i>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                  <!--begin::Title-->
                  <div class="fs-5 fw-semibold mb-2">Task
                    <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                    <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:
                  </div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                      <img src="assets/media/avatars/300-14.jpg" alt="img" />
                    </div>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon">
                <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                  <!--begin::Title-->
                  <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                      <img src="assets/media/avatars/300-2.jpg" alt="img" />
                    </div>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
                <!--begin::Timeline details-->
                <div class="overflow-auto pb-5">
                  <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                    <!--begin::Item-->
                    <div class="overlay me-10">
                      <!--begin::Image-->
                      <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
                      </div>
                      <!--end::Image-->
                      <!--begin::Link-->
                      <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                      </div>
                      <!--end::Link-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="overlay me-10">
                      <!--begin::Image-->
                      <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
                      </div>
                      <!--end::Image-->
                      <!--begin::Link-->
                      <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                      </div>
                      <!--end::Link-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="overlay">
                      <!--begin::Image-->
                      <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
                      </div>
                      <!--end::Image-->
                      <!--begin::Link-->
                      <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                      </div>
                      <!--end::Link-->
                    </div>
                    <!--end::Item-->
                  </div>
                </div>
                <!--end::Timeline details-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon">
                <i class="ki-outline ki-sms fs-2 text-gray-500"></i>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                  <!--begin::Title-->
                  <div class="fs-5 fw-semibold mb-2">New case
                    <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project
                  </div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="overflow-auto pb-5">
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center mt-1 fs-6">
                      <!--begin::Info-->
                      <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                      <!--end::Info-->
                      <!--begin::User-->
                      <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                      <!--end::User-->
                    </div>
                    <!--end::Wrapper-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon">
                <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mb-10 mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                  <!--begin::Title-->
                  <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                      <img src="assets/media/avatars/300-4.jpg" alt="img" />
                    </div>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
                <!--begin::Timeline details-->
                <div class="overflow-auto pb-5">
                  <!--begin::Notice-->
                  <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                    <!--begin::Icon-->
                    <i class="ki-outline ki-devices-2 fs-2tx text-primary me-4"></i>
                    <!--end::Icon-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                      <!--begin::Content-->
                      <div class="mb-3 mb-md-0 fw-semibold">
                        <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
                        <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
                      </div>
                      <!--end::Content-->
                      <!--begin::Action-->
                      <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
                      <!--end::Action-->
                    </div>
                    <!--end::Wrapper-->
                  </div>
                  <!--end::Notice-->
                </div>
                <!--end::Timeline details-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
            <!--begin::Timeline item-->
            <div class="timeline-item">
              <!--begin::Timeline line-->
              <div class="timeline-line"></div>
              <!--end::Timeline line-->
              <!--begin::Timeline icon-->
              <div class="timeline-icon">
                <i class="ki-outline ki-basket fs-2 text-gray-500"></i>
              </div>
              <!--end::Timeline icon-->
              <!--begin::Timeline content-->
              <div class="timeline-content mt-n1">
                <!--begin::Timeline heading-->
                <div class="pe-3 mb-5">
                  <!--begin::Title-->
                  <div class="fs-5 fw-semibold mb-2">New order
                    <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation
                  </div>
                  <!--end::Title-->
                  <!--begin::Description-->
                  <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                    <!--end::Info-->
                    <!--begin::User-->
                    <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                    <!--end::User-->
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Timeline heading-->
              </div>
              <!--end::Timeline content-->
            </div>
            <!--end::Timeline item-->
          </div>
          <!--end::Timeline items-->
        </div>
        <!--end::Content-->
      </div>
      <!--end::Body-->
      <!--begin::Footer-->
      <div class="card-footer py-5 text-center" id="kt_activities_footer">
        <a href="pages/user-profile/activity.html" class="btn btn-bg-body text-primary">View All Activities
          <i class="ki-outline ki-arrow-right fs-3 text-primary"></i></a>
      </div>
      <!--end::Footer-->
    </div>
  </div>
  <!--end::Activities drawer-->
  <!--begin::Chat drawer-->

  <?php include_once('widgets/support.php'); ?>

  <!--end::Drawers-->
  <!--begin::Scrolltop-->
  <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-outline ki-arrow-up"></i>
  </div>
  <!--end::Scrolltop-->
  <!--begin::Modals-->
  <!--begin::Modal - Create App-->
  <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-900px">
      <!--begin::Modal content-->
      <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header">
          <!--begin::Modal title-->
          <h2>Create App</h2>
          <!--end::Modal title-->
          <!--begin::Close-->
          <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
            <i class="ki-outline ki-cross fs-1"></i>
          </div>
          <!--end::Close-->
        </div>
        <!--end::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body py-lg-10 px-lg-10">
          <!--begin::Stepper-->
          <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
            <!--begin::Aside-->
            <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
              <!--begin::Nav-->
              <div class="stepper-nav ps-lg-10">
                <!--begin::Step 1-->
                <div class="stepper-item current" data-kt-stepper-element="nav">
                  <!--begin::Wrapper-->
                  <div class="stepper-wrapper">
                    <!--begin::Icon-->
                    <div class="stepper-icon w-40px h-40px">
                      <i class="ki-outline ki-check stepper-check fs-2"></i>
                      <span class="stepper-number">1</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title">Details</h3>
                      <div class="stepper-desc">Name your App</div>
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
                    <div class="stepper-icon w-40px h-40px">
                      <i class="ki-outline ki-check stepper-check fs-2"></i>
                      <span class="stepper-number">2</span>
                    </div>
                    <!--begin::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title">Frameworks</h3>
                      <div class="stepper-desc">Define your app framework</div>
                    </div>
                    <!--begin::Label-->
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
                    <div class="stepper-icon w-40px h-40px">
                      <i class="ki-outline ki-check stepper-check fs-2"></i>
                      <span class="stepper-number">3</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title">Database</h3>
                      <div class="stepper-desc">Select the app database type</div>
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
                    <div class="stepper-icon w-40px h-40px">
                      <i class="ki-outline ki-check stepper-check fs-2"></i>
                      <span class="stepper-number">4</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title">Billing</h3>
                      <div class="stepper-desc">Provide payment details</div>
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Line-->
                  <div class="stepper-line h-40px"></div>
                  <!--end::Line-->
                </div>
                <!--end::Step 4-->
                <!--begin::Step 5-->
                <div class="stepper-item mark-completed" data-kt-stepper-element="nav">
                  <!--begin::Wrapper-->
                  <div class="stepper-wrapper">
                    <!--begin::Icon-->
                    <div class="stepper-icon w-40px h-40px">
                      <i class="ki-outline ki-check stepper-check fs-2"></i>
                      <span class="stepper-number">5</span>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Label-->
                    <div class="stepper-label">
                      <h3 class="stepper-title">Completed</h3>
                      <div class="stepper-desc">Review and Submit</div>
                    </div>
                    <!--end::Label-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Step 5-->
              </div>
              <!--end::Nav-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div class="flex-row-fluid py-lg-5 px-lg-15">
              <!--begin::Form-->
              <form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                <!--begin::Step 1-->
                <div class="current" data-kt-stepper-element="content">
                  <div class="w-100">
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                      <!--begin::Label-->
                      <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                        <span class="required">App Name</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                          <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                        </span>
                      </label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="" />
                      <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row">
                      <!--begin::Label-->
                      <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                        <span class="required">Category</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Select your app category">
                          <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                        </span>
                      </label>
                      <!--end::Label-->
                      <!--begin:Options-->
                      <div class="fv-row">
                        <!--begin:Option-->
                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                          <!--begin:Label-->
                          <span class="d-flex align-items-center me-2">
                            <!--begin:Icon-->
                            <span class="symbol symbol-50px me-6">
                              <span class="symbol-label bg-light-primary">
                                <i class="ki-outline ki-compass fs-1 text-primary"></i>
                              </span>
                            </span>
                            <!--end:Icon-->
                            <!--begin:Info-->
                            <span class="d-flex flex-column">
                              <span class="fw-bold fs-6">Quick Online Courses</span>
                              <span class="fs-7 text-muted">Creating a clear text structure is just one SEO</span>
                            </span>
                            <!--end:Info-->
                          </span>
                          <!--end:Label-->
                          <!--begin:Input-->
                          <span class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="radio" name="category" value="1" />
                          </span>
                          <!--end:Input-->
                        </label>
                        <!--end::Option-->
                        <!--begin:Option-->
                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                          <!--begin:Label-->
                          <span class="d-flex align-items-center me-2">
                            <!--begin:Icon-->
                            <span class="symbol symbol-50px me-6">
                              <span class="symbol-label bg-light-danger">
                                <i class="ki-outline ki-element-11 fs-1 text-danger"></i>
                              </span>
                            </span>
                            <!--end:Icon-->
                            <!--begin:Info-->
                            <span class="d-flex flex-column">
                              <span class="fw-bold fs-6">Face to Face Discussions</span>
                              <span class="fs-7 text-muted">Creating a clear text structure is just one aspect</span>
                            </span>
                            <!--end:Info-->
                          </span>
                          <!--end:Label-->
                          <!--begin:Input-->
                          <span class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="radio" name="category" value="2" />
                          </span>
                          <!--end:Input-->
                        </label>
                        <!--end::Option-->
                        <!--begin:Option-->
                        <label class="d-flex flex-stack cursor-pointer">
                          <!--begin:Label-->
                          <span class="d-flex align-items-center me-2">
                            <!--begin:Icon-->
                            <span class="symbol symbol-50px me-6">
                              <span class="symbol-label bg-light-success">
                                <i class="ki-outline ki-timer fs-1 text-success"></i>
                              </span>
                            </span>
                            <!--end:Icon-->
                            <!--begin:Info-->
                            <span class="d-flex flex-column">
                              <span class="fw-bold fs-6">Full Intro Training</span>
                              <span class="fs-7 text-muted">Creating a clear text structure copywriting</span>
                            </span>
                            <!--end:Info-->
                          </span>
                          <!--end:Label-->
                          <!--begin:Input-->
                          <span class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="radio" name="category" value="3" />
                          </span>
                          <!--end:Input-->
                        </label>
                        <!--end::Option-->
                      </div>
                      <!--end:Options-->
                    </div>
                    <!--end::Input group-->
                  </div>
                </div>
                <!--end::Step 1-->
                <!--begin::Step 2-->
                <div data-kt-stepper-element="content">
                  <div class="w-100">
                    <!--begin::Input group-->
                    <div class="fv-row">
                      <!--begin::Label-->
                      <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                        <span class="required">Select Framework</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify your apps framework">
                          <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                        </span>
                      </label>
                      <!--end::Label-->
                      <!--begin:Option-->
                      <label class="d-flex flex-stack cursor-pointer mb-5">
                        <!--begin:Label-->
                        <span class="d-flex align-items-center me-2">
                          <!--begin:Icon-->
                          <span class="symbol symbol-50px me-6">
                            <span class="symbol-label bg-light-warning">
                              <i class="ki-outline ki-html fs-2x text-warning"></i>
                            </span>
                          </span>
                          <!--end:Icon-->
                          <!--begin:Info-->
                          <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">HTML5</span>
                            <span class="fs-7 text-muted">Base Web Projec</span>
                          </span>
                          <!--end:Info-->
                        </span>
                        <!--end:Label-->
                        <!--begin:Input-->
                        <span class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input" type="radio" checked="checked" name="framework" value="1" />
                        </span>
                        <!--end:Input-->
                      </label>
                      <!--end::Option-->
                      <!--begin:Option-->
                      <label class="d-flex flex-stack cursor-pointer mb-5">
                        <!--begin:Label-->
                        <span class="d-flex align-items-center me-2">
                          <!--begin:Icon-->
                          <span class="symbol symbol-50px me-6">
                            <span class="symbol-label bg-light-success">
                              <i class="ki-outline ki-react fs-2x text-success"></i>
                            </span>
                          </span>
                          <!--end:Icon-->
                          <!--begin:Info-->
                          <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">ReactJS</span>
                            <span class="fs-7 text-muted">Robust and flexible app framework</span>
                          </span>
                          <!--end:Info-->
                        </span>
                        <!--end:Label-->
                        <!--begin:Input-->
                        <span class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input" type="radio" name="framework" value="2" />
                        </span>
                        <!--end:Input-->
                      </label>
                      <!--end::Option-->
                      <!--begin:Option-->
                      <label class="d-flex flex-stack cursor-pointer mb-5">
                        <!--begin:Label-->
                        <span class="d-flex align-items-center me-2">
                          <!--begin:Icon-->
                          <span class="symbol symbol-50px me-6">
                            <span class="symbol-label bg-light-danger">
                              <i class="ki-outline ki-angular fs-2x text-danger"></i>
                            </span>
                          </span>
                          <!--end:Icon-->
                          <!--begin:Info-->
                          <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">Angular</span>
                            <span class="fs-7 text-muted">Powerful data mangement</span>
                          </span>
                          <!--end:Info-->
                        </span>
                        <!--end:Label-->
                        <!--begin:Input-->
                        <span class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input" type="radio" name="framework" value="3" />
                        </span>
                        <!--end:Input-->
                      </label>
                      <!--end::Option-->
                      <!--begin:Option-->
                      <label class="d-flex flex-stack cursor-pointer">
                        <!--begin:Label-->
                        <span class="d-flex align-items-center me-2">
                          <!--begin:Icon-->
                          <span class="symbol symbol-50px me-6">
                            <span class="symbol-label bg-light-primary">
                              <i class="ki-outline ki-vue fs-2x text-primary"></i>
                            </span>
                          </span>
                          <!--end:Icon-->
                          <!--begin:Info-->
                          <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">Vue</span>
                            <span class="fs-7 text-muted">Lightweight and responsive framework</span>
                          </span>
                          <!--end:Info-->
                        </span>
                        <!--end:Label-->
                        <!--begin:Input-->
                        <span class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input" type="radio" name="framework" value="4" />
                        </span>
                        <!--end:Input-->
                      </label>
                      <!--end::Option-->
                    </div>
                    <!--end::Input group-->
                  </div>
                </div>
                <!--end::Step 2-->
                <!--begin::Step 3-->
                <div data-kt-stepper-element="content">
                  <div class="w-100">
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                      <!--begin::Label-->
                      <label class="required fs-5 fw-semibold mb-2">Database Name</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <input type="text" class="form-control form-control-lg form-control-solid" name="dbname" placeholder="" value="master_db" />
                      <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row">
                      <!--begin::Label-->
                      <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                        <span class="required">Select Database Engine</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Select your app database engine">
                          <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                        </span>
                      </label>
                      <!--end::Label-->
                      <!--begin:Option-->
                      <label class="d-flex flex-stack cursor-pointer mb-5">
                        <!--begin::Label-->
                        <span class="d-flex align-items-center me-2">
                          <!--begin::Icon-->
                          <span class="symbol symbol-50px me-6">
                            <span class="symbol-label bg-light-success">
                              <i class="ki-outline ki-note text-success fs-2x"></i>
                            </span>
                          </span>
                          <!--end::Icon-->
                          <!--begin::Info-->
                          <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">MySQL</span>
                            <span class="fs-7 text-muted">Basic MySQL database</span>
                          </span>
                          <!--end::Info-->
                        </span>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <span class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input" type="radio" name="dbengine" checked="checked" value="1" />
                        </span>
                        <!--end::Input-->
                      </label>
                      <!--end::Option-->
                      <!--begin:Option-->
                      <label class="d-flex flex-stack cursor-pointer mb-5">
                        <!--begin::Label-->
                        <span class="d-flex align-items-center me-2">
                          <!--begin::Icon-->
                          <span class="symbol symbol-50px me-6">
                            <span class="symbol-label bg-light-danger">
                              <i class="ki-outline ki-google text-danger fs-2x"></i>
                            </span>
                          </span>
                          <!--end::Icon-->
                          <!--begin::Info-->
                          <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">Firebase</span>
                            <span class="fs-7 text-muted">Google based app data management</span>
                          </span>
                          <!--end::Info-->
                        </span>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <span class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input" type="radio" name="dbengine" value="2" />
                        </span>
                        <!--end::Input-->
                      </label>
                      <!--end::Option-->
                      <!--begin:Option-->
                      <label class="d-flex flex-stack cursor-pointer">
                        <!--begin::Label-->
                        <span class="d-flex align-items-center me-2">
                          <!--begin::Icon-->
                          <span class="symbol symbol-50px me-6">
                            <span class="symbol-label bg-light-warning">
                              <i class="ki-outline ki-microsoft text-warning fs-2x"></i>
                            </span>
                          </span>
                          <!--end::Icon-->
                          <!--begin::Info-->
                          <span class="d-flex flex-column">
                            <span class="fw-bold fs-6">DynamoDB</span>
                            <span class="fs-7 text-muted">Microsoft Fast NoSQL Database</span>
                          </span>
                          <!--end::Info-->
                        </span>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <span class="form-check form-check-custom form-check-solid">
                          <input class="form-check-input" type="radio" name="dbengine" value="3" />
                        </span>
                        <!--end::Input-->
                      </label>
                      <!--end::Option-->
                    </div>
                    <!--end::Input group-->
                  </div>
                </div>
                <!--end::Step 3-->
                <!--begin::Step 4-->
                <div data-kt-stepper-element="content">
                  <div class="w-100">
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row">
                      <!--begin::Label-->
                      <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                        <span class="required">Name On Card</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
                          <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                        </span>
                      </label>
                      <!--end::Label-->
                      <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row">
                      <!--begin::Label-->
                      <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
                      <!--end::Label-->
                      <!--begin::Input wrapper-->
                      <div class="position-relative">
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
                        <!--end::Input-->
                        <!--begin::Card logos-->
                        <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                          <img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                          <img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
                          <img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
                        </div>
                        <!--end::Card logos-->
                      </div>
                      <!--end::Input wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-10">
                      <!--begin::Col-->
                      <div class="col-md-8 fv-row">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
                        <!--end::Label-->
                        <!--begin::Row-->
                        <div class="row fv-row">
                          <!--begin::Col-->
                          <div class="col-6">
                            <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
                              <option></option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                            </select>
                          </div>
                          <!--end::Col-->
                          <!--begin::Col-->
                          <div class="col-6">
                            <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
                              <option></option>
                              <option value="2024">2024</option>
                              <option value="2025">2025</option>
                              <option value="2026">2026</option>
                              <option value="2027">2027</option>
                              <option value="2028">2028</option>
                              <option value="2029">2029</option>
                              <option value="2030">2030</option>
                              <option value="2031">2031</option>
                              <option value="2032">2032</option>
                              <option value="2033">2033</option>
                              <option value="2034">2034</option>
                            </select>
                          </div>
                          <!--end::Col-->
                        </div>
                        <!--end::Row-->
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-md-4 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                          <span class="required">CVV</span>
                          <span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
                            <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                          </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                          <!--begin::Input-->
                          <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                          <!--end::Input-->
                          <!--begin::CVV icon-->
                          <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                            <i class="ki-outline ki-credit-cart fs-2hx"></i>
                          </div>
                          <!--end::CVV icon-->
                        </div>
                        <!--end::Input wrapper-->
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-stack">
                      <!--begin::Label-->
                      <div class="me-5">
                        <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
                        <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                      </div>
                      <!--end::Label-->
                      <!--begin::Switch-->
                      <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                        <span class="form-check-label fw-semibold text-muted">Save Card</span>
                      </label>
                      <!--end::Switch-->
                    </div>
                    <!--end::Input group-->
                  </div>
                </div>
                <!--end::Step 4-->
                <!--begin::Step 5-->
                <div data-kt-stepper-element="content">
                  <div class="w-100 text-center">
                    <!--begin::Heading-->
                    <h1 class="fw-bold text-gray-900 mb-3">Release!</h1>
                    <!--end::Heading-->
                    <!--begin::Description-->
                    <div class="text-muted fw-semibold fs-3">Submit your app to kickstart your project.</div>
                    <!--end::Description-->
                    <!--begin::Illustration-->
                    <div class="text-center px-4 py-15">
                      <img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mw-100 mh-300px" />
                    </div>
                    <!--end::Illustration-->
                  </div>
                </div>
                <!--end::Step 5-->
                <!--begin::Actions-->
                <div class="d-flex flex-stack pt-10">
                  <!--begin::Wrapper-->
                  <div class="me-2">
                    <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                      <i class="ki-outline ki-arrow-left fs-3 me-1"></i>Back</button>
                  </div>
                  <!--end::Wrapper-->
                  <!--begin::Wrapper-->
                  <div>
                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                      <span class="indicator-label">Submit
                        <i class="ki-outline ki-arrow-right fs-3 ms-2 me-0"></i></span>
                      <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                      <i class="ki-outline ki-arrow-right fs-3 ms-1 me-0"></i></button>
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Actions-->
              </form>
              <!--end::Form-->
            </div>
            <!--end::Content-->
          </div>
          <!--end::Stepper-->
        </div>
        <!--end::Modal body-->
      </div>
      <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
  </div>
  <!--end::Modal - Create App-->
  <!--begin::Modal - View Users-->
  <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
      <!--begin::Modal content-->
      <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header pb-0 border-0 justify-content-end">
          <!--begin::Close-->
          <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
            <i class="ki-outline ki-cross fs-1"></i>
          </div>
          <!--end::Close-->
        </div>
        <!--begin::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
          <!--begin::Heading-->
          <div class="text-center mb-13">
            <!--begin::Title-->
            <h1 class="mb-3">Browse Users</h1>
            <!--end::Title-->
            <!--begin::Description-->
            <div class="text-muted fw-semibold fs-5">If you need more info, please check out our
              <a href="#" class="link-primary fw-bold">Users Directory</a>.
            </div>
            <!--end::Description-->
          </div>
          <!--end::Heading-->
          <!--begin::Users-->
          <div class="mb-15">
            <!--begin::List-->
            <div class="mh-375px scroll-y me-n7 pe-7">
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Emma Smith
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Art Director</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">smith@kpmg.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$23,000</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Melody Macy
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Analytic</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">melody@altbox.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$50,500</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Max Smith
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Software Enginer</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">max@kt.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$75,900</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Sean Bean
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Web Developer</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">sean@dellito.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$10,500</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Brian Cox
                      <span class="badge badge-light fs-8 fw-semibold ms-2">UI/UX Designer</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">brian@exchange.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$20,000</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Mikaela Collins
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Head Of Marketing</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">mik@pex.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$9,300</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Francis Mitcham
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Software Arcitect</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$15,000</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Olivia Wild
                      <span class="badge badge-light fs-8 fw-semibold ms-2">System Admin</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$23,000</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Neil Owen
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Account Manager</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$45,800</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Dan Wilson
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Web Desinger</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">dam@consilting.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$90,500</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Emma Bold
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Corporate Finance</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">emma@intenso.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$5,000</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Ana Crown
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Customer Relationship</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$70,000</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-5">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-6">
                    <!--begin::Name-->
                    <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Robert Doe
                      <span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Executive</span></a>
                    <!--end::Name-->
                    <!--begin::Email-->
                    <div class="fw-semibold text-muted">robert@benko.com</div>
                    <!--end::Email-->
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Stats-->
                <div class="d-flex">
                  <!--begin::Sales-->
                  <div class="text-end">
                    <div class="fs-5 fw-bold text-gray-900">$45,500</div>
                    <div class="fs-7 text-muted">Sales</div>
                  </div>
                  <!--end::Sales-->
                </div>
                <!--end::Stats-->
              </div>
              <!--end::User-->
            </div>
            <!--end::List-->
          </div>
          <!--end::Users-->
          <!--begin::Notice-->
          <div class="d-flex justify-content-between">
            <!--begin::Label-->
            <div class="fw-semibold">
              <label class="fs-6">Adding Users by Team Members</label>
              <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
            </div>
            <!--end::Label-->
            <!--begin::Switch-->
            <label class="form-check form-switch form-check-custom form-check-solid">
              <input class="form-check-input" type="checkbox" value="" checked="checked" />
              <span class="form-check-label fw-semibold text-muted">Allowed</span>
            </label>
            <!--end::Switch-->
          </div>
          <!--end::Notice-->
        </div>
        <!--end::Modal body-->
      </div>
      <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
  </div>
  <!--end::Modal - View Users-->
  <!--begin::Modal - Create Project-->
  <div class="modal fade" id="kt_modal_create_project" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-fullscreen p-9">
      <!--begin::Modal content-->
      <div class="modal-content modal-rounded">
        <!--begin::Modal header-->
        <div class="modal-header">
          <!--begin::Modal title-->
          <h2>Create Project</h2>
          <!--end::Modal title-->
          <!--begin::Close-->
          <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
            <i class="ki-outline ki-cross fs-1"></i>
          </div>
          <!--end::Close-->
        </div>
        <!--end::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body scroll-y m-5">
          <!--begin::Stepper-->
          <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_project_stepper">
            <!--begin::Container-->
            <div class="container">
              <!--begin::Nav-->
              <div class="stepper-nav justify-content-center py-2">
                <!--begin::Step 1-->
                <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                  <h3 class="stepper-title">Project Type</h3>
                </div>
                <!--end::Step 1-->
                <!--begin::Step 2-->
                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                  <h3 class="stepper-title">Project Settings</h3>
                </div>
                <!--end::Step 2-->
                <!--begin::Step 3-->
                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                  <h3 class="stepper-title">Budget</h3>
                </div>
                <!--end::Step 3-->
                <!--begin::Step 4-->
                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                  <h3 class="stepper-title">Build A Team</h3>
                </div>
                <!--end::Step 4-->
                <!--begin::Step 5-->
                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                  <h3 class="stepper-title">Set First Target</h3>
                </div>
                <!--end::Step 5-->
                <!--begin::Step 6-->
                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                  <h3 class="stepper-title">Upload Files</h3>
                </div>
                <!--end::Step 6-->
                <!--begin::Step 7-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                  <h3 class="stepper-title">Completed</h3>
                </div>
                <!--end::Step 7-->
              </div>
              <!--end::Nav-->
              <!--begin::Form-->
              <form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_project_form" method="post">
                <!--begin::Type-->
                <div class="current" data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-7 pb-lg-12">
                      <!--begin::Title-->
                      <h1 class="fw-bold text-gray-900">Project Type</h1>
                      <!--end::Title-->
                      <!--begin::Description-->
                      <div class="text-muted fw-semibold fs-4">If you need more info, please check out
                        <a href="#" class="link-primary fw-bold">FAQ Page</a>
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-15" data-kt-buttons="true">
                      <!--begin::Option-->
                      <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 mb-6 active">
                        <!--begin::Input-->
                        <input class="btn-check" type="radio" checked="checked" name="project_type" value="1" />
                        <!--end::Input-->
                        <!--begin::Label-->
                        <span class="d-flex">
                          <!--begin::Icon-->
                          <i class="ki-outline ki-profile-circle fs-3hx"></i>
                          <!--end::Icon-->
                          <!--begin::Info-->
                          <span class="ms-4">
                            <span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Personal Project</span>
                            <span class="fw-semibold fs-4 text-muted">If you need more info, please check it out</span>
                          </span>
                          <!--end::Info-->
                        </span>
                        <!--end::Label-->
                      </label>
                      <!--end::Option-->
                      <!--begin::Option-->
                      <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
                        <!--begin::Input-->
                        <input class="btn-check" type="radio" name="project_type" value="2" />
                        <!--end::Input-->
                        <!--begin::Label-->
                        <span class="d-flex">
                          <!--begin::Icon-->
                          <i class="ki-outline ki-rocket fs-3hx"></i>
                          <!--end::Icon-->
                          <!--begin::Info-->
                          <span class="ms-4">
                            <span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Team Project</span>
                            <span class="fw-semibold fs-4 text-muted">Create corporate account to manage users</span>
                          </span>
                          <!--end::Info-->
                        </span>
                        <!--end::Label-->
                      </label>
                      <!--end::Option-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex justify-content-end">
                      <button type="button" class="btn btn-lg btn-primary" data-kt-element="type-next">
                        <span class="indicator-label">Project Settings</span>
                        <span class="indicator-progress">Please wait...
                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      </button>
                    </div>
                    <!--end::Actions-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Type-->
                <!--begin::Settings-->
                <div data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-12">
                      <!--begin::Title-->
                      <h1 class="fw-bold text-gray-900">Project Settings</h1>
                      <!--end::Title-->
                      <!--begin::Description-->
                      <div class="text-muted fw-semibold fs-4">If you need more info, please check
                        <a href="#" class="link-primary">Project Guidelines</a>
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <!--begin::Dropzone-->
                      <div class="dropzone" id="kt_modal_create_project_settings_logo">
                        <!--begin::Message-->
                        <div class="dz-message needsclick">
                          <!--begin::Icon-->
                          <i class="ki-outline ki-file-up fs-3hx text-primary"></i>
                          <!--end::Icon-->
                          <!--begin::Info-->
                          <div class="ms-4">
                            <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                            <span class="fw-semibold fs-4 text-muted">Upload up to 10 files</span>
                          </div>
                          <!--end::Info-->
                        </div>
                      </div>
                      <!--end::Dropzone-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <!--begin::Label-->
                      <label class="required fs-6 fw-semibold mb-2">Customer</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select..." name="settings_customer">
                        <option></option>
                        <option value="1">Keenthemes</option>
                        <option value="2">CRM App</option>
                      </select>
                      <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <!--begin::Label-->
                      <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                        <span class="required">Project Name</span>
                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify project name">
                          <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                        </span>
                      </label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <input type="text" class="form-control form-control-solid" placeholder="Enter Project Name" value="StockPro Mobile App" name="settings_name" />
                      <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <!--begin::Label-->
                      <label class="required fs-6 fw-semibold mb-2">Project Description</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <textarea class="form-control form-control-solid" rows="3" placeholder="Enter Project Description" name="settings_description">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
                      <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <!--begin::Label-->
                      <label class="required fs-6 fw-semibold mb-2">Release Date</label>
                      <!--end::Label-->
                      <!--begin::Wrapper-->
                      <div class="position-relative d-flex align-items-center">
                        <!--begin::Icon-->
                        <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
                        <!--end::Icon-->
                        <!--begin::Input-->
                        <input class="form-control form-control-solid ps-12" placeholder="Pick date range" name="settings_release_date" />
                        <!--end::Input-->
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-15">
                      <!--begin::Wrapper-->
                      <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5">
                          <label class="required fs-6 fw-semibold">Notifications</label>
                          <div class="fs-7 fw-semibold text-muted">Allow Notifications by Phone or Email</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Checkboxes-->
                        <div class="d-flex">
                          <!--begin::Checkbox-->
                          <label class="form-check form-check-custom form-check-solid me-10">
                            <!--begin::Input-->
                            <input class="form-check-input h-20px w-20px" type="checkbox" value="email" name="settings_notifications[]" />
                            <!--end::Input-->
                            <!--begin::Label-->
                            <span class="form-check-label fw-semibold">Email</span>
                            <!--end::Label-->
                          </label>
                          <!--end::Checkbox-->
                          <!--begin::Checkbox-->
                          <label class="form-check form-check-custom form-check-solid">
                            <!--begin::Input-->
                            <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" checked="checked" name="settings_notifications[]" />
                            <!--end::Input-->
                            <!--begin::Label-->
                            <span class="form-check-label fw-semibold">Phone</span>
                            <!--end::Label-->
                          </label>
                          <!--end::Checkbox-->
                        </div>
                        <!--end::Checkboxes-->
                      </div>
                      <!--begin::Wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-stack">
                      <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="settings-previous">Project Type</button>
                      <button type="button" class="btn btn-lg btn-primary" data-kt-element="settings-next">
                        <span class="indicator-label">Budget</span>
                        <span class="indicator-progress">Please wait...
                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      </button>
                    </div>
                    <!--end::Actions-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Settings-->
                <!--begin::Budget-->
                <div data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-10 pb-lg-12">
                      <!--begin::Title-->
                      <h1 class="fw-bold text-gray-900">Budget</h1>
                      <!--end::Title-->
                      <!--begin::Description-->
                      <div class="text-muted fw-semibold fs-4">If you need more info, please check
                        <a href="#" class="link-primary">Project Guidelines</a>
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <!--begin::Label-->
                      <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">Setup Budget</span>
                        <span class="lh-1 ms-1" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class=&#039;p-4 rounded bg-light&#039;&gt; &lt;div class=&#039;d-flex flex-stack text-muted mb-4&#039;&gt; &lt;i class=&quot;ki-outline ki-bank fs-3 me-3&quot;&gt;&lt;/i&gt; &lt;div class=&#039;fw-bold&#039;&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack fw-semibold text-gray-600&#039;&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;separator separator-dashed my-2&#039;&gt;&lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-gray-900 fw-bold mb-2&#039;&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-muted mb-2&#039;&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class=&#039;d-flex flex-stack text-muted&#039;&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;">
                          <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                        </span>
                      </label>
                      <!--end::Label-->
                      <!--begin::Dialer-->
                      <div class="position-relative w-lg-250px" id="kt_modal_create_project_budget_setup" data-kt-dialer="true" data-kt-dialer-min="50" data-kt-dialer-max="50000" data-kt-dialer-step="100" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
                        <!--begin::Decrease control-->
                        <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
                          <i class="ki-outline ki-minus-circle fs-1"></i>
                        </button>
                        <!--end::Decrease control-->
                        <!--begin::Input control-->
                        <input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="budget_setup" readonly="readonly" value="$50" />
                        <!--end::Input control-->
                        <!--begin::Increase control-->
                        <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
                          <i class="ki-outline ki-plus-circle fs-1"></i>
                        </button>
                        <!--end::Increase control-->
                      </div>
                      <!--end::Dialer-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <!--begin::Label-->
                      <label class="fs-6 fw-semibold mb-2">Budget Usage</label>
                      <!--end::Label-->
                      <!--begin::Row-->
                      <div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-12 col-xxl-6">
                          <!--begin::Option-->
                          <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                            <!--begin::Radio-->
                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                              <input class="form-check-input" type="radio" name="budget_usage" value="1" checked="checked" />
                            </span>
                            <!--end::Radio-->
                            <!--begin::Info-->
                            <span class="ms-5">
                              <span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Precise Usage</span>
                              <span class="fw-semibold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
                            </span>
                            <!--end::Info-->
                          </label>
                          <!--end::Option-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-12 col-xxl-6">
                          <!--begin::Option-->
                          <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                            <!--begin::Radio-->
                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                              <input class="form-check-input" type="radio" name="budget_usage" value="2" />
                            </span>
                            <!--end::Radio-->
                            <!--begin::Info-->
                            <span class="ms-5">
                              <span class="fs-4 fw-bold text-gray-800 mb-2 d-block">Extreme Usage</span>
                              <span class="fw-semibold fs-7 text-gray-600">Withdraw money to your bank account per transaction under $50,000 budget</span>
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
                    <!--begin::Input group-->
                    <div class="fv-row mb-15">
                      <!--begin::Wrapper-->
                      <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5">
                          <label class="fs-6 fw-semibold">Allow Changes in Budget</label>
                          <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                          <input class="form-check-input" type="checkbox" value="1" name="budget_allow" checked="checked" />
                          <span class="form-check-label fw-semibold text-muted">Allowed</span>
                        </label>
                        <!--end::Switch-->
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-stack">
                      <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="budget-previous">Project Settings</button>
                      <button type="button" class="btn btn-lg btn-primary" data-kt-element="budget-next">
                        <span class="indicator-label">Build Team</span>
                        <span class="indicator-progress">Please wait...
                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      </button>
                    </div>
                    <!--end::Actions-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Budget-->
                <!--begin::Team-->
                <div data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-12">
                      <!--begin::Title-->
                      <h1 class="fw-bold text-gray-900">Build a Team</h1>
                      <!--end::Title-->
                      <!--begin::Description-->
                      <div class="text-muted fw-semibold fs-4">If you need more info, please check
                        <a href="#" class="link-primary">Project Guidelines</a>
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="mb-8">
                      <!--begin::Label-->
                      <label class="fs-6 fw-semibold mb-2">Invite Teammates</label>
                      <!--end::Label-->
                      <!--begin::Input-->
                      <input type="text" class="form-control form-control-solid" placeholder="Add project memnbers by name or email.." name="invite_teammates" />
                      <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-8">
                      <!--begin::Label-->
                      <div class="fs-6 fw-semibold mb-2">Team Members</div>
                      <!--end::Label-->
                      <!--begin::Users-->
                      <div class="mh-300px scroll-y me-n7 pe-7">
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                          <!--begin::Details-->
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                              <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                              <div class="fw-semibold text-muted">smith@kpmg.com</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--end::Details-->
                          <!--begin::Access menu-->
                          <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                              <option value="1">Guest</option>
                              <option value="2" selected="selected">Owner</option>
                              <option value="3">Can Edit</option>
                            </select>
                          </div>
                          <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                          <!--begin::Details-->
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                              <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                              <div class="fw-semibold text-muted">melody@altbox.com</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--end::Details-->
                          <!--begin::Access menu-->
                          <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                              <option value="1" selected="selected">Guest</option>
                              <option value="2">Owner</option>
                              <option value="3">Can Edit</option>
                            </select>
                          </div>
                          <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                          <!--begin::Details-->
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                              <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
                              <div class="fw-semibold text-muted">max@kt.com</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--end::Details-->
                          <!--begin::Access menu-->
                          <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                              <option value="1">Guest</option>
                              <option value="2">Owner</option>
                              <option value="3" selected="selected">Can Edit</option>
                            </select>
                          </div>
                          <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                          <!--begin::Details-->
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                              <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                              <div class="fw-semibold text-muted">sean@dellito.com</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--end::Details-->
                          <!--begin::Access menu-->
                          <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                              <option value="1">Guest</option>
                              <option value="2" selected="selected">Owner</option>
                              <option value="3">Can Edit</option>
                            </select>
                          </div>
                          <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                          <!--begin::Details-->
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                              <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                              <div class="fw-semibold text-muted">brian@exchange.com</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--end::Details-->
                          <!--begin::Access menu-->
                          <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                              <option value="1">Guest</option>
                              <option value="2">Owner</option>
                              <option value="3" selected="selected">Can Edit</option>
                            </select>
                          </div>
                          <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                          <!--begin::Details-->
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                              <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                              <div class="fw-semibold text-muted">mik@pex.com</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--end::Details-->
                          <!--begin::Access menu-->
                          <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                              <option value="1">Guest</option>
                              <option value="2" selected="selected">Owner</option>
                              <option value="3">Can Edit</option>
                            </select>
                          </div>
                          <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                          <!--begin::Details-->
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                              <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                              <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--end::Details-->
                          <!--begin::Access menu-->
                          <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                              <option value="1">Guest</option>
                              <option value="2">Owner</option>
                              <option value="3" selected="selected">Can Edit</option>
                            </select>
                          </div>
                          <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                          <!--begin::Details-->
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                              <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                              <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--end::Details-->
                          <!--begin::Access menu-->
                          <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                              <option value="1">Guest</option>
                              <option value="2" selected="selected">Owner</option>
                              <option value="3">Can Edit</option>
                            </select>
                          </div>
                          <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                          <!--begin::Details-->
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                              <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                              <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--end::Details-->
                          <!--begin::Access menu-->
                          <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                              <option value="1" selected="selected">Guest</option>
                              <option value="2">Owner</option>
                              <option value="3">Can Edit</option>
                            </select>
                          </div>
                          <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                          <!--begin::Details-->
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                              <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                              <div class="fw-semibold text-muted">dam@consilting.com</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--end::Details-->
                          <!--begin::Access menu-->
                          <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                              <option value="1">Guest</option>
                              <option value="2">Owner</option>
                              <option value="3" selected="selected">Can Edit</option>
                            </select>
                          </div>
                          <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                          <!--begin::Details-->
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                              <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                              <div class="fw-semibold text-muted">emma@intenso.com</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--end::Details-->
                          <!--begin::Access menu-->
                          <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                              <option value="1">Guest</option>
                              <option value="2" selected="selected">Owner</option>
                              <option value="3">Can Edit</option>
                            </select>
                          </div>
                          <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                          <!--begin::Details-->
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                              <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                              <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--end::Details-->
                          <!--begin::Access menu-->
                          <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                              <option value="1" selected="selected">Guest</option>
                              <option value="2">Owner</option>
                              <option value="3">Can Edit</option>
                            </select>
                          </div>
                          <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                          <!--begin::Details-->
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                              <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                              <div class="fw-semibold text-muted">robert@benko.com</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--end::Details-->
                          <!--begin::Access menu-->
                          <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                              <option value="1">Guest</option>
                              <option value="2">Owner</option>
                              <option value="3" selected="selected">Can Edit</option>
                            </select>
                          </div>
                          <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                          <!--begin::Details-->
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                              <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
                              <div class="fw-semibold text-muted">miller@mapple.com</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--end::Details-->
                          <!--begin::Access menu-->
                          <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                              <option value="1">Guest</option>
                              <option value="2">Owner</option>
                              <option value="3" selected="selected">Can Edit</option>
                            </select>
                          </div>
                          <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                          <!--begin::Details-->
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                              <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                              <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--end::Details-->
                          <!--begin::Access menu-->
                          <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                              <option value="1">Guest</option>
                              <option value="2" selected="selected">Owner</option>
                              <option value="3">Can Edit</option>
                            </select>
                          </div>
                          <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                          <!--begin::Details-->
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                              <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                              <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--end::Details-->
                          <!--begin::Access menu-->
                          <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                              <option value="1" selected="selected">Guest</option>
                              <option value="2">Owner</option>
                              <option value="3">Can Edit</option>
                            </select>
                          </div>
                          <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                          <!--begin::Details-->
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                              <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-5">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                              <div class="fw-semibold text-muted">robert@benko.com</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--end::Details-->
                          <!--begin::Access menu-->
                          <div class="ms-2 w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                              <option value="1">Guest</option>
                              <option value="2">Owner</option>
                              <option value="3" selected="selected">Can Edit</option>
                            </select>
                          </div>
                          <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                      </div>
                      <!--end::Users-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Notice-->
                    <div class="d-flex flex-stack mb-15">
                      <!--begin::Label-->
                      <div class="me-5 fw-semibold">
                        <label class="fs-6">Adding Users by Team Members</label>
                        <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                      </div>
                      <!--end::Label-->
                      <!--begin::Switch-->
                      <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="" checked="checked" />
                      </label>
                      <!--end::Switch-->
                    </div>
                    <!--end::Notice-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-stack">
                      <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="team-previous">Budget</button>
                      <button type="button" class="btn btn-lg btn-primary" data-kt-element="team-next">
                        <span class="indicator-label">Set Target</span>
                        <span class="indicator-progress">Please wait...
                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      </button>
                    </div>
                    <!--end::Actions-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Team-->
                <!--begin::Targets-->
                <div data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-12">
                      <!--begin::Title-->
                      <h1 class="fw-bold text-gray-900">Set First Target</h1>
                      <!--end::Title-->
                      <!--begin::Title-->
                      <div class="text-muted fw-semibold fs-4">If you need more info, please check
                        <a href="#" class="link-primary">Project Guidelines</a>
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <label class="fs-6 fw-semibold mb-2">Target Title</label>
                      <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="Project Launch" />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                      <!--begin::Col-->
                      <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-semibold mb-2">Assign</label>
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
                          <option></option>
                          <option value="1">Karina Clark</option>
                          <option value="2" selected="selected">Robert Doe</option>
                          <option value="3">Niel Owen</option>
                          <option value="4">Olivia Wild</option>
                          <option value="5">Sean Bean</option>
                        </select>
                      </div>
                      <!--end::Col-->
                      <!--begin::Col-->
                      <div class="col-md-6 fv-row">
                        <label class="required fs-6 fw-semibold mb-2">Due Date</label>
                        <div class="position-relative d-flex align-items-center">
                          <!--begin::Icon-->
                          <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
                          <!--end::Icon-->
                          <!--begin::Datepicker-->
                          <input class="form-control form-control-solid ps-12" placeholder="Pick date range" name="target_due_date" />
                          <!--end::Datepicker-->
                        </div>
                      </div>
                      <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <label class="fs-6 fw-semibold mb-2">Target Details</label>
                      <textarea class="form-control form-control-solid" rows="2" name="target_details" placeholder="Type Target Details">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <label class="required fs-6 fw-semibold mb-2">Tags</label>
                      <input class="form-control form-control-solid" value="Important, Urgent" name="target_tags" />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <!--begin::Wrapper-->
                      <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5">
                          <label class="fs-6 fw-semibold">Allow Changes in Budget</label>
                          <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                          <input class="form-check-input" type="checkbox" value="1" name="target_allow" checked="checked" />
                          <span class="form-check-label fw-semibold text-muted">Allowed</span>
                        </label>
                        <!--end::Switch-->
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-15">
                      <!--begin::Wrapper-->
                      <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5">
                          <label class="fs-6 fw-semibold">Notifications</label>
                          <div class="fs-7 fw-semibold text-muted">Allow Notifications by Phone or Email</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Checkboxes-->
                        <div class="d-flex">
                          <!--begin::Checkbox-->
                          <label class="form-check form-check-custom form-check-solid me-10">
                            <!--begin::Input-->
                            <input class="form-check-input h-20px w-20px" type="checkbox" value="email" name="target_notifications[]" />
                            <!--end::Input-->
                            <!--begin::Label-->
                            <span class="form-check-label fw-semibold">Email</span>
                            <!--end::Label-->
                          </label>
                          <!--end::Checkbox-->
                          <!--begin::Checkbox-->
                          <label class="form-check form-check-custom form-check-solid">
                            <!--begin::Input-->
                            <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" checked="checked" name="target_notifications[]" />
                            <!--end::Input-->
                            <!--begin::Label-->
                            <span class="form-check-label fw-semibold">Phone</span>
                            <!--end::Label-->
                          </label>
                          <!--end::Checkbox-->
                        </div>
                        <!--end::Checkboxes-->
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-stack">
                      <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="targets-previous">Build a Team</button>
                      <button type="button" class="btn btn-lg btn-primary" data-kt-element="targets-next">
                        <span class="indicator-label">Upload Files</span>
                        <span class="indicator-progress">Please wait...
                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      </button>
                    </div>
                    <!--end::Actions-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Targets-->
                <!--begin::Files-->
                <div data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-10 pb-lg-12">
                      <!--begin::Title-->
                      <h1 class="fw-bold text-gray-900">Upload Files</h1>
                      <!--end::Title-->
                      <!--begin::Description-->
                      <div class="text-muted fw-semibold fs-4">If you need more info, please check
                        <a href="#" class="link-primary">Project Guidelines</a>
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <!--begin::Dropzone-->
                      <div class="dropzone" id="kt_modal_create_project_files_upload">
                        <!--begin::Message-->
                        <div class="dz-message needsclick">
                          <!--begin::Icon-->
                          <i class="ki-outline ki-file-up fs-3hx text-primary"></i>
                          <!--end::Icon-->
                          <!--begin::Info-->
                          <div class="ms-4">
                            <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                            <span class="fw-semibold fs-4 text-muted">Upload up to 10 files</span>
                          </div>
                          <!--end::Info-->
                        </div>
                      </div>
                      <!--end::Dropzone-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-8">
                      <!--begin::Label-->
                      <label class="fs-6 fw-semibold mb-2">Uploaded File</label>
                      <!--End::Label-->
                      <!--begin::Files-->
                      <div class="mh-300px scroll-y me-n7 pe-7">
                        <!--begin::File-->
                        <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                              <img src="assets/media/svg/files/pdf.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-6">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Avionica Technical Requirements</a>
                              <div class="fw-semibold text-muted">230kb</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--begin::Menu-->
                          <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                              <option></option>
                              <option value="1">Remove</option>
                              <option value="2">Modify</option>
                              <option value="3">Select</option>
                            </select>
                          </div>
                          <!--end::Menu-->
                        </div>
                        <!--end::File-->
                        <!--begin::File-->
                        <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                              <img src="assets/media/svg/files/doc.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-6">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">9 Degree CURD draftplan</a>
                              <div class="fw-semibold text-muted">3.6mb</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--begin::Menu-->
                          <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                              <option></option>
                              <option value="1">Remove</option>
                              <option value="2">Modify</option>
                              <option value="3">Select</option>
                            </select>
                          </div>
                          <!--end::Menu-->
                        </div>
                        <!--end::File-->
                        <!--begin::File-->
                        <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                              <img src="assets/media/svg/files/css.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-6">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">User CRUD Styles</a>
                              <div class="fw-semibold text-muted">85kb</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--begin::Menu-->
                          <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                              <option></option>
                              <option value="1">Remove</option>
                              <option value="2">Modify</option>
                              <option value="3">Select</option>
                            </select>
                          </div>
                          <!--end::Menu-->
                        </div>
                        <!--end::File-->
                        <!--begin::File-->
                        <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                              <img src="assets/media/svg/files/ai.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-6">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Design Initial Logo</a>
                              <div class="fw-semibold text-muted">40kb</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--begin::Menu-->
                          <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                              <option></option>
                              <option value="1">Remove</option>
                              <option value="2">Modify</option>
                              <option value="3">Select</option>
                            </select>
                          </div>
                          <!--end::Menu-->
                        </div>
                        <!--end::File-->
                        <!--begin::File-->
                        <div class="d-flex flex-stack py-4">
                          <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                              <img src="assets/media/svg/files/tif.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-6">
                              <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Tower Hill Bilboard</a>
                              <div class="fw-semibold text-muted">27mb</div>
                            </div>
                            <!--end::Details-->
                          </div>
                          <!--begin::Menu-->
                          <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                              <option></option>
                              <option value="1">Remove</option>
                              <option value="2">Modify</option>
                              <option value="3">Select</option>
                            </select>
                          </div>
                          <!--end::Menu-->
                        </div>
                        <!--end::File-->
                      </div>
                      <!--end::Files-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                      <!--begin::Wrapper-->
                      <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5">
                          <label class="fs-6 fw-semibold">Allow Changes in Budget</label>
                          <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                          <input class="form-check-input" type="checkbox" value="1" name="target_allow" checked="checked" />
                          <span class="form-check-label fw-semibold text-muted">Allowed</span>
                        </label>
                        <!--end::Switch-->
                      </div>
                      <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-stack">
                      <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="files-previous">Set First Target</button>
                      <button type="button" class="btn btn-lg btn-primary" data-kt-element="files-next">
                        <span class="indicator-label">Complete</span>
                        <span class="indicator-progress">Please wait...
                          <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      </button>
                    </div>
                    <!--end::Actions-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Files-->
                <!--begin::Complete-->
                <div data-kt-stepper-element="content">
                  <!--begin::Wrapper-->
                  <div class="w-100">
                    <!--begin::Heading-->
                    <div class="pb-12 text-center">
                      <!--begin::Title-->
                      <h1 class="fw-bold text-gray-900">Project Created!</h1>
                      <!--end::Title-->
                      <!--begin::Description-->
                      <div class="text-muted fw-semibold fs-4">If you need more info, please check how to create project</div>
                      <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-center pb-20">
                      <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Create New Project</button>
                      <a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" title="Coming Soon">View Project</a>
                    </div>
                    <!--end::Actions-->
                    <!--begin::Illustration-->
                    <div class="text-center px-4">
                      <img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mww-100 mh-350px" />
                    </div>
                    <!--end::Illustration-->
                  </div>
                </div>
                <!--end::Complete-->
              </form>
              <!--end::Form-->
            </div>
            <!--begin::Container-->
          </div>
          <!--end::Stepper-->
        </div>
        <!--end::Modal body-->
      </div>
      <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
  </div>
  <!--end::Modal - Create Project-->
  <!--begin::Modal - Upgrade plan-->
  <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-xl">
      <!--begin::Modal content-->
      <div class="modal-content rounded">
        <!--begin::Modal header-->
        <div class="modal-header justify-content-end border-0 pb-0">
          <!--begin::Close-->
          <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
            <i class="ki-outline ki-cross fs-1"></i>
          </div>
          <!--end::Close-->
        </div>
        <!--end::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
          <!--begin::Heading-->
          <div class="mb-13 text-center">
            <h1 class="mb-3">Upgrade a Plan</h1>
            <div class="text-muted fw-semibold fs-5">If you need more info, please check
              <a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
            </div>
          </div>
          <!--end::Heading-->
          <!--begin::Plans-->
          <div class="d-flex flex-column">
            <!--begin::Nav group-->
            <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
              <button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</button>
              <button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</button>
            </div>
            <!--end::Nav group-->
            <!--begin::Row-->
            <div class="row mt-10">
              <!--begin::Col-->
              <div class="col-lg-6 mb-10 mb-lg-0">
                <!--begin::Tabs-->
                <div class="nav flex-column">
                  <!--begin::Tab link-->
                  <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                    <!--end::Description-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                        <input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
                      </div>
                      <!--end::Radio-->
                      <!--begin::Info-->
                      <div class="flex-grow-1">
                        <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup</div>
                        <div class="fw-semibold opacity-75">Best for startups</div>
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Description-->
                    <!--begin::Price-->
                    <div class="ms-5">
                      <span class="mb-2">$</span>
                      <span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
                      <span class="fs-7 opacity-50">/
                        <span data-kt-element="period">Mon</span></span>
                    </div>
                    <!--end::Price-->
                  </label>
                  <!--end::Tab link-->
                  <!--begin::Tab link-->
                  <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                    <!--end::Description-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                        <input class="form-check-input" type="radio" name="plan" value="advanced" />
                      </div>
                      <!--end::Radio-->
                      <!--begin::Info-->
                      <div class="flex-grow-1">
                        <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced</div>
                        <div class="fw-semibold opacity-75">Best for 100+ team size</div>
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Description-->
                    <!--begin::Price-->
                    <div class="ms-5">
                      <span class="mb-2">$</span>
                      <span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
                      <span class="fs-7 opacity-50">/
                        <span data-kt-element="period">Mon</span></span>
                    </div>
                    <!--end::Price-->
                  </label>
                  <!--end::Tab link-->
                  <!--begin::Tab link-->
                  <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                    <!--end::Description-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                        <input class="form-check-input" type="radio" name="plan" value="enterprise" />
                      </div>
                      <!--end::Radio-->
                      <!--begin::Info-->
                      <div class="flex-grow-1">
                        <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise
                          <span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
                        </div>
                        <div class="fw-semibold opacity-75">Best value for 1000+ team</div>
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Description-->
                    <!--begin::Price-->
                    <div class="ms-5">
                      <span class="mb-2">$</span>
                      <span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
                      <span class="fs-7 opacity-50">/
                        <span data-kt-element="period">Mon</span></span>
                    </div>
                    <!--end::Price-->
                  </label>
                  <!--end::Tab link-->
                  <!--begin::Tab link-->
                  <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
                    <!--end::Description-->
                    <div class="d-flex align-items-center me-2">
                      <!--begin::Radio-->
                      <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                        <input class="form-check-input" type="radio" name="plan" value="custom" />
                      </div>
                      <!--end::Radio-->
                      <!--begin::Info-->
                      <div class="flex-grow-1">
                        <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom</div>
                        <div class="fw-semibold opacity-75">Requet a custom license</div>
                      </div>
                      <!--end::Info-->
                    </div>
                    <!--end::Description-->
                    <!--begin::Price-->
                    <div class="ms-5">
                      <a href="#" class="btn btn-sm btn-success">Contact Us</a>
                    </div>
                    <!--end::Price-->
                  </label>
                  <!--end::Tab link-->
                </div>
                <!--end::Tabs-->
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-lg-6">
                <!--begin::Tab content-->
                <div class="tab-content rounded h-100 bg-light p-10">
                  <!--begin::Tab Pane-->
                  <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                    <!--begin::Heading-->
                    <div class="pb-5">
                      <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
                      <div class="text-muted fw-semibold">Optimal for 10+ team size and new startup</div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Body-->
                    <div class="pt-1">
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-muted flex-grow-1">Finance Module</span>
                        <i class="ki-outline ki-cross-circle fs-1"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting Module</span>
                        <i class="ki-outline ki-cross-circle fs-1"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
                        <i class="ki-outline ki-cross-circle fs-1"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center">
                        <span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
                        <i class="ki-outline ki-cross-circle fs-1"></i>
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--end::Body-->
                  </div>
                  <!--end::Tab Pane-->
                  <!--begin::Tab Pane-->
                  <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                    <!--begin::Heading-->
                    <div class="pb-5">
                      <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
                      <div class="text-muted fw-semibold">Optimal for 100+ team size and grown company</div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Body-->
                    <div class="pt-1">
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-muted flex-grow-1">Network Platform</span>
                        <i class="ki-outline ki-cross-circle fs-1"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center">
                        <span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
                        <i class="ki-outline ki-cross-circle fs-1"></i>
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--end::Body-->
                  </div>
                  <!--end::Tab Pane-->
                  <!--begin::Tab Pane-->
                  <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                    <!--begin::Heading-->
                    <div class="pb-5">
                      <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
                      <div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise</div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Body-->
                    <div class="pt-1">
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--end::Body-->
                  </div>
                  <!--end::Tab Pane-->
                  <!--begin::Tab Pane-->
                  <div class="tab-pane fade" id="kt_upgrade_plan_custom">
                    <!--begin::Heading-->
                    <div class="pb-5">
                      <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>
                      <div class="text-muted fw-semibold">Optimal for corporations</div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Body-->
                    <div class="pt-1">
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Users</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Project Integrations</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center mb-7">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                      <!--begin::Item-->
                      <div class="d-flex align-items-center">
                        <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                      </div>
                      <!--end::Item-->
                    </div>
                    <!--end::Body-->
                  </div>
                  <!--end::Tab Pane-->
                </div>
                <!--end::Tab content-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Plans-->
          <!--begin::Actions-->
          <div class="d-flex flex-center flex-row-fluid pt-12">
            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
              <!--begin::Indicator label-->
              <span class="indicator-label">Upgrade Plan</span>
              <!--end::Indicator label-->
              <!--begin::Indicator progress-->
              <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
              <!--end::Indicator progress-->
            </button>
          </div>
          <!--end::Actions-->
        </div>
        <!--end::Modal body-->
      </div>
      <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
  </div>
  <!--end::Modal - Upgrade plan-->
  <!--begin::Modal - New Address-->
  <div class="modal fade" id="kt_modal_new_address" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
      <!--begin::Modal content-->
      <div class="modal-content">
        <!--begin::Form-->
        <form class="form" action="#" id="kt_modal_new_address_form">
          <!--begin::Modal header-->
          <div class="modal-header" id="kt_modal_new_address_header">
            <!--begin::Modal title-->
            <h2>Add New Address</h2>
            <!--end::Modal title-->
            <!--begin::Close-->
            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
              <i class="ki-outline ki-cross fs-1"></i>
            </div>
            <!--end::Close-->
          </div>
          <!--end::Modal header-->
          <!--begin::Modal body-->
          <div class="modal-body py-10 px-lg-17">
            <!--begin::Scroll-->
            <div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
              <!--begin::Notice-->
              <!--begin::Notice-->
              <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                <!--begin::Icon-->
                <i class="ki-outline ki-information fs-2tx text-warning me-4"></i>
                <!--end::Icon-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-grow-1">
                  <!--begin::Content-->
                  <div class="fw-semibold">
                    <h4 class="text-gray-900 fw-bold">Warning</h4>
                    <div class="fs-6 text-gray-700">Updating address may affter to your
                      <a href="#">Tax Location</a>
                    </div>
                  </div>
                  <!--end::Content-->
                </div>
                <!--end::Wrapper-->
              </div>
              <!--end::Notice-->
              <!--end::Notice-->
              <!--begin::Input group-->
              <div class="row mb-5">
                <!--begin::Col-->
                <div class="col-md-6 fv-row">
                  <!--begin::Label-->
                  <label class="required fs-5 fw-semibold mb-2">First name</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input type="text" class="form-control form-control-solid" placeholder="" name="first-name" />
                  <!--end::Input-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 fv-row">
                  <!--end::Label-->
                  <label class="required fs-5 fw-semibold mb-2">Last name</label>
                  <!--end::Label-->
                  <!--end::Input-->
                  <input type="text" class="form-control form-control-solid" placeholder="" name="last-name" />
                  <!--end::Input-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="d-flex flex-column mb-5 fv-row">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                  <span class="required">Country</span>
                  <span class="ms-1" data-bs-toggle="tooltip" title="Your payment statements may very based on selected country">
                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                  </span>
                </label>
                <!--end::Label-->
                <!--begin::Select-->
                <select name="country" data-control="select2" data-dropdown-parent="#kt_modal_new_address" data-placeholder="Select a Country..." class="form-select form-select-solid">
                  <option value="">Select a Country...</option>
                  <option value="AF">Afghanistan</option>
                  <option value="AX">Aland Islands</option>
                  <option value="AL">Albania</option>
                  <option value="DZ">Algeria</option>
                  <option value="AS">American Samoa</option>
                  <option value="AD">Andorra</option>
                  <option value="AO">Angola</option>
                  <option value="AI">Anguilla</option>
                  <option value="AG">Antigua and Barbuda</option>
                  <option value="AR">Argentina</option>
                  <option value="AM">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaijan</option>
                  <option value="BS">Bahamas</option>
                  <option value="BH">Bahrain</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BY">Belarus</option>
                  <option value="BE">Belgium</option>
                  <option value="BZ">Belize</option>
                  <option value="BJ">Benin</option>
                  <option value="BM">Bermuda</option>
                  <option value="BT">Bhutan</option>
                  <option value="BO">Bolivia, Plurinational State of</option>
                  <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                  <option value="BA">Bosnia and Herzegovina</option>
                  <option value="BW">Botswana</option>
                  <option value="BR">Brazil</option>
                  <option value="IO">British Indian Ocean Territory</option>
                  <option value="BN">Brunei Darussalam</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="KH">Cambodia</option>
                  <option value="CM">Cameroon</option>
                  <option value="CA">Canada</option>
                  <option value="CV">Cape Verde</option>
                  <option value="KY">Cayman Islands</option>
                  <option value="CF">Central African Republic</option>
                  <option value="TD">Chad</option>
                  <option value="CL">Chile</option>
                  <option value="CN">China</option>
                  <option value="CX">Christmas Island</option>
                  <option value="CC">Cocos (Keeling) Islands</option>
                  <option value="CO">Colombia</option>
                  <option value="KM">Comoros</option>
                  <option value="CK">Cook Islands</option>
                  <option value="CR">Costa Rica</option>
                  <option value="CI">Côte d'Ivoire</option>
                  <option value="HR">Croatia</option>
                  <option value="CU">Cuba</option>
                  <option value="CW">Curaçao</option>
                  <option value="CZ">Czech Republic</option>
                  <option value="DK">Denmark</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DM">Dominica</option>
                  <option value="DO">Dominican Republic</option>
                  <option value="EC">Ecuador</option>
                  <option value="EG">Egypt</option>
                  <option value="SV">El Salvador</option>
                  <option value="GQ">Equatorial Guinea</option>
                  <option value="ER">Eritrea</option>
                  <option value="EE">Estonia</option>
                  <option value="ET">Ethiopia</option>
                  <option value="FK">Falkland Islands (Malvinas)</option>
                  <option value="FJ">Fiji</option>
                  <option value="FI">Finland</option>
                  <option value="FR">France</option>
                  <option value="PF">French Polynesia</option>
                  <option value="GA">Gabon</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="DE">Germany</option>
                  <option value="GH">Ghana</option>
                  <option value="GI">Gibraltar</option>
                  <option value="GR">Greece</option>
                  <option value="GL">Greenland</option>
                  <option value="GD">Grenada</option>
                  <option value="GU">Guam</option>
                  <option value="GT">Guatemala</option>
                  <option value="GG">Guernsey</option>
                  <option value="GN">Guinea</option>
                  <option value="GW">Guinea-Bissau</option>
                  <option value="HT">Haiti</option>
                  <option value="VA">Holy See (Vatican City State)</option>
                  <option value="HN">Honduras</option>
                  <option value="HK">Hong Kong</option>
                  <option value="HU">Hungary</option>
                  <option value="IS">Iceland</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IR">Iran, Islamic Republic of</option>
                  <option value="IQ">Iraq</option>
                  <option value="IE">Ireland</option>
                  <option value="IM">Isle of Man</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italy</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Japan</option>
                  <option value="JE">Jersey</option>
                  <option value="JO">Jordan</option>
                  <option value="KZ">Kazakhstan</option>
                  <option value="KE">Kenya</option>
                  <option value="KI">Kiribati</option>
                  <option value="KP">Korea, Democratic People's Republic of</option>
                  <option value="KW">Kuwait</option>
                  <option value="KG">Kyrgyzstan</option>
                  <option value="LA">Lao People's Democratic Republic</option>
                  <option value="LV">Latvia</option>
                  <option value="LB">Lebanon</option>
                  <option value="LS">Lesotho</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libya</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lithuania</option>
                  <option value="LU">Luxembourg</option>
                  <option value="MO">Macao</option>
                  <option value="MG">Madagascar</option>
                  <option value="MW">Malawi</option>
                  <option value="MY">Malaysia</option>
                  <option value="MV">Maldives</option>
                  <option value="ML">Mali</option>
                  <option value="MT">Malta</option>
                  <option value="MH">Marshall Islands</option>
                  <option value="MQ">Martinique</option>
                  <option value="MR">Mauritania</option>
                  <option value="MU">Mauritius</option>
                  <option value="MX">Mexico</option>
                  <option value="FM">Micronesia, Federated States of</option>
                  <option value="MD">Moldova, Republic of</option>
                  <option value="MC">Monaco</option>
                  <option value="MN">Mongolia</option>
                  <option value="ME">Montenegro</option>
                  <option value="MS">Montserrat</option>
                  <option value="MA">Morocco</option>
                  <option value="MZ">Mozambique</option>
                  <option value="MM">Myanmar</option>
                  <option value="NA">Namibia</option>
                  <option value="NR">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="NL">Netherlands</option>
                  <option value="NZ">New Zealand</option>
                  <option value="NI">Nicaragua</option>
                  <option value="NE">Niger</option>
                  <option value="NG">Nigeria</option>
                  <option value="NU">Niue</option>
                  <option value="NF">Norfolk Island</option>
                  <option value="MP">Northern Mariana Islands</option>
                  <option value="NO">Norway</option>
                  <option value="OM">Oman</option>
                  <option value="PK">Pakistan</option>
                  <option value="PW">Palau</option>
                  <option value="PS">Palestinian Territory, Occupied</option>
                  <option value="PA">Panama</option>
                  <option value="PG">Papua New Guinea</option>
                  <option value="PY">Paraguay</option>
                  <option value="PE">Peru</option>
                  <option value="PH">Philippines</option>
                  <option value="PL">Poland</option>
                  <option value="PT">Portugal</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="QA">Qatar</option>
                  <option value="RO">Romania</option>
                  <option value="RU">Russian Federation</option>
                  <option value="RW">Rwanda</option>
                  <option value="BL">Saint Barthélemy</option>
                  <option value="KN">Saint Kitts and Nevis</option>
                  <option value="LC">Saint Lucia</option>
                  <option value="MF">Saint Martin (French part)</option>
                  <option value="VC">Saint Vincent and the Grenadines</option>
                  <option value="WS">Samoa</option>
                  <option value="SM">San Marino</option>
                  <option value="ST">Sao Tome and Principe</option>
                  <option value="SA">Saudi Arabia</option>
                  <option value="SN">Senegal</option>
                  <option value="RS">Serbia</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leone</option>
                  <option value="SG">Singapore</option>
                  <option value="SX">Sint Maarten (Dutch part)</option>
                  <option value="SK">Slovakia</option>
                  <option value="SI">Slovenia</option>
                  <option value="SB">Solomon Islands</option>
                  <option value="SO">Somalia</option>
                  <option value="ZA">South Africa</option>
                  <option value="KR">South Korea</option>
                  <option value="SS">South Sudan</option>
                  <option value="ES">Spain</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="SD">Sudan</option>
                  <option value="SR">Suriname</option>
                  <option value="SZ">Swaziland</option>
                  <option value="SE">Sweden</option>
                  <option value="CH">Switzerland</option>
                  <option value="SY">Syrian Arab Republic</option>
                  <option value="TW">Taiwan, Province of China</option>
                  <option value="TJ">Tajikistan</option>
                  <option value="TZ">Tanzania, United Republic of</option>
                  <option value="TH">Thailand</option>
                  <option value="TG">Togo</option>
                  <option value="TK">Tokelau</option>
                  <option value="TO">Tonga</option>
                  <option value="TT">Trinidad and Tobago</option>
                  <option value="TN">Tunisia</option>
                  <option value="TR">Turkey</option>
                  <option value="TM">Turkmenistan</option>
                  <option value="TC">Turks and Caicos Islands</option>
                  <option value="TV">Tuvalu</option>
                  <option value="UG">Uganda</option>
                  <option value="UA">Ukraine</option>
                  <option value="AE">United Arab Emirates</option>
                  <option value="GB">United Kingdom</option>
                  <option value="US">United States</option>
                  <option value="UY">Uruguay</option>
                  <option value="UZ">Uzbekistan</option>
                  <option value="VU">Vanuatu</option>
                  <option value="VE">Venezuela, Bolivarian Republic of</option>
                  <option value="VN">Vietnam</option>
                  <option value="VI">Virgin Islands</option>
                  <option value="YE">Yemen</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabwe</option>
                </select>
                <!--end::Select-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="d-flex flex-column mb-5 fv-row">
                <!--begin::Label-->
                <label class="required fs-5 fw-semibold mb-2">Address Line 1</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input class="form-control form-control-solid" placeholder="" name="address1" />
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="d-flex flex-column mb-5 fv-row">
                <!--begin::Label-->
                <label class="required fs-5 fw-semibold mb-2">Address Line 2</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input class="form-control form-control-solid" placeholder="" name="address2" />
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="d-flex flex-column mb-5 fv-row">
                <!--begin::Label-->
                <label class="fs-5 fw-semibold mb-2">Town</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input class="form-control form-control-solid" placeholder="" name="city" />
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="row g-9 mb-5">
                <!--begin::Col-->
                <div class="col-md-6 fv-row">
                  <!--begin::Label-->
                  <label class="fs-5 fw-semibold mb-2">State / Province</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input class="form-control form-control-solid" placeholder="" name="state" />
                  <!--end::Input-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 fv-row">
                  <!--begin::Label-->
                  <label class="fs-5 fw-semibold mb-2">Post Code</label>
                  <!--end::Label-->
                  <!--begin::Input-->
                  <input class="form-control form-control-solid" placeholder="" name="postcode" />
                  <!--end::Input-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="fv-row mb-5">
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack">
                  <!--begin::Label-->
                  <div class="me-5">
                    <!--begin::Label-->
                    <label class="fs-5 fw-semibold">Use as a billing adderess?</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                    <!--end::Input-->
                  </div>
                  <!--end::Label-->
                  <!--begin::Switch-->
                  <label class="form-check form-switch form-check-custom form-check-solid">
                    <!--begin::Input-->
                    <input class="form-check-input" name="billing" type="checkbox" value="1" checked="checked" />
                    <!--end::Input-->
                    <!--begin::Label-->
                    <span class="form-check-label fw-semibold text-muted">Yes</span>
                    <!--end::Label-->
                  </label>
                  <!--end::Switch-->
                </div>
                <!--begin::Wrapper-->
              </div>
              <!--end::Input group-->
            </div>
            <!--end::Scroll-->
          </div>
          <!--end::Modal body-->
          <!--begin::Modal footer-->
          <div class="modal-footer flex-center">
            <!--begin::Button-->
            <button type="reset" id="kt_modal_new_address_cancel" class="btn btn-light me-3">Discard</button>
            <!--end::Button-->
            <!--begin::Button-->
            <button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
              <span class="indicator-label">Submit</span>
              <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Button-->
          </div>
          <!--end::Modal footer-->
        </form>
        <!--end::Form-->
      </div>
    </div>
  </div>
  <!--end::Modal - New Address-->
  <!--begin::Modal - Users Search-->
  <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
      <!--begin::Modal content-->
      <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header pb-0 border-0 justify-content-end">
          <!--begin::Close-->
          <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
            <i class="ki-outline ki-cross fs-1"></i>
          </div>
          <!--end::Close-->
        </div>
        <!--begin::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
          <!--begin::Content-->
          <div class="text-center mb-13">
            <h1 class="mb-3">Search Users</h1>
            <div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
          </div>
          <!--end::Content-->
          <!--begin::Search-->
          <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
            <!--begin::Form-->
            <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
              <!--begin::Hidden input(Added to disable form autocomplete)-->
              <input type="hidden" />
              <!--end::Hidden input-->
              <!--begin::Icon-->
              <i class="ki-outline ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"></i>
              <!--end::Icon-->
              <!--begin::Input-->
              <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
              <!--end::Input-->
              <!--begin::Spinner-->
              <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
              </span>
              <!--end::Spinner-->
              <!--begin::Reset-->
              <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                <i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>
              </span>
              <!--end::Reset-->
            </form>
            <!--end::Form-->
            <!--begin::Wrapper-->
            <div class="py-5">
              <!--begin::Suggestions-->
              <div data-kt-search-element="suggestions">
                <!--begin::Heading-->
                <h3 class="fw-semibold mb-5">Recently searched:</h3>
                <!--end::Heading-->
                <!--begin::Users-->
                <div class="mh-375px scroll-y me-n7 pe-7">
                  <!--begin::User-->
                  <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle me-5">
                      <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Info-->
                    <div class="fw-semibold">
                      <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                      <span class="badge badge-light">Art Director</span>
                    </div>
                    <!--end::Info-->
                  </a>
                  <!--end::User-->
                  <!--begin::User-->
                  <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle me-5">
                      <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Info-->
                    <div class="fw-semibold">
                      <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                      <span class="badge badge-light">Marketing Analytic</span>
                    </div>
                    <!--end::Info-->
                  </a>
                  <!--end::User-->
                  <!--begin::User-->
                  <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle me-5">
                      <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Info-->
                    <div class="fw-semibold">
                      <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                      <span class="badge badge-light">Software Enginer</span>
                    </div>
                    <!--end::Info-->
                  </a>
                  <!--end::User-->
                  <!--begin::User-->
                  <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle me-5">
                      <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Info-->
                    <div class="fw-semibold">
                      <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                      <span class="badge badge-light">Web Developer</span>
                    </div>
                    <!--end::Info-->
                  </a>
                  <!--end::User-->
                  <!--begin::User-->
                  <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle me-5">
                      <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Info-->
                    <div class="fw-semibold">
                      <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                      <span class="badge badge-light">UI/UX Designer</span>
                    </div>
                    <!--end::Info-->
                  </a>
                  <!--end::User-->
                </div>
                <!--end::Users-->
              </div>
              <!--end::Suggestions-->
              <!--begin::Results(add d-none to below element to hide the users list by default)-->
              <div data-kt-search-element="results" class="d-none">
                <!--begin::Users-->
                <div class="mh-375px scroll-y me-n7 pe-7">
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="selected">Owner</option>
                        <option value="3">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected="selected">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
                        <div class="fw-semibold text-muted">max@kt.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="selected">Owner</option>
                        <option value="3">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                        <div class="fw-semibold text-muted">mik@pex.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="selected">Owner</option>
                        <option value="3">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="selected">Owner</option>
                        <option value="3">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected="selected">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="selected">Owner</option>
                        <option value="3">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected="selected">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                        <div class="fw-semibold text-muted">robert@benko.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2" selected="selected">Owner</option>
                        <option value="3">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected="selected">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                  <!--begin::Separator-->
                  <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                  <!--end::Separator-->
                  <!--begin::User-->
                  <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                    <!--begin::Details-->
                    <div class="d-flex align-items-center">
                      <!--begin::Checkbox-->
                      <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
                      </label>
                      <!--end::Checkbox-->
                      <!--begin::Avatar-->
                      <div class="symbol symbol-35px symbol-circle">
                        <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                      </div>
                      <!--end::Avatar-->
                      <!--begin::Details-->
                      <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                      </div>
                      <!--end::Details-->
                    </div>
                    <!--end::Details-->
                    <!--begin::Access menu-->
                    <div class="ms-2 w-100px">
                      <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1">Guest</option>
                        <option value="2">Owner</option>
                        <option value="3" selected="selected">Can Edit</option>
                      </select>
                    </div>
                    <!--end::Access menu-->
                  </div>
                  <!--end::User-->
                </div>
                <!--end::Users-->
                <!--begin::Actions-->
                <div class="d-flex flex-center mt-15">
                  <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
                  <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
                </div>
                <!--end::Actions-->
              </div>
              <!--end::Results-->
              <!--begin::Empty-->
              <div data-kt-search-element="empty" class="text-center d-none">
                <!--begin::Message-->
                <div class="fw-semibold py-10">
                  <div class="text-gray-600 fs-3 mb-2">No users found</div>
                  <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                </div>
                <!--end::Message-->
                <!--begin::Illustration-->
                <div class="text-center px-5">
                  <img src="assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
                </div>
                <!--end::Illustration-->
              </div>
              <!--end::Empty-->
            </div>
            <!--end::Wrapper-->
          </div>
          <!--end::Search-->
        </div>
        <!--end::Modal body-->
      </div>
      <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
  </div>
  <!--end::Modal - Users Search-->
  <!--begin::Modal - Invite Friends-->
  <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
      <!--begin::Modal content-->
      <div class="modal-content">
        <!--begin::Modal header-->
        <div class="modal-header pb-0 border-0 justify-content-end">
          <!--begin::Close-->
          <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
            <i class="ki-outline ki-cross fs-1"></i>
          </div>
          <!--end::Close-->
        </div>
        <!--begin::Modal header-->
        <!--begin::Modal body-->
        <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
          <!--begin::Heading-->
          <div class="text-center mb-13">
            <!--begin::Title-->
            <h1 class="mb-3">Invite a Friend</h1>
            <!--end::Title-->
            <!--begin::Description-->
            <div class="text-muted fw-semibold fs-5">If you need more info, please check out
              <a href="#" class="link-primary fw-bold">FAQ Page</a>.
            </div>
            <!--end::Description-->
          </div>
          <!--end::Heading-->
          <!--begin::Google Contacts Invite-->
          <div class="btn btn-light-primary fw-bold w-100 mb-8">
            <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts
          </div>
          <!--end::Google Contacts Invite-->
          <!--begin::Separator-->
          <div class="separator d-flex flex-center mb-8">
            <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
          </div>
          <!--end::Separator-->
          <!--begin::Textarea-->
          <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
          <!--end::Textarea-->
          <!--begin::Users-->
          <div class="mb-10">
            <!--begin::Heading-->
            <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
            <!--end::Heading-->
            <!--begin::List-->
            <div class="mh-300px scroll-y me-n7 pe-7">
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                    <div class="fw-semibold text-muted">smith@kpmg.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2" selected="selected">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                    <div class="fw-semibold text-muted">melody@altbox.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1" selected="selected">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
                    <div class="fw-semibold text-muted">max@kt.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                    <div class="fw-semibold text-muted">sean@dellito.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2" selected="selected">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                    <div class="fw-semibold text-muted">brian@exchange.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                    <div class="fw-semibold text-muted">mik@pex.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2" selected="selected">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                    <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                    <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2" selected="selected">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                    <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1" selected="selected">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                    <div class="fw-semibold text-muted">dam@consilting.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                    <div class="fw-semibold text-muted">emma@intenso.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2" selected="selected">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                    <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1" selected="selected">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                    <div class="fw-semibold text-muted">robert@benko.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
                    <div class="fw-semibold text-muted">miller@mapple.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                    <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2" selected="selected">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                    <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1" selected="selected">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
              <!--begin::User-->
              <div class="d-flex flex-stack py-4">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-35px symbol-circle">
                    <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Details-->
                  <div class="ms-5">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                    <div class="fw-semibold text-muted">emma@intenso.com</div>
                  </div>
                  <!--end::Details-->
                </div>
                <!--end::Details-->
                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                  <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                    <option value="1">Guest</option>
                    <option value="2">Owner</option>
                    <option value="3" selected="selected">Can Edit</option>
                  </select>
                </div>
                <!--end::Access menu-->
              </div>
              <!--end::User-->
            </div>
            <!--end::List-->
          </div>
          <!--end::Users-->
          <!--begin::Notice-->
          <div class="d-flex flex-stack">
            <!--begin::Label-->
            <div class="me-5 fw-semibold">
              <label class="fs-6">Adding Users by Team Members</label>
              <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
            </div>
            <!--end::Label-->
            <!--begin::Switch-->
            <label class="form-check form-switch form-check-custom form-check-solid">
              <input class="form-check-input" type="checkbox" value="1" checked="checked" />
              <span class="form-check-label fw-semibold text-muted">Allowed</span>
            </label>
            <!--end::Switch-->
          </div>
          <!--end::Notice-->
        </div>
        <!--end::Modal body-->
      </div>
      <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
  </div>
  <!--end::Modal - Invite Friend-->
  <!--end::Modals-->
  <!--begin::Javascript-->
  <script>
    var hostUrl = "assets/";
  </script>
  <!--begin::Global Javascript Bundle(mandatory for all pages)-->
  <script src="assets/plugins/global/plugins.bundle.js"></script>
  <script src="assets/js/scripts.bundle.js"></script>
  <!--end::Global Javascript Bundle-->
  <!--begin::Vendors Javascript(used for this page only)-->
  <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
  <script src="assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
  <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
  <!--end::Vendors Javascript-->
  <!--begin::Custom Javascript(used for this page only)-->
  <script src="assets/js/widgets.bundle.js"></script>
  <script src="assets/js/custom/widgets.js"></script>
  <script src="assets/js/custom/apps/chat/chat.js"></script>
  <script src="assets/js/custom/utilities/modals/create-app.js"></script>
  <script src="assets/js/custom/utilities/modals/create-project/type.js"></script>
  <script src="assets/js/custom/utilities/modals/create-project/budget.js"></script>
  <script src="assets/js/custom/utilities/modals/create-project/settings.js"></script>
  <script src="assets/js/custom/utilities/modals/create-project/team.js"></script>
  <script src="assets/js/custom/utilities/modals/create-project/targets.js"></script>
  <script src="assets/js/custom/utilities/modals/create-project/files.js"></script>
  <script src="assets/js/custom/utilities/modals/create-project/complete.js"></script>
  <script src="assets/js/custom/utilities/modals/create-project/main.js"></script>
  <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
  <script src="assets/js/custom/utilities/modals/new-address.js"></script>
  <script src="assets/js/custom/utilities/modals/users-search.js"></script>
  <!--end::Custom Javascript-->
  <!--end::Javascript-->
</body>
<!--end::Body-->

</html>