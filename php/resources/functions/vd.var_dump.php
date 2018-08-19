<?php

// ============================================================
// EXAMPLE

// vd($var);

// ============================================================

/**
 * Wrapper for var_dump()
 *
 * @param mixed $var Accepts an valid variable;
 * @return void
 */
function vd($var)
{
    $var_name = return_var_name($var);

    echo "<pre> \n";
    echo '==============================';
    echo "\nBEGIN var_dump of \"\${$var_name}\"\n";
    echo "\n------------------------------\n";
    var_dump($var);
    echo "\n------------------------------\n";
    echo "END var_dump of \"\${$var_name}\"\n";
    echo "==============================\n";
    echo '</pre>' . PHP_EOL . PHP_EOL;
}