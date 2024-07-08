<?php

define('APPPATH', __DIR__);
function base_url()
{
    return "https://saaol.com/";
}


if (isset($_GET['cityname'])) {
    // Exploding and removing the dashes from URL
    $cityName = $_GET['cityname'];
    $cityName = trim($cityName);
    $cityName = ucwords($cityName);
    $cityName = str_replace("-", " ", $cityName);
}

$metaTitle = ucwords($cityName) . " Saaol Center";
$metaDesc = "";

$fetchSeoQuery = "SELECT * FROM `seo_details` JOIN `city-card-details` ON `seo_details`.`page_id`= `city-card-details`.`id` WHERE 
`city-card-details`.`city_name` = :cityname;";

$fetchSeoStmtQuery = $conn->prepare($fetchSeoQuery);
$fetchSeoStmtQuery->bindParam(":cityname", $cityName);

try {
    $fetchSeoStmtQuery->execute();
    $SEOResults = $fetchSeoStmtQuery->fetch(PDO::FETCH_ASSOC);


    if (isset($SEOResults['meta_title'])) {
        $metaTitle = $SEOResults['meta_title'];
    } else {
        $metaTitle = ucwords($cityName) . " Saaol Center";
    }


    if (isset($SEOResults['meta_description'])) {
        $metaDesc = $SEOResults['meta_description'];
    } else {
        $metaDesc = "";
    }


    if (isset($SEOResults['og_details'])) {
        $ogDetails = $SEOResults['og_details'];
    } else {
        $ogDetails = "";
    }


    if (isset($SEOResults['local_schema_details'])) {
        $localSchemaDetails = $SEOResults['local_schema_details'];
    } else {
        $localSchemaDetails = "";
    }
} catch (PDOException $th) {
    throw $th;
}


// Fetching center details
$result = $fetchCityPrep->fetchAll(PDO::FETCH_ASSOC);

$phoneNo = $result[0]['phone_no'];
$opening_days = $result[0]['opening_days'];
$timings = $result[0]['timings'];
$centerUrl = $result[0]['center_url'];
$centerAppointmentUrl = $result[0]['center_appointment_url'];

