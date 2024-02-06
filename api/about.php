<?php
// Include Database Connection File
include_once('./config/db-connection.php');
// page Level variables
$title = "AboutUs|Os Family Salon & Academy";

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
    <?php
    include_once('./component/AboutUs/banner1.php')
    ?>
    <!-- Brand History -->
    <?php
    include_once('./component/AboutUs/brand_history.php');
    ?>
    <!-- Brand Mission -->
    <?php
    include_once('./component/AboutUs/brand_mission.php');
    ?>
    <!-- Testimonial -->
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