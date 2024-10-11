
<?php
   
$url = "https://www.google.com/";
 
if (filter_var($url, FILTER_VALIDATE_URL)) {
	
    echo "$url is a valid url";
	
} 
else {
    echo "$url is a invalid url";
}
?>

