<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AXELiT Laravel</title>
    <!-- CSS template -->
    <link rel="stylesheet" href="{{ asset('template/axelit/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/axelit/css/responsive.css') }}">
</head>
<body>
    <!-- Navbar -->
    @include('layouts._navbar')

    <!-- Sidebar -->
    @include('layouts._sidebar')

    <!-- Konten utama halaman -->
    <div class="main-content">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('layouts._footer')

    <!-- JS template -->
    <script src="{{ asset('template/axelit/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/axelit/js/main.js') }}"></script>
</body>
</html>
 
