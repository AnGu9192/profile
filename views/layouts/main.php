<!DOCTYPE html>
<html lang="en">
<head>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"       content="width=device-width, initial-scale=1.0">
    <meta name="description"    content="Profil - Personal Portfolio Html5 Template">
    <meta name="keywords"       content="onepage, personal, portfolio, html5, template, responsive, creative">
    <meta name="author"         content="web_bean">

    <!-- Site title -->
    <title>Profil - Personal Portfolio Html5 Template</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php App::asset('images/favicon.png') ?>">

    <!-- Bootstrap css -->
   <link href="<?php App::asset("css/bootstrap.min.css"); ?>" rel="stylesheet">




    <!--Font Awesome css -->
    <link href="<?php App::asset("css/font-awesome.min.css"); ?>" rel="stylesheet">

    <!-- ET Icons -->
    <link href="<?php App::asset("css/et-line-icons.css"); ?>" rel="stylesheet">

    <!-- Normalizer css -->
    <link href="<?php App::asset("css/normalize.css"); ?>" rel="stylesheet">

    <!-- Owl Carousel css -->
    <link href="<?php App::asset("css/owl.carousel.min.css"); ?>" rel="stylesheet">

    <link href="<?php App::asset("css/owl.transitions.css"); ?>" rel="stylesheet">

    <!-- Magnific popup css -->
    <link href="<?php App::asset("css/magnific-popup.css");?>" rel="stylesheet">

    <!-- Site css -->
    <link href="<?php App::asset("css/style.css"); ?>" rel="stylesheet">
    <link href="<?php App::asset("css/main.css"); ?>" rel="stylesheet">

    <!-- Responsive css -->
    <link href="<?php App::asset("css/responsive.css"); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!--    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>-->

    <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
    <script src="<?php App::asset("js/script.js"); ?>" defer></script>
</head>

<body>
<!-- Preloader starts-->
<div id="preloader"></div>
<?php $userId = $this->request()->get('id');
?>
<?php
$hideNav = [
    'login',
    'register',
];
?>

<?php if(!in_array(App::$currentAction, $hideNav)) { ?>
<!-- Navigation area starts -->
<div class="menu-area navbar-fixed-top">
    <div class="container">
        <div class="row">

            <!-- Navigation starts -->
            <div class="col-md-12">
                <div class="mainmenu">
                    <div class="navbar navbar-nobg">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="<?php App::route('index/index'); ?>"><span>profil</span></a>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse">
                            <nav>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a class="smooth_scroll" href="#slider">Home</a></li>
                                    <li><a class="smooth_scroll" href="#about">About</a></li>
                                    <li><a class="smooth_scroll" href="#service">Services</a></li>
                                    <li><a class="smooth_scroll" href="#work">Work</a></li>
                                    <li><a class="smooth_scroll" href="#testimonial">Testimonial</a></li>
                                    <li><a class="smooth_scroll" href="#contact">Contact</a></li>

                                    <?php if (!$userId) { ?>
                                        <li><a class="btnLogin-popup" href="<?php App::route('user/login'); ?>">Login</a></li>
                                    <?php }   else  { ?>
                                    <li><a class="btnLogin-popup" href="<?php App::route('user/profile'); ?>">Profile</a></li>
                                    <?php } ?>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Navigation ends -->

        </div>

    </div>
</div>
<!-- Navigation area ends -->
<?php } ?>


<?php echo $content ?>

<!-- Footer area starts -->
<footer class="footer-area">
    <div class="container">

        <div class="address">
            <div class="address-box clearfix">
                <p>1502 N Elm St, Fairmont, MN, 56031, United States</p>
            </div>
            <div class="address-box clearfix">
                <p><a href="tel:015110022">+00 123-456-789</a></p>
            </div>
            <div class="address-box clearfix">
                <p><a href="mailto:email@yourdomain.com">email@yourdomain.com</a></p>
            </div>
            <div class="address-box clearfix">
                <p><a href="http://www.yourdomain.com/">www.yourdomain.com</a></p>
            </div>
        </div>

        <ul class="social-ul">
            <li><a href="#"><span class="icon-facebook"></span></a></li>
            <li><a href="#"><span class="icon-twitter"></span></a></li>
            <li><a href="#"><span class="icon-googleplus"></span></a></li>
            <li><a href="#"><span class="icon-tumblr"></span></a></li>
            <li><a href="#"><span class="icon-linkedin"></span></a></li>
        </ul>

        <p class="copyright">&copy; 2018 Copyright web_bean</p>

    </div>
</footer>
<!-- Footer area ends -->

<!-- Latest jQuery -->
<script src="<?php App::asset("js/jquery.min.js"); ?>"></script>

<!-- Bootstrap js-->
<script src="<?php App::asset("js/bootstrap.min.js"); ?>"></script>

<!-- Owl Carousel js -->
<script src="<?php App::asset("js/owl.carousel.min.js"); ?>"></script>

<!-- Mixitup js -->
<script src="<?php App::asset("js/jquery.mixitup.js"); ?>"></script>

<!-- Magnific popup js -->
<script src="<?php App::asset("js/jquery.magnific-popup.min.js"); ?>"></script>

<!-- Waypoint js -->
<script src="<?php App::asset("js/jquery.waypoints.min.js"); ?>"></script>

<!-- Ajax Mailchimp js -->
<script src="<?php App::asset("js/jquery.ajaxchimp.min.js"); ?>"></script>

<!-- Typed js -->
<script src="<?php App::asset("js/typed.js"); ?>"></script>



<!-- Main js-->
<script src="<?php App::asset("js/main_script.js"); ?>"></script>

<script src="<?php App::asset("js/script.js"); ?>"></script>

</body>

</html>