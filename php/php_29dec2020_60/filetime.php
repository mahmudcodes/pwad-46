<?php 	

$file = 'mytext.txt';
define("br", "<br>");
echo "File access time = ".fileatime($file)." Second";
echo br;
$file = 'mytext.txt';
echo "File change time = ".filectime($file)." Second";
echo br;
$file = 'mytext.txt';
echo "File modify time = ".filemtime($file)." Second";
echo br;

 ?>