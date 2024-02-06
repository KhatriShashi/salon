<?php
// Include Database Connection File
include_once('./config/db-connection.php');
// page Level variables
$title = "Services|Os Family Salon & Academy";

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
    include_once('./component/Services/banner1.php')
    ?>
    <!-- services card -->
    <?php
    include_once('./component/Services/services_card.php')
    ?>
    <!-- Working Hour -->
    <?php
    include_once('./component/Home/working_hour.php')
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