<?php require_once 'profile.php' ?>
<!--  -->
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
            $file = file_get_contents("../data/user.json", true);
            $json_var = json_decode($file, true);

        ?>
        <main class="app">
            <nav class="menu">
                <img src="../images/house.svg" alt="домой" class="sidebar-img">
                <img src="../images/human.svg" alt="пользователь" class="sidebar-img">
                <img src="../images/plus.svg" alt="плюс" class="sidebar-img">
            </nav>
            
            <section class="content">
                <?php
                    GenerationProfile($json_var[0])
                ?>
            </section>
        </main>
</html>