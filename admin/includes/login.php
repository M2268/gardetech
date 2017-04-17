<?php include "header.php"; ?>
<?php session_start(); ?>
<?php
echo "test";

if(isset($_POST['login'])){
    echo "test";
    $username = $_POST['username'];
    $password = $_POST['password'];

   $username = mysqli_real_escape_string($connection, $username);
   $password = mysqli_real_escape_string($connection, $password);

   $query = "SELECT * FROM users WHERE user_name = '{$username}' ";
   $select_user_query = mysqli_query($connection, $query);


   while($row = mysqli_fetch_array($select_user_query)){
       $db_id = $row['user_id'];

       $db_id = $row['user_id'];
       $db_user_name = $row['user_name'];
       $db_password = $row['user_password'];
       $db_user_role = $row['role'];
   }

   if($username !== $db_user_name && $password !== $db_password){
    header("Location: ../../index.php");
   } else if($username === $db_user_name || $password === $db_password) {
       header("Location: ../index.php");
       $_SESSION['username'] = $db_user_name;
       $_SESSION['role'] = $db_user_role;
   } else{
       header("Location: ../../index.php");
   }

}
