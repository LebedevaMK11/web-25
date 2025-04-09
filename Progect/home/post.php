<?php

function GenerationPost(array $post, $user)
{
    ?>
    <div class="post">
        <div class="post_hat">
            <div class="post_hat_person-info">
                <img src="../images/avatar_vani.jpg" alt="Аватарка Вани Денисова" class="avatar">
                <h2 class="post_hat_person-info_h2">
                    <a class="post_hat_person-info_h2" href=<?php echo '"../profile?user_id=' . $user['user_id'] . '"'?>>
                        <?php echo $user['name'] . " " . $user['surname'] ?>
                    </a>
                    
                </h2>
            </div>
            <img src="../images/pensil.svg" alt="значок редактировать">
        </div>
        <img src="../images/man_in_snow.jpg" alt="фотография мужчины на улице на перекрестке в снегопад" class="post_images">
        <div class="post_content">
            <div class="post_content_like">
                <button class="post_content_like-button">
                    <img src="../images/like.svg" alt="сердечко лайк" class="post_content_like-img">
                    <h2 class="post_content_like-counter"><?php echo $post['like_counter']?></h2>
                </button>
            </div>
            <p class="post_content-text"><?php echo $post['text']?> </p>
            <p class="post_content-text-time"><?php echo $post['time']?></p>
        </div>
    </div>
    <?php
}
?>