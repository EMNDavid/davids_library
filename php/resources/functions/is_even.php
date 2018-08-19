<?php

// ============================================================
// EXAMPLE

// is_true($var);

// ============================================================

/**
 * Returns a '1' if even, '0' if odd
 *
 * @param  $var Any numeric value.
 * @return boolean
 */
function is_even($var)
{
    return $var % 2 ? 0 : 1;
}