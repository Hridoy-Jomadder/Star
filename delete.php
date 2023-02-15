<?php 

    include("classes/autoload.php");

$login = new Login();
$user_data = $login->check_login($_SESSION['star_userid']);

$ERROR = "";
if(isset($_GET['id'])){
    
    $Post = new Post();
    $Post->get_one_post($_GET['id']);
   }else{
        
    $ERROR = "No such post was found!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete | Star</title>
    <style>
        #blue_bar {
            height: 50px;
            background-color: #405d9b;
            color: #d9dfeb;
        }

        #search_box {
            width: 400px;
            height: 20px;
            border-radius: 5px;
            border: none;
            padding: 4px;
            font-size: 14px;
            background-image: url(img/search.png);
            background-repeat: no-repeat;
            background-position: right;
        }

        #profile_pic {
            width: 300px;
            margin-top: -320px;
            border: solid 5px red;
        }

        #menu_buttons {
            width: 100px;
            display: inline-block;
            margin: 2px;

        }

        #menu_buttons a {
            text-decoration: none;
        }

        #friends_img {
            width: 70px;
            float: left;
            margin: 8px;
        }

        #friends_bar {
            background-color: #ffffff;
            min-height: 400px;
            margin-top: 20px;
            color: black;
            text-align: center;
        }

        #friends {
            clear: both;
            font-size: 12px;
            font-weight: bold;
            color: #405d9b;
            padding: 8px;
        }

        textarea {
            width: 100%;
            border: none;
            font-family: tahoma;
            font-size: 14px;
            height: 50px;
        }

        #post_button {
            float: right;
            background-color: #405d9b;
            border: none;
            color: white;
            padding: 4px;
            font-size: 14px;
            border-radius: 2px;
            width: 50px;
        }

        #post_bar {
            margin-top: 20px;
            background-color: white;
            padding: 10px;
        }

        #post {
            padding: 4px;
            font-size: 13px;
            display: flex;
            margin-bottom: 20px;
        }

        #See_More {
            background-color: #405d9b;
            border: inset;
            color: white;
            padding: 4px;
            font-size: 14px;
            border-radius: 18px;
            width: 82px;
            float: right;
        }

    </style>
</head>

<body style="font-family: tahoma; background-color: #d0d8e4;">

    <!-- header-->
<?php include("header.php"); ?>

    <!--cover area-->
    <div style="width: 1300px; margin: auto; min-height: 400px;">
        <div style="background-color: white; text-align: center; color: #405d9d">
          <?php  
            
            $image = "images/cover_image.jpg";
            if(file_exists($user_data['cover_image']))
               {
                 $image = $image_class->get_thumb_cover($user_data['cover_image']) ;
               }
            ?>
           
            <img src="<?php echo $image ?>" style="width: 100%;">  
            <span style="font-size: 11px;">
            <?php  
            $image = "images/user_male.jpg";
            if($user_data['gender'] == "Female")
                 {
                     $image = "images/user_female.jpg";
                 }
            if(file_exists($user_data['profile_image']))
               {
                 $image =  $image_class->get_thumb_profile($user_data['profile_image']);
               }
            ?>
            <img id="profile_pic" src="<?php echo $image ?>"><br/>
            <a style="text-decoration: none;" href="change_profile_image.php?change=profille">Change Profile Image</a>
             |  
            <a style="text-decoration: none;" href="change_profile_image.php?change=cover">Cover Image</a>
            </span>     

            <br>
            <div style="font-size: 20px;"><?php echo $user_data['first_name'] . " " . $user_data['last_name'] ?></div>
            <span>Ceo</span>

            <br>
            <div id="menu_buttons"><a href="home.php">Home</a></div>
            <div id="menu_buttons"><a href="profile.php">Profile</a></div>
            <div id="menu_buttons"><a href="about.php">About</a> </div>
            <div id="menu_buttons"><a href="friend.php">Friends </a></div>
            <div id="menu_buttons"><a href="photo.php">Photos </a></div>
            <!--        <div id="menu_buttons">Settings</div>-->
        </div>
        <!--  below  cover area-->
        <div style="display: flex;">
            <!--    Post area-->
            <div style="min-height: 400px; flex: 2.5; padding: 40px; padding-left: 0px;">
                <div style="border: solid thin #aaa; padding: 10px; background-color: white;">
               <h2>Post Delete</h2><br>
                    <form method="post">
                    Are you sure you want to delete this post?
                        <input id="post_button" type="submit" value="Delete">
                        <br>
                </form>
                    <br>
                </div>
               
            </div>
        </div>
    </div>
</body>

</html>
