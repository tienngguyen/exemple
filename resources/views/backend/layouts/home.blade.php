<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dist/assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('dist/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{ asset('dist/assets/images/favicon.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('dist/assets/vendors/simple-datatables/style.css')}}">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            @include('backend.partials.sidebar')
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Profile Statistics</h3>
            </div>
            <div class="page-content">
                @yield('content')
            </div>

            <footer>
                @include('backend.partials.footer')
            </footer>
        </div>
    </div>
    <script src="{{ asset('dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('dist/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{ asset('dist/assets/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{ asset('dist/assets/js/pages/dashboard.js')}}"></script>
    <script src="{{ asset('dist/assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{ asset('dist/assets/js/main.js')}}"></script>
    @yield("appendjs")
</body>

</html>