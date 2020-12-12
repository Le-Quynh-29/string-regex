<?php
$string = " CodeGym_Viet_Nam ";
$trim_string = trim($string," ");
$index = stripos($trim_string,"_");
$sub_string = substr($trim_string,0,$index);
echo "$sub_string";