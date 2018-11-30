<!DOCTYPE html>
<html lang="en-Us">
<head>
    <title>Stephen Vinuya - onecompileman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Stephen Vinuya, Team Leader, Web Developer" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/about.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/skills.css" type="text/css" rel="stylesheet" media="all">
    <!-- nav -->
    <link href="css/menufullpage.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="vendor/lightbox/css/lightbox.min.css">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    <!-- header -->
    @include('partials.header')
    <!-- //header -->
    @yield('contents')
    <!-- //banner-->
    <!-- footer -->
    @include('partials.footer')
    <!-- //footer -->
    <!-- js -->
    <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
    <!-- //js -->
    <!-- few java snippets-->
    <script src="{{ asset('js/strive.js') }}"></script>
    <!-- banner text animation -->
    <script src="{{ asset('js/home.js') }}"></script>

    <!-- //banner text animation -->
    <!-- nav -->
    <script src="{{ asset('js/menuFullpage.min.js') }}"></script>
    <!-- //nav -->
    <!-- smooth scroll -->
    <script src="{{ asset('js/SmoothScroll.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>

    <script src="{{ asset('vendor/lightbox/js/lightbox.min.js') }}"></script>
</body>

</html>