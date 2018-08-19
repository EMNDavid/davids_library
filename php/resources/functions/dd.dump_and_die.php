<?php

// ============================================================
// EXAMPLE

// dd($var);

// ============================================================

/**
 * Dump and Die
 *
 * @param mixed     $var
 * @param boolean   $use_print_r : Set to false to use var_dump instead of print_r
 * @return void
 */
function dd($var, Bool $use_print_r = true)
{
    $var_name = return_var_name($var);

    echo "<pre> \n";
    echo '==============================';
    echo "\nBEGIN DUMP of \"\${$var_name}\"";
    echo "\n------------------------------\n";
    $use_print_r ? print_r($var): var_dump($var);
    echo "\n------------------------------\n";
    echo "END DUMP of of \"\${$var_name}\"\n";
    echo "============================== \n";
    die('DIE');
}