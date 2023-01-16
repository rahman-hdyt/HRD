
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Minible - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.png">

    @include('template.assets.default.header')

    </head>


    <body>
        <div id="layout-wrapper">

            @include('template.pages.navbar')
            @include('template.pages.sidebar')

            <div class="main-content">
                @yield('content')
                @include('template.pages.footbar')
            </div>

        </div>
        {{-- @include('template.pages.rightbar') --}}
        <div class="rightbar-overlay"></div>

        @include('template.assets.default.footer')

        <!-- apexcharts -->
        @include('template.assets.extra.footer')

    </body>
</html>
