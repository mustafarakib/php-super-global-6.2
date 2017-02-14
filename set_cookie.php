<?php

 $myArray = [12,56,265,24,56, "hello","world"];
 $success = setcookie("cookieName",serialize($myArray),time()+86400*7);

     if($success){
       echo "Success! :) Cookie set was successful";
     }
     else{
       echo "Failed! :( Cookie set was unsuccessful";
     }

 var_dump(unserialize($_COOKIE["cookieName"]));

 setcookie("cookieName","",time()-1);

 var_dump(unserialize($_COOKIE["cookieName"]));
