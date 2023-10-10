<?php
function factorial($n) {
    if($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
$number = 3; 
$result = factorial($number);
echo "The factorial of $number is $result.";
?>