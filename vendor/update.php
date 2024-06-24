<?php

session_start();
require_once '../vendor/connect.php';



$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];



mysqli_query($connect, "UPDATE `users` SET `name` = '$name', `email` = '$email', `password` = '$password' WHERE `users`.`id` = '$id'");



header('Location: /');