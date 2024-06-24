<?php
session_start();
require_once 'vendor/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Info</title>
</head>
<style>
    th, td {
        padding: 10px;
        border:10px; 
        margin:auto; 
        width:10%; 
        height:100%;
        text-align: center;
    }

    th {
        background: #83909c;
    }

    td {
        background: #97b5cf;
    }
</style>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>

        <?php

            $users= mysqli_query($connect, "SELECT * FROM `users`");

            $users = mysqli_fetch_all($users);

        

            foreach ($users as $users) {
                ?>
                    <tr>
                        <td><?= $users[0] ?></td>
                        <td><?= $users[1] ?></td>
                        <td><?= $users[2] ?></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    </form>
</body>
</html>
