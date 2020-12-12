<?php
function isEmail($str){
    $regex = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]{3})$/';
    if(preg_match($regex,$str)){
        echo $str." la email hop le"."<br/>";
    }else{
        echo $str." la email khong hop le"."<br/>";
    }
}
isEmail("hi@gmail.com");
isEmail("agmail.com");
