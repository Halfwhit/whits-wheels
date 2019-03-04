<!doctype html>
<html lang="en">
<head>
    <title>@yield('title', "Whittington's Wheels")</title>
    @include('include.head')
    <style>
        html, body {
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
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


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
