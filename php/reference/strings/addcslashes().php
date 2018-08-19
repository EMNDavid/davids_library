<?php

// addcslashes — Quote string with slashes in a C style

// string addcslashes ( string $str , string $charlist )
    // Returns a string with backslashes before characters that are listed in charlist parameter.
    // str
        // The string to be escaped.
    // charlist 
            // A list of characters to be escaped. 
            // If charlist contains characters \n, \r etc., they are converted in 
            // C-like style, while other non-alphanumeric characters with ASCII 
            // codes lower than 32 and higher than 126 converted to octal representation.


echo addcslashes("Escaped string.", 'A..z');    // \E\s\c\a\p\e\d \s\t\r\i\n\g.
echo addcslashes("Escaped string.", 'a');       // Esc\aped string.
