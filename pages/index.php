<?php include '../init.php';
include_once HEAD_TOP;
?>

<head>

    <title><?php echo "Saaol home page" ?> | SAAOL </title>
    <?php include_once HEAD; ?>

    <!-- Home css -->
    <link href="<?= get_assets() ?>css/pages/home.css" rel="stylesheet" type="text/css" />


</head>

<body id="google_translate_element">
    <!-- ============================================================== -->
    <!-- TOP BAR Of the page -->
    <!-- ============================================================== -->
    <?php include_once TOPBAR; ?>

    <!-- ============================================================== -->
    <!-- HEADER Of the page (logo + dropdown) -->
    <!-- ============================================================== -->
    <?php include_once HEADER; ?>

    <!-- ============================================================== -->
    <!-- First hero section of the page -->
    <!-- ============================================================== -->
    <section class="home-first-section gradient-div grid">
        <div class="home-first-left grid grid-center">
            <img src="<?= get_img() ?>/psd/Bimal-sir-img.png" id="home_slider_image" alt="Bimal sir main img">
        </div>
        <div class="home-first-right">
            <p>SAAOL mission is to reduce the mortality rate due to heart disease related deaths and provide holistic heart care treatment and approach through natural bypass therapy, FDA approved non-invasive heart treatment like EECP and lifestyle changes</p>
            <div class="home-first-treatment-section">
                <h2>Our Treatments</h2>
                <div class="first-treatment-card-container grid grid-3">
                    <div class="first-treatment-card grid grid-center">
                        <div class="first-treatment-card-left">
                            <img src="<?= get_img() ?>/psd/EECP-machine.png" alt="EECP machine img">
                        </div>
                        <div class="first-treatment-card-rigth">EECP</div>
                    </div>
                    <div class="first-treatment-card grid grid-center">
                        <div class="first-treatment-card-left">
                            <img src="<?= get_img() ?>/psd/Zero-oil.png" alt="zero oil img">
                        </div>
                        <div class="first-treatment-card-rigth">Zero-oil cooking</div>
                    </div>
                    <div class="first-treatment-card grid grid-center">
                        <div class="first-treatment-card-left">
                            <img src="<?= get_img() ?>/psd/detox-icon.png" alt="Detox icon">
                        </div>
                        <div class="first-treatment-card-rigth">SAAOL detox</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================== -->
    <!-- Numbers section -->
    <!-- ============================================================== -->
    <?php include_once NUMBER_SECTION; ?>

    <!-- ============================================================== -->
    <!-- About us section -->
    <!-- ============================================================== -->
    <section class="about-us grid grid-2 section-padding">
        <div class="about-us-content">
            <h2 class="home-heading">About us</h2>
            <div class="gradient-line gradient-div"></div>
            <p>
                SAAOL mission is to reduce the mortality rate due to heart disease related deaths and provide holistic heart care treatment and approach through natural bypass therapy, FDA approved non-invasive heart treatment like EECP and lifestyle changes. SAAOL Heart Centers are spread all over India so that people can have access to best heart treatment in India without travelling to Indian cities. Our heart specialists are trained under world renowned cardiologist Dr. Bimal Chhajer MBBS, MD (former AIIMS resident & associate professor). SAAOL ultimate purpose is to provide the best heart treatment and eradicate heart disease related deaths in India and then the world. Motto: Mission Beat Heart Disease.
            </p>
            <button class="main-button "><a href="https://saaol.com/about">Know More</a> <span><i class='bx bx-right-arrow-alt'></i></span></button>
        </div>
        <div class="about-us-image grid grid-center">
            <img src="<?= get_img() ?>/psd/About-us.png" alt="About us img">
        </div>
    </section>

    <!-- ============================================================== -->
    <!-- Treatments section -->
    <!-- ============================================================== -->
    <section class="treatment section-padding">
        <div class="treatment-first flex ">
            <h2 class="home-heading">Our Treatments</h2>
            <div class="gradient-line gradient-div"></div>
        </div>
        <div class="treatment-card-parent grid grid-3">

            <?php
            $cardImgPath =  get_img() . "psd/our-treatments-heart-yoga.png";
            $cardImgAlt = "Heart Yoga icon";
            $cardImgHeading = "Heart Yoga";
            $cardImgContent = "After years of practicing, SAAOL Heart Yoga is a holistic practice to harmonise mind, body, heart and soul for cardiovascular well-being and the best heart treatment. Join us for transformative sessions.";
            $cardImgBtn = "Know More";
            $cardLink = "https://saaol.com/life-style";

            include CARD;
            ?>

            <?php
            $cardImgPath =  get_img() . "psd/our-treatments-zero-oil.png";
            $cardImgAlt = "Zero oil cooking icon";
            $cardImgHeading = "Zero oil cooking";
            $cardImgContent = "Our expert nutritionists developed over 1000 Zero-oil cooking recipes. It is the best non-invasive heart treatment approach with heart-healthy culinary finesse";
            $cardImgBtn = "Know More";
            $cardLink = "https://saaol.com/zero-oil-cooking/";

            include CARD;
            ?>

            <?php
            $cardImgPath =  get_img() . "psd/our-treatments-lifestyle.png";
            $cardImgAlt = "Lifestyle icon";
            $cardImgHeading = "Lifestyle";
            $cardImgContent = "Welcome to the world of SAAOL’s Heart Healthy Lifestyle, your portal to a holistic approach to nurturing your heart’s health. We firmly believe that the path to a heart-healthy existence extends far beyond conventional treatments. ";
            $cardImgBtn = "Know More";
            $cardLink = "https://saaol.com/life-system/";

            include CARD;
            ?>

        </div>
    </section>

    <!-- ============================================================== -->
    <!-- EECP Treatments section -->
    <!-- ============================================================== -->

    <section class="eecp-treatments ">
        <div class="eecp-ttm-parents background-property">
            <div class="blue-layers gradient-div grid grid-2 section-padding ">
                <div class="eecp-treatment-contents">
                    <h2 class="home-heading">eecp-treatment</h2>
                    <p>
                        The interesting history of EECP (Enhanced External Counterpulsation) began in the early 1960s China, within the halls of a research laboratory where pioneering minds embarked on a journey to rewrite the narrative of heart health.

                        In this innovative laboratory, EECP treatment became a reality. A unique contraption took place – a set of inflatable cuffs designed to encircle a patient’s legs. These cuffs soon emerged as the unsung heroes of cardiac care. As time went on, EECP developed and realised its extraordinary potential. The cuffs, when synchronised with the natural rhythm of the heart, held the power to perform miracles. EECP cuffs would inflate precisely during the heart’s resting phase, lightening its load, and deflate precisely when the heart contracted, drive through a surge of life-giving blood.

                        Today, the history of EECP treatment stands as one of the most sought after heart treatment that is effective and long lasting. It emerges as the most extraordinary heart disease solutions in the world of surgeries and western medicine. EECP’s invention is an inspiration that is truly life-changing for heart patients seeking the best non-invasive heart treatment solution, forever altering the landscape of heart health.
                    </p>
                    <button class="main-button "><a href="https://saaol.com/eecp-treatment">Know More</a> <span><i class='bx bx-right-arrow-alt'></i></span></button>
                </div>
                <div class="eecp-treatment-images grid grid-center">
                    <img src="<?= get_img() ?>/psd/EECP-treatment-machine.png" alt="eecp-treatment img">
                </div>
            </div>
        </div>
    </section>


    <!-- ============================================================== -->
    <!-- patient says section -->
    <!-- ============================================================== -->

    <section class="patient-says">

        <!-- ============================================================== -->
        <!-- Numbers section -->
        <!-- ============================================================== -->
        <?php include_once PATIENT_REVIEW; ?>
    </section>


    <!-- ============================================================== -->
    <!-- why choose section -->
    <!-- ============================================================== -->
    <section class="why-choose">
        <div class="patient-says-first flex ">
            <h2 class="home-heading">Why choose us</h2>
            <div class="gradient-line gradient-div"></div>
            <p>Our mission is to improve the world's health through compassionate and affordable care through innovation.</p>
        </div>
        <div class="why-choose-conatiner grid">
            <div class="why-choose-conatiner-card gradient-div grid grid-center">
                <div class="why-choose-img-circle gradient-div grid-center">
                    <img src="<?= get_img() ?>/psd/WCU-Put the patient first.png" alt="why choose us image">
                </div>
                <p class="txt">Put the patient first</p>
            </div>
            <div class="why-choose-conatiner-card gradient-div grid grid-center">
                <div class="why-choose-img-circle gradient-div grid-center">
                    <img src="<?= get_img() ?>/psd/WCU-Take personal.png" alt="why choose us image">
                </div>
                <p class="txt">Take personal ownership</p>
            </div>
            <div class="why-choose-conatiner-card gradient-div grid grid-center">
                <div class="why-choose-img-circle gradient-div grid-center">
                    <img src="<?= get_img() ?>/psd/WCU-Celebrate the art of.png" alt="why choose us image">
                </div>
                <p class="txt">Celebrate the art of medicine</p>
            </div>
            <div class="why-choose-conatiner-card gradient-div grid grid-center">
                <div class="why-choose-img-circle gradient-div grid-center">
                    <img src="<?= get_img() ?>/psd/WCU-Be fast, but don't hurry.png" alt="why choose us image">
                </div>
                <p class="txt">Be Fast, But don't hurry</p>
            </div>
            <div class="why-choose-conatiner-card gradient-div grid grid-center">
                <div class="why-choose-img-circle gradient-div grid-center">
                    <img src="<?= get_img() ?>/psd/WCU-Always work with.png" alt="why choose us image">
                </div>
                <p class="txt">Always work with integrity</p>
            </div>
            <div class="why-choose-conatiner-card gradient-div grid grid-center">
                <div class="why-choose-img-circle gradient-div grid-center">
                    <img src="<?= get_img() ?>/psd/WCU-Be inquisitive and.png" alt="why choose us image">
                </div>
                <p class="txt">Be inquisitive and discover</p>
            </div>
        </div>
    </section>


    <!-- ============================================================== -->
    <!-- Call to action section-->
    <!-- ============================================================== -->
    <?php include_once CTA; ?>


    <!-- ============================================================== -->
    <!-- video gallery section-->
    <!-- ============================================================== -->
    <?php include_once VIDEO_GALLERY; ?>


    <!-- ============================================================== -->
    <!-- Blog cards section-->
    <!-- ============================================================== -->
    <?php include_once BLOG_LIST; ?>


    <!-- ============================================================== -->
    <!-- FAQ's section-->
    <!-- ============================================================== -->
    <?php include_once FAQS; ?>

    <!-- ============================================================== -->
    <!-- Footer section-->
    <!-- ============================================================== -->
    <?php include_once FOOTER; ?>


    <?php include_once SCRIPT; ?>


</body>

</html>