<html>
@includeIf('admin.layout.head')
<body>
<div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Sidebar Start -->
        @includeIf('admin.layout.sidbar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @includeIf('admin.layout.header')
            <!-- Navbar End -->

            @yield('content')

            <!-- Footer Start -->
            @includeIf('admin.layout.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
</body>
            @includeIf('admin.layout.js_footer')
</html>
