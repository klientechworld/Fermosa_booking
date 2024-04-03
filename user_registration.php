<?php
require 'user_config.php';
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Username or Email Has Already Taken'); </script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Registration Successful'); </script>";
        }
        else{
            echo
            "<script> alert('Password Does Not Match'); </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <center>
        <div class="form_deg">
            <center class="title_deg">
                REGISTRATION
            </center>
            <form class="login_form" action="" action="" method="post" autocomplete="off">

                <div>
                    <label class="label_deg" for="name"></label>
                    <input type="text" name="name" id="name" placeholder="Name" required value=""> <br>
                </div>

                <div>
                    <label class="label_deg" for="username"></label>
                    <input type="text" name="username" id="username" placeholder="Username" required value=""> <br>
                </div>
                 
                <div>
                    <label class="label_deg" for="email"></label>
                    <input type="email" name="email" id="email" placeholder="Email" required value=""> <br>
                </div>
                
                <div>
                    <label class="label_deg" for="password"></label>
                    <input type="password" name="password" id="password" placeholder="Password" required value=""> <br>
                </div>
                
                <div>
                    <label class="label_deg" for="confirmpassword"></label>
                    <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required value=""> <br>
                </div>
                <br>
                <div>
                    <button type="submit" name="submit">Register</button>
                </div>
                <br>
                <div>
                    <a class="btn btn-primary" href="user_login.php">Login Now</a>
                </div>
            </form>
        </div>
    </center>
    
</body>
</html>