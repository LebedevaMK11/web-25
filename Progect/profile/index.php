<?php 
require_once 'profile.php';
require '../data/validate.php';
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Страница профиля</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../fonts/fonts.css">
    </head>
    <body>
        <?php
            $file_users = file_get_contents("../data/users.json", true);
            $users = json_decode($file_users, true);

            $flag = false;
            if (isset($_GET['user_id']) && is_numeric($_GET['user_id'])) {
                $temp = validate_profile($users, $_GET['user_id']);
                if ($temp !== false) {
                    $user = $temp;
                } else {
                    $flag = true;
                }
            } else {
                $flag = true;
            }

            if ($flag) {
                header("Location: ../home", true);
                exit;
            }
        ?>
        <main class="app">
            <nav class="menu">
                <img src="../images/house.svg" alt="домой" class="sidebar-img">
                <img src="../images/human.svg" alt="пользователь" class="sidebar-img">
                <img src="../images/plus.svg" alt="плюс" class="sidebar-img">
            </nav>
            
            <section class="content">
                <?php
                    GenerationProfile($user);
                ?>
            </section>
        </main>
</html>