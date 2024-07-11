<?php include '../init.php';
include_once HEAD_TOP;
?>

<head>

    <title> <?php echo "Center Page" ?> | SAAOL </title>

    <?php include_once HEAD; ?>

    <!-- Home css -->
    <link href="<?= get_assets() ?>css/pages/instruction-for-patients.css" rel="stylesheet" type="text/css" />

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
                <h2 class="home-heading">Instruction for patients</h2>

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
    <section class="instruction-patient-card-container">
        <div class="instruction-patient-card">
            <i class='bx bx-walk instruction-patient-card-icon'></i>
            <h3>Walk Everyday</h3>
            <p>Every day, do a 35-minute walk on an empty stomach. If you have angina, your speed may be reduced. If you’re in bed or have just gotten out of an emergency, start with one minute per day and gradually increase up to 35 minutes.</p>
        </div>
        <div class="instruction-patient-card">
            <i class='bx bx-yoga instruction-patient-card-icon'></i>
            <h3>Yoga</h3>
            <p>Please watch Dr. Chhajer’s three videos on YouTube titled “Daily Yoga for Heart.” There are three videos. Begin with first and third video. After a week or so, add the second one. It will take approximately 25 minutes per day.</p>
        </div>
        <div class="instruction-patient-card">
            <i class='bx bx-food-menu instruction-patient-card-icon'></i>
            <h3>Zero Oil Cooking</h3>
            <p>To be completely adopted from the beginning. SAAOL has created 1000 tasty recipes for which you can subscribe to our YouTube channel “Zero oil recipes” or refer to our cookbooks. Spices are to be fried in water which is to be added in drops as and when required.</p>
        </div>
        <div class="instruction-patient-card">
            <i class='bx bx-no-entry instruction-patient-card-icon'></i>
            <h3>Animal Foods</h3>
            <p>Completely avoid all kinds of animal foods like meat, chicken, fish, egg yolk etc.</p>
        </div>
        <div class="instruction-patient-card">
            <i class='bx bx-coffee-togo instruction-patient-card-icon'></i>
            <h3>Milk and Milk Products</h3>
            <p>Dairy products are allowed if you use double toned (200ml) or skimmed milk (500ml).</p>
        </div>
        <div class="instruction-patient-card">
            <i class='bx bx-nut instruction-patient-card-icon'></i>
            <h3>All Nuts and Seeds</h3>
            <p>Avoid almond, walnuts, cashew nuts, ground nuts, coconut and pistachio. Seeds like Alsi (Linseeds) and khas khas should be restricted.</p>
        </div>
        <div class="instruction-patient-card">
            <i class='bx bx-test-tube instruction-patient-card-icon'></i>
            <h3>Diabetes</h3>
            <p>If you have diabetes, measure your blood sugar level on a regular basis. Our aim is to keep it under 100 (during fasting) and 140 (after meal). Three months sugar (HB A1c) should be below 6.5%.</p>
        </div>
        <div class="instruction-patient-card">
            <i class='bx bx-test-tube instruction-patient-card-icon'></i>
            <h3>Lipid Profile</h3>
            <p>As directed by your physician, get your blood lipid profile tested once a month, then every three months or 3-4 times a year. Cholesterol should be below 130 mg/dL, Triglycerides should be below 100 mg/dL, and Good Cholesterol (HDL) should be more than 25% of cholesterol level.</p>
        </div>
        <div class="instruction-patient-card">
            <i class='bx bx-no-smoking instruction-patient-card-icon'></i>
            <h3>Smoking/Tobacco</h3>
            <p>Stop smoking and intake of other forms of tobacco immediately. Any kind of alcohol is bad for heart and should be avoided.</p>
        </div>
        <div class="instruction-patient-card">
            <i class='bx bx-brain instruction-patient-card-icon'></i>
            <h3>Stress</h3>
            <p>Patient must try to reduce psychological stress (anger, worry, anxiety etc.) as far as possible. Please follow Dr. Chhajer’s talks on stress management or read his book on the same topic.</p>
        </div>
        <div class="instruction-patient-card">
            <i class='bx bx-capsule instruction-patient-card-icon'></i>
            <h3>Medications</h3>
            <p>Medicines prescribed by SAAOL are mainly allopathic. You should take them as instructed till the next consultation. You should also know the basic purpose/use of all medicines. Once the patient shows improvement, our aim will be to reduce it as far as possible.</p>
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


</body>

</html>