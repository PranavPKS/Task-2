<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
$http_referer = strval(isset($_SERVER['HTTP_REFERER']));



?>