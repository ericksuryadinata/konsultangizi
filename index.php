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
    <link rel="shortcut icon" href="assets/images/logo.png" />

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
                                            <a href="index-01.html"><img id="logo_img" class="img-fluid" src="assets/images/logo-grayscale.png" alt="konsultasigizi" />
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

        <div class="pb-50 md-pt-100 md-pb-20 xs-pl-10 xs-pr-10">
            <div class="owl-carousel" data-nav-dots="true" data-space="50" data-items="2" data-md-items="3" data-sm-items="1" data-xs-items="1" data-xx-items="1">
                <div class="item">
                    <img class="img-fluid full-width" src="assets/images/slides/AskTheExpertOut.webp" alt="Slider">
                </div>
                <div class="item">
                    <img class="img-fluid full-width" src="assets/images/slides/passionateOut.webp" alt="Slider">
                </div>
                <div class="item">
                    <img class="img-fluid full-width" src="assets/images/slides/profesionalOut.webp" alt="Slider">
                </div>
            </div>
        </div>

        <section class="page-section-pt" id="tentang-kami">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="js-video [youtube, widescreen]">
                            <iframe width="480" height="520" src="https://www.youtube.com/embed/vq48eJA4c58" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <!-- <img class="img-fluid full-width" src="assets/images/default-about.jpg" alt=""> -->
                            <!-- <div class="owl-carousel" data-nav-dots="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
                                <div class="item">
                                    <img class="img-fluid full-width" src="assets/images/default-about.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="img-fluid full-width" src="assets/images/default-about.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="img-fluid full-width" src="assets/images/default-about.jpg" alt="">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 sm-mt-30">
                        <div class="section-title">
                            <h2 class="title-effect">Tentang Kami</h2>
                        </div>
                        <p class="text-justify">
                            Startup yang digawangi oleh ahli gizi dengan latar belakang keahlian dan spesifikasi bidang yang beragam seputar gizi dan kesehatan.
                            Dengan semangat kerja professional dan passionate, Konsultan Gizi memberikan kesempatan seluas-luasnya kepada tim untuk berkembang sesuai dengan minat dan ketertarikan. Selain itu program dan pelayanan kami akan selalu update, karena kami berkomitmen untuk masyarakat Indonesia.
                        </p>
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
                        <div class="owl-carousel" data-nav-dots="true" data-items="4" data-md-items="4" data-sm-items="2" data-xs-items="2" data-xx-items="2" data-space="20">
                            <div class="team team-round">
                                <div class="team-photo">
                                    <img class="img-fluid full-width" src="assets/images/dietisien/fildzah-k-putri-sgz-msc.webp" alt="Fildzah K. Putri, S.Gz, M.Sc">
                                </div>
                                <div class="team-description">
                                    <div class="team-info">
                                        <p><b>Fildzah K. Putri, S.Gz, M.Sc</b></p>
                                        <span>Dietisien</span>
                                    </div>
                                </div>
                            </div>
                            <div class="team team-round">
                                <div class="team-photo">
                                    <img class="img-fluid full-width" src="assets/images/dietisien/raudhatul-jannah-sgz.webp" alt="Raudhatul Jannah, S.Gz">
                                </div>
                                <div class="team-description">
                                    <div class="team-info">
                                        <p><b>Raudhatul Jannah, S.Gz</b></p>
                                        <span>Dietisien</span>
                                    </div>
                                </div>
                            </div>
                            <div class="team team-round">
                                <div class="team-photo">
                                    <img class="img-fluid full-width" src="assets/images/kontributor/nur-elya-adiba-sgz.webp" alt="Nur Elya Adiba, S.Gz">
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
                                    <img class="img-fluid full-width" src="assets/images/kontributor/nurrika-azizah-sgz.jpeg" alt="Nurrika Azizah, S.Gz">
                                </div>
                                <div class="team-description">
                                    <div class="team-info">
                                        <p><b>Nurrika Azizah, S.Gz</b></p>
                                        <span>Kontributor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="team team-round">
                                <div class="team-photo">
                                    <img class="img-fluid full-width" src="assets/images/kontributor/mief-qur-anin-sgz.jpeg" alt="Mief Qur Anin S.Gz">
                                </div>
                                <div class="team-description">
                                    <div class="team-info">
                                        <p><b>Mief Qur Anin S.Gz</b></p>
                                        <span>Kontributor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="team team-round">
                                <div class="team-photo">
                                    <img class="img-fluid full-width" src="assets/images/kontributor/adinda-dwi-a-sgz.jpeg" alt="Adinda Dwi A. S.Gz">
                                </div>
                                <div class="team-description">
                                    <div class="team-info">
                                        <p><b>Adinda Dwi A. S.Gz</b></p>
                                        <span>Kontributor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="team team-round">
                                <div class="team-photo">
                                    <img class="img-fluid full-width" src="assets/images/kontributor/aprinia-nurhayati-sgz-msi.jpg" alt="Aprinia Nurhayati, S.Gz, M.Si">
                                </div>
                                <div class="team-description">
                                    <div class="team-info">
                                        <p><b>Aprinia Nurhayati, S.Gz, M.Si</b></p>
                                        <span>Kontributor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="team team-round">
                                <div class="team-photo">
                                    <img class="img-fluid full-width" src="assets/images/kontributor/atika-audini-sgz.jpg" alt="Atika Audini S.Gz">
                                </div>
                                <div class="team-description">
                                    <div class="team-info">
                                        <p><b>Atika Audini S.Gz</b></p>
                                        <span>Kontributor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="team team-round">
                                <div class="team-photo">
                                    <img class="img-fluid full-width" src="assets/images/kontributor/aulia-riska-i-sgz-mtp.jpg" alt="Aulia Riska I., S.Gz., M.TP">
                                </div>
                                <div class="team-description">
                                    <div class="team-info">
                                        <p><b>Aulia Riska I., S.Gz., M.TP</b></p>
                                        <span>Kontributor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="team team-round">
                                <div class="team-photo">
                                    <img class="img-fluid full-width" src="assets/images/kontributor/lavrencia-ar-sgz.jpg" alt="Lavrencia AR, S.Gz">
                                </div>
                                <div class="team-description">
                                    <div class="team-info">
                                        <p><b>Lavrencia AR, S.Gz</b></p>
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
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <iframe src="https://open.spotify.com/embed-podcast/show/5fDU64d744YKAqCGiU94Ll" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-3 white-bg page-section-ptb" id="konsultasi">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <img class="img-fluid" src="assets/images/konsultasi.png" alt="">
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-12">
                        <div class="contact-3-info page-section-pb">
                            <div class="clearfix">
                                <div class="section-title mb-0">
                                    <h2 class="title-effect">Form Konsultasi</h2>
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
                            <img class="img-fluid mb-10" id="logo-footer" src="assets/images/logo-grayscale.png" alt="">
                            <div class="footer-text">
                                <p> &copy;Copyright <span id="copyright"> </span> <a href="#"> konsultasigizi.id </a> All Rights Reserved </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-social">
                                <ul class="text-left text-lg-right">
                                    <li class="list-inline-item">Email : info.konsultangizi@gmail.com &nbsp;|</li>
                                    <li class="list-inline-item">Telepon : 081221224577 &nbsp;</li>
                                </ul>
                            </div>
                            <div class="social-icons color-hover text-left text-lg-right mt-20">
                                <ul class="clearfix">
                                    <li class="social-facebook"><a href="https://www.facebook.com/sahabatkozi/"><i class="fab fa-facebook"></i></a></li>
                                    <li class="social-spotify"><a href="https://open.spotify.com/show/5fDU64d744YKAqCGiU94Ll?si=Wyy12cjJTR-sgCY0rGNJZA"><i class="fab fa-spotify"></i></a></li>
                                    <li class="social-instagram"><a href="https://www.instagram.com/konsultangizi.id/"><i class="fab fa-instagram"></i></a></li>
                                    <li class="social-tiktok"><a href="https://www.tiktok.com/@konsultangizi.id?lang=en"><i class="fab fa-tiktok"></i></a></li>
                                </ul>
                            </div>
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
        const plugin_path = 'assets/js/';
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
