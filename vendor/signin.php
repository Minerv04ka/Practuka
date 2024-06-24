<?php

session_start();
require_once 'connect.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($connect, $_POST['name']);
   $email = mysqli_real_escape_string($connect, $_POST['email']);
   $password = md5($_POST['password']);
   $password_confirm = md5($_POST['password_confirm']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM users WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($connect, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:/admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:/user_page.php');

      }
     
   }else{
      $_SESSION['message'] = 'Паролі не співпадають';
      header('Location: ../index.php');
   }

};