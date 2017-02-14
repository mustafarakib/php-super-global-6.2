<?php

$fileName =  $_FILES["File2Upload"]["name"];
$tempLocation = $_FILES["File2Upload"]["tmp_name"];

$newDestination = "Image/".time().$fileName;
$moveSuccess = move_uploaded_file($tempLocation,$newDestination);
$errorFILES = $_FILES["File2Upload"]["error"];

if($errorFILES || !$moveSuccess){
    echo "Sorry! The file not uploaded.";
}
else{
    echo 'Success! The file has been uploaded successfully';
}
