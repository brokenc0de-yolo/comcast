<?php
defined("ALLOW") or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Redblood | Install</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>REDBLOOD/Assets/css/rb.install.style.css">
    <link rel="shortcut icon" href="<?= base_url() ?>REDBLOOD/Views/panel/img/favicon.ico" type="image/x-icon">
</head>

<body style="background-color:black;">
    <header class="header mt-2 text-center">
        <img style="margin-top:50px;" src="https://i.ibb.co/S70LBhQ/RBred.png" alt="" width="250">
    </header>
    <div class="mt-3">
        <h3 style="color:red;" class="text-center">REDBLOOD</h3>
    </div>
    <div class="content">
        <div class="content__inner">
            <div class="container overflow-hidden">
                <div class="multisteps-form">
                    <div class="row ">
                        <div class="col-12 col-lg-8 m-auto">
                            <form class="multisteps-form__form">
                                <div class="multisteps-form__panel shadow p-4 rounded bg-transparent js-active" data-animation="slideHorz">
                                    <h3 class="multisteps-form__title" style="text-align:center; color:white">INSTALLATION SUCCESS</h3>
                                    <p class="text-center text-warning" style="font-size:12px ;">Save your license code to log in and access the admin panel.</p>
                                    <div class="multisteps-form__content">
                                        <code>
                                            <div class="form-row mt-4 text-center">
                                                <div class="col text-white">
                                                    YOUR LICENSE CODE<br><br>
                                                    <input type="text" value="<?php echo @$_COOKIE["token"] ? $_COOKIE["token"] : 'HIDDEN'; ?>" id="mytoken" hidden><button title="click copy" class="btn btn-warning" onclick="copytoken()"><?php echo @$_COOKIE["token"] ? $_COOKIE["token"] : 'HIDDEN'; ?></button><br>
                                                    <hr />
                                                    <divclass="center"><a style="background-color:red;" class="btn btn-danger" href="<?php echo @$_COOKIE["panel"] ? $_COOKIE["panel"] : '#'; ?>" title="Login to Admin Panel" target="_blank"><i class="fa fa-user"></i>ACCESS ADMIN PANEL</a></div>
                                                    <hr />
                                                </div><br>
                                            </div>
                                            <p class="text-center"><a style="color:red; font-family:Calibri; font-size:16px; text-decoration:none;" href="#"><?php echo @$_COOKIE["copyright"] ? $_COOKIE["copyright"] : 'HIDDEN'; ?></a></p>
                                        </code>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <script src="<?= base_url() ?>REDBLOOD/Assets/js/rb.install.script.js"></script>
    <?php if (@$_SESSION['sukses']) { ?>
        <script>
            <?php echo $_SESSION['sukses']; ?>
        </script>
    <?php unset($_SESSION['sukses']);
    } ?>
    <script>
        function copytoken() {
            var copyText = document.getElementById("mytoken");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
            alert("License code copied: " + copyText.value);
        }
    </script>
</body>

</html>