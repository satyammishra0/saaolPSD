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
                Our Center
            </button>
            <a href="javascript:void(0);" class="icon" onclick="toggleNavbarfn()">&#9776;</a>
        </div>
    </div>

    <!-- Second header with all dropdowns -->
    <div class="navbar section-padding" id="navbar">
        <a href="javascript:void(0);" class="close-icon" onclick="toggleNavbarfn()">&times;</a>
        <a class="ease-transition" href="#home">Home</a>
        <div class="dropdown">
            <a class="ease-transition" href="#about" class="dropbtn">About <span><i class='bx bxs-down-arrow'></i></span></a>
            <div class="dropdown-content">
                <a class="ease-transition" href="#">Service 1</a>
                <a class="ease-transition" href="#">Service 2</a>
                <a class="ease-transition" href="#">Service 3</a>
            </div>
        </div>
        <div class="dropdown">
            <a class="ease-transition" href="#services" class="dropbtn">Heart Health <span><i class='bx bxs-down-arrow'></i></span></a>
            <div class="dropdown-content">
                <a class="ease-transition" href="#">Service 1</a>
                <a class="ease-transition" href="#">Service 2</a>
                <a class="ease-transition" href="#">Service 3</a>
            </div>
        </div>
        <div class="dropdown">
            <a class="ease-transition" href="#about" class="dropbtn">Treatments <span><i class='bx bxs-down-arrow'></i></span></a>
            <div class="dropdown-content">
                <a class="ease-transition" href="#">Team</a>
                <a class="ease-transition" href="#">Careers</a>
                <a class="ease-transition" href="#">History</a>
            </div>
        </div>
        <a class="ease-transition" href="#home">Blog</a>
        <a class="ease-transition" href="#home">Career</a>
        <a class="ease-transition" href="#home">Testimonial</a>
        <a class="ease-transition" href="#home">E-magzine</a>
    </div>
</div>