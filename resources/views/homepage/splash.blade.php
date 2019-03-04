<!doctype html>
<html lang="en">
<head>
    <title>Whittington's Wheels - Welcome</title>
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
<div class="h-100 row align-items-center">
    @include('include.header')
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" charset="utf-8"></script>
</body>

</html>
