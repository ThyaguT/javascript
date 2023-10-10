<?php
function findDigitSum($number) {
    $sum = 0;
    while ($number > 0) {
        $digit = $number % 10;
        $sum += $digit;
        $number = (int)($number / 10);
    }
    return $sum;
}


$number = 30;
$result = findDigitSum($number);
echo "The sum of digits in $number is: $result";
?>