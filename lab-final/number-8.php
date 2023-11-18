<?php
function testFunction()
{
    static $testVariable = 1;
    echo $testVariable;
    $testVariable++;
}
testFunction();
testFunction();
testFunction();
?>