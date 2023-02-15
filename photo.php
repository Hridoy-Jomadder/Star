<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo | Star</title>
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
        #{
 box-sizing: border-box;
        }

        img {
            width: 100%;
            border-radius: 4px;
/*            display: flex;*/
        }

    </style>
</head>

<body style="font-family: tahoma; background-color: #d0d8e4;">

       <!-- header-->
    <div id="blue_bar">
        <div style="width: 800px; margin: auto; font-size: 30px;">
            Star &nbsp &nbsp <input type="text" id="search_box" placeholder="Search for People">
            <img src="img/profile.jpg" style="width: 50px; float: right;">
        </div>
    </div>
    <!--cover area-->
    <div style="width: 1300px; margin: auto; min-height: 400px;">
        <div style="background-color: white; text-align: center; color: #405d9d">
           
            <img src="img/mountain.jpg" style="width: 100%;">            <img id="profile_pic" src="img/anik.jpg.jfif">

            <br>
            <div style="font-size: 20px;">Hridoy Jomadder</div>
            <span>Ceo</span>

            <br>
            <div id="menu_buttons"><a href="home.php">Home</a></div>
            <div id="menu_buttons"><a href="profile.php">Profile</a></div>
            <div id="menu_buttons"><a href="about.php">About</a> </div>
            <div id="menu_buttons"><a href="friend.php">Friends </a></div>
            <div id="menu_buttons"><a href="photo.php">Photos </a></div>
            <div id="menu_buttons">Settings</div>
        </div>
        <br>
        <div style="display: flex;">
            <!--  Friends area-->
            <div style="min-height: 600px; flex: 2;">
                <div id="friends_bar">Photos
                    <br>
                    <div class="img">
                        <img src="img/hi.jpg" alt="hi Icon" style="width:200px;height:200px;float:left;">
                    </div>
                    <div class="img">
                        <img src="img/0.png" alt="hi Icon" style="width:200px;height:200px;float:left; ">
                    </div>
                    <div class="img">
                        <img src="img/user2.jpg" alt="hi Icon" style="width:200px;height:200px;float:left;">
                    </div>
                    <div class="img">
                        <img src="img/user3.jpg" alt="hi Icon" style="width:200px;height:200px;float:left;">
                    </div>
                    <div class="img">
                        <img src="img/hi.jpg" alt="hi Icon" style="width:200px;height:200px;float:left;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
