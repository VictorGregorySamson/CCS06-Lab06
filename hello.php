<?php
function greet() {
    $message = "Hello World! Today is ";
    $message .= date("m/d/y");
    return $message;
}


echo greet();