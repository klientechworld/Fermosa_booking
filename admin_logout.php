<?php
    require 'admin_config.php';
    $_SESSION = [];
    session_unset();
    session_destroy();
    header("Location: admin_login.php");
?>