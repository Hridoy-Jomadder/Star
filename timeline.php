<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeline | Star</title>
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
            width: 377px;
            margin-top: -200px;
            border-radius: 50%;
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
/*            display: flex;*/
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
<div id="blue_bar">
        <div style="width: 800px; margin: auto; font-size: 30px;">
            Star &nbsp &nbsp <input type="text" id="search_box" placeholder="Search for People">
            <img src="img/profile.jpg" style="width: 50px; float: right;">
        </div>
    </div>
    <!--cover area-->
    <div style="width: 700px; margin: auto; min-height: 400px;">
        <div style="background-color: white; text-align: center; color: #405d9d">
            <img src="img/anik.jpg.jfif" style="width: 30%;">
            <img id="profile_pic" src="img/OIP%20(1).jfif">
            <br>
            <div style="font-size: 20px;">Hridoy Jomadder</div>
            <br>
            <div id="menu_buttons"><a href="timeline.php">Timeline</a></div>
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

                    <textarea placeholder="Whats on your mind?"></textarea>
                    <input id="post_button" type="submit" value="Post">
                    <br>
                </div>
                <!--         post_bar -->
                <div id="post_bar">
                    <div id="post">
                        <div>
                            <img src="user1.jpg" style="width: 75px;" margin-right: 40px;>
                        </div>
                        <div>
                            <div style="font-weight: bold; color: aqua;">Hridoy Jomadder</div>
                            hi how are you where are your fromLorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, et, modi. Illo quam eum, nemo sunt, temporibus ex at aperiam incidunt, facere perspiciatis nam! Rem minus obcaecati consequatur reprehenderit saepe.
                            Perferendis nisi fugit reprehenderit repudiandae perspiciatis, culpa, est veniam nemo. Temporibus molestiae, minima labore sunt maiores, facere natus? Eum nemo labore odio quo cupiditate accusantium debitis nisi fugiat dolor vitae.
                            <br><br>
                            <a href="">Like</a> . <a href="">Comment</a> . <span style="color: aqua;">Jan 20 2021</span>
                        </div>
                    </div>
                    <div id="post">
                        <div>
                            <img src="user1.jpg" style="width: 75px;" margin-right: 40px;>
                        </div>
                        <div>
                            <div style="font-weight: bold; color: aqua;">Hridoy Jomadder</div>
                            hi how are you where are your fromLorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, et, modi. Illo quam eum, nemo sunt, temporibus ex at aperiam incidunt, facere perspiciatis nam! Rem minus obcaecati consequatur reprehenderit saepe.
                            Perferendis nisi fugit reprehenderit repudiandae perspiciatis, culpa, est veniam nemo. Temporibus molestiae, minima labore sunt maiores, facere natus? Eum nemo labore odio quo cupiditate accusantium debitis nisi fugiat dolor vitae.
                            <br><br>
                            <a href="">Like</a> . <a href="">Comment</a> . <span style="color: aqua;">Jan 20 2021</span>
                        </div>
                        <input id="See_More" type="submit" value="See More">
                        <div id="post">
                            <div>
                                <img src="user1.jpg" style="width: 75px;" margin-right: 40px;>
                            </div>
                            <div>
                                <div style="font-weight: bold; color: aqua;">Hridoy Jomadder</div>
                                hi how are you where are your fromLorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, et, modi. Illo quam eum, nemo sunt, temporibus ex at aperiam incidunt, facere perspiciatis nam! Rem minus obcaecati consequatur reprehenderit saepe.
                                Perferendis nisi fugit reprehenderit repudiandae perspiciatis, culpa, est veniam nemo. Temporibus molestiae, minima labore sunt maiores, facere natus? Eum nemo labore odio quo cupiditate accusantium debitis nisi fugiat dolor vitae.
                                <br><br>
                                <a href="">Like</a> . <a href="">Comment</a> . <span style="color: aqua;">Jan 20 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
