<div id="kt_header" class="header">
    <div class="container-fluid d-flex flex-stack">
        <div class="d-flex align-items-center me-5">
            <div class="d-lg-none btn btn-icon btn-active-color-white w-30px h-30px ms-n2 me-3" id="kt_aside_toggle">
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
										<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
									</svg>
								</span>
            </div>
            <!--begin::Logo-->

        </div>
        <!--begin::Topbar-->
        <div class="d-flex align-items-center">
            <!--begin::Topbar-->
            <div class="d-flex align-items-center flex-shrink-0">
                <!--begin::Search-->
                <div id="kt_header_search" class="d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                    <!--begin::Search toggle-->
                    <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
                        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px">
											<span class="menu-icon">
												<span class="menu-icon">
													<i class="bi bi-search fs-3"></i>
												</span>
											</span>
                        </div>
                    </div>
                    <!--begin::Menu-->
                    <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                        <!--begin::Wrapper-->
                        <div data-kt-search-element="wrapper">
                            <!--begin::Form-->
                            <form data-kt-search-element="form" class="w-100 position-relative mb-0" autocomplete="off">
                                <!--begin::Icon-->
                                <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
														<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
													</svg>
												</span>
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-flush ps-10" name="search" value="" placeholder="{{trans('general.Search')}}" data-kt-search-element="input" />
                                <!--begin::Spinner-->
                                <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
													<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
												</span>
                                <!--begin::Reset-->
                                <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
													<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
														</svg>
													</span>
												</span>
                            </form>
                            <!--begin::Empty-->
                            <div data-kt-search-element="empty" class="text-center d-none">
                                <!--begin::Icon-->
                                <div class="pt-10 pb-10">
													<span class="svg-icon svg-icon-4x opacity-50">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" fill="black" />
															<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="black" />
															<rect x="13.6993" y="13.6656" width="4.42828" height="1.73089" rx="0.865447" transform="rotate(45 13.6993 13.6656)" fill="black" />
															<path d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z" fill="black" />
														</svg>
													</span>
                                </div>
                                <!--begin::Message-->
                                <div class="pb-15 fw-bold">
                                    <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                    <div class="text-muted fs-7">Please try again with a different query</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--begin::Quick links-->
                <div class="d-flex align-items-center ms-1">
                    <!--begin::Menu wrapper-->
                    <div class="btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-30px h-30px h-40px w-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<span class="menu-icon">
											<span class="menu-icon">
                                                <i class="bi bi-bell-fill fs-3"></i>
											</span>
										</span>
                    </div>
                    <!--begin::Menu-->
                </div>
                <!--begin::User-->
                <div class="d-flex align-items-center ms-1" id="kt_header_user_menu_toggle">
                    <!--begin::User info-->
                    <div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 px-2 px-md-3" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <!--begin::Name-->
                        <div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
                            <span class="text-muted fs-8 fw-bold lh-1 mb-1"></span>
                            <span class="text-white fs-8 fw-bolder lh-1"></span>
                        </div>
                        <!--begin::Symbol-->
                        <div class="symbol symbol-30px symbol-md-40px">
                            <img src="{{asset('dashboard/assets/media/avatars/150-26.jpg')}}" alt="image" />
                        </div>
                    </div>
                    <!--begin::Menu-->
                </div>
            </div>
        </div>
    </div>
</div>
