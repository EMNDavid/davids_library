<?php
/*
addslashes — Quote string with slashes

string addslashes ( string $str )
    Returns a string with backslashes added before characters that need to be escaped. 
    These characters are:
        single quote (')
        double quote (")
        backslash (\)
        NUL (the NUL byte)
    str
        The string to be escaped.
    Return Values
        Returns the escaped string.
*/

$str = "Is your name O'Reilly?";

// Outputs: Is your name O\'Reilly?
echo addslashes($str);