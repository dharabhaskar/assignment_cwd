<?php
if(isset($_POST["submit"])){
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];

    require_once('functions.inc.php');

    showGrater($n1,$n2);
}