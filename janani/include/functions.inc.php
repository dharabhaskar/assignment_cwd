<?php
function checkgrade($marks)
{
    $div = '';
    if ($marks >= 60) {
        $div = 'first Division';
    } elseif ($marks >= 45) {
        $div = 'second Division';
    } elseif ($marks >= 33) {
        $div = 'Third Division';
    } else {
        $div = 'your are failed';
    }
    printf('you score is %s', $marks);
}
