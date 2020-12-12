<?php
function validateClass($str)
{
    $regex = '/^[A C P]{1}+[0-9]{4}+[G H I K L M]{1}$/';
    if (preg_match($regex, $str)) {
        echo "Ten lop: ".$str." la hop le"."<br/>";
    } else {
        echo "Ten lop: ".$str." khong hop le"."<br/>";
    }
}
validateClass("A7382K");
validateClass("B7632G");
