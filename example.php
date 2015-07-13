<?php

// Disposable Email Address Validator


require_once('DisposableEmail.class.php');

$obj = new DisposableEmails();

$result = $obj->validate("dsk@zomg.info");

if($result){
    echo "Alert !! Disposable Email!";
}else{
    echo "OK";
}