<?php include '../init.php';
include_once HEAD_TOP;
?>

<head>

    <title> <?php echo "Center Page" ?> | SAAOL </title>

    <?php include_once HEAD; ?>

    <!-- Home css -->
    <link href="<?= get_assets() ?>css/pages/center-page.css" rel="stylesheet" type="text/css" />


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
    <!-- Choose city section -->
    <!-- ============================================================== -->
    <section class="states-section ">
        <div class="states-heading">
            <h2 class="home-heading">Choose your city</h2>
            <div class="gradient-line gradient-div"></div>
        </div>

        <div class="states-card-conatiner grid">
            <div class="states-card grid grid-center">
                <div class="states-img">
                    <a href="#">
                        <img src="<?= get_img() ?>/psd/gateway-of-india.jpg" alt="India gate image">
                        <div class="states-card-overlay"></div>
                    </a>
                </div>
                <a href="#" class="ease-transition">Delhi NCR</a>
            </div>

            <div class="states-card grid grid-center">
                <div class="states-img">
                    <a href="#">
                        <img src="<?= get_img() ?>/psd/gateway-of-india.jpg" alt="India gate image">
                        <div class="states-card-overlay"></div>
                    </a>
                </div>
                <a href="#" class="ease-transition">Delhi NCR</a>
            </div>

            <div class="states-card grid grid-center">
                <div class="states-img">
                    <a href="#">
                        <img src="<?= get_img() ?>/psd/gateway-of-india.jpg" alt="India gate image">
                        <div class="states-card-overlay"></div>
                    </a>
                </div>
                <a href="#" class="ease-transition">Delhi NCR</a>
            </div>

            <div class="states-card grid grid-center">
                <div class="states-img">
                    <a href="#">
                        <img src="<?= get_img() ?>/psd/gateway-of-india.jpg" alt="India gate image">
                        <div class="states-card-overlay"></div>
                    </a>
                </div>
                <a href="#" class="ease-transition">Delhi NCR</a>
            </div>

            <div class="states-card grid grid-center">
                <div class="states-img">
                    <a href="#">
                        <img src="<?= get_img() ?>/psd/gateway-of-india.jpg" alt="India gate image">
                        <div class="states-card-overlay"></div>
                    </a>
                </div>
                <a href="#" class="ease-transition">Delhi NCR</a>
            </div>
        </div>
    </section>


    <!-- ============================================================== -->
    <!-- Choose state section -->
    <!-- ============================================================== -->
    <section class="states-section ">
        <div class="states-heading">
            <h2 class="home-heading">Choose your State</h2>
            <div class="gradient-line gradient-div"></div>
        </div>

        <div class="states-card-conatiner grid">
            <div class="states-card grid grid-center">
                <div class="states-img">
                    <a href="#">
                        <img src="<?= get_img() ?>/psd/gateway-of-india.jpg" alt="India gate image">
                        <div class="states-card-overlay"></div>
                    </a>
                </div>
                <a href="#" class="ease-transition">Delhi NCR</a>
            </div>

            <div class="states-card grid grid-center">
                <div class="states-img">
                    <a href="#">
                        <img src="<?= get_img() ?>/psd/gateway-of-india.jpg" alt="India gate image">
                        <div class="states-card-overlay"></div>
                    </a>
                </div>
                <a href="#" class="ease-transition">Delhi NCR</a>
            </div>

            <div class="states-card grid grid-center">
                <div class="states-img">
                    <a href="#">
                        <img src="<?= get_img() ?>/psd/gateway-of-india.jpg" alt="India gate image">
                        <div class="states-card-overlay"></div>
                    </a>
                </div>
                <a href="#" class="ease-transition">Delhi NCR</a>
            </div>

            <div class="states-card grid grid-center">
                <div class="states-img">
                    <a href="#">
                        <img src="<?= get_img() ?>/psd/gateway-of-india.jpg" alt="India gate image">
                        <div class="states-card-overlay"></div>
                    </a>
                </div>
                <a href="#" class="ease-transition">Delhi NCR</a>
            </div>

            <div class="states-card grid grid-center">
                <div class="states-img">
                    <a href="#">
                        <img src="<?= get_img() ?>/psd/gateway-of-india.jpg" alt="India gate image">
                        <div class="states-card-overlay"></div>
                    </a>
                </div>
                <a href="#" class="ease-transition">Delhi NCR</a>
            </div>
        </div>
    </section>

    <!-- ============================================================== -->
    <!-- Choose Country section -->
    <!-- ============================================================== -->
    <section class="states-section  states-section-final">
        <div class="states-heading">
            <h2 class="home-heading">Choose your Country</h2>
            <div class="gradient-line gradient-div"></div>
        </div>

        <div class="states-card-conatiner grid">
            <div class="states-card grid grid-center">
                <div class="states-img">
                    <a href="#">
                        <img src="<?= get_img() ?>/psd/gateway-of-india.jpg" alt="India gate image">
                        <div class="states-card-overlay"></div>
                    </a>
                </div>
                <a href="#" class="ease-transition">Delhi NCR</a>
            </div>

            <div class="states-card grid grid-center">
                <div class="states-img">
                    <a href="#">
                        <img src="<?= get_img() ?>/psd/gateway-of-india.jpg" alt="India gate image">
                        <div class="states-card-overlay"></div>
                    </a>
                </div>
                <a href="#" class="ease-transition">Delhi NCR</a>
            </div>

            <div class="states-card grid grid-center">
                <div class="states-img">
                    <a href="#">
                        <img src="<?= get_img() ?>/psd/gateway-of-india.jpg" alt="India gate image">
                        <div class="states-card-overlay"></div>
                    </a>
                </div>
                <a href="#" class="ease-transition">Delhi NCR</a>
            </div>

        </div>
    </section>
    <!-- ============================================================== -->
    <!-- Footer section-->
    <!-- ============================================================== -->
    <?php include_once FOOTER; ?>


    <?php include_once SCRIPT; ?>


</body>

</html>