<?php
define("ALLOW", true);
define('FCPATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);

session_start();

require 'REDBLOOD/Go/helpers.php';
require 'REDBLOOD/Go/core.php';

$core = new goRBLD();
$core->runApp();
