<?php

function reverseString($str) {
    $length = strlen($str);
    $reversed = '';
	
	
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}

$originalString = "Hello, world!";
$reversedString = reverseString($originalString);
echo $reversedString;


?>


