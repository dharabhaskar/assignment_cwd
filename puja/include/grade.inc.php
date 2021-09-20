<?php
if(isset($_POST["submit"])){
    $marks=$_POST['marks'];
    $div='';
    if ($marks>=60){
      $div='First Division';
    }
      else if ($marks>=45){
       $div='Second Division';
    }
      else if ($marks>=33){
       $div='third division';
    }
      else{
       $div='Fail';
    }    

printf("You got %s" ,$div);
}
    

    //require_once('functions.inc.php');

   // checkgrade($marks);
