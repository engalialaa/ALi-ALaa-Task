<div id="kt_aside" class="aside card" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid px-5">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-5 pe-4 me-n4" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="{lg: '75px'}">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded fw-bold fs-6" id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item">
                    <div class="menu-content pb-2">
                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link  {{\Route::currentRouteName()=='dashboard'?'active':''}}" href="{{url('/')}}">
											<span class="menu-icon">
												<span class="svg-icon svg-icon-2">
													<i class="bi bi-columns-gap fs-4"></i>
												</span>
											</span>
                        <span class="menu-title">Home</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link
                     {{\Route::currentRouteName() == 'tasks.index' ?'active':''}}
                     {{\Route::currentRouteName() == 'tasks.create' ?'active':''}}
                     {{\Route::currentRouteName() == 'tasks.edit' ?'active':''}}
                     " href="{{url('/tasks')}}">
											<span class="menu-icon">
												<span class="svg-icon svg-icon-2">
													<i class="bi bi-people fs-4"></i>
												</span>
											</span>
                        <span class="menu-title">Tasks</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
