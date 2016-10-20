<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="{{elixir('css/app.css')}}">
    @yield('header')

</head>
<body class="login-page">

    <div class="container">

        @yield('content')

    </div>

    @yield('footer')

</body>
</html>