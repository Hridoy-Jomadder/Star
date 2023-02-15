<?php

  include("classes/connect.php");
  include("classes/signup.php");

  $first_name = "";
  $last_name = "";
  $gender = ""; 
  $email = "";
  $password = ""; 
  $password = ""; 

  if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
    
     $signup = new Signup();
     $result = $signup->evaluate($_POST);

    if($result != "")
    {
            
        echo "<div style='text-align:center;font-size:12px;color:white;background:red;'>";
        echo "<br>The following errors occured:<br><br>";
        echo $result;
        echo "</div>";
            
    }
      else
    {
          
        header("Location: login.php");
        die;
    
    }

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = $_POST['password'];
            
   }
  

?>

<!DOCTYPE html>

<html>

<head>
    <title>Star ||Sign Up</title>
    <style>
        #bar {
            height: 100px;
            background-color: rgb(59, 89, 152);
            color: #fff;
            padding: 4px;
            padding-right: 425px;
            border-radius: 4px;
        }

        #signup-button {
            background-color: #42b72a;
            width: 215px;
            text-align: center;
            padding: 14px;
            border-radius: 30px;
            float: right;
        }

        #bar2 {
            background-color: #e9ebee;
            width: 800px;
            height: 480px;
            margin: auto;
            margin-top: 50px;
            padding: 10px;
            padding-top: 50px;
            text-align: center;
            font-weight: bold;
            border-radius: 4px;
        }

        #text {
            height: 40px;
            width: 300px;
            border-radius: 4px;
            border: solid 1px #ccc;
            padding: 4px;
            font-size: 14px;
        }

        #text1 {
            height: 40px;
            width: 242px;
            border-radius: 4px;
            border: solid 1px #ccc;
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

    </style>
</head>

<body style="font-family: tahoma;">
    <div id="bar">
        <div style="font-size: 40px;padding-left: 421px;">Star</div>
    </div>
    <div id="bar2">
        <span>Sign Up to Star</span> <br><br>
        <form method="post" action="">
            <input value="<?php echo $first_name ?>" name="first_name" type="text" id="text" placeholder="First Name"><br><br>
            <input value="<?php echo $last_name ?>" name="last_name" type="text" id="text" placeholder="Last Name"><br><br>
            <span>Gender<br></span>
            <select id="text" name="gender">
                <option <?php echo $gender ?>>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select><br><br>

            <input value="<?php echo $email ?>" name="email" type="text" id="text" placeholder="Email Address or Phone Number"><br><br>
            <input value="<?php echo $password ?>" name="password" type="password" id="text" placeholder="Password"><br><br>
            <input value="<?php echo $password2 ?>"  name="password2" type="password" id="text" placeholder="Retype Password"><br><br><br>

            <input type="submit" id="button" value="Sign Up"><br><br>
        </form>
    </div>
</body>

</html>
