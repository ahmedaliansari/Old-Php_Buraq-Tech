 <?php
 if(isset($_SESSION["name"])){
 require_once("head.php");
 require_once("header.php");
 require_once("left.php");
 require_once("dashboard.php");
 require_once("footer.php");
 }

 else{
    require_once("login.php");

 }
 ?>
