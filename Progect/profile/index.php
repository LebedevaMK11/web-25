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
            $file_users = file_get_contents("../data/json/users.json", true);
            $users = json_decode($file_users, true);
            $file_posts = file_get_contents("../data/json/posts.json", true);
            $posts = json_decode($file_posts, true);
        ?>
        <main class="app">
            <nav class="menu">
                <img src="../images/house.svg" alt="домой" class="sidebar-img">
                <img src="../images/human.svg" alt="пользователь" class="sidebar-img">
                <img src="../images/plus.svg" alt="плюс" class="sidebar-img">
            </nav>
            
            <section class="content">
                <?php
                    if ($user = validate_profile($users, $_GET['user_id'])) {
                        $userPosts = [];
                        foreach ($posts as $post) {
                            if ($user['user_id'] == $post['user_id']) {
                                array_push ($userPosts, $post);
                            }
                        }
                        GenerationProfile($user, $userPosts);
                    } else {
                        header("Location: ../home", true);
                        exit;
                    }   
                ?>
            </section>
        </main>
</html>