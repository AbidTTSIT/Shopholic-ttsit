<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopholic | Get best deal </title>
    @include('user.includes.link')
</head>

<body>
    @include('user.includes.header')

    @yield('content')

    <!-- Footer Section Begin -->
    @include('user.includes.footer')
    <!-- Footer Section End -->
</body>

</html>