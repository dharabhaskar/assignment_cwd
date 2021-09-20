<?php 
     //$month=array(jan,feb,mar,apr,may,jun,jul,aug,sep,oct,nov,dec);
     //unset($month[4]);
     // while(list($key,$val) = each($month)){
        //echo "$key -> $val <br>";
  // }


  if(isset($_POST['addmonth'])){
    $mid=$_POST['mid'];
    $monthname=$_POST['monthname'];

    printf("Month ID: %d and Month Name: %s",$mid,$monthname);
    
    //echo "Month ID: ".$mid." and Month Name: ".$monthname;
    session_start();
    $all_months=$_SESSION['months'];

    if(empty($all_months)){
        $all_months=array();
    }
    array_push($all_months,array('monthname'=>$monthname,'mid'=>$mid));
    $_SESSION['months']=$all_months;

    header('location:../assignment4_month.php');

    }else if(isset($_GET['action']) && $_GET['action']=='del'){
    $mid=$_GET['mid'];

    session_start();
    $all_months=$_SESSION['months'];

    //var_dump($all_months);


    $index=0;
    foreach($all_months as $k => $months){
        $index=$k;
        if($months['mid']==$mid){
           break;
        }
        
    }

    printf("all months: <br/>");
    var_dump($all_months);

    //printf("<br/>Found at index: %d<br/>",$index);
    //var_dump($all_months[$index]);
    
    unset($all_months[$index]);
    $_SESSION['months']=$all_months;

    header('location:../assignment4_month.php');
}

?>