if (isset($_GET[''])) {
    $centerEmail = $_GET['center'];
} else {
    $centerEmail = '';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $metaTitle ?></title>
    <meta name="description" content="<?= $metaDesc ?>">
    <!-- Stylesheets -->
    <meta charset="UTF-8" />
    <?= $ogDetails; ?>
    <!-- Stylesheets -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Carousels js -->
    <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="<?= base_url() ?>all-center-list/assets/css/style.css" />
    <link rel="stylesheet" href="<?= base_url() ?>all-center-list/assets/css/utility.css" />
    <link rel="stylesheet" href="<?= base_url() ?>all-center-list/assets/css/centers-list.css" />
    <link rel="stylesheet" href="<?= base_url() ?>all-center-list/assets/css/state.css" />
    <link rel="stylesheet" href="<?= base_url() ?>all-center-list/assets/css/city.css" />

    <!-- Carousels js -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <?php include APPPATH . '/includes/metas.php'; ?>
    <style>
        .flex-container {
            display: flex;
            justify-content: space-around;

        }

        .flex-container {
            position: absolute;
            top: 55%;
            left: 4%;
        }

        .flex-container>button {
            margin: 0 10px;
        }

        .flex-container>button:first-child {
            background-color: var(--red);
            border-radius: 6px;
            height: 42px;
            outline: none;
            border: none;
        }



        .flex-container>button:first-child>a {
            padding: 10px;
            font-size: 14px;
            font-weight: bold;
            color: var(--white);
        }

        .flex-container>button:nth-child(2) {
            background-color: var(--blue);
            border-radius: 6px;
            height: 38px;
            outline: none;
            border: none;
        }

        .flex-container>button:nth-child(2)>a {
            padding: 10px;
            font-size: 14px;
            font-weight: bold;
            color: var(--white);
        }

        .flex-container>button:nth-child(3) {
            background-color: var(--blue);
            border-radius: 6px;
            height: 38px;
            outline: none;
            border: none;
        }

        .flex-container>button:nth-child(3)>a {
            padding: 10px;
            font-size: 14px;
            font-weight: bold;
            color: var(--white);
        }

        .flex-container>button:last-child {
            background-color: var(--blue);
            border-radius: 6px;
            height: 38px;
            outline: none;
            border: none;
        }

        .flex-container>button:last-child>a {
            padding: 10px;
            font-size: 14px;
            font-weight: bold;
            color: var(--white);
        }

        .city_information_on_mobile {
            display: none;
        }

        @media only screen and (max-width: 480px) {

            html,
            body {
                width: auto !important;
                overflow-x: hidden !important
            }

            .flex-container {
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                width: 353px;
                flex-wrap: wrap;

            }

            .city_information {
                display: none;
            }

            .city_information_on_mobile {
                display: block;
                top 140%;
            }

            .about-section-left {
                margin-right: 5%;
                margin-top: 30%;
            }

            .margin-top-60 {
                margin-top: 60%;
            }

            .about-section-left>img {
                height: auto;
                max-width: 100%;
                margin-top: 30px;
            }

            .heading-big {
                font-size: 15px;
                letter-spacing: 0px;
                line-height: 1.2;
                font-weight: 700;
                text-align: center;
                margin-top: 13px;
            }

            .txt {
                font-size: 14px;
                line-height: 1.4;
                word-spacing: 0.6px;
                text-align: center;
            }

            .txt ul {
                margin: 0 10px;
            }

            .sub-heading {
                font-size: 17px;
                letter-spacing: 1px;
                line-height: 1.5;
                font-weight: 600;
                margin: 10px 0;
                text-align: center;
            }

            .about-section-right>ul {
                padding-left: 13%;
                font-size: 15px;
                margin: 10px 0;
            }

            .page-main-btn {
                background-color: var(--red);
                border-radius: 40px;
                font-size: 19px;
                padding: 15px 35px;
                font-weight: bold;
                color: var(--white);
                outline: none;
                border: none;
                cursor: pointer;
                margin: 15px 0;
            }

            .flex-container {
                position: absolute;
                top: 107%;
                left: -3%;
            }

            .flex-container>button {
                margin: 0 10px;
            }

            .heading-big {
                font-size: 15px;
                letter-spacing: 0px;
                line-height: 1.2;
                font-weight: 700;
                text-align: center;
                margin-top: 13px;
            }

            .flex-container>button:first-child {
                background-color: var(--red);
                border-radius: 6px;
                height: 42px;
                outline: none;
                border: none;
            }

            .flex-container>button:first-child>a {
                padding: 10px 4px;
                font-size: 11px;
                font-weight: bold;
                color: var(--white);
            }

            .flex-container>button:nth-child(2) {
                background-color: var(--blue);
                border-radius: 6px;
                height: 42px;
                outline: none;
                border: none;
                margin: 10px;
            }

            .flex-container>button:nth-child(2)>a {
                padding: 10px 4px;
                font-size: 11px;
                font-weight: bold;
                color: var(--white);
            }

            .flex-container>button:nth-child(3) {
                background-color: var(--blue);
                border-radius: 6px;
                height: 42px;
                outline: none;
                border: none;
                margin: 10px;
            }

            .flex-container>button:nth-child(3)>a {
                padding: 10px 4px;
                font-size: 11px;
                font-weight: bold;
                color: var(--white);
            }

            .flex-container>button:last-child {
                background-color: var(--blue);
                border-radius: 6px;
                height: 38px;
                outline: none;
                border: none;
            }

            .flex-container>button:last-child>a {
                padding: 10px 4px;
                font-size: 11px;
                font-weight: bold;
                color: var(--white);
            }

            .icons_class {
                font-size: 13px;
                color: white;
                margin-right: 5px;
                padding: 0 3px 0 5px;
            }

            h1.heading-big {
                font-size: 40px;
                letter-spacing: 1px;
                line-height: 1.5;
                font-weight: 500;
            }
    </style>
</head>

<body>
    <!-- Header -->
    <?php include 'includes/header.php'; ?>

    <!-- Banner Section -->
    <!--   <section style="padding:0 5%; position:relative; z-index:222;">
        <section class="banner-section">
           
           <div class="banner-contact-btn" style="overflow: hidden;">
             
                <button><a href="">Call Us:<? //= $phoneNo 
                                            ?> </a></button>
                <button><a href="" style="text-transform:capitalize; width: fit-content;"><? //= $cityName 
                                                                                            ?></a></button> 
                  </div> 
    </section>
        
       
    </section>-->





    <section style="padding:0 5%;position:relative; z-index:222;" class="city_information">
        <section class="banner-section">
            <div class="flex-container" style=" display:flex;
        justify-content:space-around;">


                <button><a href="" style=""><i class="fa fa-mobile icons_class" aria-hidden="true"></i>&nbsp; Call Us : <?= $phoneNo ?> </a></button>


                <?php
                if ($timings != '') { ?>
                    <button><a href="" style="text-transform:capitalize; width: fit-content;"><i class='far icons_class'>&#xf017;</i>&nbsp; Timings : <?= $timings ?></a></button>
                <?php
                }
                if ($opening_days != '') { ?>

                    <button><a href="" style="text-transform:capitalize; width: fit-content;"><i class="fa fa-calendar icons_class" aria-hidden="true"></i>&nbsp; opening Days : <?= $opening_days ?></a></button>
                <?php
                }
                ?>
                <button><a href="" style="text-transform:capitalize; width: fit-content;"><i class="fa fa-map-marker icons_class " aria-hidden="true"></i>&nbsp; Location : <?= $cityName ?></a></button>
            </div>
            <!--<div class="banner-contact-btn" >-->

        </section>


    </section>

    <section style="padding:0 5%;position:relative; z-index:222;" class="city_information_on_mobile">
        <section class="banner-section" style="background-image: url(<?= base_url() ?>assets/images/mobile-city-banner.jpg);margin-top:4px">
            <div class="flex-container" style="margin-top:10px
        display:flex;
        justify-content:space-around;">

                <button style="text-align:left;"><a href=""><i class="fa fa-mobile icons_class" aria-hidden="true"></i>&nbsp; Call Us : <?= $phoneNo ?> </a></button>
                <button style="text-align:left;"><a href="" style="text-transform:capitalize; width: fit-content;text-align:left;"><i class="fa fa-map-marker icons_class " aria-hidden="true"></i>&nbsp; Location : <?= $cityName ?></a></button>
                <?php
                if ($timings != '') { ?>
                    <button style="text-align:left;"><a href="" style="text-transform:capitalize; width: fit-content;"><i class='far icons_class'>&#xf017;</i>&nbsp; Timings : <?= $timings ?></a></button>
                <?php
                }
                if ($opening_days != '') { ?>

                    <button style="text-align:left;"><a href="" style="text-transform:capitalize; width: fit-content;"><i class="fa fa-calendar icons_class" aria-hidden="true"></i>&nbsp; opening Days : <?= $opening_days ?></a></button>

                <?php

                }
                ?>

            </div>
            <!--<div class="banner-contact-btn" >-->

        </section>


    </section>

    <!-- About section one -->
    <section class="about-section padding ">
        <div class="about-section-grid grid grid-2">
            <?php if ($timings != "") { ?>
                <div class="about-section-left margin-top-60">
                <?php
            } else { ?>
                    <div class="about-section-left">
                    <?php
                }

                if ($cityName == "mohali") { ?>
                        <img style="width:100%;" src="<?= base_url() ?>assets/images/center-images/mohali-office.jpg" alt="Mohali Center Image 1">
                    <?php   } elseif ($cityName == "ambala") {
                    ?>
                        <img style="width:100%;" src="<?= base_url() ?>assets/images/center-images/ambala-office.jpg" alt="Ambala Center image">
                    <?php
                } else {
                    ?>
                        <img src="<?= base_url() ?>all-center-list/assets/images/franchise-img.jpg" alt="Franchise Image">
                    <?php
                }
                    ?>
                    </div>




                    <div class="about-section-right">
                        <h1 class="heading-big" style="text-transform:capitalize;">
                            About SAAOL <?= $cityName ?> Center
                        </h1>
                        <p class="txt">
                            SAAOL, the acronym for Science and Art of Living, is based on the central principle of combining modern, well-established medical sciences. We provide contemporary allopathic medications and radiological and pathological tests, with proper art of living practices from ancient Indian culture, such as modifying one’s lifestyle, managing stress, practicing mindfulness, eating a balanced diet, and engaging in physical activity.
                        </p>
                        <button class="page-main-btn" onclick="appointmentPage()">
                            Book an appointment
                        </button>
                    </div>
                </div>
                <div class="txt">
                    Dr. Bimal Chhajer, MD, MBBS, who had previously worked at AIIMS, New Delhi, had the idea and started SAAOL Heart Center in 1995. To promote EECP therapy, SAAOL Heart Center, which already has 100+ centers across India, decided to expand its operations in <?= $cityName ?>, UP to help and treat the heart problems of even more people. SAAOL does not support or advise against any surgical interventions on the human body because we believe that a natural, multidisciplinary, and holistic approach is significantly more beneficial and sustainable for long-lasting health and disease relief.
                    <br><br>
                    Like our other centers, SAAOL Heart Center in <?= $cityName ?> has the best EECP machine, imported from the United States of America that will cure your problem in a safe, non-invasive, and cost-effective way. For treating heart disease in your hometown, we provide EECP therapy, SAAOL Detox & lifestyle modification programs to give fast and long-term results of the therapy
                </div>
    </section>


    <!-- Section two -->

    <section class="about-section-two padding ">
        <h3 class="heading-big" style="text-transform:capitalize;">
            What We Provide at SAAOL Heart Center, <?= $cityName ?>
        </h3>

        <h2 class="sub-heading">
            EECP Therapy – Natural Bypass
        </h2>
        <p class="txt">
            This is a US FDA Approved Non-Invasive Version of Bypass Surgery. In this treatment, New Tubes which are dormant in Heart patients which are called Collaterals are opened by using a Special EECP Machine. A minimum of 40 Sittings of 1 hour is required for efficient results.
            <br><br>
            It is the procedure that may be performed on individuals both males and females with Stable or Unstable Angina Pectoris, Heart Failure, or Cardiomyopathy. This treatment was introduced in the mid-1980s when the US FDA approved it. EECP aims to increase the amount of blood going back to the heart from extremities during Diastole when heart muscles relax, resulting in providing more amount of blood supply for the heart to pump during systole when heart muscles contract
        </p>
    </section>


    <!-- Section three -->
    <section class="about-section-three padding">
        <div class="about-section-grid grid grid-2">

            <div class="about-section-right">
                <h3 class="heading-big">
                    WHY EECP AND NOT BYPASS SURGERY?
                </h3>
                <p class="txt">
                    EECP is the Only Non-Surgical Treatment available at Present that reverses Coronary Artery Disease.
                </p>
                <ul>
                    <li style="list-style-type:bullet !important;"> Approved Treatment By US FDA and Other Regulatory Authorities</li>
                    <li style="list-style-type:bullet !important;"> Non-Surgical</li>
                    <li style="list-style-type:bullet !important;"> No Side Effects</li>
                    <li style="list-style-type:bullet !important;"> Cost-efficient</li>
                    <li style="list-style-type:bullet !important;"> Patient-friendly</li>
                    <li style="list-style-type:bullet !important;"> Worldwide accepted</li>
                    <li style="list-style-type:bullet !important;"> Increases Oxygenated blood flow to other organs of the body</li>
                    <li style="list-style-type:bullet !important;"> Improves Blood Glucose Levels</li>
                    <li style="list-style-type:bullet !important;"> Corrects Hypertension</li>
                    <li style="list-style-type:bullet !important;"> Calms Anxiety</li>
                    <li style="list-style-type:bullet !important;"> Calms Depression</li>
                    <li style="list-style-type:bullet !important;"> Corrects Insomnia</li>
                    <li style="list-style-type:bullet !important;"> Causes Mood Elevation
                </ul>
            </div>

            <div class="about-section-left grdi grid-center">
                <img src="<?= base_url() ?>all-center-list/assets/images/Enhanced-External-Counter-Pulsation-EECP.jpg" alt="Franchise Image">
                <button class="page-main-btn" onclick="appointmentPage()">
                    Book an appointment
                </button>
            </div>
        </div>
    </section>

    <!-- Section four -->
    <section class="about-section-two padding ">
        <h2 class="sub-heading"> How to Prevent Heart Disease?

        </h2>
        <p class="txt">
            Dealing with your Heart Disease Includes an understanding of a few things that are listed down.
        </p>

        <h2 style="margin-top:3% ;" class="sub-heading">
            Understand Your Risk Factors
        </h2>
        <p class="txt">
            The first step toward heart health is understanding your risk of heart disease. Risk factors are conditions or habits that make a person more likely to develop a disease. Preventing heart disease starts with knowing what your risk factors are and what you can do to lower them. Your risk depends on many factors, some of which are changeable and others that are not. These risk factors may be different for each person. </p>

        <h2 style="margin-top:3% ;" class="sub-heading">
            Your Risk of Heart Disease is Higher if You
        </h2>
        <p class="txt">
        <ul>
            <li> Have High Blood Pressure</li>
            <li> Have High Blood Cholesterol</li>
            <li> Being overweight or Obesity</li>
            <li> Diabetes</li>
        </ul>
        </p>
    </section>

    <!-- Section seven -->
    <section class="about-section padding ">
        <div class="about-section-grid grid grid-2">
            <div class="about-section-left grid grid-center">
                <img src="<?= base_url() ?>all-center-list/assets/images/cardio-detox.jpeg" alt="Cardio detox">

            </div>
            <div class="about-section-right">
                <h3 class="heading-big">
                    Cardio Detox
                </h3>
                <p class="txt">
                    SAAOL DETOXIFICATION Therapy also called Artery Clearance Therapy (ACT) or Chelation Therapy, is a chemical process in which a substance is used to bind metals or minerals so they can be excreted out from the body. It is used as an Adjuvant or complementary treatment for heart disease along with EECP. In this, a solution of disodium EDTA along with Antioxidants Vitamins, Blood Thinners, and diuretics are used to cleanse Impurities from the body. A Dose of 20- 30 Intra Venous or IV Infusions is used, infusions last 2-2.30 Hours on alternative days. The reversal of blockage from coronary arteries occurs because of the reverse osmosis mechanism. When the bio-chemicals are passed through the intervention system the blockage becomes soft and the rate of reverse osmosis increases. When Cardio Detox is given along with EECP both the treatments (EECP &ACT) complementarily benefit each other.
                </p>
                <button class="page-main-btn" onclick="appointmentPage()">
                    Book an appointment
                </button>
            </div>
        </div>
    </section>

    <!-- Section eight -->
    <section class="about-section-two padding ">
        <h2 class="sub-heading">
            What Has Research Shown About Chelation for Coronary Heart Disease? </h2>
        <p class="txt">
            One large-scale study of chelation for coronary disease is under trial to Assess Chelation Therapy (TACT), sponsored by the National Center for Complementary and Integrative Health (NCCIH) and the National Heart, Lung, and Blood Institute.
            <br><br>
            1708 people who participated in TACT were aged 50 or older and had had at least one heart attack. They were randomly assigned to receive 40 treatments with EDTA or a placebo, plus either high-dose vitamins and minerals or placebo pills, and they did not know which treatment they were receiving.
            <br><br>
            Overall, chelation therapy produced a modest reduction in cardiovascular events. However, further analysis showed that the beneficial effect occurred also in people with diabetes.
        </p>

        <h2 class="sub-heading" style="margin-top:3%;">Is More Research Currently Being Done on Chelation for Coronary Heart Disease?</h2>
        <p class="txt">A large-scale study called Trial to Assess Chelation Therapy 2 (TACT2) is now in progress. Its purpose is to repeat the first TACT study—but only in patients with diabetes who have had a heart attack to see if the apparent benefit can be confirmed. TACT2 is supported by NCCIH and other NIH agencies.</p>
    </section>

    <!-- Section seven -->
    <section class="about-section padding ">
        <div class="about-section-grid grid grid-2">
            <div class="about-section-left grid grid-center">
                <img src="<?= base_url() ?>all-center-list/assets/images/cardio-detox.jpeg" alt="Cardio detox">

            </div>
            <div class="about-section-right">
                <h3 class="heading-big">
                    SAAOL Lifestyle Management
                </h3>
                <p class="txt">
                    Heart disease is the leading cause of death globally for both men and women. But you can do a lot to protect your heart and stay healthy. Heart-healthy living involves understanding your risk, making choices, and taking steps to reduce your chances of getting Coronary Heart Disease. The most common is Heart Attack, but by taking preventive measures, you can lower your risk of developing heart disease and also improve your overall health and well-being.
                </p>
                <button class="page-main-btn" onclick="appointmentPage()">
                    Book an appointment
                </button>
            </div>
        </div>
    </section>

    <!-- Last Section -->
    <section class="about-section-three padding">
        <div class="about-section-grid grid grid-2">
            <div class="about-section-right">
                <h3 class="heading-big">
                    YOGA FOR HEART PATIENTS </h3>
                <p class="txt">
                    Our heart is an organ that works continuously even when we fall asleep. It is the most vital organ responsible for pumping blood throughout the body and so it is crucial to take better care of it. A sedentary lifestyle, food habits, and stress are a few things that can disturb the normal functioning of our hearts and can increase the risk of cardiovascular problems. In such a condition, yoga is one of the best ways to take care of your heart. Practicing yoga every day can keep your heart healthy. Yoga helps to reduce stress, and anxiety and lower the risk of depression, which is quite beneficial for your heart health.
                </p>
                <button class="page-main-btn" onclick="appointmentPage()">
                    Book an appointment
                </button>
            </div>

            <div class="about-section-left grdi grid-center">
                <img style="width:100%;" src="<?= base_url() ?>assets/images/life-style/young-beautiful-woman-doing-yoga.jpg" alt="Lifestyle and yoga">

            </div>
        </div>
    </section>

    <!-- Reviews  -->
    <section class="review-container padding">
        <div class="reviews grid">
            <div class="user-img">
                <img src="<?= base_url() ?>all-center-list/assets/images/user-2.png" alt="User of saaol">
            </div>
            <div class="user-reviews">
                <h3 class="sub-heading">Rajendra Uppal</h3>
                <p class="txt">

                    Initially I was skeptical about EECP but I after interacting with the staff and Dr Sumit Soni, I was convinced. The medical and non-medical staff is well trained, friendly and supportive. Dr. Sumit is an excellent, humble and practical Doctor. What I like most about him are 2 things: 1. His philosophy in treatments. He is big on treating with natural and organic ways rather than burning money on surgeries and medicines. 2. His human touch. He is an empathetic and humble Doctor who connects with his patients at a personal level and guides them for their better health and advises them appropriately. His advise on improving habits and how to look at problems and your health is gold. I'd highly recommend him and am very grateful to him for my treatment. Overall, I am very very satisfied with the treatment and results. I'd highly recommend anyone having heart issues to visit SAAOL first before getting any surgical treatment.
                </p>
            </div>

        </div>
        <div class="reviews grid">
            <div class="user-img">
                <img src="<?= base_url() ?>all-center-list/assets/images/user-1.png" alt="User of saaol">
            </div>
            <div class="user-reviews">
                <h3 class="sub-heading">Akshay Sharma</h3>
                <p class="txt">

                    EECP is not so famous but is definitely good and Saaol is a great place to get the treatment. Staff is good and friendly. Especially, Dr. Sumit Soni is a great person and clarify all the doubts pre and post treatment. You will definitely get solutions to all your questions from him. Again, nice place to get natural heart treatment without inserting stents and bypass. </p>
            </div>

        </div>
    </section>



    <!-- Jquery links -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>


    <!-- Carousel slick js -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Script to move the carousel of reviews -->
    <script>
        function appointmentPage() {
            window.location.href = '<?= base_url() ?>book-an-appointment/<?= $cityName ?>';
        }


        // Slick
        $(document).ready(function() {
            $('.review-container').slick();
        });
    </script>


    <!-- Footer -->
    <?php include APPPATH . '/includes/footer.php'; ?>
    <?= $localSchemaDetails ?>
</body>

</html>