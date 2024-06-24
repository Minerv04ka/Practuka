<?php

    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $login_time = $_POST['login_time'];
    $user_type = $_POST['user_type'];

    if ($password === $password_confirm) {


        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `email`, `password`, `password_confirm`,  `user_type`) VALUES (NULL, '$name', '$email', '$password', '$password_confirm', '$user_type' '$path')");

        $_SESSION['message'] = 'Реєстрація прошла успішно!';
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Паролі не співпадають';
        header('Location: ../register.php');
    }

