<?php
function connect_db()
{
    $server = 'localhost';
    $userid = 'test';
    $password = '1234';
    $db = 'test';

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
    //echo "$sql";
    //var_dump($con);
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location:../index.php?error=stmtfailed');
        echo 'invalid sql';
    }
    //var_dump($stmt);
    mysqli_stmt_bind_param($stmt, 'ssd', $pname, $description, $price);

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}

/* $con=connect_db();
$res=add_record($con,'dell laptop 14','ryzen 5500 4GB RAM',52500.00);
var_dump($res); */


function delete_record($con, $id)
{
    $sql = "delete from product where id=?";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location:../index.php?error=stmtfailed');
    }
    mysqli_stmt_bind_param($stmt, 'i', $id);

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);


    return $result;
}

function update_record($con, $id, $pname, $description, $price)
{
    $sql = "update product set pname=?, description=?, price=? where id=?";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location:../index.php?error=stmtfailed');
    }
    mysqli_stmt_bind_param($stmt, 'ssdi', $pname, $description, $price, $id);

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);


    return $result;
}

function fetch_record($con)
{
    $sql = "select * from product";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location:../index.php?error=stmtfailed');
    }
    //mysqli_stmt_bind_param($stmt, 'i', $Id);

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    //var_dump($stmt);
    $rows = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($rows, $row);
    }

    mysqli_stmt_close($stmt);


    return $rows;
}

//------------------------- MESSAGE DISPLAY RELATED FUNCTIONS -------------------------------

function showerror($errortype, $msg)
{
    $error = NULL;
    if (isset($_SERVER['QUERY_STRING'])) {
        parse_str($_SERVER['QUERY_STRING'], $arr);
        if (isset($arr['error'])) {
            $error = $arr['error'];
        }
    }
    if ($error === $errortype) {
        echo '
        <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
            ' . $msg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    }
}

function showsuccess($errortype, $msg)
{
    $success = NULL;
    if (isset($_SERVER['QUERY_STRING'])) {
        parse_str($_SERVER['QUERY_STRING'], $arr);
        if (isset($arr['success'])) {
            $success = $arr['success'];
        }
    }
    if ($success === $errortype) {
        echo '
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            ' . $msg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    }
}
