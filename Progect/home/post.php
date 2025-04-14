<?php

function GenerationPost($post, $user)
{
    ?>
    <div class="post">
        <div class="post_hat">
            <div class="post_hat_person-info">
                <img src=<?php echo $user['profile_image']?> alt="Аватарка пользователя" class="avatar_post">
                <h2 class="post_hat_person-info_h2">
                    <a class="post_hat_person-info_h2" href=<?php echo '"../profile?user_id=' . $user['user_id'] . '"'?>>
                        <?php echo $user['name'] . " " . $user['surname'] ?>
                    </a>
                </h2>
            </div>
            <img src="../images/pensil.svg" alt="значок редактировать">
        </div>
        <img src=<?php echo $post['images'][0]?> alt="фотография мужчины на улице на перекрестке в снегопад" class="post_images">
        <div class="post_content">
            <div class="post_content_like">
                <button class="post_content_like-button">
                    <img src="../images/like.svg" alt="сердечко лайк" class="post_content_like-img">
                    <h2 class="post_content_like-counter"><?php echo $post['like_counter']?></h2>
                </button>
            </div>
            <p class="post_content-text"><?php echo $post['text']?> </p>
            <p class="post_content-text-time"><?php echo date('m.d.y', $post['time'])?></p>
        </div>
    </div>
    <?php
}
?>