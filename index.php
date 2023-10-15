<?php
require "_inc/_session.php";
$dir = "{$_SERVER['DOCUMENT_ROOT']}/";
$page = "login";
require_once "_inc/api.php";
require_once "_inc/post.php";

if(isset($_SESSION['sign'])){
    $page = $_SESSION['sign']['role'];
    $user = $_SESSION['sign'];
}
require "template/header.php";
require "pages/$page/main.php";
require "template/footer.php";

?>




