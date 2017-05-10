<?php

$db['db_host'] = "65234.m.tld.pl";
$db['db_user'] = "admin65234_139";
$db['db_password'] = "4Fm8wHokB0";
$db['db_name'] = "baza65234_139";



foreach($db as $key => $value)
{
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
$connection -> query("SET NAMES 'utf8'");

?>