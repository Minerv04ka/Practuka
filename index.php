<?php

session_start();
if ($_SESSION['user']) {
    header('Location: /');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/css/main.css">

</head>
<body>
   
<div class="form-container">

   <form action="vendor/signin.php" method="post" enctype="multipart/form-data">
      <h3>login</h3>
      <?php
      if(isset($error)){
         foreach($error as $msg){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Введіть вашу почту">
      <input type="password" name="password" required placeholder="Введіть ваш пароль">
      <input type="submit" name="submit" value="Авторизуватись" class="form-btn">
      <p>У вас ще немає аккаунта? <a href="register.php">Реєструйтесь</a></p>
   </form>

</div>

</body>
</html>