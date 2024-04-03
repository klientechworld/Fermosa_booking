<?php
require 'user_config.php';
if(!empty($_SESSION["id"])){
    header("Location: user_home.php");
}
if(isset($_POST["submit"])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
        header("Location: user_home.php");
    }
    else{
        echo
            "<script> alert('Wrong Password'); </script>";
        }
    }
    else{
        echo
        "<script> alert('User Not Registered'); </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
    .form_deg
{
    padding: 200px;
}
.label_deg
{
    display: inline-block;
    color: skyblue;
    width: 300px;
    text-align: right;
    padding-top: 10px;
    padding-bottom: 10px;
}
.login_form
{
    background-color: rgba(1, 4, 14, 0.796);
    width: 400px;
    padding-top: 70px;
    padding-bottom: 70px;
}
.title_deg
{
    background-color: rgb(159, 168, 247);
    color: rgb(21, 21, 25);
    text-align: center;
    font-weight: bold;
    width: 400px;
    padding-top: 10px;
    padding-bottom: 10px;
    font-size: 20px;
}
</style>
</head>
<body>
    <center>
        <div class="form_deg">
            <center class="title_deg">  
                User Login
            </center>
                <form class="login_form" action="" method="post" autocomplete="off">
                    <div>
                        <label class="label_deg" for="usernameemail"></label>
                        <input type="text" name="usernameemail" id="usernameemail" placeholder="Username or Email" required value=""> <br>
                    </div>

                    <div>
                        <label class="label_deg" for="password"></label>
                        <input type="password" name="password" id="password" placeholder="Password" required value=""> <br><br>
                    </div>

                    <div>
                        <button class="btn btn-primary" type="submit" name="submit">Login</button> <button class="btn btn-outline-primary"><a href="login.php">Back</a></button> <button class="btn btn-outline-primary"><a href="index.php">Home</a></button>
                    </div>
                    <br>
                    <div>
                        <a href="user_registration.php">Don't have an account?</a>
                    </div>
                 </form>
        </div>
    </center>
</body>
</html>