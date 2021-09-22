<?php
if (isset($_POST["submit"])) {
    $marks = $_POST['marks'];
    require_once('functions.inc.php');
    checkgrade($marks);
}
