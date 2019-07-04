<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>GCC</title>
    <!-- Stylesheets -->
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/font-awesome.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/owl.theme.default.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/animate.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent("css"); ?>
    
    
    
</head>
<body>
<div class="mobile-menu">
    <div class="menu-mobile">
        <div class="brand-area">
            <a href="#">
                <img src="images/logo-site.png" alt="">
            </a>
        </div>
        <div class="mmenu">
            <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Conference</a></li>
                <li><a href="#">ISO Directory</a></li>
                <li><a href="#">PDF File</a></li>
                <li><a href="#">Qatar Society</a></li>
            </ul>
        </div>
        <ul class="social-links-mobile clearfix">
            <li>
                <a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li>
                <a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li>
                <a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div>
    <div class="m-overlay"></div>
</div><!--mobile-menu-->
<div class="main-wrapper">
    <header id="header">
        <div class="container">
            <div class="logo-site">
                <a href="#"><img src="images/logo-site.png" alt=""></a>
            </div>
            <div class="header-right">
                <ul class="main-menu clearfix">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Conference</a></li>
                    <li><a href="#">ISO Directory</a></li>
                    <li><a href="#">PDF File</a></li>
                    <li><a href="#">Qatar Society</a></li>
                </ul>
                <ul class="lang-site">
                    <li><a href="#">ع</a></li>
                </ul>
                <ul class="social-links clearfix">
                    <li>
                        <a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                </ul>
                <button type="button" class="hamburger is-closed">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                </button>
            </div>
        </div>
    </header><!--header-->


    <?php echo $__env->yieldContent("content"); ?>


    <footer id="footer">
        <div class="subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="scribe-txt">
                            <p>Get News & Action <span>Alerts in Your Email.</span></p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <form class="form-subscribe" action="#">
                            <input type="email" class="form-control" placeholder="Subscribe Email">
                            <button type="submit" class="btn btnscribe"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="pre-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="f-box">
                            <h2 class="title-menu">Category</h2>
                            <ul class="menu-foorer clearfix">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">PDF File</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Conference</a></li>
                                <li><a href="#">Qatar Society</a></li>
                                <li><a href="#">Policy Privacy</a></li>
                                <li><a href="#">iSO Directory</a></li>
                                <li><a href="#">Help !</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="f-box">
                            <div class="txt-manager">
                                <h3>For more information regarding sponsoring the
                                    conference, please call</h3>
                                <p>Mr. Mohammed Saleh Al Kuwari </p>
                                <p>CEO of Gulf Consultant and Quality Centre </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="f-box">
                            <ul class="info-contact">
                                <li>Fax: 44341003</li>
                                <li>Telephone: 44377489</li>
                                <li>Mobile: 55507774</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <ul class="footer-social clearfix">
                    <li>
                        <a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                </ul>
                <p class="copy-right">All Copy Rights Safe 2017</p>
            </div>
        </div>
    </footer><!--footer-->
</div><!--main-wrapper-->

<?php echo $__env->yieldContent("js"); ?>
<script src="<?php echo e(asset('http://html5shim.googlecode.com/svn/trunk/html5.js')); ?>"></script>
<script src="<?php echo e(asset('js/respond.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery-1.12.2.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/wow.js')); ?>"></script>
<script src="<?php echo e(asset('js/script.js')); ?>"></script>

<script>
    new WOW().init();
</script>
</body>
</html>
