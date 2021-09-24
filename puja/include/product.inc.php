<?php
 require_once('prodfunctions.inc.php');
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $pname=$_POST['pname'];
    $description=$_POST['description'];
    $price=$_POST['price'];
   
    $con = connect_db();


    if(empty($id)){
        //Add product details...
        add_record($con,$pname,$description,$price);
        header('location:../index.php?success=regsuccess');
        
    }else{
        //Update product details...
        update_record($con,$id,$pname,$description,$price);
        header('location:../index.php?success=regsuccess');
    }
    
    //echo 'PID: '.$pId.'<br/>';
    //echo 'PTitle: '.$pTitle.'<br/>';
    //echo 'PDesc: '.$pDesc.'<br/>';
    //echo 'PPrice: '.$pPrice.'<br/>';
}else if(isset($_GET['action']) && $_GET['action']=='del'){
    //Delete product details
    $id=$_GET['id'];
    $con = connect_db();
    delete_record($con,$id);
    header('location:../index.php?success=delsuccess');
}
?>