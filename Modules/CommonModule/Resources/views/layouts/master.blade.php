<!DOCTYPE html>
    <html lang="en">
<!--begin::Head-->
<head>

    <meta charset="utf-8">
    <META http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title> @yield('title')</title>

    <link rel="shortcut icon" href="" />
    <!--begin::Fonts-->

    @include('commonmodule::includes.css')

</head>
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
        @include('commonmodule::includes.header')
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column-fluid">
                <!--begin::Aside-->
            @include('commonmodule::includes.aside')
                <!--begin::Container-->

                <div class="d-flex flex-column flex-column-fluid container-fluid">

                    <!--begin::Post-->
                      @yield('content')

                    <!--begin::Footer-->
                    @include('commonmodule::includes.footer')
                </div>
            </div>
        </div>
    </div>
</div>

<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<span class="svg-icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
			</svg>
		</span>
</div>

@include('commonmodule::includes.js')
</body>
</html>
