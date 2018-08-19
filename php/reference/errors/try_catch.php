<?php

try {
    throw new Error("Value not correct", 30);
} catch(Error $e) {
    echo PHP_EOL . 'ERROR' . PHP_EOL;
    echo 'Message:    ' . $e->getMessage()      . PHP_EOL;
    echo 'Error Code: ' . $e->getCode()         . PHP_EOL;
    echo 'File:       ' . $e->getFile()         . PHP_EOL;
    echo 'Line:       ' . $e->getLine()         . PHP_EOL;
    echo 'Trace:      ' . $e->getTraceAsString(). PHP_EOL;

    // echo $e;

}