<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="assets/images/favicon.png" type="">
    <title>Ecommere Website - EDGE Project</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="assets/css/responsive.css" rel="stylesheet" />
</head>

<body>

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

</body>

</html>