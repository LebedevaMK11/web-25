<?php require_once 'post.php' ?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Cтраница основной ленты</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../fonts/fonts.css">
    </head>
    <body>
        <?php
            $file = file_get_contents("../data/post.json", true);
            $json_var = json_decode($file, true);
        ?>
        <main class="app">
            <nav class="menu">
                <img src="../images/house.svg" alt="домой" class="sidebar-img">
                <img src="../images/human.svg" alt="пользователь" class="sidebar-img">
                <img src="../images/plus.svg" alt="плюс" class="sidebar-img">
            </nav>
            <section class="content">
                <div class="content_top-panel"></div>
                <?php

                    foreach($json_var as $post)
                    {
                        GenerationPost($post);
                    }

                ?>
            </section>
        </main>
    </body>
</html>