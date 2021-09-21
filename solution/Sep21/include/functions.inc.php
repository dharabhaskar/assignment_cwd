<?php
function connect_db()
{
    $server = 'localhost';
    $userid = 'test';
    $password = '1234';
    $db = 'mydb2';

    $con = mysqli_connect($server, $userid, $password, $db);
    if (!$con) {
        //header('location:../index.php?error=dbconfailed');
        echo 'db connection failed.';
    }
    return $con;
}

function add_record($con, $pname, $description, $price)
{
    $sql = "insert into product(pname,description,price) values(?,?,?)";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        //header('location:../index.php?error=stmtfailed');
        echo 'invalid sql';
    }
    mysqli_stmt_bind_param($stmt, 'ssd', $pname, $description, $price);

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

/* $con=connect_db();
$res=add_record($con,'dell laptop 14','ryzen 5500 4GB RAM',52500.00);
var_dump($res); */


function delete_record($con)
{
    $sql = "delete from product where id=?";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location:../index.php?error=stmtfailed');
    }
    mysqli_stmt_bind_param($stmt, 'i', $imgId);

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);


    return $result;
}

function update_record($con)
{
    $sql = "";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location:../index.php?error=stmtfailed');
    }
    mysqli_stmt_bind_param($stmt, 'i', $imgId);

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);


    return $result;
}

function fetch_record($con,$id)
{
    $sql = "select * from product";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location:../index.php?error=stmtfailed');
    }
    //mysqli_stmt_bind_param($stmt, 'i', $Id);

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);


    return $result;
}
