<?php
// Include Database Connection File
include_once('./config/db-connection.php');
// page Level variables
$title = "ContactUs|Os Family Salon & Academy";

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
    <!-- contact banner -->
    <?php
    include_once('./component/ContactUs/contact_banner.php')
    ?>
    <!-- contact-us -->
    <?php
    include_once('./component/ContactUs/contact_us.php');
    ?>
    <!--Location  -->
    <div class="hsr-contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1789.7764415953084!2d73.72848026647922!3d27.217146251439743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396a9126181f6667%3A0xce87491f4d10419!2sOS%20Family%20Salon%20%26%20Academy!5e0!3m2!1sen!2sin!4v1692930181039!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
     <script>
        const scriptURL ='https://script.google.com/macros/s/AKfycbyNVUL7kS9b9SGB5FqU1jLdzn-pkHhpHEH9x8lxQyWW9WOrINAECHoWojC2lM8cgzBZyw/exec';
        const form = document.forms['contact-us'];

        form.addEventListener('submit', e => {
            e.preventDefault();
            const submitButton=document.getElementById('contact-submit-btn');
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