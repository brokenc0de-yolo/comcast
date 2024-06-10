<?php
defined("ALLOW") or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="Dollars Hunter">
    <meta name="Keywords" content="Redblood">
    <meta name="Author" content="Redblood">
    <title>Redblood | Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>REDBLOOD/Assets/css/rb.install.style.css">
    <link rel="shortcut icon" href="<?= base_url() ?>REDBLOOD/Views/panel/img/favicon.ico" type="image/x-icon">
</head>

<body style="background-color:black;">
    <header class="header text-center">
        <img style="margin-top:50px;" src="https://i.ibb.co/S70LBhQ/RBred.png" alt="rb-logo" width="250">
    </header>
    <div class="text-center mt-2">
        <h2 id="ok" style="color: red;">WELCOME BACK</h2>
    </div>
    <div class="content">
        <div class="content__inner">
            <div class="container overflow-hidden">
                <div class="multisteps-form">
                    <div class="row mt-2">
                        <div class="col-12 col-lg-6 m-auto">
                            <form method="post" action="process" class="multisteps-form__form">
                                <div class="multisteps-form__panel shadow p-4 rounded js-active" data-animation="slideHorz">
                                    <h3 id="typing-text" class="text-center mb-3" style="font-size: 16px; color: rgb(192, 192, 192);"></h3>

                                    <div class="multisteps-form__content">
                                        <div class="mb-4">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" placeholder="THIEF" readonly><br>
                                                <input type="password" name="token" class="form-control" placeholder="Your License Code">
                                            </div>
                                        </div>
                                        <div class="d-grid text-center">
                                            <button style="letter-spacing:3px;" type="submit" name="action" class="btn btn-danger"><i class="fa fa-arrow-right m-1"></i> LOGIN</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
<script>
    var textToType = "PLEASE LOG IN TO ACCESS THE ADMIN PANEL";    
    var typingSpeed = 100;
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
</body>

</html>