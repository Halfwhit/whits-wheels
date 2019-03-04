<!doctype html>
<html lang="en">
<head>
    <title>Whittington's Wheels - Login)</title>
    @include('include.head')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        body {
            background-image: url("/images/prism.png");

        }

        header {
            color: whitesmoke;
        }
    </style>
</head>

<body>
@include('include.navbar')
<div class="container">
    @yield('content')
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" charset="utf-8"></script>
</body>

</html>
