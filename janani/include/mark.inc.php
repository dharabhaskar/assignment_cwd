<?php
if(isset($_POST["submit"])){
    require_once('functions.inc.php');
    
    $score=$_POST['marks'];
    checkgrade($score);
}