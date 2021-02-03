<?php

$a = "Hello";

$dir = "../root/folder 1";
$scanDir = scandir($dir);
$currentDir = array_slice( $scanDir, 2 );

// print_r($currentDir);




?>
