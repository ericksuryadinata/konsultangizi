<?php

require  __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$G_C_SITE_KEY = getenv('G_C_SITE_KEY');
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="Konsultasi Gizi" />
    <meta name="description" content="konsultasi gizi" />
    <meta name="author" content="konsultasigizi.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Konsultasi Gizi</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo.jpg" />

    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" />

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="assets/css/plugins-css.css" />

    <!-- revoluation -->
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css" media="screen" />

    <!-- Typography -->
    <link rel="stylesheet" type="text/css" href="assets/css/typography.css" />

    <!-- Shortcodes -->
    <link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css" />

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />

    <!-- Skin -->
    <link rel="stylesheet" type="text/css" href="assets/css/skins/skin-red.css" />
</head>

<body>
    <div class="wrapper">
        <section id="beranda"></section>
        <header id="header" class="header light">
            <div class="menu" id="onepagenav">
                <!-- menu start -->
                <nav id="menu" class="mega-menu">
                    <!-- menu list items container -->
                    <section class="menu-list-items">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <!-- menu logo -->
                                    <ul class="menu-logo">
                                        <li>
                                            <a href="index-01.html"><img id="logo_img" class="img-fluid" src="assets/images/logo.jpg" alt="konsultasigizi" />
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- menu links -->
                                    <div class="menu-bar">
                                        <ul class="menu-links">
                                            <li class="active"><a href="#beranda">Beranda</a></li>
                                            <li><a href="#tentang-kami">Tentang Kami</a></li>
                                            <li><a href="#konsultan-gizi">Konsultan Gizi</a></li>
                                            <li><a href="#instagram">Instagram</a></li>
                                            <li><a href="#konsultasi">Konsultasi</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </nav>
                <!-- menu end -->
            </div>
        </header>
        <section class="rev-slider">
            <div id="rev_slider_271_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="webster-slider-5" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.4.6.3 auto mode -->
                <div id="rev_slider_271_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3">
                    <ul>
                        <li data-index="rs-762-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/images/default-slider.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="assets/images/default-slider.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>
                        <li data-index="rs-762-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/images/default-slider.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="assets/images/default-slider.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
        </section>
        <section class="page-section-pt" id="tentang-kami">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="who-we-are-left">
                            <div class="owl-carousel" data-nav-dots="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
                                <div class="item">
                                    <img class="img-fluid full-width" src="assets/images/default-about.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="img-fluid full-width" src="assets/images/default-about.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="img-fluid full-width" src="assets/images/default-about.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 sm-mt-30">
                        <div class="section-title">
                            <h6>Who we are and what we do</h6>
                            <h2 class="title-effect">Get to know us better.</h2>
                            <p>We truly care about our users and our product. We are dedicated to providing you with the best experience possible. </p>
                        </div>
                        <p>Let's make something great together consectetur adipisicing elit. <span class="theme-color" data-toggle="tooltip" data-placement="top" title="" data-original-title="HTML5 template">Webster</span> conseqt quibusdam, enim expedita sed quia nesciunt. Vero quod conseqt quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section-pt" id="konsultan-gizi">
            <div class="container">
                <div class="col-lg-12 col-md-12 mt-30">
                    <div class="section-title text-center">
                        <h2 class="title">Konsultan Gizi </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="owl-carousel" data-nav-dots="true" data-items="4" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="1" data-space="20">
                            <div class="team team-round">
                                <div class="team-photo">
                                    <img class="img-fluid full-width" src="assets/images/dietitian/fildzah-k-putri-sgz-msc.jpg" alt="Fildzah K. Putri, S.Gz, M.Sc">
                                </div>
                                <div class="team-description">
                                    <div class="team-info">
                                        <p><b>Fildzah K. Putri, S.Gz, M.Sc</b></p>
                                        <span>Dietitian</span>
                                    </div>
                                </div>
                            </div>
                            <div class="team team-round">
                                <div class="team-photo">
                                    <img class="img-fluid full-width" src="assets/images/dietitian/raudhatul-jannah-sgz.jpg" alt="Raudhatul Jannah, S.Gz">
                                </div>
                                <div class="team-description">
                                    <div class="team-info">
                                        <p><b>Raudhatul Jannah, S.Gz</b></p>
                                        <span>Dietitian</span>
                                    </div>
                                </div>
                            </div>
                            <div class="team team-round">
                                <div class="team-photo">
                                    <img class="img-fluid full-width" src="assets/images/kontributor/ilyatun-niswah-sgz-msc.jpg" alt="Ilyatun Niswah, S.Gz, M.Sc">
                                </div>
                                <div class="team-description">
                                    <div class="team-info">
                                        <p><b>Ilyatun Niswah, S.Gz, M.Sc</b></p>
                                        <span>Kontributor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="team team-round">
                                <div class="team-photo">
                                    <img class="img-fluid full-width" src="assets/images/kontributor/nur-elya-adiba-sgz.jpg" alt="Nur Elya Adiba, S.Gz">
                                </div>
                                <div class="team-description">
                                    <div class="team-info">
                                        <p><b>Nur Elya Adiba, S.Gz</b></p>
                                        <span>Kontributor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="team team-round">
                                <div class="team-photo">
                                    <img class="img-fluid full-width" src="assets/images/kontributor/nurrika-azizah-sgz.jpg" alt="Nurrika Azizah, S.Gz">
                                </div>
                                <div class="team-description">
                                    <div class="team-info">
                                        <p><b>Nurrika Azizah, S.Gz</b></p>
                                        <span>Kontributor</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="white-bg page-section-pt" id="instagram">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mt-30">
                        <div class="section-title text-center">
                            <h2 class="title">Instagram Konsultan Gizi </h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <div class="isotope columns-4" id="instagram-feed">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-3 white-bg page-section-ptb" id="konsultasi">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <img class="img-fluid" src="assets/images/default-consultant.jpg" alt="">
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <div class="contact-3-info page-section-pb">
                            <div class="clearfix">
                                <div class="section-title mb-0">
                                    <h2 class="title-effect">Kontak Form</h2>
                                </div>
                                <div id="formmessage">Success/Error Message Goes Here</div>
                                <form id="form-konsultasi" role="form" method="post" action="php/email.php">
                                    <div class="contact-form clearfix">
                                        <div class="section-field">
                                            <input type="text" placeholder="Nama*" class="form-control" name="nama">
                                        </div>
                                        <div class="section-field">
                                            <input type="email" placeholder="Email*" class="form-control" name="email">
                                        </div>
                                        <div class="section-field">
                                            <input type="text" placeholder="Telepon*" class="form-control" name="telepon">
                                        </div>
                                        <div class="section-field form-inline">
                                            <div class="row align-items-center">
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="Usia*" class="form-control" name="usia">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="custom-control custom-radio custom-control-inline mb-2 mr-sm-2">
                                                        <input type="radio" id="L" name="jenis_kelamin" class="custom-control-input" value="L">
                                                        <label class="custom-control-label" for="L">L</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="P" name="jenis_kelamin" class="custom-control-input" value="P">
                                                        <label class="custom-control-label" for="P">P</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="section-field textarea">
                                            <textarea class="input-message form-control" placeholder="Konsultasi*" rows="7" name="pesan"></textarea>
                                        </div>
                                        <!-- Google reCaptcha-->
                                        <!-- <div class="g-recaptcha section-field clearfix" data-sitekey=""></div> -->
                                        <div class="section-field submit-button">
                                            <input type="hidden" name="action" value="sendEmail" />
                                            <button id="submit" name="submit" type="submit" value="Send" class="button"><span> Kirim Konsultasi </span> <i class="fa fa-paper-plane"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="assets/images/loader-02.svg" alt="preloader"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer footer-topbar black-bg">
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="img-fluid mb-10" id="logo-footer" src="assets/images/logo.jpg" alt="">
                            <div class="footer-text">
                                <p> &copy;Copyright <span id="copyright"> </span> <a href="#"> Konsultasigizi.id </a> All Rights Reserved </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

    <!-- jquery -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- plugins-jquery -->
    <script src="assets/js/plugins-jquery.js"></script>

    <!-- plugin_path -->
    <script>
        var plugin_path = 'assets/js/';
    </script>

    <!-- REVOLUTION JS FILES -->
    <script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/revolution/js/revolution.extension.slideanims.min.js"></script>
    <script src="assets/revolution/js/revolution.extension.navigation.min.js"></script>
    <!-- revolution custom -->
    <script src="assets/revolution/js/revolution-custom.js"></script>

    <!-- Google recaptcha -->
    <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $G_C_SITE_KEY ?>"></script>


    <!-- custom -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/InstagramFeed.min.js"></script>
    <script>
        $(document).ready(function() {
            grecaptcha.ready(function() {
                grecaptcha.execute('<?php echo $G_C_SITE_KEY ?>', {
                    action: 'konsultasi'
                }).then(function(token) {
                    $('#form-konsultasi').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
                    $("#form-konsultasi").submit(function(event) {
                        $("#ajaxloader").show();
                        $("#form-konsultasi").hide();
                        $.ajax({
                            url: 'php/email.php',
                            data: $(this).serialize(),
                            type: 'post',
                            success: function(response) {
                                $("#ajaxloader").hide();
                                $("#form-konsultasi")[0].reset();
                                $("#form-konsultasi").show();

                                $("#formmessage").html(response).show().delay(20000).fadeOut('slow');
                            }
                        });
                        event.preventDefault();
                    });
                });
            });
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()));
            $.instagramFeed({
                'username': 'konsultangizi.id',
                'container': "#instagram-feed",
                'display_profile': false,
                'display_biography': false,
                'display_gallery': true,
                'callback': null,
                'styling': true,
                'items': 12,
                'items_per_row': 4,
                'margin': 0.25
            });
        });
    </script>

</body>

</html>
