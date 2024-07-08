<div class="header">
    <!-- Top header with logo and centers button -->
    <div class="header-upper flex flex-center-between section-padding">
        <div class="left flex-total-center">
            <div class="logo">
                <img src="<?= get_img() ?>/saaol_logo.webp" alt="SAAOL Logo">
            </div>
            <div class="brand-name">
                <h2><span>SAAOL:</span>Science and Art of Living</h2>
            </div>
        </div>
        <div class="right flex">
            <button class="main-button">
                <a href="https://saaol.com/all-centers-location/"> Our Centers</a>
            </button>
            <button class="main-button">
                <a href="https://saaol.com/book-an-appointment/"> Book an appointment</a>
            </button>
            <a href="javascript:void(0);" class="icon" onclick="toggleNavbarfn()">&#9776;</a>
        </div>
    </div>

    <!-- Second header with all dropdowns -->
    <div class="navbar section-padding" id="navbar">
        <a href="javascript:void(0);" class="close-icon" onclick="toggleNavbarfn()">&times;</a>
        <a class="ease-transition" href="https://saaol.com/">Home</a>
        <div class="dropdown">
            <a class="ease-transition" href="https://saaol.com/" class="dropbtn">About <span><i class='bx bxs-down-arrow'></i></span></a>
            <div class="dropdown-content">
                <a class="ease-transition" href="https://saaol.com/about">About us</a>
                <a class="ease-transition" href="https://saaol.com/about-dr-bimal">About Dr. Bimal</a>
                <a class="ease-transition" href="https://saaol.com/patients-journey"> Patient Journey</a>
                <a class="ease-transition" href="https://saaol.com/live-webinar/">SAAOL Webinar</a>
                <a class="ease-transition" href="https://saaol.com/instruction-for-patients">Instructions for patient</a>

            </div>
        </div>
        <div class="dropdown">
            <a class="ease-transition" href="https://saaol.com/heart-health" class="dropbtn">Heart Health <span><i class='bx bxs-down-arrow'></i></span></a>
            <div class="dropdown-content">
                <a class="ease-transition" href="https://saaol.com/assess-risk">Access Risk</a>
                <a class="ease-transition" href="https://saaol.com/know-your-heart">Know Your Heart</a>
                <a class="ease-transition" href="https://saaol.com/causes">Causes</a>
                <a class="ease-transition" href="https://saaol.com/blog/">Blogs</a>
                <a class="ease-transition" href="https://saaol.com/books">Books</a>
                <a class="ease-transition" href="https://saaol.com/emagzine/">Emagzine</a>
            </div>
        </div>
        <div class="dropdown">
            <a class="ease-transition" href="https://saaol.com/treatment" class="dropbtn">Treatments <span><i class='bx bxs-down-arrow'></i></span></a>
            <div class="dropdown-content">
                <a class="ease-transition" href="https://saaol.com/zero-oil-cooking">Zero oil cooking</a>
                <a class="ease-transition" href="https://saaol.com/eecp-treatment">EECP Treatments</a>
                <a class="ease-transition" href="https://saaol.com/life-style">Life Style</a>
                <a class="ease-transition" href="https://saaol.com/saaol-detox">SAAOL Detox</a>
            </div>
        </div>
        <a class="ease-transition" href="https://saaol.com/blog">Blog</a>
        <a class="ease-transition" href="https://saaol.com/career">Career</a>
        <a class="ease-transition" href="https://saaol.com/patients-journey">Testimonial</a>
        <a class="ease-transition" href="https://saaol.com/emagzine/">E-magzine</a>
        <button class="main-button book-appointment">
            <a href="https://saaol.com/all-centers-location/">Our Centers</a>
        </button>
        <button class="main-button book-appointment">
            <a href="https://saaol.com/book-an-appointment/"> Book an appointment</a>
        </button>
    </div>
</div>