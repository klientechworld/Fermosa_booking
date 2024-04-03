<?php
require 'user_config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location: user_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .header{
            background-color: skyblue;
            line-height: 70px;
            padding-left: 30px;
        }
        a,a:hover{
            text-decoration: none!important;
        }
        .logout{
            float: right;
            padding-right: 30px;
        }
        ul{
            background-color: #424a5b;
            width: 16%;
            height: 100%;
            position: fixed;
            padding-top: 5%;
            text-align: center;
        }
        ul li{
            list-style: none;
            padding-bottom: 30px;
            font-size: 15px;
        }
        ul li a{
            color: white;
            font-weight: bold;
        }
        ul li a:hover{
            color: skyblue;
            text-decoration: none;
        }
        .content{
            margin-left: 20%;
            margin-top: 5%;
        }
    </style>
</head>
<body>
<header class="header">
        <a href="">USER DASHBOARD</a>

        <div class="logout">

            <a href="user_logout.php" class="btn btn-primary">Logout</a>

        </div>
    </header>

    <aside>
        <ul>
            <li>
                <a href="">Admission</a>
            </li>

            <li>
                <a href="">Profile</a>
            </li>

            <li>
                <a href="">Services</a>
            </li>

            <li>
                <a href="">Book An Appointment</a>
            </li>

            <li>
                <a href="">View Admins</a>
            </li>

            <li>
                <a href="">Appointment</a>
            </li>

            <li>
                <a href="">View Payments</a>
            </li>
        </ul>
    </aside>

    <div class="content">
        <h1>Sidebar Accordion</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem error distinctio soluta! Doloribus repellat esse laborum perspiciatis temporibus sed aut!.

        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime aperiam obcaecati ea labore quia omnis quaerat atque reprehenderit. Consectetur, obcaecati.</p>
    </div>
</body>
</html>