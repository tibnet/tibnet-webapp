<?php
$sessionTime = 365 * 24 * 60 * 60;
$sessionName = "tibnet";
session_set_cookie_params($sessionTime);
session_name($sessionName);
session_start();

if (isset($_COOKIE[$sessionName])) {
    setcookie($sessionName, $_COOKIE[$sessionName], time() + $sessionTime, "/");
}
$page = "login";
if(isset($_SESSION['sign'])){
    $page = $_SESSION['sign']['role'];
}
require "template/header.php";
require "pages/$page/main.php";
require "template/footer.php";
?>




