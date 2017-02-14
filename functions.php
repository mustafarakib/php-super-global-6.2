<?php

$num1 = 545;
$num2 = 955;

function doSomething(){
    // some processing here
    $result = 34*525-254+25/2;
    echo $result."<br>";
}

function addition($num1, $num2){
    return ($num1+$num2);
}
doSomething();
    echo addition($num2,$num1)."<br>";

//    5*4*3*2*1

$number = 5;
function  factorial($arg){
    if($arg==0) return 1;
    return ($arg * factorial($arg-1));
}
    echo  factorial(5);
