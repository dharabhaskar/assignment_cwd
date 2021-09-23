<?php
require_once('include/functions.inc.php');

$id = $_POST["id"];
$pname = $_POST["pname"];
$description = $_POST["description"];
$price = $_POST["price"];

$con=connect_db();

$add_result = update_record($con, $id, $pname, $description, $price);
$result = array();
if ($add_result !== false) {
    $result['response_msg'] = 'Record updated successfully.';
} else {
    $result['response_msg'] = 'Failed to update record.';
}
echo json_encode($result);
