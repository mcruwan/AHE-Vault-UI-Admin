<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <title>Institution Overview</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Institutions" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="canonical" href="http://apps/ecommerce/catalog/products.html" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
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
                <!--begin::Sidebar-->

                <?php include_once('widgets/sidebar.php'); ?>

                <!--end::Sidebar-->
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
                                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Institution</h1>
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
                                        <li class="breadcrumb-item text-muted">Institutions</li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item">
                                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item text-muted">Institution</li>
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
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-xxl">
                                <!--begin::Form-->
                                <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="apps/ecommerce/catalog/products.html">
                                    <!--begin::Aside column-->
                                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                                        <!--begin::Thumbnail settings-->
                                        <div class="card card-flush py-4">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <!--begin::Card title-->
                                                <div class="card-title">
                                                    <h2>Institution Logo</h2>
                                                </div>
                                                <!--end::Card title-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body text-center pt-0">
                                                <!--begin::Image input-->
                                                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                                    <!--begin::Preview existing avatar-->
                                                    <div class="image-input-wrapper w-225px h-100px" style="background-image: url(assets/media/logos/sunway-logo.jpg);background-size: contain;"></div>
                                                    <!--end::Preview existing avatar-->
                                                    <!--begin::Label-->
                                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                        <i class="ki-outline ki-pencil fs-7"></i>
                                                        <!--begin::Inputs-->
                                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="avatar_remove" />
                                                        <!--end::Inputs-->
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Cancel-->
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                        <i class="ki-outline ki-cross fs-2"></i>
                                                    </span>
                                                    <!--end::Cancel-->
                                                    <!--begin::Remove-->
                                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                        <i class="ki-outline ki-cross fs-2"></i>
                                                    </span>
                                                    <!--end::Remove-->
                                                </div>
                                                <!--end::Image input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set the institution thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Thumbnail settings-->
                                        <!--begin::Status-->
                                        <div class="card card-flush py-4">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <!--begin::Card title-->
                                                <div class="card-title">
                                                    <h2>Status</h2>
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar">
                                                    <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
                                                </div>
                                                <!--begin::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Select2-->
                                                <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select">
                                                    <option></option>
                                                    <option value="Active" selected="selected">Active</option>
                                                    <option value="draft">Draft</option>
                                                    <option value="Disabled">Disabled</option>
                                                    <option value="inactive">Inactive</option>
                                                </select>
                                                <!--end::Select2-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set the institution status.</div>
                                                <!--end::Description-->
                                                <!--begin::Datepicker-->
                                                <div class="d-none mt-10">
                                                    <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select publishing date and time</label>
                                                    <input class="form-control" id="kt_ecommerce_add_product_status_datepicker" placeholder="Pick date & time" />
                                                </div>
                                                <!--end::Datepicker-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Status-->
                                        <!--begin::Category & tags-->
                                        <div class="card card-flush py-4">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <!--begin::Card title-->
                                                <div class="card-title">
                                                    <h2>Institution Type</h2>
                                                </div>
                                                <!--end::Card title-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Input group-->
                                                <!--begin::Label-->
                                                <label class="form-label">Categories</label>
                                                <!--end::Label-->
                                                <!--begin::Select2-->
                                                <select class="form-select mb-2" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
                                                    <option></option>
                                                    <option value="Public">Public</option>
                                                    <option value="Private">Private</option>
                                                    <option value="Other">Other</option>
                                                </select>

                                                <label class="form-label d-block">Tags</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input id="kt_ecommerce_add_product_tags" name="kt_ecommerce_add_product_tags" class="form-control mb-2" value="new, trending, sale" />
                                                <!--end::Input-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Add tags to a institution.</div>
                                                <!--end::Description-->
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Category & tags-->
                                        <!--begin::Card widget 6-->
                                        <div class="card card-flush">
                                            <!--begin::Header-->
                                            <div class="card-header pt-5">
                                                <!--begin::Title-->
                                                <div class="card-title d-flex flex-column">
                                                    <!--begin::Info-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Currency-->
                                                        <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start">$</span>
                                                        <!--end::Currency-->
                                                        <!--begin::Amount-->
                                                        <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">2,420</span>
                                                        <!--end::Amount-->
                                                        <!--begin::Badge-->
                                                        <span class="badge badge-light-success fs-base">
                                                            <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>2.6%</span>
                                                        <!--end::Badge-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Subtitle-->
                                                    <span class="text-gray-500 pt-1 fw-semibold fs-6">Average Daily Sales</span>
                                                    <!--end::Subtitle-->
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex align-items-end px-0 pb-0">
                                                <!--begin::Chart-->
                                                <div id="kt_card_widget_6_chart" class="w-100" style="height: 80px"></div>
                                                <!--end::Chart-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>

                                        <!--end::Card widget 6-->
                                        <!--begin::Template settings-->
                                        <div class="card card-flush py-4">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <!--begin::Card title-->
                                                <div class="card-title">
                                                    <h2>Institution Template</h2>
                                                </div>
                                                <!--end::Card title-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Select store template-->
                                                <label for="kt_ecommerce_add_product_store_template" class="form-label">Select a institution template</label>
                                                <!--end::Select store template-->
                                                <!--begin::Select2-->
                                                <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_store_template">
                                                    <option></option>
                                                    <option value="default" selected="selected">Default template</option>
                                                    <option value="electronics">Electronics</option>
                                                    <option value="office">Office stationary</option>
                                                    <option value="fashion">Fashion</option>
                                                </select>
                                                <!--end::Select2-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Assign a template from your current theme to define how a single institution is displayed.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Template settings-->
                                    </div>
                                    <!--end::Aside column-->
                                    <!--begin::Main column-->
                                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                        <!--begin:::Tabs-->
                                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                                            <!--begin:::Tab item-->
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">General</a>
                                            </li>
                                            <!--end:::Tab item-->
                                            <!--begin:::Tab item-->
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced">Contacts</a>
                                            </li>
                                            <!--end:::Tab item-->
                                            <!--begin:::Tab item-->
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_users">Users</a>
                                            </li>
                                            <!--end:::Tab item-->
                                            <!--begin:::Tab item-->
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_reviews">Messages</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#ranking_tab">Ranking</a>
                                            </li>
                                            <!--end:::Tab item-->
                                        </ul>
                                        <!--end:::Tabs-->
                                        <!--begin::Tab content-->
                                        <div class="tab-content">
                                            <!--begin::Tab pane-->
                                            <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                                    <!--begin::General options-->
                                                    <div class="card card-flush py-4">
                                                        <div class="card-header align-items-center">
                                                            <!--begin::Card title-->
                                                            <div class="card-title m-0">
                                                                <h3 class="fw-bold m-0">Institutional Information</h3>
                                                            </div>
                                                            <!--end::Card title-->
                                                            <!--begin::Action-->
                                                            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_edit" style="height: 35px;">Edit Data</a>
                                                            <!--end::Action-->
                                                        </div>

                                                        <!--end::Card header-->
                                                        <!--begin::Card body-->
                                                        <div class="card-body pt-0">
                                                            <div class="row mb-6 align-items-center">
                                                                <!--begin::Label-->
                                                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Institution name</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-lg-8">
                                                                    <span class="col-form-label fw-semibold fs-6">Sunway University</span>
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <div class="row mb-6 align-items-center">
                                                                <!--begin::Label-->
                                                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                                    <span class="required">Location of the institution</span>
                                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Country of university">
                                                                        <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                                                    </span>
                                                                </label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-lg-8">
                                                                    <span class="col-form-label fw-semibold fs-6">Malaysia</span>
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <div class="row mb-6 align-items-center">
                                                                <!--begin::Label-->
                                                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Official website</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-lg-8">
                                                                    <span class="col-form-label fw-semibold fs-6">https://sunwayuniversity.edu.my/</span>
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <div class="row mb-6 align-items-center">
                                                                <!--begin::Label-->
                                                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Institutional recognition</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-lg-8">
                                                                    <span class="col-form-label fw-semibold fs-6">Yes</span>
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <div class="row mb-6 align-items-center">
                                                                <!--begin::Label-->
                                                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Official web domain for faculty email</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-lg-8">
                                                                    <span class="col-form-label fw-semibold fs-6">-</span>
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <div class="row mb-6 align-items-center">
                                                                <!--begin::Label-->
                                                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Institution name in other languages</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-lg-8">
                                                                    <span class="col-form-label fw-semibold fs-6">-</span>
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <div class="row mb-6 align-items-center">
                                                                <!--begin::Label-->
                                                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Google Scholar profile</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-lg-8">
                                                                    <span class="col-form-label fw-semibold fs-6">-</span>
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                        </div>
                                                        <!--end::Card header-->
                                                    </div>
                                                    <!--end::General options-->
                                                    <!--begin::Media-->
                                                    <div class="card card-flush py-4">
                                                        <!--begin::Card header-->
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h2>Media</h2>
                                                            </div>
                                                        </div>
                                                        <!--end::Card header-->
                                                        <!--begin::Card body-->
                                                        <div class="card-body pt-0">
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-2">
                                                                <!--begin::Dropzone-->
                                                                <div class="dropzone" id="kt_ecommerce_add_product_media">
                                                                    <!--begin::Message-->
                                                                    <div class="dz-message needsclick">
                                                                        <!--begin::Icon-->
                                                                        <i class="ki-outline ki-file-up text-primary fs-3x"></i>
                                                                        <!--end::Icon-->
                                                                        <!--begin::Info-->
                                                                        <div class="ms-4">
                                                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                                                            <span class="fs-7 fw-semibold text-gray-500">Upload up to 10 files</span>
                                                                        </div>
                                                                        <!--end::Info-->
                                                                    </div>
                                                                </div>
                                                                <!--end::Dropzone-->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Description-->
                                                            <div class="text-muted fs-7">Set the institution media gallery.</div>
                                                            <!--end::Description-->
                                                        </div>
                                                        <!--end::Card header-->
                                                    </div>
                                                    <!--end::Media-->
                                                    <!--begin::Pricing-->
                                                    <div class="card card-flush py-4">
                                                        <!--begin::Card header-->
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h2>Pricing</h2>
                                                            </div>
                                                        </div>
                                                        <!--end::Card header-->
                                                        <!--begin::Card body-->
                                                        <div class="card-body pt-0">
                                                            <!--begin::Input group-->
                                                            <div class="mb-10 fv-row">
                                                                <!--begin::Label-->
                                                                <label class="required form-label">Base Price</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" name="price" class="form-control mb-2" placeholder="Institution price" value="199.99" />
                                                                <!--end::Input-->
                                                                <!--begin::Description-->
                                                                <div class="text-muted fs-7">Set the institution price.</div>
                                                                <!--end::Description-->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="fs-6 fw-semibold mb-2">Discount Type
                                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Select a discount type that will be applied to this institution">
                                                                        <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                                                    </span></label>
                                                                <!--End::Label-->
                                                                <!--begin::Row-->
                                                                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                                                    <!--begin::Col-->
                                                                    <div class="col">
                                                                        <!--begin::Option-->
                                                                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                                            <!--begin::Radio-->
                                                                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                                <input class="form-check-input" type="radio" name="discount_option" value="1" />
                                                                            </span>
                                                                            <!--end::Radio-->
                                                                            <!--begin::Info-->
                                                                            <span class="ms-5">
                                                                                <span class="fs-4 fw-bold text-gray-800 d-block">No Discount</span>
                                                                            </span>
                                                                            <!--end::Info-->
                                                                        </label>
                                                                        <!--end::Option-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                    <!--begin::Col-->
                                                                    <div class="col">
                                                                        <!--begin::Option-->
                                                                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                                                                            <!--begin::Radio-->
                                                                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                                <input class="form-check-input" type="radio" name="discount_option" value="2" checked="checked" />
                                                                            </span>
                                                                            <!--end::Radio-->
                                                                            <!--begin::Info-->
                                                                            <span class="ms-5">
                                                                                <span class="fs-4 fw-bold text-gray-800 d-block">Percentage %</span>
                                                                            </span>
                                                                            <!--end::Info-->
                                                                        </label>
                                                                        <!--end::Option-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                    <!--begin::Col-->
                                                                    <div class="col">
                                                                        <!--begin::Option-->
                                                                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                                            <!--begin::Radio-->
                                                                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                                <input class="form-check-input" type="radio" name="discount_option" value="3" />
                                                                            </span>
                                                                            <!--end::Radio-->
                                                                            <!--begin::Info-->
                                                                            <span class="ms-5">
                                                                                <span class="fs-4 fw-bold text-gray-800 d-block">Fixed Price</span>
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
                                                            <div class="mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">
                                                                <!--begin::Label-->
                                                                <label class="form-label">Set Discount Percentage</label>
                                                                <!--end::Label-->
                                                                <!--begin::Slider-->
                                                                <div class="d-flex flex-column text-center mb-5">
                                                                    <div class="d-flex align-items-start justify-content-center mb-7">
                                                                        <span class="fw-bold fs-3x" id="kt_ecommerce_add_product_discount_label">0</span>
                                                                        <span class="fw-bold fs-4 mt-1 ms-2">%</span>
                                                                    </div>
                                                                    <div id="kt_ecommerce_add_product_discount_slider" class="noUi-sm"></div>
                                                                </div>
                                                                <!--end::Slider-->
                                                                <!--begin::Description-->
                                                                <div class="text-muted fs-7">Set a percentage discount to be applied on this institution.</div>
                                                                <!--end::Description-->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Input group-->
                                                            <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_fixed">
                                                                <!--begin::Label-->
                                                                <label class="form-label">Fixed Discounted Price</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" name="dicsounted_price" class="form-control mb-2" placeholder="Discounted price" />
                                                                <!--end::Input-->
                                                                <!--begin::Description-->
                                                                <div class="text-muted fs-7">Set the discounted institution price. The institution will be reduced at the determined fixed price</div>
                                                                <!--end::Description-->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Tax-->
                                                            <div class="d-flex flex-wrap gap-5">
                                                                <!--begin::Input group-->
                                                                <div class="fv-row w-100 flex-md-root">
                                                                    <!--begin::Label-->
                                                                    <label class="required form-label">Tax Class</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Select2-->
                                                                    <select class="form-select mb-2" name="tax" data-control="select2" data-hide-search="true" data-placeholder="Select an option">
                                                                        <option></option>
                                                                        <option value="0">Tax Free</option>
                                                                        <option value="1" selected="selected">Taxable Goods</option>
                                                                        <option value="2">Downloadable Institution</option>
                                                                    </select>
                                                                    <!--end::Select2-->
                                                                    <!--begin::Description-->
                                                                    <div class="text-muted fs-7">Set the institution tax class.</div>
                                                                    <!--end::Description-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="fv-row w-100 flex-md-root">
                                                                    <!--begin::Label-->
                                                                    <label class="form-label">VAT Amount (%)</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text" class="form-control mb-2" value="35" />
                                                                    <!--end::Input-->
                                                                    <!--begin::Description-->
                                                                    <div class="text-muted fs-7">Set the institution VAT about.</div>
                                                                    <!--end::Description-->
                                                                </div>
                                                                <!--end::Input group-->
                                                            </div>
                                                            <!--end:Tax-->
                                                        </div>
                                                        <!--end::Card header-->
                                                    </div>
                                                    <!--end::Pricing-->
                                                </div>

                                            </div>
                                            <!--end::Tab pane-->
                                            <!--begin::Tab pane-->
                                            <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                                    <div class="table-responsive">
                                                        <!--begin::Table-->
                                                        <div id="kt_project_users_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer card p-4">
                                                            <div class="table-responsive">
                                                                <table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold dataTable" style="width: 0px;">
                                                                    <colgroup>
                                                                        <col style="width: 0px;">
                                                                        <col style="width: 0px;">
                                                                        <col style="width: 0px;">
                                                                        <col style="width: 0px;">
                                                                        <col style="width: 0px;">
                                                                    </colgroup>
                                                                    <thead class="fs-7 text-gray-500 text-uppercase">
                                                                        <tr role="row">
                                                                            <th class="min-w-250px dt-orderable-asc dt-orderable-desc" data-dt-column="0" rowspan="1" colspan="1" aria-label="User: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">User</span><span class="dt-column-order"></span></th>
                                                                            <th class="min-w-150px dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="1" colspan="1" aria-label="Date: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Date</span><span class="dt-column-order"></span></th>
                                                                            <th class="min-w-90px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1" aria-label="Job Title: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Job Title</span><span class="dt-column-order"></span></th>
                                                                            <th class="min-w-90px dt-orderable-asc dt-orderable-desc" data-dt-column="3" rowspan="1" colspan="1" aria-label="Department: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Department</span><span class="dt-column-order"></span></th>
                                                                            <th class="min-w-50px text-end dt-orderable-none" data-dt-column="4" rowspan="1" colspan="1" aria-label="Details"><span class="dt-column-title">Action</span><span class="dt-column-order"></span></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="fs-6">
                                                                        <tr>
                                                                            <td>
                                                                                <!--begin::User-->
                                                                                <div class="d-flex align-items-center">
                                                                                    <!--begin::Wrapper-->
                                                                                    <div class="me-5 position-relative">
                                                                                        <!--begin::Avatar-->
                                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                                            <img alt="Pic" src="assets/media/avatars/300-6.jpg">
                                                                                        </div>
                                                                                        <!--end::Avatar-->
                                                                                    </div>
                                                                                    <!--end::Wrapper-->
                                                                                    <!--begin::Info-->
                                                                                    <div class="d-flex flex-column justify-content-center">
                                                                                        <div class="mb-1 text-gray-800 text-hover-primary">Emma Smith</div>
                                                                                        <div class="fw-semibold fs-6 text-gray-500">smith@kpmg.com</div>
                                                                                    </div>
                                                                                    <!--end::Info-->
                                                                                </div>
                                                                                <!--end::User-->
                                                                            </td>
                                                                            <td data-order="2024-08-19T00:00:00+05:30">Aug 19, 2024</td>
                                                                            <td class="dt-type-numeric">Developer</td>
                                                                            <td class="text-center">IT</td>
                                                                            <td class="text-end">
                                                                                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                                                <!--begin::Menu-->
                                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="reply.php" class="menu-link px-3">Send Message</a>
                                                                                    </div>
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="user-overview.php" class="menu-link px-3">View</a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                </div>
                                                                                <!--end::Menu-->
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <!--begin::User-->
                                                                                <div class="d-flex align-items-center">
                                                                                    <!--begin::Wrapper-->
                                                                                    <div class="me-5 position-relative">
                                                                                        <!--begin::Avatar-->
                                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                                                        </div>
                                                                                        <!--end::Avatar-->
                                                                                        <!--begin::Online-->
                                                                                        <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                                                        <!--end::Online-->
                                                                                    </div>
                                                                                    <!--end::Wrapper-->
                                                                                    <!--begin::Info-->
                                                                                    <div class="d-flex flex-column justify-content-center">
                                                                                        <div class="mb-1 text-gray-800 text-hover-primary">Melody Macy</div>
                                                                                        <div class="fw-semibold fs-6 text-gray-500">melody@altbox.com</div>
                                                                                    </div>
                                                                                    <!--end::Info-->
                                                                                </div>
                                                                                <!--end::User-->
                                                                            </td>
                                                                            <td data-order="2024-07-25T00:00:00+05:30">Jul 25, 2024</td>
                                                                            <td class="dt-type-numeric">Developer</td>
                                                                            <td class="text-center">IT</td>
                                                                            <td class="text-end">
                                                                                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                                                <!--begin::Menu-->
                                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="reply.php" class="menu-link px-3">Send Message</a>
                                                                                    </div>
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="user-overview.php" class="menu-link px-3">View</a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                </div>
                                                                                <!--end::Menu-->
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <!--begin::User-->
                                                                                <div class="d-flex align-items-center">
                                                                                    <!--begin::Wrapper-->
                                                                                    <div class="me-5 position-relative">
                                                                                        <!--begin::Avatar-->
                                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                                            <img alt="Pic" src="assets/media/avatars/300-1.jpg">
                                                                                        </div>
                                                                                        <!--end::Avatar-->
                                                                                    </div>
                                                                                    <!--end::Wrapper-->
                                                                                    <!--begin::Info-->
                                                                                    <div class="d-flex flex-column justify-content-center">
                                                                                        <div class="mb-1 text-gray-800 text-hover-primary">Max Smith</div>
                                                                                        <div class="fw-semibold fs-6 text-gray-500">max@kt.com</div>
                                                                                    </div>
                                                                                    <!--end::Info-->
                                                                                </div>
                                                                                <!--end::User-->
                                                                            </td>
                                                                            <td data-order="2024-03-10T00:00:00+05:30">Mar 10, 2024</td>
                                                                            <td class="dt-type-numeric">Developer</td>
                                                                            <td class="text-center">IT</td>
                                                                            <td class="text-end">
                                                                                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                                                <!--begin::Menu-->
                                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="reply.php" class="menu-link px-3">Send Message</a>
                                                                                    </div>
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="user-overview.php" class="menu-link px-3">View</a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                </div>
                                                                                <!--end::Menu-->
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <!--begin::User-->
                                                                                <div class="d-flex align-items-center">
                                                                                    <!--begin::Wrapper-->
                                                                                    <div class="me-5 position-relative">
                                                                                        <!--begin::Avatar-->
                                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                                            <img alt="Pic" src="assets/media/avatars/300-5.jpg">
                                                                                        </div>
                                                                                        <!--end::Avatar-->
                                                                                    </div>
                                                                                    <!--end::Wrapper-->
                                                                                    <!--begin::Info-->
                                                                                    <div class="d-flex flex-column justify-content-center">
                                                                                        <div class="mb-1 text-gray-800 text-hover-primary">Sean Bean</div>
                                                                                        <div class="fw-semibold fs-6 text-gray-500">sean@dellito.com</div>
                                                                                    </div>
                                                                                    <!--end::Info-->
                                                                                </div>
                                                                                <!--end::User-->
                                                                            </td>
                                                                            <td data-order="2024-03-10T00:00:00+05:30">Mar 10, 2024</td>
                                                                            <td class="dt-type-numeric">Developer</td>
                                                                            <td class="text-center">IT</td>
                                                                            <td class="text-end">
                                                                                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                                                <!--begin::Menu-->
                                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="reply.php" class="menu-link px-3">Send Message</a>
                                                                                    </div>
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="reply.php" class="menu-link px-3">Send Message</a>
                                                                                    </div>
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="user-overview.php" class="menu-link px-3">View</a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                </div>
                                                                                <!--end::Menu-->
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <!--begin::User-->
                                                                                <div class="d-flex align-items-center">
                                                                                    <!--begin::Wrapper-->
                                                                                    <div class="me-5 position-relative">
                                                                                        <!--begin::Avatar-->
                                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg">
                                                                                        </div>
                                                                                        <!--end::Avatar-->
                                                                                    </div>
                                                                                    <!--end::Wrapper-->
                                                                                    <!--begin::Info-->
                                                                                    <div class="d-flex flex-column justify-content-center">
                                                                                        <div class="mb-1 text-gray-800 text-hover-primary">Brian Cox</div>
                                                                                        <div class="fw-semibold fs-6 text-gray-500">brian@exchange.com</div>
                                                                                    </div>
                                                                                    <!--end::Info-->
                                                                                </div>
                                                                                <!--end::User-->
                                                                            </td>
                                                                            <td data-order="2024-05-05T00:00:00+05:30">May 05, 2024</td>
                                                                            <td class="dt-type-numeric">Developer</td>
                                                                            <td class="text-center">IT</td>
                                                                            <td class="text-end">
                                                                                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                                                <!--begin::Menu-->
                                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="reply.php" class="menu-link px-3">Send Message</a>
                                                                                    </div>
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="user-overview.php" class="menu-link px-3">View</a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                </div>
                                                                                <!--end::Menu-->
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <tfoot></tfoot>
                                                                </table>
                                                            </div>
                                                            <div id="" class="row">
                                                                <div id="" class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar">
                                                                    <div><select name="kt_project_users_table_length" aria-controls="kt_project_users_table" class="form-select form-select-solid form-select-sm" id="dt-length-0">
                                                                            <option value="10">10</option>
                                                                            <option value="25">25</option>
                                                                            <option value="50">50</option>
                                                                            <option value="100">100</option>
                                                                        </select><label for="dt-length-0"></label></div>
                                                                </div>
                                                                <div id="" class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                                                    <div class="dt-paging paging_simple_numbers">
                                                                        <ul class="pagination">
                                                                            <li class="dt-paging-button page-item disabled"><a class="page-link previous" aria-controls="kt_project_users_table" aria-disabled="true" aria-label="Previous" data-dt-idx="previous" tabindex="-1"><i class="previous"></i></a></li>
                                                                            <li class="dt-paging-button page-item active"><a href="#" class="page-link" aria-controls="kt_project_users_table" aria-current="page" data-dt-idx="0" tabindex="0">1</a></li>
                                                                            <li class="dt-paging-button page-item"><a href="#" class="page-link" aria-controls="kt_project_users_table" data-dt-idx="1" tabindex="0">2</a></li>
                                                                            <li class="dt-paging-button page-item"><a href="#" class="page-link" aria-controls="kt_project_users_table" data-dt-idx="2" tabindex="0">3</a></li>
                                                                            <li class="dt-paging-button page-item"><a href="#" class="page-link next" aria-controls="kt_project_users_table" aria-label="Next" data-dt-idx="next" tabindex="0"><i class="next"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Table-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Tab pane-->
                                            <!--begin::Tab pane-->
                                            <div class="tab-pane fade" id="kt_ecommerce_add_product_users" role="tab-panel">
                                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                                    <div class="table-responsive">
                                                        <!--begin::Table-->
                                                        <div id="kt_project_users_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer card p-4">
                                                            <div class="table-responsive">
                                                                <table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold dataTable" style="width: 0px;">
                                                                    <colgroup>
                                                                        <col style="width: 0px;">
                                                                        <col style="width: 0px;">
                                                                        <col style="width: 0px;">
                                                                        <col style="width: 0px;">
                                                                        <col style="width: 0px;">
                                                                    </colgroup>
                                                                    <thead class="fs-7 text-gray-500 text-uppercase">
                                                                        <tr role="row">
                                                                            <th class="min-w-250px dt-orderable-asc dt-orderable-desc" data-dt-column="0" rowspan="1" colspan="1" aria-label="User: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">User</span><span class="dt-column-order"></span></th>
                                                                            <th class="min-w-150px dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="1" colspan="1" aria-label="Date: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Date</span><span class="dt-column-order"></span></th>
                                                                            <th class="min-w-90px dt-type-numeric dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1" aria-label="Job Title: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Job Title</span><span class="dt-column-order"></span></th>
                                                                            <th class="min-w-90px dt-orderable-asc dt-orderable-desc" data-dt-column="3" rowspan="1" colspan="1" aria-label="Department: Activate to sort" tabindex="0"><span class="dt-column-title" role="button">Department</span><span class="dt-column-order"></span></th>
                                                                            <th class="min-w-50px text-end dt-orderable-none" data-dt-column="4" rowspan="1" colspan="1" aria-label="Details"><span class="dt-column-title">Action</span><span class="dt-column-order"></span></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="fs-6">
                                                                        <tr>
                                                                            <td>
                                                                                <!--begin::User-->
                                                                                <div class="d-flex align-items-center">
                                                                                    <!--begin::Wrapper-->
                                                                                    <div class="me-5 position-relative">
                                                                                        <!--begin::Avatar-->
                                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                                            <img alt="Pic" src="assets/media/avatars/300-6.jpg">
                                                                                        </div>
                                                                                        <!--end::Avatar-->
                                                                                    </div>
                                                                                    <!--end::Wrapper-->
                                                                                    <!--begin::Info-->
                                                                                    <div class="d-flex flex-column justify-content-center">
                                                                                        <div class="mb-1 text-gray-800 text-hover-primary">Emma Smith</div>
                                                                                        <div class="fw-semibold fs-6 text-gray-500">smith@kpmg.com</div>
                                                                                    </div>
                                                                                    <!--end::Info-->
                                                                                </div>
                                                                                <!--end::User-->
                                                                            </td>
                                                                            <td data-order="2024-08-19T00:00:00+05:30">Aug 19, 2024</td>
                                                                            <td class="dt-type-numeric">Developer</td>
                                                                            <td class="text-center">IT</td>
                                                                            <td class="text-end">
                                                                                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                                                <!--begin::Menu-->
                                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="reply.php" class="menu-link px-3">Send Message</a>
                                                                                    </div>
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="user-overview.php" class="menu-link px-3">View</a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                </div>
                                                                                <!--end::Menu-->
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <!--begin::User-->
                                                                                <div class="d-flex align-items-center">
                                                                                    <!--begin::Wrapper-->
                                                                                    <div class="me-5 position-relative">
                                                                                        <!--begin::Avatar-->
                                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                                                        </div>
                                                                                        <!--end::Avatar-->
                                                                                        <!--begin::Online-->
                                                                                        <div class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                                                                        <!--end::Online-->
                                                                                    </div>
                                                                                    <!--end::Wrapper-->
                                                                                    <!--begin::Info-->
                                                                                    <div class="d-flex flex-column justify-content-center">
                                                                                        <div class="mb-1 text-gray-800 text-hover-primary">Melody Macy</div>
                                                                                        <div class="fw-semibold fs-6 text-gray-500">melody@altbox.com</div>
                                                                                    </div>
                                                                                    <!--end::Info-->
                                                                                </div>
                                                                                <!--end::User-->
                                                                            </td>
                                                                            <td data-order="2024-07-25T00:00:00+05:30">Jul 25, 2024</td>
                                                                            <td class="dt-type-numeric">Developer</td>
                                                                            <td class="text-center">IT</td>
                                                                            <td class="text-end">
                                                                                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                                                <!--begin::Menu-->
                                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="user-overview.php" class="menu-link px-3">View</a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                </div>
                                                                                <!--end::Menu-->
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <!--begin::User-->
                                                                                <div class="d-flex align-items-center">
                                                                                    <!--begin::Wrapper-->
                                                                                    <div class="me-5 position-relative">
                                                                                        <!--begin::Avatar-->
                                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                                            <img alt="Pic" src="assets/media/avatars/300-1.jpg">
                                                                                        </div>
                                                                                        <!--end::Avatar-->
                                                                                    </div>
                                                                                    <!--end::Wrapper-->
                                                                                    <!--begin::Info-->
                                                                                    <div class="d-flex flex-column justify-content-center">
                                                                                        <div class="mb-1 text-gray-800 text-hover-primary">Max Smith</div>
                                                                                        <div class="fw-semibold fs-6 text-gray-500">max@kt.com</div>
                                                                                    </div>
                                                                                    <!--end::Info-->
                                                                                </div>
                                                                                <!--end::User-->
                                                                            </td>
                                                                            <td data-order="2024-03-10T00:00:00+05:30">Mar 10, 2024</td>
                                                                            <td class="dt-type-numeric">Developer</td>
                                                                            <td class="text-center">IT</td>
                                                                            <td class="text-end">
                                                                                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                                                <!--begin::Menu-->
                                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="reply.php" class="menu-link px-3">Send Message</a>
                                                                                    </div>
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="user-overview.php" class="menu-link px-3">View</a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                </div>
                                                                                <!--end::Menu-->
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <!--begin::User-->
                                                                                <div class="d-flex align-items-center">
                                                                                    <!--begin::Wrapper-->
                                                                                    <div class="me-5 position-relative">
                                                                                        <!--begin::Avatar-->
                                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                                            <img alt="Pic" src="assets/media/avatars/300-5.jpg">
                                                                                        </div>
                                                                                        <!--end::Avatar-->
                                                                                    </div>
                                                                                    <!--end::Wrapper-->
                                                                                    <!--begin::Info-->
                                                                                    <div class="d-flex flex-column justify-content-center">
                                                                                        <div class="mb-1 text-gray-800 text-hover-primary">Sean Bean</div>
                                                                                        <div class="fw-semibold fs-6 text-gray-500">sean@dellito.com</div>
                                                                                    </div>
                                                                                    <!--end::Info-->
                                                                                </div>
                                                                                <!--end::User-->
                                                                            </td>
                                                                            <td data-order="2024-03-10T00:00:00+05:30">Mar 10, 2024</td>
                                                                            <td class="dt-type-numeric">Developer</td>
                                                                            <td class="text-center">IT</td>
                                                                            <td class="text-end">
                                                                                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                                                <!--begin::Menu-->
                                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="reply.php" class="menu-link px-3">Send Message</a>
                                                                                    </div>
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="user-overview.php" class="menu-link px-3">View</a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                </div>
                                                                                <!--end::Menu-->
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <!--begin::User-->
                                                                                <div class="d-flex align-items-center">
                                                                                    <!--begin::Wrapper-->
                                                                                    <div class="me-5 position-relative">
                                                                                        <!--begin::Avatar-->
                                                                                        <div class="symbol symbol-35px symbol-circle">
                                                                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg">
                                                                                        </div>
                                                                                        <!--end::Avatar-->
                                                                                    </div>
                                                                                    <!--end::Wrapper-->
                                                                                    <!--begin::Info-->
                                                                                    <div class="d-flex flex-column justify-content-center">
                                                                                        <div class="mb-1 text-gray-800 text-hover-primary">Brian Cox</div>
                                                                                        <div class="fw-semibold fs-6 text-gray-500">brian@exchange.com</div>
                                                                                    </div>
                                                                                    <!--end::Info-->
                                                                                </div>
                                                                                <!--end::User-->
                                                                            </td>
                                                                            <td data-order="2024-05-05T00:00:00+05:30">May 05, 2024</td>
                                                                            <td class="dt-type-numeric">Developer</td>
                                                                            <td class="text-center">IT</td>
                                                                            <td class="text-end">
                                                                                <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                                    <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                                                                                <!--begin::Menu-->
                                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="reply.php" class="menu-link px-3">Send Message</a>
                                                                                    </div>
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="user-overview.php" class="menu-link px-3">View</a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                    <!--begin::Menu item-->
                                                                                    <div class="menu-item px-3">
                                                                                        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                                                                    </div>
                                                                                    <!--end::Menu item-->
                                                                                </div>
                                                                                <!--end::Menu-->
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <tfoot></tfoot>
                                                                </table>
                                                            </div>
                                                            <div id="" class="row">
                                                                <div id="" class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar">
                                                                    <div><select name="kt_project_users_table_length" aria-controls="kt_project_users_table" class="form-select form-select-solid form-select-sm" id="dt-length-0">
                                                                            <option value="10">10</option>
                                                                            <option value="25">25</option>
                                                                            <option value="50">50</option>
                                                                            <option value="100">100</option>
                                                                        </select><label for="dt-length-0"></label></div>
                                                                </div>
                                                                <div id="" class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                                                    <div class="dt-paging paging_simple_numbers">
                                                                        <ul class="pagination">
                                                                            <li class="dt-paging-button page-item disabled"><a class="page-link previous" aria-controls="kt_project_users_table" aria-disabled="true" aria-label="Previous" data-dt-idx="previous" tabindex="-1"><i class="previous"></i></a></li>
                                                                            <li class="dt-paging-button page-item active"><a href="#" class="page-link" aria-controls="kt_project_users_table" aria-current="page" data-dt-idx="0" tabindex="0">1</a></li>
                                                                            <li class="dt-paging-button page-item"><a href="#" class="page-link" aria-controls="kt_project_users_table" data-dt-idx="1" tabindex="0">2</a></li>
                                                                            <li class="dt-paging-button page-item"><a href="#" class="page-link" aria-controls="kt_project_users_table" data-dt-idx="2" tabindex="0">3</a></li>
                                                                            <li class="dt-paging-button page-item"><a href="#" class="page-link next" aria-controls="kt_project_users_table" aria-label="Next" data-dt-idx="next" tabindex="0"><i class="next"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Table-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Tab pane-->
                                            <!--begin::Tab pane-->
                                            <div class="tab-pane fade" id="kt_ecommerce_add_product_reviews" role="tab-panel">
                                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                                    <!--begin::Reviews-->
                                                    <div class="card card-flush py-4">
                                                        <!--begin::Card header-->
                                                        <div class="card-header">
                                                            <!--begin::Card title-->
                                                            <div class="card-title">
                                                                <h2>Messages</h2>
                                                            </div>
                                                            <!--end::Card title-->
                                                        </div>
                                                        <!--end::Card header-->
                                                        <!--begin::Card body-->
                                                        <div class="card-body pt-0">
                                                            <!--begin::Table-->
                                                            <table class="table table-row-dashed fs-6 gy-5 my-0" id="kt_ecommerce_add_product_reviews">
                                                                <thead>
                                                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                                        <th class="w-10px pe-2">
                                                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_add_product_reviews .form-check-input" value="1" />
                                                                            </div>
                                                                        </th>
                                                                        <th class="min-w-175px">Client</th>
                                                                        <th class="min-w-175px">Message</th>
                                                                        <th class="min-w-100px text-end fs-7">Date</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <!--begin::Checkbox-->
                                                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                            </div>
                                                                            <!--end::Checkbox-->
                                                                        </td>

                                                                        <td>
                                                                            <a href="reply.php" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                                                    <div class="symbol-label bg-light-danger">
                                                                                        <span class="text-danger">M</span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Avatar-->
                                                                                <!--begin::Name-->
                                                                                <span class="fw-bold">Melody Macy</span>
                                                                                <!--end::Name-->
                                                                            </a>
                                                                        </td>
                                                                        <td class="text-gray-600 fw-bold">I like this design</td>
                                                                        <td class="text-end">
                                                                            <span class="fw-semibold text-muted">Today</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <!--begin::Checkbox-->
                                                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                            </div>
                                                                            <!--end::Checkbox-->
                                                                        </td>

                                                                        <td>
                                                                            <a href="reply.php" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                                                    <span class="symbol-label" style="background-image:url(assets/media/avatars/300-1.jpg)"></span>
                                                                                </div>
                                                                                <!--end::Avatar-->
                                                                                <!--begin::Name-->
                                                                                <span class="fw-bold">Max Smith</span>
                                                                                <!--end::Name-->
                                                                            </a>
                                                                        </td>
                                                                        <td class="text-gray-600 fw-bold">Good institution for outdoors or indoors</td>
                                                                        <td class="text-end">
                                                                            <span class="fw-semibold text-muted">day ago</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <!--begin::Checkbox-->
                                                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                            </div>
                                                                            <!--end::Checkbox-->
                                                                        </td>

                                                                        <td>
                                                                            <a href="reply.php" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                                                    <span class="symbol-label" style="background-image:url(assets/media/avatars/300-5.jpg)"></span>
                                                                                </div>
                                                                                <!--end::Avatar-->
                                                                                <!--begin::Name-->
                                                                                <span class="fw-bold">Sean Bean</span>
                                                                                <!--end::Name-->
                                                                            </a>
                                                                        </td>
                                                                        <td class="text-gray-600 fw-bold">Awesome quality with great materials used, but could be more comfortable</td>
                                                                        <td class="text-end">
                                                                            <span class="fw-semibold text-muted">11:20 PM</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <!--begin::Checkbox-->
                                                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                            </div>
                                                                            <!--end::Checkbox-->
                                                                        </td>

                                                                        <td>
                                                                            <a href="reply.php" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                                                    <span class="symbol-label" style="background-image:url(assets/media/avatars/300-25.jpg)"></span>
                                                                                </div>
                                                                                <!--end::Avatar-->
                                                                                <!--begin::Name-->
                                                                                <span class="fw-bold">Brian Cox</span>
                                                                                <!--end::Name-->
                                                                            </a>
                                                                        </td>
                                                                        <td class="text-gray-600 fw-bold">This is the best institution I've ever used.</td>
                                                                        <td class="text-end">
                                                                            <span class="fw-semibold text-muted">2 days ago</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <!--begin::Checkbox-->
                                                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                            </div>
                                                                            <!--end::Checkbox-->
                                                                        </td>
                                                                        <td>
                                                                            <a href="reply.php" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                                                    <div class="symbol-label bg-light-warning">
                                                                                        <span class="text-warning">C</span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Avatar-->
                                                                                <!--begin::Name-->
                                                                                <span class="fw-bold">Mikaela Collins</span>
                                                                                <!--end::Name-->
                                                                            </a>
                                                                        </td>
                                                                        <td class="text-gray-600 fw-bold">I thought it was just average, I prefer other brands</td>
                                                                        <td class="text-end">
                                                                            <span class="fw-semibold text-muted">July 25</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <!--begin::Checkbox-->
                                                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                            </div>
                                                                            <!--end::Checkbox-->
                                                                        </td>

                                                                        <td>
                                                                            <a href="reply.php" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                                                    <span class="symbol-label" style="background-image:url(assets/media/avatars/300-9.jpg)"></span>
                                                                                </div>
                                                                                <!--end::Avatar-->
                                                                                <!--begin::Name-->
                                                                                <span class="fw-bold">Francis Mitcham</span>
                                                                                <!--end::Name-->
                                                                            </a>
                                                                        </td>
                                                                        <td class="text-gray-600 fw-bold">Beautifully crafted. Worth every penny.</td>
                                                                        <td class="text-end">
                                                                            <span class="fw-semibold text-muted">July 24</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <!--begin::Checkbox-->
                                                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                            </div>
                                                                            <!--end::Checkbox-->
                                                                        </td>
                                                                        <td>
                                                                            <a href="reply.php" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                                                    <div class="symbol-label bg-light-danger">
                                                                                        <span class="text-danger">O</span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Avatar-->
                                                                                <!--begin::Name-->
                                                                                <span class="fw-bold">Olivia Wild</span>
                                                                                <!--end::Name-->
                                                                            </a>
                                                                        </td>
                                                                        <td class="text-gray-600 fw-bold">Awesome value for money. Shipping could be faster tho.</td>
                                                                        <td class="text-end">
                                                                            <span class="fw-semibold text-muted">July 13</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <!--begin::Checkbox-->
                                                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                            </div>
                                                                            <!--end::Checkbox-->
                                                                        </td>

                                                                        <td>
                                                                            <a href="reply.php" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                                                    <div class="symbol-label bg-light-primary">
                                                                                        <span class="text-primary">N</span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Avatar-->
                                                                                <!--begin::Name-->
                                                                                <span class="fw-bold">Neil Owen</span>
                                                                                <!--end::Name-->
                                                                            </a>
                                                                        </td>
                                                                        <td class="text-gray-600 fw-bold">Excellent quality, I got it for my son's birthday and he loved it!</td>
                                                                        <td class="text-end">
                                                                            <span class="fw-semibold text-muted">May 25</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <!--begin::Checkbox-->
                                                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                            </div>
                                                                            <!--end::Checkbox-->
                                                                        </td>

                                                                        <td>
                                                                            <a href="reply.php" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                                                    <span class="symbol-label" style="background-image:url(assets/media/avatars/300-23.jpg)"></span>
                                                                                </div>
                                                                                <!--end::Avatar-->
                                                                                <!--begin::Name-->
                                                                                <span class="fw-bold">Dan Wilson</span>
                                                                                <!--end::Name-->
                                                                            </a>
                                                                        </td>
                                                                        <td class="text-gray-600 fw-bold">I got this for Christmas last year, and it's still the best institution I've ever used!</td>
                                                                        <td class="text-end">
                                                                            <span class="fw-semibold text-muted">April 15</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <!--begin::Checkbox-->
                                                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                            </div>
                                                                            <!--end::Checkbox-->
                                                                        </td>

                                                                        <td>
                                                                            <a href="reply.php" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                                                    <div class="symbol-label bg-light-danger">
                                                                                        <span class="text-danger">E</span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Avatar-->
                                                                                <!--begin::Name-->
                                                                                <span class="fw-bold">Emma Bold</span>
                                                                                <!--end::Name-->
                                                                            </a>
                                                                        </td>
                                                                        <td class="text-gray-600 fw-bold">Was skeptical at first, but after using it for 3 months, I'm hooked! Will definately buy another!</td>
                                                                        <td class="text-end">
                                                                            <span class="fw-semibold text-muted">April 3</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <!--begin::Checkbox-->
                                                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                            </div>
                                                                            <!--end::Checkbox-->
                                                                        </td>
                                                                        <td>
                                                                            <a href="reply.php" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                                                    <span class="symbol-label" style="background-image:url(assets/media/avatars/300-12.jpg)"></span>
                                                                                </div>
                                                                                <!--end::Avatar-->
                                                                                <!--begin::Name-->
                                                                                <span class="fw-bold">Ana Crown</span>
                                                                                <!--end::Name-->
                                                                            </a>
                                                                        </td>
                                                                        <td class="text-gray-600 fw-bold">Great institution, too bad I missed out on the sale.</td>
                                                                        <td class="text-end">
                                                                            <span class="fw-semibold text-muted">March 17</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <!--begin::Checkbox-->
                                                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                            </div>
                                                                            <!--end::Checkbox-->
                                                                        </td>

                                                                        <td>
                                                                            <a href="reply.php" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                                                    <div class="symbol-label bg-light-info">
                                                                                        <span class="text-info">A</span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Avatar-->
                                                                                <!--begin::Name-->
                                                                                <span class="fw-bold">Robert Doe</span>
                                                                                <!--end::Name-->
                                                                            </a>
                                                                        </td>
                                                                        <td class="text-gray-600 fw-bold">Got this on sale! Best decision ever!</td>
                                                                        <td class="text-end">
                                                                            <span class="fw-semibold text-muted">March 12</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <!--begin::Checkbox-->
                                                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                            </div>
                                                                            <!--end::Checkbox-->
                                                                        </td>

                                                                        <td>
                                                                            <a href="reply.php" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-circle symbol-25px me-3">
                                                                                    <span class="symbol-label" style="background-image:url(assets/media/avatars/300-13.jpg)"></span>
                                                                                </div>
                                                                                <!--end::Avatar-->
                                                                                <!--begin::Name-->
                                                                                <span class="fw-bold">John Miller</span>
                                                                                <!--end::Name-->
                                                                            </a>
                                                                        </td>
                                                                        <td class="text-gray-600 fw-bold">Firesale is on! Buy now! Totally worth it!</td>
                                                                        <td class="text-end">
                                                                            <span class="fw-semibold text-muted">March 11</span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Card body-->
                                                    </div>
                                                    <!--end::Reviews-->
                                                </div>
                                            </div>
                                            <!--end::Tab pane-->
                                            <div class="tab-pane fade" id="ranking_tab" role="tab-panel">
                                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                                    <!--begin::Reviews-->
                                                    <div class="card card-flush py-4">
                                                        <div class="card-header align-items-center">
                                                            <!--begin::Card title-->
                                                            <div class="card-title m-0">
                                                                <h3 class="fw-bold m-0">Ranking</h3>
                                                            </div>
                                                            <!--end::Card title-->
                                                            <!--begin::Action-->
                                                            <a href="javascript:editRankData();" class="btn btn-sm fw-bold btn-primary" style="height: 35px;">Edit Data</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Card header-->
                                                        <!--begin::Card body-->
                                                        <div class="card-body pt-0">
                                                            <div class="row mb-6 align-items-center">
                                                                <!--begin::Label-->
                                                                <label class="col-lg-6 col-form-label fw-semibold fs-6 text-gray-500">Title</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-lg-3">
                                                                    <span class="col-form-label fw-semibold fs-6 text-gray-500">Rank</span>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <span class="col-form-label fw-semibold fs-6 text-gray-500">Total Score</span>
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <div class="row mb-6 align-items-center">
                                                                <!--begin::Label-->
                                                                <label class="col-lg-6 col-form-label fw-semibold fs-6">Public & Private University Ranking: ASEAN 2024</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-lg-3">
                                                                    <span class="col-form-label fw-semibold fs-6 rank-label">1</span>
                                                                    <input type="num" class="form-control rank-input d-none" placeholder="Rank" />
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <span class="col-form-label fw-semibold fs-6 rank-label">69,43</span>
                                                                    <input type="text" class="form-control rank-input d-none" placeholder="Total Score" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <div class="row mb-6 align-items-center">
                                                                <!--begin::Label-->
                                                                <label class="col-lg-6 col-form-label fw-semibold fs-6">Public & Private University Ranking: ASEAN 2025</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-lg-3">
                                                                    <span class="col-form-label fw-semibold fs-6 rank-label">2</span>
                                                                    <input type="num" class="form-control rank-input d-none" placeholder="Rank" />
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <span class="col-form-label fw-semibold fs-6 rank-label">63,23</span>
                                                                    <input type="text" class="form-control rank-input d-none" placeholder="Total Score" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>

                                                            <!--begin::Actions-->
                                                            <div id="rank-actions" class="card-footer d-flex justify-content-end py-6 px-9 d-none">
                                                                <a href="javascript:discardRankData();" class="btn btn-light btn-active-light-primary me-2">Discard</a>
                                                                <a href="javascript:saveRankData();" class="btn btn-primary">Save Changes</a>
                                                            </div>
                                                            <!--end::Actions-->

                                                        </div>
                                                        <!--end::Card body-->
                                                    </div>
                                                    <!--end::Reviews-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Tab content-->

                                    </div>
                                    <!--end::Main column-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Content container-->
                        </div>

                        <!--end::Content-->
                    </div>
                    <!--end::Content wrapper-->
                    <!--begin::Footer-->
                    <div id="kt_app_footer" class="app-footer">
                        <!--begin::Footer container-->
                        <div class="app-container container-xxl d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                            <!--begin::Copyright-->
                            <div class="text-gray-900 order-2 order-md-1">
                                <span class="text-muted fw-semibold me-1">2024&copy;</span>
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
                        <!--end::Footer container-->
                    </div>
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
    <div class="modal fade" id="kt_modal_edit" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Institutional Information</h2>
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
                    <div class="d-flex flex-column gap-7 gap-lg-10">

                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Institution name</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="fv-row">
                                        <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="University name" value="Sunway University" />
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">Location of the institution</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Country of university">
                                    <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="fv-row">
                                        <select name="country" aria-label="Select a Location" data-control="select2" data-placeholder="Select a Location..." class="form-select form-select-solid form-select-lg fw-semibold">
                                            <option value="">Select a Country...</option>
                                            <option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
                                            <option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option>
                                            <option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
                                            <option data-kt-flag="flags/algeria.svg" value="DZ">Algeria</option>
                                            <option data-kt-flag="flags/american-samoa.svg" value="AS">American Samoa</option>
                                            <option data-kt-flag="flags/andorra.svg" value="AD">Andorra</option>
                                            <option data-kt-flag="flags/angola.svg" value="AO">Angola</option>
                                            <option data-kt-flag="flags/anguilla.svg" value="AI">Anguilla</option>
                                            <option data-kt-flag="flags/antigua-and-barbuda.svg" value="AG">Antigua and Barbuda</option>
                                            <option data-kt-flag="flags/argentina.svg" value="AR">Argentina</option>
                                            <option data-kt-flag="flags/armenia.svg" value="AM">Armenia</option>
                                            <option data-kt-flag="flags/aruba.svg" value="AW">Aruba</option>
                                            <option data-kt-flag="flags/australia.svg" value="AU">Australia</option>
                                            <option data-kt-flag="flags/austria.svg" value="AT">Austria</option>
                                            <option data-kt-flag="flags/azerbaijan.svg" value="AZ">Azerbaijan</option>
                                            <option data-kt-flag="flags/bahamas.svg" value="BS">Bahamas</option>
                                            <option data-kt-flag="flags/bahrain.svg" value="BH">Bahrain</option>
                                            <option data-kt-flag="flags/bangladesh.svg" value="BD">Bangladesh</option>
                                            <option data-kt-flag="flags/barbados.svg" value="BB">Barbados</option>
                                            <option data-kt-flag="flags/belarus.svg" value="BY">Belarus</option>
                                            <option data-kt-flag="flags/belgium.svg" value="BE">Belgium</option>
                                            <option data-kt-flag="flags/belize.svg" value="BZ">Belize</option>
                                            <option data-kt-flag="flags/benin.svg" value="BJ">Benin</option>
                                            <option data-kt-flag="flags/bermuda.svg" value="BM">Bermuda</option>
                                            <option data-kt-flag="flags/bhutan.svg" value="BT">Bhutan</option>
                                            <option data-kt-flag="flags/bolivia.svg" value="BO">Bolivia, Plurinational State of</option>
                                            <option data-kt-flag="flags/bonaire.svg" value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                            <option data-kt-flag="flags/bosnia-and-herzegovina.svg" value="BA">Bosnia and Herzegovina</option>
                                            <option data-kt-flag="flags/botswana.svg" value="BW">Botswana</option>
                                            <option data-kt-flag="flags/brazil.svg" value="BR">Brazil</option>
                                            <option data-kt-flag="flags/british-indian-ocean-territory.svg" value="IO">British Indian Ocean Territory</option>
                                            <option data-kt-flag="flags/brunei.svg" value="BN">Brunei Darussalam</option>
                                            <option data-kt-flag="flags/bulgaria.svg" value="BG">Bulgaria</option>
                                            <option data-kt-flag="flags/burkina-faso.svg" value="BF">Burkina Faso</option>
                                            <option data-kt-flag="flags/burundi.svg" value="BI">Burundi</option>
                                            <option data-kt-flag="flags/cambodia.svg" value="KH">Cambodia</option>
                                            <option data-kt-flag="flags/cameroon.svg" value="CM">Cameroon</option>
                                            <option data-kt-flag="flags/canada.svg" value="CA">Canada</option>
                                            <option data-kt-flag="flags/cape-verde.svg" value="CV">Cape Verde</option>
                                            <option data-kt-flag="flags/cayman-islands.svg" value="KY">Cayman Islands</option>
                                            <option data-kt-flag="flags/central-african-republic.svg" value="CF">Central African Republic</option>
                                            <option data-kt-flag="flags/chad.svg" value="TD">Chad</option>
                                            <option data-kt-flag="flags/chile.svg" value="CL">Chile</option>
                                            <option data-kt-flag="flags/china.svg" value="CN">China</option>
                                            <option data-kt-flag="flags/christmas-island.svg" value="CX">Christmas Island</option>
                                            <option data-kt-flag="flags/cocos-island.svg" value="CC">Cocos (Keeling) Islands</option>
                                            <option data-kt-flag="flags/colombia.svg" value="CO">Colombia</option>
                                            <option data-kt-flag="flags/comoros.svg" value="KM">Comoros</option>
                                            <option data-kt-flag="flags/cook-islands.svg" value="CK">Cook Islands</option>
                                            <option data-kt-flag="flags/costa-rica.svg" value="CR">Costa Rica</option>
                                            <option data-kt-flag="flags/ivory-coast.svg" value="CI">Côte d'Ivoire</option>
                                            <option data-kt-flag="flags/croatia.svg" value="HR">Croatia</option>
                                            <option data-kt-flag="flags/cuba.svg" value="CU">Cuba</option>
                                            <option data-kt-flag="flags/curacao.svg" value="CW">Curaçao</option>
                                            <option data-kt-flag="flags/czech-republic.svg" value="CZ">Czech Republic</option>
                                            <option data-kt-flag="flags/denmark.svg" value="DK">Denmark</option>
                                            <option data-kt-flag="flags/djibouti.svg" value="DJ">Djibouti</option>
                                            <option data-kt-flag="flags/dominica.svg" value="DM">Dominica</option>
                                            <option data-kt-flag="flags/dominican-republic.svg" value="DO">Dominican Republic</option>
                                            <option data-kt-flag="flags/ecuador.svg" value="EC">Ecuador</option>
                                            <option data-kt-flag="flags/egypt.svg" value="EG">Egypt</option>
                                            <option data-kt-flag="flags/el-salvador.svg" value="SV">El Salvador</option>
                                            <option data-kt-flag="flags/equatorial-guinea.svg" value="GQ">Equatorial Guinea</option>
                                            <option data-kt-flag="flags/eritrea.svg" value="ER">Eritrea</option>
                                            <option data-kt-flag="flags/estonia.svg" value="EE">Estonia</option>
                                            <option data-kt-flag="flags/ethiopia.svg" value="ET">Ethiopia</option>
                                            <option data-kt-flag="flags/falkland-islands.svg" value="FK">Falkland Islands (Malvinas)</option>
                                            <option data-kt-flag="flags/fiji.svg" value="FJ">Fiji</option>
                                            <option data-kt-flag="flags/finland.svg" value="FI">Finland</option>
                                            <option data-kt-flag="flags/france.svg" value="FR">France</option>
                                            <option data-kt-flag="flags/french-polynesia.svg" value="PF">French Polynesia</option>
                                            <option data-kt-flag="flags/gabon.svg" value="GA">Gabon</option>
                                            <option data-kt-flag="flags/gambia.svg" value="GM">Gambia</option>
                                            <option data-kt-flag="flags/georgia.svg" value="GE">Georgia</option>
                                            <option data-kt-flag="flags/germany.svg" value="DE">Germany</option>
                                            <option data-kt-flag="flags/ghana.svg" value="GH">Ghana</option>
                                            <option data-kt-flag="flags/gibraltar.svg" value="GI">Gibraltar</option>
                                            <option data-kt-flag="flags/greece.svg" value="GR">Greece</option>
                                            <option data-kt-flag="flags/greenland.svg" value="GL">Greenland</option>
                                            <option data-kt-flag="flags/grenada.svg" value="GD">Grenada</option>
                                            <option data-kt-flag="flags/guam.svg" value="GU">Guam</option>
                                            <option data-kt-flag="flags/guatemala.svg" value="GT">Guatemala</option>
                                            <option data-kt-flag="flags/guernsey.svg" value="GG">Guernsey</option>
                                            <option data-kt-flag="flags/guinea.svg" value="GN">Guinea</option>
                                            <option data-kt-flag="flags/guinea-bissau.svg" value="GW">Guinea-Bissau</option>
                                            <option data-kt-flag="flags/haiti.svg" value="HT">Haiti</option>
                                            <option data-kt-flag="flags/vatican-city.svg" value="VA">Holy See (Vatican City State)</option>
                                            <option data-kt-flag="flags/honduras.svg" value="HN">Honduras</option>
                                            <option data-kt-flag="flags/hong-kong.svg" value="HK">Hong Kong</option>
                                            <option data-kt-flag="flags/hungary.svg" value="HU">Hungary</option>
                                            <option data-kt-flag="flags/iceland.svg" value="IS">Iceland</option>
                                            <option data-kt-flag="flags/india.svg" value="IN">India</option>
                                            <option data-kt-flag="flags/indonesia.svg" value="ID">Indonesia</option>
                                            <option data-kt-flag="flags/iran.svg" value="IR">Iran, Islamic Republic of</option>
                                            <option data-kt-flag="flags/iraq.svg" value="IQ">Iraq</option>
                                            <option data-kt-flag="flags/ireland.svg" value="IE">Ireland</option>
                                            <option data-kt-flag="flags/isle-of-man.svg" value="IM">Isle of Man</option>
                                            <option data-kt-flag="flags/israel.svg" value="IL">Israel</option>
                                            <option data-kt-flag="flags/italy.svg" value="IT">Italy</option>
                                            <option data-kt-flag="flags/jamaica.svg" value="JM">Jamaica</option>
                                            <option data-kt-flag="flags/japan.svg" value="JP">Japan</option>
                                            <option data-kt-flag="flags/jersey.svg" value="JE">Jersey</option>
                                            <option data-kt-flag="flags/jordan.svg" value="JO">Jordan</option>
                                            <option data-kt-flag="flags/kazakhstan.svg" value="KZ">Kazakhstan</option>
                                            <option data-kt-flag="flags/kenya.svg" value="KE">Kenya</option>
                                            <option data-kt-flag="flags/kiribati.svg" value="KI">Kiribati</option>
                                            <option data-kt-flag="flags/north-korea.svg" value="KP">Korea, Democratic People's Republic of</option>
                                            <option data-kt-flag="flags/kuwait.svg" value="KW">Kuwait</option>
                                            <option data-kt-flag="flags/kyrgyzstan.svg" value="KG">Kyrgyzstan</option>
                                            <option data-kt-flag="flags/laos.svg" value="LA">Lao People's Democratic Republic</option>
                                            <option data-kt-flag="flags/latvia.svg" value="LV">Latvia</option>
                                            <option data-kt-flag="flags/lebanon.svg" value="LB">Lebanon</option>
                                            <option data-kt-flag="flags/lesotho.svg" value="LS">Lesotho</option>
                                            <option data-kt-flag="flags/liberia.svg" value="LR">Liberia</option>
                                            <option data-kt-flag="flags/libya.svg" value="LY">Libya</option>
                                            <option data-kt-flag="flags/liechtenstein.svg" value="LI">Liechtenstein</option>
                                            <option data-kt-flag="flags/lithuania.svg" value="LT">Lithuania</option>
                                            <option data-kt-flag="flags/luxembourg.svg" value="LU">Luxembourg</option>
                                            <option data-kt-flag="flags/macao.svg" value="MO">Macao</option>
                                            <option data-kt-flag="flags/madagascar.svg" value="MG">Madagascar</option>
                                            <option data-kt-flag="flags/malawi.svg" value="MW">Malawi</option>
                                            <option data-kt-flag="flags/malaysia.svg" value="MY" selected>Malaysia</option>
                                            <option data-kt-flag="flags/maldives.svg" value="MV">Maldives</option>
                                            <option data-kt-flag="flags/mali.svg" value="ML">Mali</option>
                                            <option data-kt-flag="flags/malta.svg" value="MT">Malta</option>
                                            <option data-kt-flag="flags/marshall-island.svg" value="MH">Marshall Islands</option>
                                            <option data-kt-flag="flags/martinique.svg" value="MQ">Martinique</option>
                                            <option data-kt-flag="flags/mauritania.svg" value="MR">Mauritania</option>
                                            <option data-kt-flag="flags/mauritius.svg" value="MU">Mauritius</option>
                                            <option data-kt-flag="flags/mexico.svg" value="MX">Mexico</option>
                                            <option data-kt-flag="flags/micronesia.svg" value="FM">Micronesia, Federated States of</option>
                                            <option data-kt-flag="flags/moldova.svg" value="MD">Moldova, Republic of</option>
                                            <option data-kt-flag="flags/monaco.svg" value="MC">Monaco</option>
                                            <option data-kt-flag="flags/mongolia.svg" value="MN">Mongolia</option>
                                            <option data-kt-flag="flags/montenegro.svg" value="ME">Montenegro</option>
                                            <option data-kt-flag="flags/montserrat.svg" value="MS">Montserrat</option>
                                            <option data-kt-flag="flags/morocco.svg" value="MA">Morocco</option>
                                            <option data-kt-flag="flags/mozambique.svg" value="MZ">Mozambique</option>
                                            <option data-kt-flag="flags/myanmar.svg" value="MM">Myanmar</option>
                                            <option data-kt-flag="flags/namibia.svg" value="NA">Namibia</option>
                                            <option data-kt-flag="flags/nauru.svg" value="NR">Nauru</option>
                                            <option data-kt-flag="flags/nepal.svg" value="NP">Nepal</option>
                                            <option data-kt-flag="flags/netherlands.svg" value="NL">Netherlands</option>
                                            <option data-kt-flag="flags/new-zealand.svg" value="NZ">New Zealand</option>
                                            <option data-kt-flag="flags/nicaragua.svg" value="NI">Nicaragua</option>
                                            <option data-kt-flag="flags/niger.svg" value="NE">Niger</option>
                                            <option data-kt-flag="flags/nigeria.svg" value="NG">Nigeria</option>
                                            <option data-kt-flag="flags/niue.svg" value="NU">Niue</option>
                                            <option data-kt-flag="flags/norfolk-island.svg" value="NF">Norfolk Island</option>
                                            <option data-kt-flag="flags/northern-mariana-islands.svg" value="MP">Northern Mariana Islands</option>
                                            <option data-kt-flag="flags/norway.svg" value="NO">Norway</option>
                                            <option data-kt-flag="flags/oman.svg" value="OM">Oman</option>
                                            <option data-kt-flag="flags/pakistan.svg" value="PK">Pakistan</option>
                                            <option data-kt-flag="flags/palau.svg" value="PW">Palau</option>
                                            <option data-kt-flag="flags/palestine.svg" value="PS">Palestinian Territory, Occupied</option>
                                            <option data-kt-flag="flags/panama.svg" value="PA">Panama</option>
                                            <option data-kt-flag="flags/papua-new-guinea.svg" value="PG">Papua New Guinea</option>
                                            <option data-kt-flag="flags/paraguay.svg" value="PY">Paraguay</option>
                                            <option data-kt-flag="flags/peru.svg" value="PE">Peru</option>
                                            <option data-kt-flag="flags/philippines.svg" value="PH">Philippines</option>
                                            <option data-kt-flag="flags/poland.svg" value="PL">Poland</option>
                                            <option data-kt-flag="flags/portugal.svg" value="PT">Portugal</option>
                                            <option data-kt-flag="flags/puerto-rico.svg" value="PR">Puerto Rico</option>
                                            <option data-kt-flag="flags/qatar.svg" value="QA">Qatar</option>
                                            <option data-kt-flag="flags/romania.svg" value="RO">Romania</option>
                                            <option data-kt-flag="flags/russia.svg" value="RU">Russian Federation</option>
                                            <option data-kt-flag="flags/rwanda.svg" value="RW">Rwanda</option>
                                            <option data-kt-flag="flags/st-barts.svg" value="BL">Saint Barthélemy</option>
                                            <option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="KN">Saint Kitts and Nevis</option>
                                            <option data-kt-flag="flags/st-lucia.svg" value="LC">Saint Lucia</option>
                                            <option data-kt-flag="flags/sint-maarten.svg" value="MF">Saint Martin (French part)</option>
                                            <option data-kt-flag="flags/st-vincent-and-the-grenadines.svg" value="VC">Saint Vincent and the Grenadines</option>
                                            <option data-kt-flag="flags/samoa.svg" value="WS">Samoa</option>
                                            <option data-kt-flag="flags/san-marino.svg" value="SM">San Marino</option>
                                            <option data-kt-flag="flags/sao-tome-and-prince.svg" value="ST">Sao Tome and Principe</option>
                                            <option data-kt-flag="flags/saudi-arabia.svg" value="SA">Saudi Arabia</option>
                                            <option data-kt-flag="flags/senegal.svg" value="SN">Senegal</option>
                                            <option data-kt-flag="flags/serbia.svg" value="RS">Serbia</option>
                                            <option data-kt-flag="flags/seychelles.svg" value="SC">Seychelles</option>
                                            <option data-kt-flag="flags/sierra-leone.svg" value="SL">Sierra Leone</option>
                                            <option data-kt-flag="flags/singapore.svg" value="SG">Singapore</option>
                                            <option data-kt-flag="flags/sint-maarten.svg" value="SX">Sint Maarten (Dutch part)</option>
                                            <option data-kt-flag="flags/slovakia.svg" value="SK">Slovakia</option>
                                            <option data-kt-flag="flags/slovenia.svg" value="SI">Slovenia</option>
                                            <option data-kt-flag="flags/solomon-islands.svg" value="SB">Solomon Islands</option>
                                            <option data-kt-flag="flags/somalia.svg" value="SO">Somalia</option>
                                            <option data-kt-flag="flags/south-africa.svg" value="ZA">South Africa</option>
                                            <option data-kt-flag="flags/south-korea.svg" value="KR">South Korea</option>
                                            <option data-kt-flag="flags/south-sudan.svg" value="SS">South Sudan</option>
                                            <option data-kt-flag="flags/spain.svg" value="ES">Spain</option>
                                            <option data-kt-flag="flags/sri-lanka.svg" value="LK">Sri Lanka</option>
                                            <option data-kt-flag="flags/sudan.svg" value="SD">Sudan</option>
                                            <option data-kt-flag="flags/suriname.svg" value="SR">Suriname</option>
                                            <option data-kt-flag="flags/swaziland.svg" value="SZ">Swaziland</option>
                                            <option data-kt-flag="flags/sweden.svg" value="SE">Sweden</option>
                                            <option data-kt-flag="flags/switzerland.svg" value="CH">Switzerland</option>
                                            <option data-kt-flag="flags/syria.svg" value="SY">Syrian Arab Republic</option>
                                            <option data-kt-flag="flags/taiwan.svg" value="TW">Taiwan, Province of China</option>
                                            <option data-kt-flag="flags/tajikistan.svg" value="TJ">Tajikistan</option>
                                            <option data-kt-flag="flags/tanzania.svg" value="TZ">Tanzania, United Republic of</option>
                                            <option data-kt-flag="flags/thailand.svg" value="TH">Thailand</option>
                                            <option data-kt-flag="flags/togo.svg" value="TG">Togo</option>
                                            <option data-kt-flag="flags/tokelau.svg" value="TK">Tokelau</option>
                                            <option data-kt-flag="flags/tonga.svg" value="TO">Tonga</option>
                                            <option data-kt-flag="flags/trinidad-and-tobago.svg" value="TT">Trinidad and Tobago</option>
                                            <option data-kt-flag="flags/tunisia.svg" value="TN">Tunisia</option>
                                            <option data-kt-flag="flags/turkey.svg" value="TR">Turkey</option>
                                            <option data-kt-flag="flags/turkmenistan.svg" value="TM">Turkmenistan</option>
                                            <option data-kt-flag="flags/turks-and-caicos.svg" value="TC">Turks and Caicos Islands</option>
                                            <option data-kt-flag="flags/tuvalu.svg" value="TV">Tuvalu</option>
                                            <option data-kt-flag="flags/uganda.svg" value="UG">Uganda</option>
                                            <option data-kt-flag="flags/ukraine.svg" value="UA">Ukraine</option>
                                            <option data-kt-flag="flags/united-arab-emirates.svg" value="AE">United Arab Emirates</option>
                                            <option data-kt-flag="flags/united-kingdom.svg" value="GB">United Kingdom</option>
                                            <option data-kt-flag="flags/united-states.svg" value="US">United States</option>
                                            <option data-kt-flag="flags/uruguay.svg" value="UY">Uruguay</option>
                                            <option data-kt-flag="flags/uzbekistan.svg" value="UZ">Uzbekistan</option>
                                            <option data-kt-flag="flags/vanuatu.svg" value="VU">Vanuatu</option>
                                            <option data-kt-flag="flags/venezuela.svg" value="VE">Venezuela, Bolivarian Republic of</option>
                                            <option data-kt-flag="flags/vietnam.svg" value="VN">Vietnam</option>
                                            <option data-kt-flag="flags/virgin-islands.svg" value="VI">Virgin Islands</option>
                                            <option data-kt-flag="flags/yemen.svg" value="YE">Yemen</option>
                                            <option data-kt-flag="flags/zambia.svg" value="ZM">Zambia</option>
                                            <option data-kt-flag="flags/zimbabwe.svg" value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Official website</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="fv-row">
                                        <input type="url" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="University Website Link" value="https://sunwayuniversity.edu.my/" />
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Institutional recognition</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="fv-row">
                                        <select name="institutional-recognition" class="form-select form-select-solid form-select-lg fw-semibold">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Official web domain for faculty email</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="fv-row">
                                        <input type="email" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Official web domain for faculty email" />
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Institution name in other languages</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="fv-row">
                                        <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Institution name in other languages" />
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Google Scholar profile</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="fv-row">
                                        <input type="url" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Google Scholar profile" />
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->

                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                    </div>

                    <div class="d-flex justify-content-end mt-5">
                        <!--begin::Button-->
                        <a href="apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                            <span class="indicator-label">Save Changes</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
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

    <script>
        function editRankData() {
            $('.rank-label').addClass('d-none');
            $('.rank-input').removeClass('d-none');
            $('#rank-actions').removeClass('d-none');
        }

        function saveRankData() {
            $('.rank-label').removeClass('d-none');
            $('.rank-input').addClass('d-none');
            $('#rank-actions').addClass('d-none');
        }

        function discardRankData() {
            $('.rank-label').removeClass('d-none');
            $('.rank-input').addClass('d-none');
            $('#rank-actions').addClass('d-none');

        }
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/custom/apps/ecommerce/catalog/products.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>