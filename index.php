<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KeifProject - Multipurpose HTML Template">

    <meta name="author" content="root">
    <title>KeifProject</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700&display=swap" rel="stylesheet">

    <!--  CSS Style -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/webfonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/layerslider.css">
    <link rel="stylesheet" href="assets/css/template.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/category/corporate-2.css">
    <script src="assets/js/jquery.min.js"></script>
</head>

<body>
    <?php 
        include('assets/layouts/header.php');

        include('assets/pages/slider.php');
        // include('assets/pages/card.php');
        // include('assets/pages/about.php');
        // include('assets/pages/service.php');
        include('assets/pages/experience.php');
        include('assets/pages/project.php');
        // include('assets/pages/capability.php');
        // include('assets/pages/funding.php');
        // include('assets/pages/questions.php');
        // include('assets/pages/post.php');

        include('assets/layouts/footer.php');
    ?>
    
    <!-- Scroll to top -->
    <a href="#" class="bg-primary text-white" id="scroll"><i class="fa fa-angle-up"></i></a>
    <!-- End Scroll To top -->


    <!--===============================================================================================-->
    <script src="assets/js/greensock.js"></script>
    <script src="assets/js/layerslider.transitions.js"></script>
    <script src="assets/js/layerslider.kreaturamedia.jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/custom.js"></script>

    <script>
        $(document).ready(function() {
            $("#footer").load("assets/layouts/footer.html");
            
            $('#slider').layerSlider({
                sliderVersion: '6.0.0',
                type: 'fullwidth',
                responsiveUnder: 0,
                layersContainer: 1200,
                maxRatio: 1,
                parallaxScrollReverse: true,
                hideUnder: 0,
                hideOver: 100000,
                skin: 'v5',
                showBarTimer: false,
                showCircleTimer: false,
                thumbnailNavigation: 'disabled',
                allowRestartOnResize: true,
                skinsPath: 'assets/skins/',
                height: 870
            });
        });
    </script>

</body>

</html>