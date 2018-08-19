<?php
/*
bin2hex — Convert binary data into hexadecimal representation

string bin2hex ( string $str )
    Returns an ASCII string containing the hexadecimal representation of str. 
    The conversion is done byte-wise with the high-nibble first.

*/

echo bin2hex('String'); //Outputs 537472696e67