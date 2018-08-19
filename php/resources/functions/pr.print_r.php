<?php

// ============================================================
// EXAMPLE

// pr($var);

// ============================================================

/**
 * Wrapper for print_r()
 *
 * @param mixed $var
 * @return void
 */
function pr($var)
{
    $var_name = return_var_name($var);
    echo "<pre> \n";
    echo '==============================';
    echo "\nBEGIN print_r of \"\${$var_name}\"";
    echo "\n------------------------------\n";
    print_r($var);
    echo "\n------------------------------\n";
    echo "END print_r of \"\${$var_name}\"\n";
    echo "==============================\n";
    echo '</pre>' . PHP_EOL . PHP_EOL;
}