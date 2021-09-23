<?php
function checkgrade($marks){
    $div='';
    if($marks>=60){
        $div='First Division';
    }elseif($marks>=45){
         $div='Second Division';
    }elseif($marks>=33){
        $div='Third Division';
    }else{
        $div='Failed';
    }
    printf('your Grade is %s', $div);
}