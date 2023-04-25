<?php

    session_start();
    unset($_SESSION["uid"]);
    session_destroy();
    header("location: C:\xampp\htdocs\Management-system-students");
    exit;
?>
