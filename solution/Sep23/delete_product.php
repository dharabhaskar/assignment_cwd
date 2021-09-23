<?php
require_once('include/functions.inc.php');

$id=$_GET['id'];

$con=connect_db();

$add_result = delete_record($con, $id);
$result = array();
if ($add_result !== false) {
    $result['response_msg'] = 'Record deleted successfully.';
} else {
    $result['response_msg'] = 'Failed to delete record.';
}
echo json_encode($result);
