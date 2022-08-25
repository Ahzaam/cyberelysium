<!DOCTYPE html>
<html>

<head>
    <title>Laravel 9</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        @guest
        <script>
            window.location = "/dashboard";
        </script>
        @else
        @yield('content')
        @endguest

    </div>

</body>

</html>