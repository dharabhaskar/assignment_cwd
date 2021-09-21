<?php
function showGrater($n1,$n2){
    if($n1>$n2){
        printf("%d is the Grater",$n1);
    }else{
        printf("%d is the Grater",$n2);
    }
}

function checkGrade($marks){
    //1 - 100
    $div='';
    if($marks>=60){
        $div='First';
    }else if($marks>=45){
        $div="Second";
    }else if($marks>=33){
        $div="Third";
    }else{
        $div="Fail";
    }

    printf("You got %s Division",$div);
}

checkGrade(28);