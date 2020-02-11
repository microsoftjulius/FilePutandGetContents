<?php
function saveContent(){
	$url = "http://church.pahappa.com/login";
	file_put_contents('data.txt', file_get_contents($url));
}
saveContent();
function readContent(){
	$file = file_get_contents('data.txt');
	echo $file;
}
readContent();
?>