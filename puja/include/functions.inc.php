<?php
  function checkgrade($marks){
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

  //checkgrade();
