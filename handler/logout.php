<?php
include "config.php";
unset($_SESSION["username"]);
session_unset();
session_destroy();
header("location: /");
?>