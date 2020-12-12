<?php
function validateAccount($str){
    $regex = '/^[_a-z0-9]{6,}$/';
    if(preg_match($regex,$str)){
        echo "Account: ".$str." hop le"."<br/>";
    } else{
        echo "Account: ".$str." khong hop le"."<br/>";
    }
}
validateAccount("_ahi");
validateAccount("12lequynh_");