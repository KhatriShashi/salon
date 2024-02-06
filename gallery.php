<?php
// Include Database Connection File
include_once('./config/db-connection.php');
// page Level variables
$title = "Gallery|Os Family Salon & Academy";

// Include Header file
include_once('./common/header.php');
?>
</head>

<body>
    <!-- Navbar -->
    <?php
    // include navbar
    include_once('./common/navbar.php');
    ?>
    <!-- banner -->
    <section>
        <div class="hsr-home-banner1 d-flex justify-content-center align-items-center">
            <div class="hsr-banner-content">
                <h1>My Gallery</h1>
            </div>
        </div>
    </section>
    <!-- gallery Images -->
    <div class="container my-3">
        <div class="row g-1">
            <?php
            for ($i = 1; $i < 35; $i++) {
            ?>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="card shadow-sm gallery-card">
                        <img src="./assets/image/image-<?=$i?>.jpg" alt="">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- Footer -->
    <?php
    include_once('./common/footer.php');
    ?>
    <!-- Javascript -->
    <?php
    // include JavaScript
    include_once('./common/misc.php');
    ?>
</body>

</html>