<!DOCTYPE html>
<html lang="en">

<head>
@include('partials.admin.head')
</head>

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Global page wrapper-->
    <div class="wrapper">
        <!-- Left Sidebar Start -->
        @include('partials.admin.sidebar')
        <!-- Left Sidebar End -->

        <!-- Page content wrapper -->
        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                @include('partials.admin.topbar')
                <!-- end Topbar -->

                <!-- Start Content-->
                @yield('content')
                <!-- container -->
            </div>
            <!-- Footer Start -->
            @include('partials.admin.footer')
            <!-- end Footer -->
        </div>
        <!-- End Page content -->
    </div>
    <!-- END wrapper -->

    <!-- scripts -->
    @include('partials.admin.scripts')

    @yield('scripts')
    
</body>

</html>