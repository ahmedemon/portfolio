<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahmed Emon | Welcome</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/LineIcons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/cubeportfolio.min.css') }}">

    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander&display=swap" rel="stylesheet">
</head>

<body class="bg-light text-dark">

    <div id="main" class="container-fluid px-lg-0">
        <div class="row">
            @include('frontend.top-nav')
            <!-- -------------------------------------------------------------- -->
            @include('frontend.side-nav')
            <!-- -------------------------------------------------------------- -->
            <!-- Content start -->
            <div class="col-lg-10 col-sm-12 col-md-12 pl-lg-0">
                <div class="row">
                    <!-- -------------------------------------------------------------- -->
                    <!-- slider start -->
                    @include('frontend.slider')
                    <!-- slider end -->
                    <div class="col-md-12 col-lg-12 col-sm-12 content">
                        <!-- -------------------------------------------------------------- -->
                        <!-- about section start -->
                        @include('frontend.about')
                        <!-- about section end -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- services section start -->
                        @include('frontend.services')
                        <!-- services section end -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- skills section start -->
                        @include('frontend.skills')
                        <!-- skills section end -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- experience section start -->
                        @include('frontend.experience')
                        <!-- experience section end -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- work section start -->
                        @include('frontend.portfolio')
                        <!-- work section end -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- client section start -->
                        @include('frontend.client')
                        <!-- client section end -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- education section start -->
                        @include('frontend.education')
                        <!-- education section end -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- contact section start -->
                        @include('frontend.contact')
                        <!-- contact section end -->
                        <!-- -------------------------------------------------------------- -->
                        @include('frontend.actionbutton')
                    </div>
                </div>
            </div>
            <!-- Content end -->
            <!-- -------------------------------------------------------------- -->
        </div>
        <footer id="footer-main" class="bg-secondary card-footer text-light"> All Right Received | &copy; 2020</footer>
    </div>
</body>

</html>

<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.cubeportfolio.min.js') }}"></script>
<script src="{{ asset('frontend/js/script.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
