<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('') }}/assets/images/favicon.png">
    <title>@yield('title')</title>
    {{-- {{ config('app.name') }} --}}
    <!-- Include styles  -->
    @include('partials.styles')
    @yield('custom-style')
    <!-- End styles -->
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
      
        <!-- Topbar header - style you can find in pages.scss -->
        @include('partials.topbar')
        <!-- End Topbar header -->
      
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        @include('partials.sidebar')
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
       
        <!-- Page wrapper  -->
        <div class="page-wrapper ">
            <!-- Bread crumb and right sidebar toggle -->
            <div class="page-breadcrumb d-print-none">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h4 class="page-title"><br><br>@yield('title')</h4>
                        {{-- <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div> --}}
                    </div>
                </div>
            </div>
            
            <!-- End Bread crumb and right sidebar toggle -->
            
            
            <!-- Container fluid  -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- End Container fluid  -->

            <!-- footer -->
            @include('partials.footer')
            <!-- End footer -->
            
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->

    <!-- All Jquery -->

    <!-- For Ziggy -->
    @routes
    <!-- End Ziggy -->

    {{-- Scripts --}}
    @include('partials.scripts')
    {{-- End Scripts --}}


    @yield('custom-script')

</body>

</html>
