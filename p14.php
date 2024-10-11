<?php
$number = rand(1, 100);


$guess = null;
$attempts = 10;

 if ($guess < $number) {
        echo "Too low.\n";
    } elseif ($guess > $number) {
        echo "Too high.\n";
    } else {
        echo "Congratulations $number in $attempts \n";
    }


?>