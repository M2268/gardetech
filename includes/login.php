<?php include "../includes/db.php"; ?>

<?php

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

   $username = mysqli_real_escape_string($connection, $username);
   $password = mysqli_real_escape_string($connection, $password);

   $query = "SELECT * FROM users WHERE username = '{$username}'";
   $select_user_query = mysqli_query($connection, $query);

   while($row = mysqli_fetch_array($select_user_query)){
       $db_id = $row['user_id'];
       echo $db_id;
   }

}
