<?php
if(isset($_COOKIE['authantication-cookie']) && $_COOKIE['authantication-cookie']== "admin" ) {
    echo 'You are admin !';
    }
    else {
     echo 'Not Admin!!';
    }
?>