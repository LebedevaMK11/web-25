<?php 
    require_once 'post.php';
    require '../data/validate.php';
?>
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
            $file_posts = file_get_contents("../data/json/posts.json", true);
            $posts = json_decode($file_posts, true);
            $file_users = file_get_contents("../data/json/users.json", true);
            $users = json_decode($file_users, true);
        ?>
        <main class="app">
            <nav class="menu">
                <img src="../images/house.svg" alt="домой" class="sidebar-img">
                <a href="../profile?user_id=1">
                    <img src="../images/human.svg" alt="пользователь" class="sidebar-img">
                </a>
                <img src="../images/plus.svg" alt="плюс" class="sidebar-img">
            </nav>
            <section class="content">
                <div class="content_top-panel"></div>
                <?php

                    foreach($posts as $post)
                    {
                        $userKey = array_search($post["user_id"], array_column($users, 'user_id'));
                        $user = $users[$userKey];
                        if (validate_post($post)) {
                            GenerationPost($post, $user);
                        }
                    }

                ?>
            </section>
        </main>
    </body>
</html>