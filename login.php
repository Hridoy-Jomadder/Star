<?php

session_start();

  include("classes/connect.php");
  include('classes/login.php');

  $email = "";
  $password = ""; 

  if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
    
        $login = new Login();
        $result = $login->evaluate($_POST);
     
    if($result != "")
        {

            echo "<div style='text-align:center;font-size:12px;color:white;background:red;'>";
            echo "<br>The following errors occured:<br><br>";
            echo $result;
            echo "</div>";

        }else
        {

            header("Location: home.php");
            die;

        }

        $email = $_POST['email'];
        $password = $_POST['password'];
       
   }
  

?>
<!DOCTYPE html>
<html>

<head>
    <title>Star | Log in</title>
    <style>
        #bar {
            height: 100px;
            background-color: rgb(59, 89, 152);
            color: #d9dfeb;
            padding: 4px;
            padding-right: 425px;
        }

        #signup-button {
            background-color: #42b72a;
            width: 70px;
            text-align: center;
            padding: 4px;
            border-radius: 30px;
            float: right;
        }

        #bar2 {
            background-color: white;
            width: 800px;
            height: 400px;
            margin: auto;
            margin-top: 50px;
            padding: 10px;
            padding-top: 50px;
            text-align: center;
            font-weight: bold;
        }

        #text {
            height: 40px;
            width: 300px;
            border-radius: 4px;
            border: solid 1px black;
            padding: 4px;
            font-size: 14px;
        }

        #button {
            width: 300px;
            height: 40px;
            border-radius: 4px;
            font-weight: bold;
            border: none;
            background-color: rgb(59, 89, 152);
            color: white;
        }

        #box {}

        #box a {
            text-decoration: none;
        }

    </style>
</head>

<body style="font-family: tahoma; background-color: #e9ebee;">
    <div id="bar">
        <div style="font-size: 40px;padding-left: 421px;">Star</div>
        <form method="" action="signup.php">
        <input type="submit" id="signup-button" value="Sign Up"></form>
    </div>
    <div id="bar2">
        <span>Log in to Star</span> <br><br>
        <form action="" method="POST">
            <input name="email" value="<?php echo $email ?>" type="text" id="text" placeholder="Email Address or Phone Number"><br><br>
            <input name="password" value="<?php echo $password ?>" type="password" id="text" placeholder="Password"><br><br><br>

            <input type="submit" id="button" value="Log in"><br><br>
        </form>
        <div id="box">
            <a href="#"><span>Forgotten account?</span></a>
        </div>
    </div>
</body>

</html>
