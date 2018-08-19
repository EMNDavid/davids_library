<?php

// ============================================================
// EXAMPLE

// $var_name = return_var_name($var);
// echo return_var_name($var);

// ============================================================

/**
 * Returns the name of a Variable
 *
 * @param mixed $var
 * @return void
 */
function return_var_name($var)
{
    foreach($GLOBALS as $key => $value)
    {
        if ($value === $var)
        {
            return $key;
        }
    }

    return false;
}