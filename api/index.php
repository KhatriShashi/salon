<?php
// Include Database Connection File
include_once('./config/db-connection.php');
// page Level variables
$title = "Home|Os Family Salon & Academy";

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
    <!-- Hero Image -->
    <?php
    include_once('./component/Home/hero.php');
    ?>
    <!-- About Us -->
    <?php
    include_once('./component/Home/about.php');
    ?>
    <!-- Our Services -->
    <?php
    include_once('./component/Home/services.php');
    ?>
    <!-- Working Hour -->
    <?php
    include_once('./component/Home/working_hour.php');
    ?>
    <!-- hsr-banner-background -->
    <?php
    include_once('./component/Home/hsr-banner-background.php');
    ?>
    <!-- Testimonials -->
    <?php
    include_once('./component/Home/testimonial.php');
    ?>
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