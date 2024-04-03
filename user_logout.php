<?php
    require 'user_config.php';
    $_SESSION = [];
    session_unset();
    session_destroy();
    header("Location: user_login.php");
?>