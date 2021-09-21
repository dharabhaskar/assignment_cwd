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

function removeMonth($monToRemove){
    //Create array with all month names.
    $mon_name_text="Jan,Feb,Mar,Apr,May,Jun,Jul,Aug,Sep,Oct,Nov,Dec";
    $months=explode(",",$mon_name_text);

    //Search the month to remove
    $index=array_search($monToRemove,$months);

    if($index!==false){
        //if available remove it
        unset($months[$index]);
        foreach($months as $m){
            echo "$m <br/>";
        }
    }else{
        //if not found show message.
        echo "$monToRemove not found.";
    }
}

removeMonth('rerieuri');
