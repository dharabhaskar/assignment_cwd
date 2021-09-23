<?php
require_once('include/functions.inc.php');

$con=connect_db();

$result = fetch_record($con);

echo json_encode($result);
