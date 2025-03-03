<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <title>Vault - Sign Up</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Vault - Sign In" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="canonical" href="http://sign-up.php" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
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

<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode =
                    document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ?
                    "dark" :
                    "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url("assets/media/auth/bg10.jpeg");
            }

            [data-bs-theme="dark"] body {
                background-image: url("assets/media/auth/bg10-dark.jpeg");
            }
        </style>
        <!--end::Page bg image-->

        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">

                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid align-content-center">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container container-xxl py-15">

                        <div class="text-center">
                            <img alt="Logo" src="assets/media/logos/ahe-vault-logo.png" class="h-40px h-lg-70px theme-light-show mb-3" />
                            <h2>Admin</h2>
                        </div>
                        <h1 class="text-center mt-7 mb-16">Sign Up</h1>

                        <!--begin::Stepper-->
                        <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid gap-10" id="kt_create_account_stepper">
                            <!--begin::Aside-->
                            <div class="card d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px w-xxl-400px">
                                <!--begin::Wrapper-->
                                <div class="card-body px-6 px-lg-10 px-xxl-15 py-20">
                                    <!--begin::Nav-->
                                    <div class="stepper-nav">
                                        <!--begin::Step 1-->
                                        <div class="stepper-item current" data-kt-stepper-element="nav">
                                            <!--begin::Wrapper-->
                                            <div class="stepper-wrapper">
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="ki-outline ki-check fs-2 stepper-check"></i>
                                                    <span class="stepper-number">1</span>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">User Profile</h3>
                                                    <div class="stepper-desc fw-semibold">Setup Your Profile Settings</div>
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
                                                    <i class="ki-outline ki-check fs-2 stepper-check"></i>
                                                    <span class="stepper-number">2</span>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">University Info</h3>
                                                    <div class="stepper-desc fw-semibold">Your University Related Info</div>
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
                                        <div class="stepper-item mark-completed" data-kt-stepper-element="nav">
                                            <!--begin::Wrapper-->
                                            <div class="stepper-wrapper">
                                                <!--begin::Icon-->
                                                <div class="stepper-icon w-40px h-40px">
                                                    <i class="ki-outline ki-check fs-2 stepper-check"></i>
                                                    <span class="stepper-number">3</span>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <div class="stepper-label">
                                                    <h3 class="stepper-title">Completed</h3>
                                                    <div class="stepper-desc fw-semibold">Woah, we are here</div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Step 3-->
                                    </div>
                                    <!--end::Nav-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--begin::Aside-->
                            <!--begin::Content-->
                            <div class="card d-flex flex-row-fluid flex-center">
                                <!--begin::Form-->
                                <form class="card-body py-20 w-100 mw-xl-700px px-9" novalidate="novalidate" id="kt_create_account_form" action="">
                                    <!--begin::Step 1-->
                                    <div class="current" data-kt-stepper-element="content">
                                        <!--begin::Wrapper-->
                                        <div class="w-100">
                                            <!--begin::Heading-->
                                            <div class="pb-10 pb-lg-15">
                                                <!--begin::Title-->
                                                <h2 class="fw-bold text-gray-900">Profile Info</h2>
                                                <!--end::Title-->
                                                <!--begin::Notice-->
                                                <div class="text-muted fw-semibold fs-6">Manage Your Personal Details</div>
                                                <!--end::Notice-->
                                            </div>
                                            <div class="fv-row mb-8">
                                                <!--begin::Label-->
                                                <label class="fw-semibold">First Name</label>
                                                <input type="text" name="fname" class="form-control bg-transparent" />
                                                <!--end::Col-->
                                            </div>
                                            <div class="fv-row mb-8">
                                                <!--begin::Label-->
                                                <label class="form-label required">Last Name</label>
                                                <input type="text" name="lname" class="form-control bg-transparent" />
                                            </div>
                                            <div class="fv-row mb-8">
                                                <!--begin::Label-->
                                                <label class="form-label required">Job Title</label>
                                                <input type="text" name="title" class="form-control bg-transparent" />
                                            </div>
                                            <div class="fv-row mb-8">
                                                <!--begin::Label-->
                                                <label class="form-label required">Email Address</label>
                                                <input type="email" name="email" class="form-control bg-transparent" />
                                            </div>
                                            <div class="fv-row mb-8">
                                                <!--begin::Label-->
                                                <label class="form-label required">Contact Number</label>
                                                <input type="text" name="phone" class="form-control bg-transparent" />
                                            </div>
                                            <div class="fv-row mb-8">
                                                <!--begin::Label-->
                                                <label class="form-label required">Department/Office</label>
                                                <input type="text" name="department" class="form-control bg-transparent" />
                                            </div>
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-8" data-kt-password-meter="true">
                                                <!--begin::Wrapper-->
                                                <div class="mb-1">
                                                    <label class="form-label required">Password</label>
                                                    <!--begin::Input wrapper-->
                                                    <div class="position-relative mb-3">
                                                        <input class="form-control bg-transparent" type="password" name="password" autocomplete="off" />
                                                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                                            <i class="ki-outline ki-eye-slash fs-2"></i>
                                                            <i class="ki-outline ki-eye fs-2 d-none"></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Input wrapper-->
                                                    <!--begin::Meter-->
                                                    <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                                    </div>
                                                    <!--end::Meter-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Hint-->
                                                <div class="text-muted">
                                                    Use 8 or more characters with a mix of letters, numbers &
                                                    symbols.
                                                </div>
                                                <!--end::Hint-->
                                            </div>
                                            <!--end::Input group=-->
                                            <!--end::Input group=-->
                                            <div class="fv-row mb-8">
                                                <label class="form-label required">Repeat Password</label>
                                                <!--begin::Repeat Password-->
                                                <input name="confirm-password" type="password" autocomplete="off" class="form-control bg-transparent" />
                                                <!--end::Repeat Password-->
                                            </div>
                                            <!--end::Input group=-->
                                            <!--begin::Accept-->
                                            <div class="fv-row mb-8">
                                                <label class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="toc" value="1" />
                                                    <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I Accept the
                                                        <a href="#" class="ms-1 link-primary">Terms</a></span>
                                                </label>
                                            </div>
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Step 1-->
                                    <!--begin::Step 2-->
                                    <div data-kt-stepper-element="content">
                                        <!--begin::Wrapper-->
                                        <div class="w-100">
                                            <!--begin::Heading-->
                                            <div class="pb-10 pb-lg-12">
                                                <!--begin::Title-->
                                                <h2 class="fw-bold text-gray-900">University Details</h2>
                                                <!--end::Title-->
                                                <!--begin::Notice-->
                                                <div class="text-muted fw-semibold fs-6">Explore Our Campus and Community</div>
                                                <!--end::Notice-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label required">University Name</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input name="business_name" class="form-control form-control-lg form-control-solid" />
                                                <!--end::Input-->
                                            </div>
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label required">
                                                    <span class="required">Location of the institution</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Country of university">
                                                        <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                                    </span>
                                                </label>
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
                                                    <option data-kt-flag="flags/malaysia.svg" value="MY">Malaysia</option>
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
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label required">Official Website</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <input type="url" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" />

                                            </div>
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label required">University Email</label>
                                                <input type="email" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" />

                                            </div>
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Step 2-->
                                    <!--begin::Step 3-->
                                    <div data-kt-stepper-element="content">
                                        <!--begin::Wrapper-->
                                        <div class="w-100">
                                            <!--begin::Heading-->
                                            <div class="pb-8 pb-lg-10">
                                                <h2 class="fw-bold text-center text-gray-900">Your Are Done!</h2>
                                            </div>
                                            <div class="text-center px-4 pb-15">
                                                <img src="assets/media/illustrations/sigma-1/2.png" alt="" class="mw-100 mh-200px" />
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div class="mb-0">
                                                <!--begin::Text-->
                                                <div class="fs-4 text-center text-gray-600 mb-5">Thank you for your data submission. We will notify you once it's validated.</div>

                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Step 3-->
                                    <!--begin::Actions-->
                                    <div class="d-flex flex-stack pt-10">
                                        <!--begin::Wrapper-->
                                        <div class="mr-2">
                                            <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                                                <i class="ki-outline ki-arrow-left fs-4 me-1"></i>Back</button>
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Wrapper-->
                                        <div>
                                            <button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
                                                <span class="indicator-label">Submit
                                                    <i class="ki-outline ki-arrow-right fs-3 ms-2 me-0"></i></span>
                                                <span class="indicator-progress">Please wait...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                            <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                                                <i class="ki-outline ki-arrow-right fs-4 ms-1 me-0"></i></button>
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
                    <!--end::Content container-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->

        </div>
        <!--end::Root-->
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
        <!--end::Vendors Javascript-->
        <!--begin::Custom Javascript(used for this page only)-->
        <script src="assets/js/custom/utilities/modals/create-account.js"></script>
        <script src="assets/js/widgets.bundle.js"></script>
        <script src="assets/js/custom/widgets.js"></script>
        <script src="assets/js/custom/apps/chat/chat.js"></script>
        <script src="assets/js/custom/utilities/modals/create-app.js"></script>
        <script src="assets/js/custom/utilities/modals/users-search.js"></script>
</body>
<!--end::Body-->

</html>