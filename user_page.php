<?php
session_start();

if(!isset($_SESSION['user_name'])){
   header('location: /');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/css/main.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3><span>user</span></h3>
      <h1>Вітаємо<span> <?php echo $_SESSION['user_name'] ?></span></h1>
      <a href="info_user.php" class="btn">info account</a>
      <a href="vendor/logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>