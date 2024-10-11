<?php

function validateCreditCard($number) {
    $number = strrev(preg_replace('/[^\d]/', '', $number));
	
	
    $sum = 0;
    for ($i = 0, $j = strlen($number); $i < $j; $i++) 
	{
        $digit = (int)$number[$i];
        if ($i % 2 == 1) {
            $digit *= 2;
         if ($digit > 9) {
                $digit -= 9;
            }
        }
        $sum += $digit;
    }
    return $sum % 10 == 0;
}


?>