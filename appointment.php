<?php
// Include Database Connection File
include_once('./config/db-connection.php');
// page Level variables
$title = "Appointment|Os Family Salon & Academy";

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
    include_once('./component/Appointment/appointment_banner.php');
    ?>
    <!-- Book Appointment -->
    <?php
    include_once('./component/Appointment/appointment_form.php')
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
    <script>
        const scriptURL ='https://script.google.com/macros/s/AKfycbzuUgbeF963q-5k5sVXC_QvO8XIrUetSt7cfPFiGajXWyiEDu3GLfk17PxglrmBRrLOWg/exec';
        const form = document.forms['appointment-form'];

        form.addEventListener('submit', e => {
            e.preventDefault();
            const submitButton=document.getElementById('appointment-submit-button');
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    if (response.ok) {
                        submitButton.textContent ="Thank you! We'll be in touch shortly.";
                        form.reset();
                        submitButton.disabled = true;
                    } else {
                        submitButton.textContent = "Oops! Something went wrong. Please try again later.";
                    }
                })
                .catch(error => console.error('Error!', error.message))
        })
    </script>
</body>
</html>