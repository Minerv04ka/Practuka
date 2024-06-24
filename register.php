<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Реєстрація</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>


<div class="form-container">

   <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
      <h3>register</h3>
      <?php
      if(isset($error)){
         foreach($error as $msg){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Введіть ваше ім'я">
      <input type="email" name="email" required placeholder="Введіть вашу почту">
      <input type="password" name="password" required placeholder="Введіть ваш пароль">
      <input type="password" name="password_confirm" required placeholder="Підтвердіть ваш пароль">
      <select name="user_type">
      <option value="user">User</option>
      <option value="admin">Admin</option>
      </select>
      <input type="submit" name="submit" value="Зареєструватись" class="form-btn">
      <p>У вас вже є аккаунт? <a href="index.php">Авторизируйтесь</a></p>
      <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
   </form>

</div>

</body>
</html>