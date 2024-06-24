<?php

    session_start();
    require_once 'vendor/connect.php';

    $id = $_GET['id'];


    $users = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$id'");


    $users = mysqli_fetch_assoc($users);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update account</title>
    
</head>

<body>
    <h3>Update Product</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $users['id'] ?>">
        <p>Name</p>
        <input type="text" name="name" value="<?= $users['name'] ?>">
        <p>Email</p>
        <textarea name="description" name="email"><?= $users['email'] ?></textarea>
        <p>Password</p>
        <input type="password" name="password" value="<?= $users['password'] ?>">
        <button type="submit">Update</button>
    </form>
</body>
</html>