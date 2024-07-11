<?php include '../init.php';
include_once HEAD_TOP;
?>

<head>

    <title> <?php echo "Center Page" ?> | SAAOL </title>

    <?php include_once HEAD; ?>

    <!-- Home css -->
    <link href="<?= get_assets() ?>css/pages/about-drbimal.css" rel="stylesheet" type="text/css" />

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
                <h2 class="home-heading">Simplifying Heart Care Experience in India</h2>

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
    <section class="about-saaol section-padding">
        <div class="about-container">
            <div class="about-saaol-grid grid grid-2 grid-center">
                <div class="about-saaol-grid-img">
                    <img src="https://saaol.com/assets/images/home/dr-bimal-img.jpg" alt="Dr. Bimal Image">
                </div>
                <div class="about-saaol-grid-content ">
                    <h1 class="main-heading">Dr. Bimal Chhajer </h1>
                    <p class="txt">
                        <b> MBBS, MD, Founder | SAAOL </b>
                        <br>
                        Dr. Bimal Chhajer MBBS, MD is a well-known personality in the world of medical science in India and abroad. He is the pioneer of Non-invasive cardiology in India.
                    </p>
                    <br><br>
                    <button class="main-button">
                        <a href="https://saaol.com/book-an-appointment/"> Book An Appointment</a>
                    </button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- About dr bimal section -->
            <!-- ============================================================== -->
            <section class="bimal-sir-container">
                <div class="bimal-sir-left-panel">
                    <button class="bimal-sir-tab-button active" onclick="showContent('bimal-sir-about')">About</button>
                    <button class="bimal-sir-tab-button" onclick="showContent('bimal-sir-specialisations')">Specialisations</button>
                    <button class="bimal-sir-tab-button" onclick="showContent('bimal-sir-certificates')">Certificates & Awards</button>
                </div>
                <div class="bimal-sir-right-panel">
                    <div id="bimal-sir-about" class="bimal-sir-tab-content active">
                        <h2>About</h2>
                        <p>Dr. Bimal Chhajer MBBS, MD is a well-known personality in the world of medical science in India and abroad. He is the pioneer of Non-invasive cardiology in India. Born in 1961 in a Jain family, Dr. Chhajer grew up in a small village in West Bengal and passed his matriculation with flying colours from a local school. He studied in St. Lawrence high school in Kolkata thereafter and in 1986 pursued his MBBS from R.G. Kar Medical College, Kolkata. At the age of 25, he shifted to Delhi, where he started working in the cardiology department in Dr. Ram Manohar Lohia Hospital, New Delhi. A particular incident changed his life here and reformed his idea about the treatment of cardiac patients. He started advocating non-invasive or preventive cardiology. He then completed his MD in 1989 from king George’s Medical College, Lucknow where he took up a research study to treat heart patients using non-Invasive methods. Post MD he worked at the famous All India Institute of Medical Sciences (AIIMS) for six years (1989-1995) as a Senior Resident and as an Assistant Professor. He also got training in yoga therapy. His research at the AIIMS showed that not only heart patients could prevent coronary heart disease but can also reverse or cure heart disease. Dr. Chhajer during this stint also got trained by Dr. Dean Ornish, who pioneered the lifestyle treatment in USA. In 1995 based on his past research, Dr. Bimal chhajer resigned from AIIMS and started practically training and treating heart patients by his new treatment called “SAAOL” Science And Art Of Living in Delhi. In 1996 Dr. Chhajer opened his second clinic in Mumbai and subsequently expanded to Kolkata, Chennai, Bangalore and Hyderabad. These were followed by a spread of Saaol Centers all over the country. In 2009 Saaol opened its first international Center in Dhaka, Bangladesh and a year later in Nepal, Kathmandu. Currently Dr. Chhajer has 110 centers across India and the subcontinent. Saaol Heart Center is now the largest chain of non-invasive cardiology clinics in the world.

                            Brainchild of Dr. Chhajer, “Saaol Heart Program” today is a widely accepted treatment program for reversing heart disease – where in addition to the allopathic medicines, patients are taught yoga, meditation, zero oil cooking, stress management, exercise and medical knowledge. Dr. Chhajer has authored about 70 books for heart patients and health, his numerous lectures are available in the form of DVD, Internet/You tube. He is a magnificent teacher of preventive cardiology. Dr. Chhajer extensively travels all over India and world to promote non-invasive mode of treatment. He also publishes 2 monthly magazines on heart care. He has treated over 4.5 lac heart patients successfully who could avoid bypass surgery or angioplasty. He has received many awards including Rajiv Gandhi Rashtriya Ekta award.</p>
                    </div>
                    <div id="bimal-sir-specialisations" class="bimal-sir-tab-content">
                        <h4 class="sub-heading">Specialisation &amp; Certifications</h4>
                        <ul class="txt">
                            <li> <i class="bx bx-plus-medical"></i> Rajiv Gandhi Rashtriya Ekta Award, 2002.</li>
                            <li> <i class="bx bx-plus-medical"></i> Bhaksar Award for the year 2002 by bharat nirman.</li>
                            <li> <i class="bx bx-plus-medical"></i> Samaj Ratna Award by Skjm Samiti, 2004.</li>
                            <li> <i class="bx bx-plus-medical"></i> Rotary International Vocational Award, 2002.</li>
                            <li> <i class="bx bx-plus-medical"></i> Swami Vivekanand Memorial Oration Award from Delhi Medical Association, 2004.</li>
                            <li> <i class="bx bx-plus-medical"></i> MSPI outstanding personalities award by management studies promotion institute, 1998.</li>
                            <li> <i class="bx bx-plus-medical"></i> Prominent Doctors Award by lion’s club.1998</li>
                        </ul>
                    </div>
                    <div id="bimal-sir-certificates" class="bimal-sir-tab-content">
                        <h4 class="sub-heading">Awards &amp; Recognition</h4>
                        <ul class="txt">
                            <li> <i class="bx bxs-award"></i> P.S. Varier memorial speech at Arya Vidya Sala, Kottakkal, 1999.</li>
                            <li> <i class="bx bxs-award"></i> Kent Memorial lecture at Homeopathy Association, 1995.</li>
                            <li> <i class="bx bxs-award"></i> lBF Visionary award for , 2009” by Laksha Bharati Foundation.</li>
                            <li> <i class="bx bxs-award"></i> Sri Raghunath Rai Saraf Smriti Puraskar” on 28th march, 2010 at the FICCI Auditorim, New Delhi.</li>
                            <li> <i class="bx bxs-award"></i> Health Siromani award on september 5, 2010 by famous “Laughter Club”.</li>
                            <li> <i class="bx bxs-award"></i> Jeevan Rakshak Award, by Kolkata Maheshwari Samaj in September 2010.</li>
                            <li> <i class="bx bxs-award"></i> Third A P Dewan Memorial lecture, 2006 by the “Servants of the People Society, Lajpat Bhawan” july, 2006.</li>
                            <li> <i class="bx bxs-award"></i> “Doctor of the Year 2012” award by the “India Book of Records” presented on 27th february, 2013.</li>
                            <li> <i class="bx bxs-award"></i> “Banga Seva Samman, 2011” – the prestigious award for the people of Bengal who have reached excellence.</li>
                            <li> <i class="bx bxs-award"></i> “Banga Seva Samman, 2011” – the prestigious award for the people of Bengal who have reached excellence.</li>
                            <li> <i class="bx bxs-award"></i> ”Manav Seva Ratna Samman” in 2016 by Bhagwan Mahavir Seva Sansthan.</li>
                        </ul>
                    </div>
                </div>
            </section>

        </div>
    </section>


    <!-- ============================================================== -->
    <!-- Footer section-->
    <!-- ============================================================== -->
    <?php include_once FOOTER; ?>


    <!-- ============================================================== -->
    <!-- Major scripts section-->
    <!-- ============================================================== -->
    <?php include_once SCRIPT; ?>

    <script src="<?= get_js() ?>about-drbimal.js"></script>

</body>

</html>