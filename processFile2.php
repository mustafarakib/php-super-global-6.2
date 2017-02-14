<?php
print_r($_FILES);

$fileName =  $_FILES["File2Upload"]["name"];
$tempLocation = $_FILES["File2Upload"]["tmp_name"];
    echo $fileName;

$newDestination = "Image/".$fileName;
    echo $newDestination;
move_uploaded_file($tempLocation,$newDestination);
echo "<hr>";

$path= "c:/xampp/htdocs/hello.php";
$unknownVar = pathinfo($path);
    var_dump($unknownVar);
