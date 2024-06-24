<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'database');

    if (!$connect) {
        die('Error connect to DataBase');
    }