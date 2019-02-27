<!doctype html>
<html lang="en">
<head>
    <title>@yield('title', "Whittington's Wheels")</title>
    @include('include.head')
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
        @include('include.header')

        @yield('content')
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" charset="utf-8"></script>
</body>

</html>
