<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>GCC</title>
    <!-- Stylesheets -->
    <!-- Responsive -->

    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/font-awesome.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/owl.theme.default.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/animate.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('js/select2/select2.css')); ?>" rel="stylesheet">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet">

    <script src="<?php echo e(asset('js/jquery-1.12.2.min.js')); ?>"></script>
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
                            <p id="email_error">Get News & Action <span>Alerts in Your Email.</span></p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        
                        <form method="POST" action="<?php echo e(route('email.send')); ?>" class="form-subscribe">
                            <?php echo e(csrf_field()); ?>


                            <input type="email" name="email" id="email" class="form-control" placeholder="Subscribe Email">
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

                            <?php echo getVal('category'); ?>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="f-box">
                            <?php echo getVal('information'); ?>

                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="f-box">
                            <?php echo getVal('info'); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">

                <?php echo getVal('social'); ?>



                <p class="copy-right">All Copy Rights Safe 2019</p>
            </div>
        </div>
    </footer><!--footer-->
</div><!--main-wrapper-->

<?php echo $__env->yieldContent("js"); ?>


<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('js/wow.js')); ?>"></script>
<script src="<?php echo e(asset('js/script.js')); ?>"></script>
<script src="<?php echo e(asset('js/select2/select2.min.js')); ?>"></script>

<script>
    new WOW().init();
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.chosen-select').select2({
            minimumResultsForSearch: Infinity
        });
    });



</script>

<script>
    $('body').on('submit',".form-subscribe",function (e) {
        e.preventDefault();
        var email_error='';
        $action = $(this).attr("action");
        $data = $(this).serialize();
        var formData = new FormData($(this)[0]);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN':'<?php echo e(csrf_token()); ?>'
            }
        });
        $.ajax({
            url: $action,
            type: "POST",
            data: formData,
            async: true,
            processData: false,
            contentType: false,
            dataType: "json",
            cache    : false,
            success: function (response) {
                if (response.status == true) {
                    $('#email_error').empty();
                    $email_error='' +
                '<p>success send email </p>'

                $('#email_error').append($email_error);

                    $(".form-subscribe")[0].reset();

                } else {

                }
            },error: function(data){
                $('#email_error').empty();

                var error = data.responseJSON;
                var errors= error.errors;

                if(typeof(errors['email']) != "undefined"){
                    $("#email_error").html(errors['email'][0]);
                }
            }
        });

    });


</script>
</body>
</html>
