<!DOCTYPE html>
<html>
<head>
    <title>Laravel App</title>

    <link rel="stylesheet" href="{{ asset('css/rating.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ourservices.css') }}">
</head>

<body>

    @yield('content')

    <script src="{{ asset('js/rating.js') }}"></script>
    <script src="{{ asset('js/ourservices.js') }}"></script>

</body>
</html>