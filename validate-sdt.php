<?php
function validatePhone($str){
    $regex = '/^[0-9]{2}+(\-[0-9]{10}+)$/';
    if (preg_match($regex,$str)){
        echo "So dien thoai: ".$str." hop le"."<br/>";
    } else {
        echo "So dien thoai: ".$str." khong hop le"."<br/>";
    }
}

validatePhone("84-0358166796");
validatePhone("aa-9038238923");