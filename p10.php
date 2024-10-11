<?php

function validateEmail ($email){
	
	if (strpos($email,'@')){
}
else{
	return false;
}
}
$email = "pradipghetiya@gmail.com";

if (validateEmail($email)){
	echo "Email is valied";
}
else{
	echo "email is invalied";
}

?>