<?php
$grade = 60;

if ($grade >= 90) {
    echo "Grade A";
} elseif ($grade >= 80) {
    echo "Grade B";
} elseif ($grade >= 70) {
    echo "Grade C";
} elseif ($grade >= 60) {
    echo "Grade D";
} else {
    echo "Failed";
}
?>