<?php
  if(isset($_POST["submit"])){
    require_once('functions.inc.php');

    $number=$_POST['marks'];
    checkgrade($number);
  }
?>