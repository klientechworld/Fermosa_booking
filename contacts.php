<?php
require 'admin_config.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    $query = "INSERT INTO tb_inquiry VALUES('', '$name', '$email', '$mobile','$message')";
    mysqli_query($conn, $query);
    echo
        "<script> alert('Submitted Successfully'); </script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
  }
  body{
    font-family: montserrat;
  }
  nav{
    background: #0082e6;
    height: 80px;
    width: 100%;
  }
  label.logo{
    color: white;
    font-size: 35px;
    line-height: 80px;
    padding: 0 100px;
    font-weight: bold;
  }
  nav ul{
    float: right;
    margin-right: 20px;
  }
  nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;
  }
  nav ul li a{
    color: white;
    font-size: 17px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
  }
  a.active,a:hover{
    background: #1b9bff;
    transition: .5s;
  }
  .checkbtn{
    font-size: 30px;
    color: white;
    float: right;
    line-height: 80px;
    margin-right: 40px;
    cursor: pointer;
    display: none;
  }
  #check{
    display: none;
  }
  @media (max-width: 952px){
    label.logo{
      font-size: 30px;
      padding-left: 50px;
    }
    nav ul li a{
      font-size: 16px;
    }
  }
  @media (max-width: 858px){
    .checkbtn{
      display: block;
    }
    ul{
      position: fixed;
      width: 100%;
      height: 100vh;
      background: #2c3e50;
      top: 80px;
      left: -100%;
      text-align: center;
      transition: all .5s;
    }
    nav ul li{
      display: block;
      margin: 50px 0;
      line-height: 30px;
    }
    nav ul li a{
      font-size: 20px;
    }
    a:hover,a.active{
      background: none;
      color: #0082e6;
    }
    #check:checked ~ ul{
      left: 0;
    }
  }
  section{
    background: url(bg1.jpg) no-repeat;
    background-size: cover;
    height: calc(100vh - 80px);
  }
  @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
  *
  {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
  }
  body
  {
      background: linear-gradient(45deg, blueviolet, lightgreen);
  }
  .contactUs
  {
      position: relative;
      width: 100%;
      padding: 40px 100px;
  }
  .contactUs .title
  {
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 2em;
  }
  .contactUs .title h2
  {
      color: #fff;
      font-weight: 500;
  }
  .form
  {
      grid-area: form;
  }
  .info
  {
      grid-area: info;
  }
  .map
  {
      grid-area: map;
  }
  .contact
  {
      padding: 40px;
      background: #fff;
      box-shadow: 0 5px 35px rgba(0, 0, 0, 0.15);
  }
  
  .box
  {
      position: relative;
      display: grid;
      grid-template-columns: 2fr 1fr;
      grid-template-rows: 5fr 4fr;
      grid-template-areas: 
      "form info"
      "form map";
      grid-gap: 20px;
      margin-top: 20px;
  }
  .contact h3
  {
      color: #0e3959;
      font-weight: 500;
      font-size: 1.4em;
      margin-bottom: 10px;
  }
  
  .formBox
  {
      position: relative;
      width: 100%;
  }
  .formBox .row50
  {
      display: flex;
      gap: 20[x];
  }
  .inputBox
  {
      display: flex;
      flex-direction: column;
      margin-bottom: 10px;
      width: 50%;
  }
  .formBox .row100 .inputBox
  {
      width: 100%;
  }
  .inputBox span
  {
      color: #18b7ff;
      margin-top: 10px;
      margin-bottom: 5px;
      font-weight: 500;
  }
  .inputBox input
  {
      padding: 10px;
      font-size: 1.1em;
      outline: none;
      border: 1px solid #333;
  }
  .inputBox textarea
  {
      padding: 10px;
      font-size: 1.1em;
      outline: none;
      border: 1px solid #333;
      resize: none;
      min-height: 220px;
      margin-bottom: 10px;
  }
  .inputBox input[type="submit"]
  {
      background: #ff578b;
      color: #fff;
      border: none;
      font-size: 1.1em;
      max-width: 120px;
      font-weight: 500;
      cursor: pointer;
      padding: 14px 15px;
  }
  .inputBox ::placeholder
  {
      color: #999;
  }
  
  .info
  {
      background: #0e3959;
  }
  
  .info h3
  {
      color: #fff;
  }
  
  .info .infoBox div
  {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
  }
  
  .info .infoBox div span
  {
      min-width: 40px;
      height: 40px;
      color: #fff;
      background: #18b7ff;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 1.5em;
      border-radius: 50%;
      margin-right: 15px;
  }
  .info .infoBox div p
  {
      color: #fff;
      font-size: 1.1em;
  }
  
  .info .infoBox div a
  {
      color: #fff;
      text-decoration: none;
      font-size: 1.1em;
  }
  .sci
  {
      margin-top: 40px;
      display: flex;
  }
  .sci li
  {
      list-style: none;
      margin-right: 15px;
  }
  .sci li a 
  {
      color: #fff;
      font-size: 2em;
      color: #ccc;
  }
  .sci li a:hover
  {
      color: #fff;
  }
  .map
  {
      padding: 0;
  }
  .map iframe
  {
      width: 100%; 
      height: 100%;
  }
  
  @media (max-width: 991px)
  {
      body
      {
          background: #03a9f5;
      }
      .contactUs
      {
          padding: 20px;
      }
      .box {
          grid-template-columns: 1fr;
          grid-template-rows: auto;
          grid-template-areas:
                  "form"
                  "info"
                  "map";
      }
      .formBox .row50 
      {
          display: flex;
          gap: 0;
          flex-direction: column;
      }
      .inputBox
      {
          width: 100%;
      }
      .contact 
      {
          padding: 30px;
      }
      .map 
      {
          min-height: 300px;
          padding: 0px;
      }
  }
    </style>
    

