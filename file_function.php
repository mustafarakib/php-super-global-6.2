<?php

$path = "c:/test/hello.php";
    echo   basename($path,".php").".php";
echo "<hr>";

    echo   dirname($path);
echo "<hr>";

$fileResource = fopen("output.txt","w+"); //use chat-b44+ for append
    fwrite($fileResource,"Hello B45!");
    fclose($fileResource);
echo "<hr>";

$fileResource = fopen("output.txt","r+");
$myString = fread($fileResource,filesize("output.txt"));
    echo $myString;
    fclose($fileResource);
echo "<hr>";

file_put_contents("output.txt","What's Up?");
echo "<hr>";

$myFileString = file_get_contents("output.txt");
    echo $myFileString;
echo "<hr>";
    echo filetype("output.txt");
