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
            <a class="main-button" href="https://saaol.com/about">Know More</a>
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
                    <a class="main-button " href="https://saaol.com/eecp-treatment">Know More<span><i class='bx bx-right-arrow-alt'></i></span></a>
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

    <!-- ============================================================== -->
    <!-- Slick js slider review -->
    <!-- ============================================================== -->
    <section class="cities-slider">
        <h2 class="home-heading">What people say about us?</h2>
        <div class="multiple-items" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>


            <div class="card-city-review">
                <div class="quote">
                    <img src="<?= get_img() ?>psd/quote-left.png" alt="Double quotes">
                </div>
                <p class="city-review">Dr Bimal is very humble and down-to-earth, my grandfather had heart problem and we went to SAAOL, suggested by our friend. Dr Bimal helped us solve our query with utmost patience. Really appreciate, fully satisfied.</p>
                <div class="line-city-review"></div>
                <div class="reviewer-info">
                    <img src="<?= get_img() ?>psd/user-img.jpg" alt="Reviewer Image" class="city-review">
                    <div class="reviewer-details">
                        <div class="name-city-review">Abhishek Jaiswal</div>
                        <div class="address-city-review">Rohtak, Haryana</div>
                    </div>
                </div>
            </div>


            <div class="card-city-review">
                <div class="quote">
                    <img src="<?= get_img() ?>psd/quote-left.png" alt="Double quotes">
                </div>
                <p class="city-review">I am so glad that I have come here to treat my mom. The front line staffs are very helping nature.... Specially receptionists. Awesome place fir heart patients....</p>
                <div class="line-city-review"></div>
                <div class="reviewer-info">
                    <img src="<?= get_img() ?>psd/user-img.jpg" alt="Reviewer Image" class="city-review">
                    <div class="reviewer-details">
                        <div class="name-city-review">ARHAN AAFRI</div>
                        <div class="address-city-review">City, State</div>
                    </div>
                </div>
            </div>


            <div class="card-city-review">
                <div class="quote">
                    <img src="<?= get_img() ?>psd/quote-left.png" alt="Double quotes">
                </div>
                <p class="city-review">I am just sharing my experience after 4 years of regular consultation from Delhi Chhatarpur center. I am totally satisfied. 95% and 80% blockage were in few major places from many blockages.</p>
                <div class="line-city-review"></div>
                <div class="reviewer-info">
                    <img src="<?= get_img() ?>psd/user-img.jpg" alt="Reviewer Image" class="city-review">
                    <div class="reviewer-details">
                        <div class="name-city-review">Pranav Kumar</div>
                        <div class="address-city-review">City, State</div>
                    </div>
                </div>
            </div>


            <div class="card-city-review">
                <div class="quote">
                    <img src="<?= get_img() ?>psd/quote-left.png" alt="Double quotes">
                </div>
                <p class="city-review">The doctor and staff here are very good. My grandmother had heart blockage problem and brought us here for ecp. The doctor understood us very well and we took ecp treatment and it was very successful.</p>
                <div class="line-city-review"></div>
                <div class="reviewer-info">
                    <img src="<?= get_img() ?>psd/user-img.jpg" alt="Reviewer Image" class="city-review">
                    <div class="reviewer-details">
                        <div class="name-city-review">Naida</div>
                        <div class="address-city-review">City, State</div>
                    </div>
                </div>
            </div>


            <div class="card-city-review">
                <div class="quote">
                    <img src="<?= get_img() ?>psd/quote-left.png" alt="Double quotes">
                </div>
                <p class="city-review">
                    This Hospital is Located in DLF Westend Farms.(right behind the DLF Chhatarpur Farms). You can reach here By Metro also. Just get down at Chattarpur metro station and take any Public transport to reach here. This is located on the Mandi Gaon Riad. This is the Best Place for the Treatment for the Heart Disease without any Surgery . Operated by The Doctor Bimal Chajjar.
                </p>
                <div class="line-city-review"></div>
                <div class="reviewer-info">
                    <img src="<?= get_img() ?>psd/user-img.jpg" alt="Reviewer Image" class="city-review">
                    <div class="reviewer-details">
                        <div class="name-city-review">Mickpreet</div>
                        <div class="address-city-review">City, State</div>
                    </div>
                </div>
            </div>


        </div>
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

    <script>
        $(document).ready(function() {
            $(".multiple-items").slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                adaptiveHeight: true,
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev">Previous</button>',
                nextArrow: '<button type="button" class="slick-next">Next</button>',
                autoplay: true,
                autoplaySpeed: 10000,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true,
                        },
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                ],
            });
        });
    </script>
</body>

</html>