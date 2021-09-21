<?php
if(isset($_POST["submit"])){
    $age=$_POST['age'];
    
     /*if($age>=18){
    echo"<h2>You are eligible for vote</h2>";
    }else{
    echo"<h2>You are not eligible for vote</h2> ";
    } */

    require_once('functions.inc.php');
    checkage($age);
}
?>