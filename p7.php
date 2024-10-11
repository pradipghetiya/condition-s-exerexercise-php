<?php

function cal($arr){
	return array_sum($arr)/count ($arr);
}
$arr = [10,20,30,40,50];
$average = cal($arr);

echo "this average is:".$average;

?>