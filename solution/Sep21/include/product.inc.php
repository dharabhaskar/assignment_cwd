<?php

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $pname = $_POST['pname'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    require_once('functions.inc.php');
    $con = connect_db();
    if (empty($id)) {
        //Add record details...
        add_record($con, $pname, $description, $price);

        header('location:../index.php?success=add_success');
    } else {
        //Update record details...
        update_record($con, $id, $pname, $description, $price);
        header('location:../index.php?success=update_success');
    }
} elseif (isset($_GET['action']) && $_GET['action'] == 'del') {
    //Delete record details
    $id = $_GET['id'];
    delete_record($con, $id);
    header('location:../index.php?success=del_success');
}