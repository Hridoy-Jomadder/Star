<?php 

  include("classes/autoload.php");

$login = new Login();
$user_data = $login->check_login($_SESSION['star_userid']);

  //posting stars here
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    
      $post = new Post($_POST);
      $id = $_SESSION['star_userid'];
      $result = $post->create_post($id, $_POST, $_FILES);
      
    if($result == "")
    {
    
       header("Location: home.php");
        die;
    }else
    {
         echo "<div style='text-align:center;font-size:12px;color:white;background:red;'>";
            echo "<br>The following errors occured:<br><br>";
            echo $result;
            echo "</div>";
    
    }
  }
      //collect posts
      $post = new Post();
      $id = $user_data['userid'];

      $posts = $post->get_posts($id);
     
     //collect firends
      $user = new User();
      $id = $user_data['userid'];

      $friends = $user->get_friends($id);

      $image_class = new Image();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Star</title>
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
            width: 10%;
            border: solid 2px white;
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
    <div style="width: 1250px; margin: auto; min-height: 400px;">
        <div style="background-color: white; text-align: center; color: #405d9d">
           <?php 
            $image = "";
            if(file_exists($user_data['profile_image']))
               {
                 $image = $user_data['profile_image'];
               }
            ?>
            <img id="profile_pic" src="<?php echo $image ?>" style="width: 60px; float: left;">
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
                    <form method="post" enctype="multipart/form-data">
                        <textarea name="post" placeholder="Whats on your mind?"></textarea>
                        <input type="file" name="file">
                        <input id="post_button" type="submit" value="Post">
                        <br>
                    </form>
                </div>
                <!--    post_bar -->
                <div id="post_bar">


                    <?php 
                     
//                      var_dump($posts);
    
                  if($posts)
                  {     
                      
                    foreach ($posts as $ROW) {
                        # code....
                        
                        $user = new User();
                        $ROW_USER = $user->get_user($ROW['userid']);
                        
                        include("post.php");

                    }
                  }
                ?>
                </div>
                <!--                         post_bar -->
  <!--    Firends -->
<!--
                <div id="firends_bar">


                    <?php 
                     
//                      var_dump($posts);
    
                  if($friends)
                  {                      
                    foreach ($friends as $FRIENDS_ROW) {
                        # code....
                                     
                        include("user.php");

                        
                    }
                  }
                ?>
                </div>
-->
            </div>
        </div>
    </div>

</body>

</html>
