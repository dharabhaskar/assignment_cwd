<?php
if(isset($_POST["submit"])){
    $number=$_POST['number'];
    if($number > 0){
      echo $number . "<h2> is a positive number</h2>";
    }
    else if($number < 0){
     echo  $number . "<h2>is a negative number</h2>";
    }
    else if($number == 0){
      echo "<h2>You entered zero</h2>";
    }
    else{
     echo "<h2>please enter a numeric number</h2>";
    }
    
    
  //require_once('functions.inc.php');

 // checknumber($number);
}
?>