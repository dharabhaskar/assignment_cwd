<?php
  function checkgrade($marks){
        $div='';
          if ($marks>=60){
            $div='First Division';
          }else if ($marks>=45){
             $div='Second Division';
          }else if ($marks>=33){
             $div='third division';
          }else{
             $div='Fail';
          }    
     
      printf("You got %s" ,$div);
    }
    //checkgrade();
  

  function checkage($age){
    //$age ='';
    if($age>=18){
      echo"<h2>You are eligible for vote</h2>";
    }
    else{
      echo"<h2>You are not eligible for vote</h2> ";
    }

    //checkage();
  }

  function checknumber($number){
    //$number ='';
    if($number > 0){
      echo $number . "is a positive number";
    }
    else if($number < 0){
     echo  $number . "is a negative number";
    }
    else if($number == 0){
      echo "  you entered zero";
    }
    else{
     echo "plese enter a numeric number";
    }

  }

?>
