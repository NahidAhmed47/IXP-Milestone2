<?php
$globalVar = "Global Variable";

function testScope() {
    $localVar = "local variable";
    global $globalVar;
    echo $localVar; // Output: this is local variable
    echo $globalVar; // Output: this is global variable
}

?>