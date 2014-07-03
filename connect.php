<?php
$mysql_host = 'localhost';
$mysql_user = 'PranavPKS';
$mysql_pass = '7777';
$mysql_db = 'delta';

if (!mysql_connect($mysql_host, $mysql_user, $mysql_pass)||!mysql_select_db($mysql_db))
{
die(mysql_error());
}


?>
