<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <?php

    $access_value = $_SESSION['ERP_ACCESS'];

    $access_value_arr = explode(',', $access_value);


    ?>
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="<?= home_path() ?>" class="logo logo-dark">
            <span class="logo-sm">
                <img loading="lazy" src="<?= get_assets() ?>images/logo-sm.svg" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img loading="lazy" src="<?= get_assets() ?>images/logo-sm.svg" alt="" height="22"> <span class="logo-txt">SAAOL ERP</span>
            </span>
        </a>

        <a href="<?= home_path() ?>" class="logo logo-light">
            <span class="logo-lg">
                <img loading="lazy" src="<?= get_assets() ?>images/logo-sm.svg" alt="" height="22"> <span class="logo-txt">SAAOL ERP</span>
            </span>
            <span class="logo-sm">
                <img loading="lazy" src="<?= get_assets() ?>images/logo-sm.svg" alt="" height="22">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
        <i class='bx bx-arrow-back' style="font-size:20px;"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">



                <?php
                foreach ($access_value_arr as $key) {
                    if ($key == 1) {
                        echo '<li><a href="' . home_path() . '">
                        <i class="bx bx-tachometer icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboards">' . $language["Dashboard"] .
                            '</span></li>';
                    } else if ($key == 3) {
                        echo '<li><a href="' . home_path() . '/patient-list">
                         <i class="bx bx-user icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboards">Patient List</span></a></li>';
                    } else if ($key == 4) {
                        echo '<li><a href="' . home_path() . '/doctor-list">
                        <i class="bx bx-plus icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Doctor List</span></a></li>';
                    } else if ($key == 8) {
                        echo '<li><a href="' . home_path() . '/users">
                        <i class="bx bx-receipt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-calendar">Users</span></a></li>';
                    }
                }
                ?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <!-- <i class="bx bx-buildings icon nav-icon"></i> -->
                        <i class='bx bx-file  icon nav-icon'></i>
                        <span class="menu-item" data-key="t-email">Center Reports</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <?php
                        foreach ($access_value_arr as $key) {
                            if ($key == 2) { ?>
                                <li><a href="<?= home_path() ?>/all-center-list" data-key="t-inbox">
                                        <i class='bx bx-check-shield  icon nav-icon'></i>
                                        <!-- <i class="bx bx-buildings icon nav-icon"></i> -->
                                        Complainces</a></li>
                            <?php }
                            if ($key == 7) { ?>
                                <li><a href="<?= home_path() ?>/center-reports" data-key="t-read-email">
                                        <!-- <i class="bx bx-user-circle icon nav-icon"></i> -->
                                        <i class='bx bx-bar-chart-alt-2  icon nav-icon'></i>
                                        Revenue</a></li>
                            <?php }
                            // if ($key == 9) { 
                            ?>
                            <!-- <li><a href="<?= home_path() ?>/compliance-reports" data-key="t-update-email"><i class="bx bx-receipt icon nav-icon"></i>Compliance Details</a></li> -->
                        <?php
                            // }
                        }
                        ?>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <!-- <i class="bx bx-buildings icon nav-icon"></i> -->
                        <i class='bx bx-clinic  icon nav-icon'></i>
                        <span class="menu-item" data-key="t-ecommerce">Treatments</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <?php
                        foreach ($access_value_arr as $key) {
                            if ($key == 5) { ?>
                                <li><a href="<?= home_path() ?>/report-details/ecp" data-key="t-inbox">
                                        <!-- <i class="bx bx-bed icon nav-icon"></i> -->
                                        <i class='bx bx-heart-circle  icon nav-icon'></i>
                                        <span class="menu-item" data-key="t-products">SNB</span></a></li>
                            <?php }
                            if ($key == 6) { ?>
                                <li><a href="<?= home_path() ?>/report-details/sdt" data-key="t-read-email">
                                        <!-- <i class="bx bx-pulse icon nav-icon"></i> -->
                                        <i class='bx bx-health  icon nav-icon'></i>
                                        <span class="menu-item" data-key="t-product-detail">SDT</span></a></li>
                        <?php }
                        }
                        ?>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->