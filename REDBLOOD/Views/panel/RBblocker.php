<?php
defined("ALLOW") or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin Panel | Redblood</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" href="<?= base_url() ?>REDBLOOD/Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>REDBLOOD/Assets/css/ready.css">
    <link rel="stylesheet" href="<?= base_url() ?>REDBLOOD/Assets/css/demo.css">
</head>

<body>
    <?php echo view('panel/menu'); ?>
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">REDBLOOD BLOCKER</h4>
                <div class="row">
                    <div class="col-md ">
                        <div class="card">
                            <form method="post" action="<?= base_url() ?>security-check/panel/update">
                                <div class="card-header">
                                    <div class="card-title">UPDATE LICENSE</div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>REDBLOOD LICENSE</label>
                                        <input type="text" class="form-control" name="rbtoken" value="<?php echo RBINI('TOKEN'); ?>">
                                        <br>
                                        <button class="btn btn-success" name="updatetoken">CONFIRM</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<?php if (@$_SESSION['sukses']) { ?>
    <script>
        <?php echo $_SESSION['sukses']; ?>
    </script>
<?php unset($_SESSION['sukses']);
} ?>

</html>