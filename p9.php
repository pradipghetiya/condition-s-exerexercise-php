<?php

function checkfileExistence ($filepath){
	return file_exists;
}
$filepath = "C:\ProgramData\Microsoft\Windows\Start Menu\Programs";
		
	if (file_exists($filepath)){
		echo "the file is exists.";
	}
	else{
		echo "the file is not existsed.";
	}


?>