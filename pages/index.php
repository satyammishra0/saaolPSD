<?php include '../init.php';
include_once HEAD_TOP;
?>

<head>

    <title>
        <?php echo "Dashboard" ?> | SAAOL - Admin & Dashboard Template</title>

    <?php include_once HEAD; ?>

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
    <!-- First hero section of the page -->
    <!-- ============================================================== -->
    <section class="home-first-section section-padding gradient-div grid">
        <div class="home-first-left">
            <img src="<?= get_img() ?>/psd/Bimal-sir-img.png" alt="Bimal sir main img">
        </div>
        <div class="home-first-right">
            <p>SAAOL has poineered in Non-invasive Heart treatment and over the years deevloper a holistic, comprehensive, affordable and substainable treatments programs for patients.</p>
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
                            <img src="<?= get_img() ?>/psd/Healthy-lifestyle.png" alt="Healthy lifestyle img">
                        </div>
                        <div class="first-treatment-card-rigth">Healthy Lifestyle</div>
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
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore dicta voluptas similique quam quo pariatur fugiat perspiciatis? Libero autem explicabo, maiores architecto commodi officia non vitae quaerat, ducimus veniam, sequi quisquam id temporibus ratione impedit earum facere voluptatum. Sunt id totam repellendus impedit quibusdam at cum voluptas rem temporibus eveniet, nulla reprehenderit consectetur cupiditate beatae autem qui. Sed, magni dolor, sit nulla atque eius commodi earum libero deserunt neque alias totam quos explicabo! Corporis saepe voluptatem numquam necessitatibus dolores reprehenderit! Nulla mollitia ad blanditiis error vero tenetur dignissimos amet dolor, numquam doloribus eveniet rem, maiores adipisci beatae in explicabo dicta officia! Harum distinctio sunt iure fuga, laborum suscipit quos dolor rem labore consequatur
            </p>
            <button class="main-button ">Know More <span><i class='bx bx-right-arrow-alt'></i></span></button>
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
            <div>
                <?php
                $cardImgPath =  get_img() . "psd/our-treatments-heart-yoga.png";
                $cardImgAlt = "Heart Yoga icon";
                $cardImgHeading = "Heart Yoga";
                $cardImgContent = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic architecto, praesentium ea aperiam autem corrupti distinctio eum nisi similique officiis!";
                $cardImgBtn = "Know More";

                include CARD;
                ?>
            </div>
            <div>
                <?php
                $cardImgPath =  get_img() . "psd/our-treatments-zero-oil.png";
                $cardImgAlt = "Zero oil cooking icon";
                $cardImgHeading = "Zero oil cooking";
                $cardImgContent = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic architecto, praesentium ea aperiam autem corrupti distinctio eum nisi similique officiis!";
                $cardImgBtn = "Know More";

                include CARD;
                ?>
            </div>
            <div>
                <?php
                $cardImgPath =  get_img() . "psd/our-treatments-lifestyle.png";
                $cardImgAlt = "Lifestyle icon";
                $cardImgHeading = "Lifestyle";
                $cardImgContent = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic architecto, praesentium ea aperiam autem corrupti distinctio eum nisi similique officiis!";
                $cardImgBtn = "Know More";

                include CARD;
                ?>
            </div>
        </div>
    </section>

    <!-- ============================================================== -->
    <!-- EECP Treatments section -->
    <!-- ============================================================== -->

    <section class="eecp-treatment background-property ">
        <div class="blue-layer gradient-div grid grid-2 section-padding ">
            <div class="eecp-treatment-content">
                <h2 class="home-heading">eecp-treatment</h2>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore dicta voluptas similique quam quo pariatur fugiat perspiciatis? Libero autem explicabo, maiores architecto commodi officia non vitae quaerat, ducimus veniam, sequi quisquam id temporibus ratione impedit earum facere voluptatum. Sunt id totam repellendus impedit quibusdam at cum voluptas rem temporibus eveniet, nulla reprehenderit consectetur cupiditate beatae autem qui. Sed, magni dolor, sit nulla atque eius commodi earum libero deserunt neque alias totam quos explicabo! Corporis saepe voluptatem numquam necessitatibus dolores reprehenderit! Nulla mollitia ad blanditiis error vero tenetur dignissimos amet dolor, numquam doloribus eveniet rem, maiores adipisci beatae in explicabo dicta officia! Harum distinctio sunt iure fuga, laborum suscipit quos dolor rem labore consequatur
                </p>
                <button class="main-button ">Know More <span><i class='bx bx-right-arrow-alt'></i></span></button>
            </div>
            <div class="eecp-treatment-image grid grid-center">
                <img src="<?= get_img() ?>/psd/EECP-treatment-machine.png" alt="eecp-treatment img">
            </div>
        </div>
    </section>


    <!-- ============================================================== -->
    <!-- patient says section -->
    <!-- ============================================================== -->



    <?php include_once SCRIPT; ?>


</body>

</html>