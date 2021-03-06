
<?php include "../includes/db.php" ?>
<?php include "functions.php" ?>
<?php ob_start(); ?>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} ?>

<?php
if(isset($_SESSION['role'])) {
    if ($_SESSION['role'] !== 'admin' && $_SERVER['REQUEST_URI'] !== "/admin/login.php") {
//if(isset($_SESSION['role'])==='admin' &&  $_SERVER['REQUEST_URI'] !=="/admin/login.php"){
        header("Location: ../admin/login.php");
    }
} else if ($_SERVER['REQUEST_URI'] !== "/admin/login.php"){
    header("Location: ../admin/login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">




    <title>Gardetech - <?php if(isset($_SESSION['role'])) echo $_SESSION['role']; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>

    <![endif]-->
    <script src="js/tinymce/tinymce.min.js"></script>
    <!--<script>tinymce.init({ selector:'textarea' });</script>-->

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-97196267-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>

<body>
