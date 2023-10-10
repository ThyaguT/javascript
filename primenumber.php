<?php

function is_prime($num) {
    if ($num <= 1) return false;
    if ($num == 2) return true;
    if ($num % 2 == 0) return false;
    for ($i = 3; $i <= sqrt($num); $i += 2) {
        if ($num % $i == 0) return false;
    }
    return true;
}

function print_primes_up_to_limit($limit) {
    for ($i = 2; $i <= $limit; $i++) {
        if (is_prime($i)) {
            echo $i . " ";
        }
    }
}

$limit = 100; 

echo "Prime numbers up to $limit are: ";
print_primes_up_to_limit($limit);

?>