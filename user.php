<div id="friends">
    <?php 
           $image = "images/user_male.jpg";
           if ($FRIENDS_ROW['gender'] == "Female")
            {
               $image = "images/user_female.jpg";
            }
             
    if(file_exists($FRIENDS_ROW['profile_image']))
     {
       $image = $image_class->get_thumb_profile($FRIENDS_ROW['profile_image']);  
      }

        ?>
    <a href="profile.php?id=<?php echo $FRIENDS_ROW['userid']; ?>">
    <img id="friends_img" src="<?php echo $image ?> ">

    <?php echo $FRIENDS_ROW['first_name'] . " " . $FRIENDS_ROW['last_name'] ?>
    </a>
</div>
