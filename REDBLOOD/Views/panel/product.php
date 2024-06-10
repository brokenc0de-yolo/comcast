<?php
defined("ALLOW") or exit('No direct script access allowed');
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Panel | Redblood</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="<?= base_url() ?>REDBLOOD/Views/panel/img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>REDBLOOD/Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>REDBLOOD/Views/panel/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>REDBLOOD/Views/panel/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
 
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url() ?>REDBLOOD/Views/panel/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url() ?>REDBLOOD/Views/panel/css/fxc.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <?php include "sidebar.php"; ?>
        <div class="content">
            <?php include "navbar.php"; ?>
            <div class="container-fluid pt-4 px-4">
                <div class="mb-3 text-center">
                    <h2 class="text-primary" style="letter-spacing: 2px;">
                        <strong id="typing-text"></strong>
                    </h2>
                </div>

                


               
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">2024 Redblood </a> All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Made with <i class="fa fa-heart text-primary"></i> by <a href="#">Redblood</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
    var textToType = "COMING SOON...!!!";
    var typingSpeed = 150;
    var index = 0;
    var typingInterval;
    function typeWriter() {
        if (index < textToType.length) {
            document.getElementById("typing-text").innerHTML += textToType.charAt(index);
            index++;
            typingInterval = setTimeout(typeWriter, typingSpeed);
        }
    }
    
    typeWriter();
    </script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Views/panel/lib/chart/chart.min.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Views/panel/lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Views/panel/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Views/panel/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Views/panel/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Views/panel/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Views/panel/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Views/panel/js/main.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Assets/js/core/jquery.3.2.1.min.js"></script>
    
    <script src="<?= base_url() ?>REDBLOOD/Assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Assets/js/core/popper.min.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Assets/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Assets/js/plugin/chartist/chartist.min.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Assets/js/plugin/chart-circle/circles.min.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Assets/js/ready.min.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Assets/js/demo.js"></script>
    
</body>
<?php if (@$_SESSION['sukses']) { ?>
    <script>
        <?php echo $_SESSION['sukses']; ?>
    </script>
<?php unset($_SESSION['sukses']);
} ?>
</html>