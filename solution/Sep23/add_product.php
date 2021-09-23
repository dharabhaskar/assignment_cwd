<?php
require_once('include/functions.inc.php');

$pname = $_POST["pname"];
$description = $_POST["description"];
$price = $_POST["price"];

$con=connect_db();

$add_result = add_record($con, $pname, $description, $price);
$result = array();
if ($add_result !== false) {
    $result['response_msg'] = 'Record added successfully.';
} else {
    $result['response_msg'] = 'Failed to add record.';
}
echo json_encode($result);
