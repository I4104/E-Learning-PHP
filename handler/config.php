<?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    session_start();

    $conn = new mysqli("localhost", "root", "", "e-learning");
    $conn->set_charset("utf8");
?>