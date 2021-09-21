<?php
require_once('functions.inc.php');
$con = connect_db();
if (isset($_POST['submit'])) {
    $pId = $_POST['id'];
    $pName = $_POST['pname'];
    $pDesc = $_POST['   description'];
    $pPrice = $_POST['price'];

    //Connect db...



    if (empty($pId)) {

        //Add product details...
        fetch_record($con, $pName, $pDesc, $pPrice);
        header('location:../index.php?success=success');
    } else {
        //Update product details...
        $res = update_record($con, $pId, $pName, $pDesc, $pPrice);
        var_dump($res);
        header('location:../index.php?success=success');
    }

    echo 'PID: ' . $pId . '<br/>';
    echo 'PTitle: ' . $pName . '<br/>';
    echo 'PDesc: ' . $pDesc . '<br/>';
    echo 'PPrice: ' . $pPrice . '<br/>';
} else if (isset($_GET['action']) && $_GET['action'] == 'del') {
    //Delete product details
    $pId = $_GET['prodId'];
    delete_record($con, $pId);
    header('location:../index.php?success=success');
}