</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Fermosa</label>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a class="active">Contact</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>

    <div class="contactUs">
        <div class="title">
            <h2>Inquire with Us</h2>
        </div>
        <div class="box">
            <div class="contact form">
                <h3>Send a Message</h3>
                <form action="" method="post">
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>Name</span>
                                <input type="text" name="name" placeholder="John Doe">
                            </div>
                        </div>

                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="text" name="email" placeholder="johndoe@gmail.com">
                            </div>
                            <div class="inputBox">
                                <span>Mobile</span>
                                <input type="text" name="mobile" placeholder="+91 987 654 3210">
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <span>Message</span>
                                <textarea name="message" placeholder="Write your message here..."></textarea>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" name="submit" id="submit" value="submit">
                            </div>
                        </div>
                    </div>
                </form>
            </div>


            <div class="contact info">
                <h3>Contact Info</h3>
                <div class="infoBox">
                    <div>
                        <span><ion-icon name="location"></ion-icon></span>
                        <p>Blk 18 Lot 7, The, PH-B Istana Tanza Rd, Tanza, Cavite <br>Philippines</p>
                    </div>
                    <div>
                        <span><ion-icon name="mail"></ion-icon></span>
                        <a href="mailto:loremipsum@email.com">loremipsum@email.com</a>
                    </div>
                    <div>
                        <span><ion-icon name="call"></ion-icon></span>
                        <a href="tel:+918976543210">+63 951 0542 932</a>
                    </div>
                    <ul class="sci">
                        <li><a href="https://www.facebook.com/Laizamalate18?mibextid=ZbWKwL"><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>

                    </ul>
                </div>
            </div>


            <div class="contact map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3864.9319088583266!2d120.83964177485507!3d14.37335168608655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33962b78842a6399%3A0x9224588241cbe015!2sFermosa%20By%20Ms.Laiza%20Brows%20and%20Lashes%20Services!5e0!3m2!1sen!2sph!4v1711072596276!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    
</body>
</html>