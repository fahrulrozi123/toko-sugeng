<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Sugeng</title>

@include('layoutbackend.css')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<div class="preloader flex-column justify-content-center align-items-center">
<img class="animation__shake" src="backend/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>

@include('layoutbackend.navbar')

@include('layoutbackend.sidebar')

@yield('content')

@include('layoutbackend.footer')

<aside class="control-sidebar control-sidebar-dark">
</aside>
</div>

@include('layoutbackend.js')
</body>
</html>
