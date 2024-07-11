<?php include '../init.php';
include_once HEAD_TOP;
?>

<head>

    <title> <?php echo "Center Page" ?> | SAAOL </title>

    <?php include_once HEAD; ?>

    <!-- Home css -->
    <link href="<?= get_assets() ?>css/pages/cities.css" rel="stylesheet" type="text/css" />

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
            <div class="first-banner-cities-content">
                <h2 class="home-heading">Best EECP Treatment in Aligarh - SAAOL Heart Center</h2>
                <p>Discover the power of EECP treatment, also called natural bypass therapy, for those seeking non-surgical heart attack treatments in Aligarh. Our mission is to treat and reverse heart disease effectively through non-invasive procedures. Find affordable solutions for a healthier heart journey with us.</p>
                <ul>
                    <li> <i class='bx bx-target-lock'></i>No Pain </li>
                    <li> <i class='bx bx-target-lock'></i>No Surgery</li>
                    <li> <i class='bx bx-target-lock'></i>No Hospitalization</li>
                    <li> <i class='bx bx-target-lock'></i>US-FDA Approved</li>
                </ul>
            </div>
            <div class="first-banner-form">
                <form action="" method="Post">
                    <h2>Book An appointment Now</h2>
                    <div>
                        <lable>Name</lable>
                        <input type="text" placeholder="Eg. John Doe">
                    </div>
                    <div>
                        <lable>Email</lable>
                        <input type="email" placeholder="Eg. user@gmail.com">
                    </div>
                    <div>
                        <lable>Phone Number</lable>
                        <input type="text" placeholder="Eg. +91 99897867878">
                    </div>
                    <button type="submit" class="first-banner-form-button">Submit</button>
                </form>
            </div>

        </div>
    </section>

    <!-- ============================================================== -->
    <!-- Numbers section -->
    <!-- ============================================================== -->
    <?php include_once NUMBER_SECTION; ?>


    <!-- ============================================================== -->
    <!-- About section -->
    <!-- ============================================================== -->
    <section class="about-cities">
        <div class="about-cities-grid">
            <div class="about-cities-grid-img">
                <img src="<?= get_img() ?>/psd/cities/center-reception-img.jpg" alt="Center page image">
            </div>
            <div class="about-cities-grid-content">
                <h2 class="home-heading">
                    Transformative EECP Treatment Center in Aligarh
                </h2>
                <p>
                    Experience cutting-edge heart care at the SAAOL Heart Center in Aligarh, specializing in innovative EECP treatment. Our center is dedicated to providing comprehensive care for patients facing heart diseases, including heart attack treatment, heart failure treatment, and heart disease management. We utilize advanced EECP therapy, also known as natural bypass therapy, delivering non-invasive solutions for patients with heart blockages, aiming to reverse heart disease and promote natural heart healing.
                    At our state-of-the-art facility, we prioritize patient well-being by providing a range of services beyond EECP treatment. Our holistic approach includes detox therapy to support overall cardiovascular health and detoxification therapy treatment to address underlying factors contributing to heart disease. With a focus on non-invasive techniques, our center aims to provide effective cardio treatment for conditions such as coronary artery disease, ensuring optimal outcomes with minimal risk. Trust our experienced team at the Heart Center in Aligarh to deliver personalized care and transformative results for your heart health journey.
                </p>
                <button class="main-button"><a href="#home-section">Book Appointment</a></button>
            </div>
        </div>
    </section>

    <!-- ============================================================== -->
    <!-- Map contact section section -->
    <!-- ============================================================== -->
    <section class="location-cities grid">
        <div class="location-details">
            <h2 class="home-heading">Center Details</h2>
            <div class="location-details-card grid">
                <div class="location-details-img grid grid-center">
                    <i class='bx bxs-map'></i>
                </div>
                <div class="location-details-content">
                    <h3>Location</h3>
                    <p>Aligarh UP</p>
                </div>
            </div>
            <div class="location-details-card grid">
                <div class="location-details-img grid grid-center">
                    <i class='bx bxs-time'></i>
                </div>
                <div class="location-details-content">
                    <h3>Timing</h3>
                    <p>09:00AM - 06:00 PM</p>
                </div>
            </div>
            <div class="location-details-card grid">
                <div class="location-details-img grid grid-center">
                    <i class='bx bxs-sun'></i>
                </div>
                <div class="location-details-content">
                    <h3>Open Days</h3>
                    <p>Monday - Saturday</p>
                </div>
            </div>
            <div class="location-details-card grid">
                <div class="location-details-img grid grid-center">
                    <i class='bx bxs-user-voice'></i>
                </div>
                <div class="location-details-content">
                    <h3>Contact</h3>
                    <p><a href="tel:+91 9989787889">+91 9989787889</a></p>
                </div>
            </div>
        </div>
        <div class="location-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7052.344431652102!2d78.089605!3d27.896688000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3974a55ce42683d3%3A0x23e91d9e963fa159!2sSaaol%20Heart%20Center!5e0!3m2!1sen!2sin!4v1703585748119!5m2!1sen!2sin" title="Saaol Heart Center Aligarh" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- ============================================================== -->
    <!-- Benefits section -->
    <!-- ============================================================== -->

    <section class="cities-benefit grid">
        <div class="cities-benefit-left grid grid-center">
            <div>
                <h2>Benefits of EECP Therapy Compared to Bypass Surgery (CABG)</h2>
                <p>EECP Therapy presents several significant advantages over traditional Bypass surgery (CABG). Here's why it stands out:</p>
                <button class="main-button"><a href="#home-section">Book Appointment</a></button>

            </div>
        </div>
        <div class="cities-benefit-rigth grid">
            <div class="cities-benefit-rigth-content">
                <h3>Non-Invasive</h3>
                <p>Unlike bypass surgery, EECP Therapy is non-invasive, meaning there are no incisions or cuts involved. Patients experience no trauma to the body, resulting in a quicker recovery time and minimal discomfort.</p>
            </div>
            <div class="cities-benefit-rigth-content">
                <h3>Painless Procedure: </h3>
                <p>EECP Therapy is entirely painless. Patients can undergo treatment comfortably without the need for anesthesia or sedation. This eliminates the risks associated with anesthesia and post-operative pain management.
                </p>
            </div>
            <div class="cities-benefit-rigth-content">
                <h3>No Hospitalization Required</h3>
                <p> EECP Therapy is typically performed on an outpatient basis, meaning there's no need for hospitalization. Patients can return home immediately after treatment sessions, allowing them to resume their daily activities without interruption.
                </p>
            </div>
            <div class="cities-benefit-rigth-content">
                <h3>No Risk of Infection: </h3>
                <p> Since EECP Therapy doesn't involve any surgical incisions, the risk of infection is significantly reduced. Patients can undergo treatment with peace of mind, knowing that there's no risk of post-procedural complications.
                </p>
            </div>
            <div class="cities-benefit-rigth-content">
                <h3>No Side Effects:</h3>
                <p>EECP Therapy is associated with minimal to no side effects. Unlike traditional bypass surgeries, which can cause various adverse effects such as bleeding, infection, and allergic reactions to anesthesia, EECP Therapy provides a safe and well-tolerated alternative.
                </p>
            </div>
            <div class="cities-benefit-rigth-content">
                <h3>Cost-Effective Solution:</h3>
                <p> EECP Therapy is a cost-effective treatment option compared to bypass surgery (CABG). It eliminates the need for hospitalization, anesthesia, and post-operative care, resulting in lower overall healthcare costs for patients.
                </p>
            </div>
        </div>
    </section>


    <!-- ============================================================== -->
    <!-- who can benefit section -->
    <!-- ============================================================== -->
    <section class="who-benefits">
        <h2 class="home-heading">Who Can Benefit from EECP Treatment in Aligarh?</h2>
        <p>If you're experiencing chronic heart issues such as angina, chest pain, or heart failure, consider EECP Treatment at SAAOL Heart Center. Our personalized approach is tailored for patients seeking non-surgical alternatives or those who haven't found success with traditional treatments. Whether you're aiming to alleviate heart blockages or reverse heart disease, our committed team is ready to assist you throughout the process.
        </p>
        <ul>
            <li><i class='bx bx-target-lock'></i> Experience chronic angina or chest pain caused by restricted blood flow to the heart.</li>
            <li><i class='bx bx-target-lock'></i> Haven't responded to conventional treatments like lifestyle adjustments and medications.</li>
            <li><i class='bx bx-target-lock'></i> Are awaiting bypass surgery or angioplasty.</li>
            <li><i class='bx bx-target-lock'></i> Prefer non-surgical alternatives or aren't prepared for invasive procedures.</li>
            <li><i class='bx bx-target-lock'></i> Encounter recurring symptoms after surgery or bypass.</li>
            <li><i class='bx bx-target-lock'></i> Find inadequate relief from medication alone.</li>
        </ul>
    </section>


    <!-- ============================================================== -->
    <!-- our services section -->
    <!-- ============================================================== -->
    <section class="our-services-cities">
        <h2 class="home-heading">What Conditions Can EECP Therapy Treat?</h2>
        <div class="our-services-cities-grid grid">
            <div class="our-services-cities-grid-item">
                <h3>Angina: </h3>
                <p> EECP therapy addresses angina by enhancing blood flow to the heart and reducing the frequency and severity of chest pain episodes and Heart attacks.</p>
            </div>
            <div class="our-services-cities-grid-item">
                <h3>Chest Pain: </h3>
                <p>EECP therapy alleviates chest pain by improving coronary circulation and reducing the workload on the heart muscle.
                </p>
            </div>
            <div class="our-services-cities-grid-item">
                <h3>Heart Attack: </h3>
                <p>Post-heart attack, EECP therapy aids in recovery by promoting collateral blood vessel formation, enhancing cardiac function, and reducing the risk of future cardiac events.
                </p>
            </div>
            <div class="our-services-cities-grid-item">
                <h3>Heart Failure: </h3>
                <p>EECP therapy improves symptoms and quality of life for heart failure patients by enhancing cardiac output and reducing pulmonary congestion.
                </p>
            </div>
            <div class="our-services-cities-grid-item">
                <h3>Coronary Artery Disease: </h3>
                <p>In managing coronary artery disease, EECP therapy enhances blood flow to ischemic areas of the heart, thereby promoting myocardial perfusion and reducing symptoms.
                </p>
            </div>
            <div class="our-services-cities-grid-item">
                <h3>Hypertension (High Blood Pressure):</h3>
                <p> EECP therapy helps manage hypertension by improving arterial compliance, reducing peripheral resistance, and promoting overall cardiovascular health.
                </p>
            </div>
            <div class="our-services-cities-grid-item">
                <h3>Diabetic Foot Ulcers: </h3>
                <p>EECP therapy supports healing by improving microcirculation, accelerating wound closure, and reducing the risk of infection in diabetic foot ulcers.
                </p>
            </div>
            <div class="our-services-cities-grid-item">
                <h3>Stroke Rehabilitation: </h3>
                <p>In stroke rehabilitation, EECP therapy enhances cerebral blood flow, promotes neuroplasticity, and aids in motor and cognitive recovery.
                </p>
            </div>
            <div class="our-services-cities-grid-item">
                <h3>Vascular Dementia: </h3>
                <p>EECP therapy can benefit vascular dementia by improving cerebral perfusion, reducing cognitive decline, and enhancing overall brain function.
                </p>
            </div>
        </div>
    </section>


    <!-- ============================================================== -->
    <!-- why choose us section -->
    <!-- ============================================================== -->

    <section class="why-choose-city">
        <h2 class="home-heading">Why Choose SAAOL for EECP Treatment in Aligarh?</h2>
        <p>Choosing SAAOL Heart Center for EECP Treatment in Aligarh means opting for excellence, compassion, and tangible results. Here's why our heart center stands out from the rest:
        </p>
        <div class="why-choose-city-grid grid">
            <div class="why-choose-city-gird-item grid">
                <div class="why-choose-city-img grid grid-center">
                    <img src="<?= get_img() ?>/psd/Healthy-lifestyle.png" alt="EECp icons">
                </div>
                <div class="why-choose-city-content">
                    <h3>Expert Team:</h3>
                    <p>Our team comprises seasoned professionals dedicated to your heart health. With years of experience and expertise, we deliver top-notch care and innovative treatments.</p>
                </div>
            </div>
            <div class="why-choose-city-gird-item grid">
                <div class="why-choose-city-img grid grid-center">
                    <img src="<?= get_img() ?>/psd/Healthy-lifestyle.png" alt="EECp icons">
                </div>
                <div class="why-choose-city-content">
                    <h3>Holistic Approach: </h3>
                    <p>We believe in treating the whole person, not just the symptoms. Our holistic approach combines medical expertise with lifestyle interventions for comprehensive care.
                    </p>
                </div>
            </div>
            <div class="why-choose-city-gird-item grid">
                <div class="why-choose-city-img grid grid-center">
                    <img src="<?= get_img() ?>/psd/Healthy-lifestyle.png" alt="EECp icons">
                </div>
                <div class="why-choose-city-content">
                    <h3>Innovative Treatments:</h3>
                    <p> SAAOL Heart Center delivers cutting-edge treatments like EECP (Enhanced External Counter Pulsation), backed by research and proven efficacy in improving heart function.
                    </p>
                </div>
            </div>
            <div class="why-choose-city-gird-item grid">
                <div class="why-choose-city-img grid grid-center">
                    <img src="<?= get_img() ?>/psd/Healthy-lifestyle.png" alt="EECp icons">
                </div>
                <div class="why-choose-city-content">
                    <h3>SAAOL Detox Therapy: </h3>
                    <p>Patients benefit from SAAOL proprietary detox therapy, designed to cleanse the body and support cardiovascular health.
                    </p>
                </div>
            </div>
            <div class="why-choose-city-gird-item grid">
                <div class="why-choose-city-img grid grid-center">
                    <img src="<?= get_img() ?>/psd/Healthy-lifestyle.png" alt="EECp icons">
                </div>
                <div class="why-choose-city-content">
                    <h3>Lifestyle Modification: </h3>
                    <p>We emphasize lifestyle changes to promote heart health, including guidance on diet, exercise, stress management, and more.
                    </p>
                </div>
            </div>
            <div class="why-choose-city-gird-item grid">
                <div class="why-choose-city-img grid grid-center">
                    <img src="<?= get_img() ?>/psd/Healthy-lifestyle.png" alt="EECp icons">
                </div>
                <div class="why-choose-city-content">
                    <h3>Zero-Oil Cooking: </h3>
                    <p>Our culinary experts teach patients the art of zero-oil cooking, promoting heart-healthy eating habits without compromising on taste.
                    </p>
                </div>
            </div>
            <div class="why-choose-city-gird-item grid">
                <div class="why-choose-city-img grid grid-center">
                    <img src="<?= get_img() ?>/psd/Healthy-lifestyle.png" alt="EECp icons">
                </div>
                <div class="why-choose-city-content">
                    <h3>Personalized Care: </h3>
                    <p> Every patient receives personalized attention and care tailored to their unique needs and preferences.
                    </p>
                </div>
            </div>
            <div class="why-choose-city-gird-item grid">
                <div class="why-choose-city-img grid grid-center">
                    <img src="<?= get_img() ?>/psd/Healthy-lifestyle.png" alt="EECp icons">
                </div>
                <div class="why-choose-city-content">
                    <h3>Transparent Pricing: </h3>
                    <p>At SAAOL Heart Center, we believe in transparency. Our pricing is straightforward, ensuring patients understand the costs involved without any hidden fees or surprises.
                    </p>
                </div>
            </div>
        </div>

        <p>By choosing SAAOL Heart Center for EECP Treatment in Aligarh, you're not just receiving medical care—you're embarking on a journey towards a healthier, happier life guided by experts who genuinely care about your well-being.
        </p>
    </section>

    <!-- ============================================================== -->
    <!-- FAQS section -->
    <!-- ============================================================== -->
    <?php include_once FAQS; ?>

    <!-- ============================================================== -->
    <!-- Call to action section-->
    <!-- ============================================================== -->
    <?php include_once CTA; ?>


    <!-- ============================================================== -->
    <!-- Near by locations section-->
    <!-- ============================================================== -->
    <!-- <section class="nearby-centers-cities grid">
        <h2 class="home-heading">
            Find center nearest to you.
        </h2>
        <div class="nearby-center-city-container grid">
            <div class="nearby-centers-cities-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d889212.3636252327!2d77.718547!3d29.473022!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c1ba37d1f063d%3A0x3a626b5647071d4d!2sSAAOL%20HEART%20CENTER%2C%20MUZAFFARNAGAR!5e0!3m2!1sen!2sus!4v1703585355386!5m2!1sen!2sus" title="Saaol Heart Center Muzaffar Nagar" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="nearby-centers-cities-content">
                <div class="">
                    <div class="nearby-centers-cities-card grid">
                        <div class="nearby-centers-cities-card-img grid grid-center">
                            <img src="<?= get_img() ?>/psd/cities/reception-img.jpg" alt="Center reception">
                        </div>

                        <div class="nearby-centers-cities-card-content">
                            <h3>SAAOL Heart Center Aligarh</h3>
                            <div class="location-details-card-nearby grid">
                                <div class="location-details-img grid grid-center">
                                    <i class='bx bxs-map-pin'></i>
                                </div>
                                <div class="location-details-content flex flex-center">
                                    <p>House no- 3/240, Near sood hospital Laxmi Bai marg Ramghat Road Near Kishanpur Tiraha, Aligarh – 202001</p>
                                </div>
                            </div>
                            <div class="location-details-card-nearby grid">
                                <div class="location-details-img grid grid-center">
                                    <i class='bx bxs-user-voice'></i>

                                </div>
                                <div class="location-details-content flex flex-center">
                                    <p>7488280661</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="location-details-content-btn grid grid-2">
                        <a href=""> <button class="first-btn">Know More</button></a>
                        <a href=""> <button class=" first-btn second-btn">Book An appointment</button></a>
                    </div>
                </div>
                <div class="">
                    <div class="nearby-centers-cities-card grid">
                        <div class="nearby-centers-cities-card-img grid grid-center">
                            <img src="<?= get_img() ?>/psd/cities/reception-img.jpg" alt="Center reception">
                        </div>

                        <div class="nearby-centers-cities-card-content">
                            <h3>SAAOL Heart Center Aligarh</h3>
                            <div class="location-details-card-nearby grid">
                                <div class="location-details-img grid grid-center">
                                    <i class='bx bxs-map-pin'></i>
                                </div>
                                <div class="location-details-content flex flex-center">
                                    <p>House no- 3/240, Near sood hospital Laxmi Bai marg Ramghat Road Near Kishanpur Tiraha, Aligarh – 202001</p>
                                </div>
                            </div>
                            <div class="location-details-card-nearby grid">
                                <div class="location-details-img grid grid-center">
                                    <i class='bx bxs-user-voice'></i>

                                </div>
                                <div class="location-details-content flex flex-center">
                                    <p>7488280661</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="location-details-content-btn grid grid-2">
                        <a href=""> <button class="first-btn">Know More</button></a>
                        <a href=""> <button class=" first-btn second-btn">Book An appointment</button></a>
                    </div>
                </div>
                <div class="">
                    <div class="nearby-centers-cities-card grid">
                        <div class="nearby-centers-cities-card-img grid grid-center">
                            <img src="<?= get_img() ?>/psd/cities/reception-img.jpg" alt="Center reception">
                        </div>

                        <div class="nearby-centers-cities-card-content">
                            <h3>SAAOL Heart Center Aligarh</h3>
                            <div class="location-details-card-nearby grid">
                                <div class="location-details-img grid grid-center">
                                    <i class='bx bxs-map-pin'></i>
                                </div>
                                <div class="location-details-content flex flex-center">
                                    <p>House no- 3/240, Near sood hospital Laxmi Bai marg Ramghat Road Near Kishanpur Tiraha, Aligarh – 202001</p>
                                </div>
                            </div>
                            <div class="location-details-card-nearby grid">
                                <div class="location-details-img grid grid-center">
                                    <i class='bx bxs-user-voice'></i>

                                </div>
                                <div class="location-details-content flex flex-center">
                                    <p>7488280661</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="location-details-content-btn grid grid-2">
                        <a href=""> <button class="first-btn">Know More</button></a>
                        <a href=""> <button class=" first-btn second-btn">Book An appointment</button></a>
                    </div>
                </div>
                <div class="">
                    <div class="nearby-centers-cities-card grid">
                        <div class="nearby-centers-cities-card-img grid grid-center">
                            <img src="<?= get_img() ?>/psd/cities/reception-img.jpg" alt="Center reception">
                        </div>

                        <div class="nearby-centers-cities-card-content">
                            <h3>SAAOL Heart Center Aligarh</h3>
                            <div class="location-details-card-nearby grid">
                                <div class="location-details-img grid grid-center">
                                    <i class='bx bxs-map-pin'></i>
                                </div>
                                <div class="location-details-content flex flex-center">
                                    <p>House no- 3/240, Near sood hospital Laxmi Bai marg Ramghat Road Near Kishanpur Tiraha, Aligarh – 202001</p>
                                </div>
                            </div>
                            <div class="location-details-card-nearby grid">
                                <div class="location-details-img grid grid-center">
                                    <i class='bx bxs-user-voice'></i>

                                </div>
                                <div class="location-details-content flex flex-center">
                                    <p>7488280661</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="location-details-content-btn grid grid-2">
                        <a href=""> <button class="first-btn">Know More</button></a>
                        <a href=""> <button class=" first-btn second-btn">Book An appointment</button></a>
                    </div>
                </div>
                <div class="">
                    <div class="nearby-centers-cities-card grid">
                        <div class="nearby-centers-cities-card-img grid grid-center">
                            <img src="<?= get_img() ?>/psd/cities/reception-img.jpg" alt="Center reception">
                        </div>

                        <div class="nearby-centers-cities-card-content">
                            <h3>SAAOL Heart Center Aligarh</h3>
                            <div class="location-details-card-nearby grid">
                                <div class="location-details-img grid grid-center">
                                    <i class='bx bxs-map-pin'></i>
                                </div>
                                <div class="location-details-content flex flex-center">
                                    <p>House no- 3/240, Near sood hospital Laxmi Bai marg Ramghat Road Near Kishanpur Tiraha, Aligarh – 202001</p>
                                </div>
                            </div>
                            <div class="location-details-card-nearby grid">
                                <div class="location-details-img grid grid-center">
                                    <i class='bx bxs-user-voice'></i>

                                </div>
                                <div class="location-details-content flex flex-center">
                                    <p>7488280661</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="location-details-content-btn grid grid-2">
                        <a href=""> <button class="first-btn">Know More</button></a>
                        <a href=""> <button class=" first-btn second-btn">Book An appointment</button></a>
                    </div>
                </div>
                <div class="">
                    <div class="nearby-centers-cities-card grid">
                        <div class="nearby-centers-cities-card-img grid grid-center">
                            <img src="<?= get_img() ?>/psd/cities/reception-img.jpg" alt="Center reception">
                        </div>

                        <div class="nearby-centers-cities-card-content">
                            <h3>SAAOL Heart Center Aligarh</h3>
                            <div class="location-details-card-nearby grid">
                                <div class="location-details-img grid grid-center">
                                    <i class='bx bxs-map-pin'></i>
                                </div>
                                <div class="location-details-content flex flex-center">
                                    <p>House no- 3/240, Near sood hospital Laxmi Bai marg Ramghat Road Near Kishanpur Tiraha, Aligarh – 202001</p>
                                </div>
                            </div>
                            <div class="location-details-card-nearby grid">
                                <div class="location-details-img grid grid-center">
                                    <i class='bx bxs-user-voice'></i>

                                </div>
                                <div class="location-details-content flex flex-center">
                                    <p>7488280661</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="location-details-content-btn grid grid-2">
                        <a href=""> <button class="first-btn">Know More</button></a>
                        <a href=""> <button class=" first-btn second-btn">Book An appointment</button></a>
                    </div>
                </div>
                <div class="">
                    <div class="nearby-centers-cities-card grid">
                        <div class="nearby-centers-cities-card-img grid grid-center">
                            <img src="<?= get_img() ?>/psd/cities/reception-img.jpg" alt="Center reception">
                        </div>

                        <div class="nearby-centers-cities-card-content">
                            <h3>SAAOL Heart Center Aligarh</h3>
                            <div class="location-details-card-nearby grid">
                                <div class="location-details-img grid grid-center">
                                    <i class='bx bxs-map-pin'></i>
                                </div>
                                <div class="location-details-content flex flex-center">
                                    <p>House no- 3/240, Near sood hospital Laxmi Bai marg Ramghat Road Near Kishanpur Tiraha, Aligarh – 202001</p>
                                </div>
                            </div>
                            <div class="location-details-card-nearby grid">
                                <div class="location-details-img grid grid-center">
                                    <i class='bx bxs-user-voice'></i>

                                </div>
                                <div class="location-details-content flex flex-center">
                                    <p>7488280661</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="location-details-content-btn grid grid-2">
                        <a href=""> <button class="first-btn">Know More</button></a>
                        <a href=""> <button class=" first-btn second-btn">Book An appointment</button></a>
                    </div>
                </div>
                <div class="">
                    <div class="nearby-centers-cities-card grid">
                        <div class="nearby-centers-cities-card-img grid grid-center">
                            <img src="<?= get_img() ?>/psd/cities/reception-img.jpg" alt="Center reception">
                        </div>

                        <div class="nearby-centers-cities-card-content">
                            <h3>SAAOL Heart Center Aligarh</h3>
                            <div class="location-details-card-nearby grid">
                                <div class="location-details-img grid grid-center">
                                    <i class='bx bxs-map-pin'></i>
                                </div>
                                <div class="location-details-content flex flex-center">
                                    <p>House no- 3/240, Near sood hospital Laxmi Bai marg Ramghat Road Near Kishanpur Tiraha, Aligarh – 202001</p>
                                </div>
                            </div>
                            <div class="location-details-card-nearby grid">
                                <div class="location-details-img grid grid-center">
                                    <i class='bx bxs-user-voice'></i>

                                </div>
                                <div class="location-details-content flex flex-center">
                                    <p>7488280661</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="location-details-content-btn grid grid-2">
                        <a href=""> <button class="first-btn">Know More</button></a>
                        <a href=""> <button class=" first-btn second-btn">Book An appointment</button></a>
                    </div>
                </div>
                <div class="">
                    <div class="nearby-centers-cities-card grid">
                        <div class="nearby-centers-cities-card-img grid grid-center">
                            <img src="<?= get_img() ?>/psd/cities/reception-img.jpg" alt="Center reception">
                        </div>

                        <div class="nearby-centers-cities-card-content">
                            <h3>SAAOL Heart Center Aligarh</h3>
                            <div class="location-details-card-nearby grid">
                                <div class="location-details-img grid grid-center">
                                    <i class='bx bxs-map-pin'></i>
                                </div>
                                <div class="location-details-content flex flex-center">
                                    <p>House no- 3/240, Near sood hospital Laxmi Bai marg Ramghat Road Near Kishanpur Tiraha, Aligarh – 202001</p>
                                </div>
                            </div>
                            <div class="location-details-card-nearby grid">
                                <div class="location-details-img grid grid-center">
                                    <i class='bx bxs-user-voice'></i>

                                </div>
                                <div class="location-details-content flex flex-center">
                                    <p>7488280661</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="location-details-content-btn grid grid-2">
                        <a href=""> <button class="first-btn">Know More</button></a>
                        <a href=""> <button class=" first-btn second-btn">Book An appointment</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- ============================================================== -->
    <!-- Slick js slider review -->
    <!-- ============================================================== -->
    <section class="cities-slider">
        <h2 class="home-heading">What people say about us?</h2>
        <div class="multiple-items" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
            <div>
                <div class="card-city-review grid grid-center">
                    <img src="https://via.placeholder.com/150" alt="Reviewer Image" class="city-review">
                    <p class="city-review">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                    <div class="line-city-review"></div>
                    <div class="name-city-review city-review">John Doe</div>
                    <div class="address-city-review city-review">City, State</div>
                </div>
            </div>
            <div>
                <div class="card-city-review grid grid-center">
                    <img src="https://via.placeholder.com/150" alt="Reviewer Image" class="city-review">
                    <p class="city-review">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                    <div class="line-city-review"></div>
                    <div class="name-city-review city-review">John Doe</div>
                    <div class="address-city-review city-review">City, State</div>
                </div>
            </div>
            <div>
                <div class="card-city-review grid grid-center">
                    <img src="https://via.placeholder.com/150" alt="Reviewer Image" class="city-review">
                    <p class="city-review">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                    <div class="line-city-review"></div>
                    <div class="name-city-review city-review">John Doe</div>
                    <div class="address-city-review city-review">City, State</div>
                </div>
            </div>
            <div>
                <div class="card-city-review grid grid-center">
                    <img src="https://via.placeholder.com/150" alt="Reviewer Image" class="city-review">
                    <p class="city-review">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                    <div class="line-city-review"></div>
                    <div class="name-city-review city-review">John Doe</div>
                    <div class="address-city-review city-review">City, State</div>
                </div>
            </div>
            <div>
                <div class="card-city-review grid grid-center">
                    <img src="https://via.placeholder.com/150" alt="Reviewer Image" class="city-review">
                    <p class="city-review">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                    <div class="line-city-review"></div>
                    <div class="name-city-review city-review">John Doe</div>
                    <div class="address-city-review city-review">City, State</div>
                </div>
            </div>


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



    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Slick JS -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
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