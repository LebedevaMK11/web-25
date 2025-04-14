<?php
function GenerationPhoto(string $imagePath) {
    ?>
    <img src=<?php echo $imagePath?> alt="фотография" class='images' >
    <?php
}
function GenerationProfile($users, $userPost)
{
    ?>
    <div class="content_person-info">
         <img src=<?php echo $users['profile_image']?> alt="Аватарка пользователя" class="avatar_profile">
         <div class="content_top-panel_person-info_text">
             <h1><?php echo $users['name']." "; echo $users['surname']?></h1>
             <p><?php echo $users['description']?></p>
         </div>
         <div class="content_top-panel_person-info_count_posts">
             <img src="../images/Image_simvol.svg" alt="значок изображения">
             <span><?php echo count ($userPost)." "?>пост</span>
         </div>
    </div>
    <div class="content_images">        
        <?php 
            foreach ($userPost as $post){
                foreach ($post['images'] as $imagePath) {
                    GenerationPhoto($imagePath);
                }
            }
 
}

?>