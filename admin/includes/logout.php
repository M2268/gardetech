<?php include "header.php"; ?>
<?php session_start(); ?>
<?php

$_SESSION['username'] = null;
$_SESSION['role'] = null;

header("Location: ../../index.php ");

?>