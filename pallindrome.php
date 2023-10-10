<?php
function is_palindrome($str){
    $str = strtolower(preg_replace('/[^a-zA-Z]/', '', $str)); 
    return $str == strrev($str);
}
$input = "Malayalam , malayalam";
if(is_palindrome($input)){
    echo "Palindrome";
} else {
    echo "Not a palindrome";
}
?>