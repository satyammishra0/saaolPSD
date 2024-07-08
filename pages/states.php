<?php include '../init.php';
include_once HEAD_TOP;
?>

<head>

    <title> <?php echo "Center Page" ?> | SAAOL </title>

    <?php include_once HEAD; ?>

    <!-- Home css -->
    <link href="<?= get_assets() ?>css/pages/states.css" rel="stylesheet" type="text/css" />

</head>

<?php
$stateName = "Bihar";
$current_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$metaTitle = $stateName . " Saaol Center";
$metaDesc = "";

$fetchSeoQuery = "SELECT * FROM `state_seo_details` WHERE  `state_seo_details`.`state_name` = :stateName;";

$fetchSeoStmtQuery = $DB->prepare($fetchSeoQuery);
$fetchSeoStmtQuery->bindParam(":stateName", $stateName);

try {
    $fetchSeoStmtQuery->execute();
    $SEOResults = $fetchSeoStmtQuery->fetch(PDO::FETCH_ASSOC);


    if (isset($SEOResults['meta_title'])) {
        $metaTitle = $SEOResults['meta_title'];
    } else {
        $metaTitle = ucwords($stateName) . " Saaol Center";
    }


    if (isset($SEOResults['meta_desc'])) {
        $metaDesc = $SEOResults['meta_desc'];
    } else {
        $metaDesc = "";
    }


    if (isset($SEOResults['og_details'])) {
        $ogDetails = $SEOResults['og_details'];
    } else {
        $ogDetails = "";
    }


    if (isset($SEOResults['state_content'])) {
        $stateContent = $SEOResults['state_content'];
    } else {
        $stateContent = "";
    }

    if (isset($SEOResults['banner_alt_tag'])) {
        $bannerAltTag = $SEOResults['banner_alt_tag'];
    } else {
        $bannerAltTag = "";
    }
} catch (PDOException $th) {
    throw $th;
}



// Checking if statename is correct and exist in our DB
$fetchStateQuery = "SELECT * FROM `city-card-details` WHERE `state_name`=:stateName";
$fetchStatePerp = $DB->prepare($fetchStateQuery);

$fetchStatePerp->bindParam(':stateName', $stateName);
$fetchStatePerp->execute();

$fetchStateCount = $fetchStatePerp->rowCount();

?>

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
    <section class="first-banner-states grid grid-center">
        <h1>Say no to bypass surgery <br>
            and yes to natural bypass</h1>
    </section>

    <!-- ============================================================== -->
    <!-- States card section -->
    <!-- ============================================================== -->
    <section class="states-card-conatienr">
        <h2 class="home-heading">Delhi NCR</h2>
        <div class="states-card-parent grid grid-3">
            <?php
            while ($result = $fetchStatePerp->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="states-card ">
                    <div class="card-header grid">
                        <div class="card-header-icon grid grid-center">
                            <i class='bx bxs-map'></i>
                        </div>
                        <div class="card-header-content"><?= ucwords($result['city_name']); ?></div>
                    </div>
                    <iframe src="<?= $result['iframe_url']; ?>" title="<?= $result['iframe_title']; ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <p>
                        <?= $result['city_addr']; ?>
                        <br> <b><span>Phone No</span></b> :<?= $result['phone_no']; ?>
                    </p>
                    <div class="card-button grid">
                        <?php $urlFriendlyCityName = str_replace(' ', '-', strtolower($result['city_name'])); ?>
                        <button class="main-button main-button-spl"><a href="<?= $current_url ?>/<?= $urlFriendlyCityName ?>">View Page</a> </button>
                        <button class="main-button main-button-spl"><a href="<?= base_url() ?>book-an-appointment/<?= $result['city_name']; ?>">Book Appointment</a></button>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </section>



    <!-- ============================================================== -->
    <!-- Footer section-->
    <!-- ============================================================== -->
    <?php include_once FOOTER; ?>


    <?php include_once SCRIPT; ?>


</body>

</html>