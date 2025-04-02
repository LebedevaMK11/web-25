<?php

function GenerationPost(array $post)
{
    ?>
    <div class="post">
        <div class="post_hat">
            <div class="post_hat_person-info">
                <img src="../images/avatar_vani.jpg" alt="Аватарка Вани Денисова" class="avatar">
                <h2 class="post_hat_person-info_h2"><?php echo $post['name']." "; echo $post['surname'] ?></h2>
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
            <p class="post_content-text-time"><?php echo date('d.m.y', $post['time'])?></p>
        </div>
    </div>
    <?php
}
?>