<?php
// ============================================================
// EXAMPLE

// is_false($var);

// ============================================================

/**
 * Returns a '1' if odd, '0' if true
 *
 * @param  $var Any numeric value.
 * @return boolean
 */
function is_odd($var)
{
    return $var % 2 ? 1 : 0;
}