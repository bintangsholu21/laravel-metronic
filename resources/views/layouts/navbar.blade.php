<div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1">
    <div id="kt_header" class="header d-flex align-items-center w-lg-200px">
        <h2>Default</h2>
    </div>
</div>
<div class="app-navbar-item ms-1 ms-md-3">
    <div class="btn btn-icon btn-custom btn-color-gray-600 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
        data-kt-menu-placement="bottom-end">
        <i class="ki-outline ki-calendar fs-1"></i>
    </div>
    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true"
        id="kt_menu_notifications">
        <div class="d-flex flex-column bgi-no-repeat rounded-top"
            style="background-image:url('assets/media/misc/menu-header-bg.jpg')">
            <h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
                <span class="fs-8 opacity-75 ps-3">24 reports</span>
            </h3>
            <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                <li class="nav-item">
                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab"
                        href="#kt_topbar_notifications_1">Alerts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab"
                        href="#kt_topbar_notifications_3">Logs</a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade active show" id="kt_topbar_notifications_1" role="tabpanel">
                <div class="scroll-y mh-325px my-5 px-8">
                    <div class="d-flex flex-stack py-4">
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-primary">
                                    <i class="ki-outline ki-abstract-28 fs-2 text-primary"></i>
                                </span>
                            </div>
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                    Alice</a>
                                <div class="text-gray-400 fs-7">Phase 1 development</div>
                            </div>
                        </div>
                        <span class="badge badge-light fs-8">1 hr</span>
                    </div>
                    <div class="d-flex flex-stack py-4">
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-danger">
                                    <i class="ki-outline ki-information fs-2 text-danger"></i>
                                </span>
                            </div>
                            <div class="mb-0 me-2">
                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR
                                    Confidential</a>
                                <div class="text-gray-400 fs-7">Confidential staff documents</div>
                            </div>
                        </div>
                        <span class="badge badge-light fs-8">2 hrs</span>
                    </div>
                </div>
                <div class="py-3 text-center border-top">
                    <a href="#"
                        class="btn btn-color-gray-600 btn-active-color-primary">View All
                        <i class="ki-outline ki-arrow-right fs-5"></i></a>
                </div>
            </div>
            <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                <div class="scroll-y mh-325px my-5 px-8">
                    <div class="d-flex flex-stack py-4">
                        <div class="d-flex align-items-center me-2">
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
                        </div>
                        <span class="badge badge-light fs-8">Just now</span>
                    </div>
                    <div class="d-flex flex-stack py-4">
                        <div class="d-flex align-items-center me-2">
                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
                        </div>
                        <span class="badge badge-light fs-8">2 hrs</span>
                    </div>
                    <div class="d-flex flex-stack py-4">
                        <div class="d-flex align-items-center me-2">
                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
                        </div>
                        <span class="badge badge-light fs-8">5 hrs</span>
                    </div>
                    <div class="d-flex flex-stack py-4">
                        <div class="d-flex align-items-center me-2">
                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
                        </div>
                        <span class="badge badge-light fs-8">2 days</span>
                    </div>
                </div>
                <div class="py-3 text-center border-top">
                    <a href="#"
                        class="btn btn-color-gray-600 btn-active-color-primary">View All
                        <i class="ki-outline ki-arrow-right fs-5"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
    <div class="cursor-pointer symbol symbol-circle symbol-35px symbol-md-45px"
        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
        data-kt-menu-placement="bottom-end">
        <img src="assets/media/avatars/300-2.jpg" alt="user" />
    </div>
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
        data-kt-menu="true">
        <div class="menu-item px-3">
            <div class="menu-content d-flex align-items-center px-3">
                <div class="symbol symbol-50px me-5">
                    <img alt="Logo" src="assets/media/avatars/300-2.jpg" />
                </div>
                <div class="d-flex flex-column">
                    <div class="fw-bold d-flex align-items-center fs-5">Max Smith
                        <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                    </div>
                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
                </div>
            </div>
        </div>
        <div class="separator my-2"></div>
        <div class="menu-item px-5">
            <a href="#" class="menu-link px-5">My Profile</a>
        </div>
        <div class="menu-item px-5">
            <a href="#" class="menu-link px-5">
                <span class="menu-text">My Projects</span>
                <span class="menu-badge">
                    <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                </span>
            </a>
        </div>
        <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
            data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
            <a href="#" class="menu-link px-5">
                <span class="menu-title">My Subscription</span>
                <span class="menu-arrow"></span>
            </a>
            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-5">Payments</a>
                </div>
                <div class="menu-item px-3">
                    <a href="#"
                        class="menu-link d-flex flex-stack px-5">Statements
                        <span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
                            <i class="ki-outline ki-information-5 fs-5"></i>
                        </span></a>
                </div>
                <div class="separator my-2"></div>
                <div class="menu-item px-3">
                    <div class="menu-content px-3">
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                                checked="checked" name="notifications" />
                            <span class="form-check-label text-muted fs-7">Notifications</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator my-2"></div>
        <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
            data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
            <a href="#" class="menu-link px-5">
                <span class="menu-title position-relative">Mode
                    <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                        <i class="ki-outline ki-night-day theme-light-show fs-2"></i>
                        <i class="ki-outline ki-moon theme-dark-show fs-2"></i>
                    </span></span>
            </a>
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                data-kt-menu="true" data-kt-element="theme-mode-menu">
                <div class="menu-item px-3 my-0">
                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                        <span class="menu-icon" data-kt-element="icon">
                            <i class="ki-outline ki-night-day fs-2"></i>
                        </span>
                        <span class="menu-title">Light</span>
                    </a>
                </div>
                <div class="menu-item px-3 my-0">
                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                        <span class="menu-icon" data-kt-element="icon">
                            <i class="ki-outline ki-moon fs-2"></i>
                        </span>
                        <span class="menu-title">Dark</span>
                    </a>
                </div>
                <div class="menu-item px-3 my-0">
                    <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                        <span class="menu-icon" data-kt-element="icon">
                            <i class="ki-outline ki-screen fs-2"></i>
                        </span>
                        <span class="menu-title">System</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="menu-item px-5 my-1">
            <a href="#" class="menu-link px-5">Account Settings</a>
        </div>
        <div class="menu-item px-5">
            <a href="#" class="menu-link px-5">Sign
                Out</a>
        </div>
    </div>
</div>
