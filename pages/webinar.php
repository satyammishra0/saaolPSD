<?php include '../init.php';
include_once HEAD_TOP;
?>

<head>

    <title> <?php echo "Center Page" ?> | SAAOL </title>

    <?php include_once HEAD; ?>

    <!-- Home css -->
    <link href="<?= get_assets() ?>css/pages/webinar.css" rel="stylesheet" type="text/css" />

    <!-- SLICK CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

</head>


<body>
    <!-- ============================================================== -->
    <!-- TOP BAR Of the page -->
    <!-- ============================================================== -->
    <?php include_once TOPBAR; ?>

    <!-- ============================================================== -->
    <!-- HEADER Of the page (logo + dropdown) -->
    <!-- ============================================================== -->
    <?php include_once HEADER; ?>

    <!-- ============================================================== -->
    <!-- Header banner -->
    <!-- ============================================================== -->
    <section class="first-banner-cities " id="home-section">
        <div class="first-states-grid grid grid-2">

            <div class="first-banner-form">
            </div>

            <div class="first-banner-cities-content">
                <h2 class="home-heading">SAAOL Webinar</h2>

            </div>
        </div>
    </section>



    <!-- ============================================================== -->
    <!-- Numbers section -->
    <!-- ============================================================== -->
    <?php include_once NUMBER_SECTION; ?>

    <!-- ============================================================== -->
    <!-- About medical team section -->
    <!-- ============================================================== -->
    <div class="webinar-section grid grid-2">
        <div class="webinar-img">
            <img src="<?= get_img() ?>/psd/pages/Coming-Soon-Webinar-1.jpg" alt="Coming Soon">
        </div>
        <div class="webinar-content">
            <h1 class="home-heading">SAAOL WEBINAR</h1>
            <h3><b>Coming Soon...</b></h3>
            <button class="main-button">
                <a href="https://saaol.com/contact-saaol/">Contact Us</a>
            </button>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- Footer section-->
    <!-- ============================================================== -->
    <?php include_once FOOTER; ?>


    <!-- ============================================================== -->
    <!-- Major scripts section-->
    <!-- ============================================================== -->
    <?php include_once SCRIPT; ?>


</body>

</html>