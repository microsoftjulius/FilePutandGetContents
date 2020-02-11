<?php
function saveContent(){
	$url = "php://input"; //reads from any url
	file_put_contents('data.txt', file_get_contents($url), FILE_APPEND); //file append is optional. dont include it incase you want to completly 
	//overide the existing data
}
saveContent();
function readContent(){
	$file = file_get_contents('data.txt');
	echo $file;
}
readContent();
?>