<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <meta name="description" content="POS - Bootstrap Admin Template" />
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive" />
    <meta name="author" content="Dreamguys - Bootstrap Admin Template" />
    <meta name="robots" content="noindex, nofollow" />
    <title>Shop Holic || Dashboard</title>
    @include('admin.includes.link')

</head>

<body>
    <!-- <div id="global-loader">
        <div class="whirly-loader"></div>
    </div> -->

    <div class="main-wrapper">
        @include('admin.includes.header')

        @include('admin.includes.sidebar')

       @yield('content')
    </div>

</body>

</html>