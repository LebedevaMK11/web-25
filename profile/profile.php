<?php

function GenerationProfile(array $post)
{
    ?>
    <div class="content_person-info">
         <img src="../images/photo_vani.jpg" alt="Аватарка Вани Денисова" class="avatar">
         <div class="content_top-panel_person-info_text">
             <h1><?php echo $post['name']." "; echo $post['surname']?></h1>
             <p><?php echo $post['text']?></p>
         </div>
         <div class="content_top-panel_person-info_count_posts">
             <img src="../images/Image_simvol.svg" alt="значок изображения">
             <span><?php echo $post['post_counter']." "?>поста</span>
         </div>
    </div>
   
    <div class="content_images">        
         <img src="../images/man_in_snow_profile.jpg" alt="фотография мужчины на улице на перекрестке в снегопад">
         <img src="../images/photo_house.jpg" alt="фотография бывшего здания кока колы">
         <img src="../images/cake.jpg" alt="фотография надкусанного десерта">
         <img src="../images/students.jpg" alt="фотография молодых людей на фоне стенда, посвященного дню космонавтики">
         <img src="../images/coffe.jpg" alt="фотография пакетика Rockets кофе">
         <img src="../images/book.jpg" alt="фотография страницы книги">
         <img src="../images/tree.jpg" alt="фотография ворот и дерева">
         <img src="../images/two_men.jpg" alt="фотография двух молодых людей">
         <img src="../images/pot.jpg" alt="фотография белой кастрюли">
    </div>
    <?php
}

?>