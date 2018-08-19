<?php

// ============================================================
// EXAMPLE

// pre();       //Echos '<pre>'
// pre('text'); //Echos '<pre>text</pre>'

// ============================================================

/**
 * Echos out a '<pre>' tag
 * Wraps an input in opening and closing '<pre>' tags
 *
 * @param mixed $var Optional
 * @return void
 */
function pre($var = null)
{
    echo isset($var) ? '<pre>' . $var . '</pre>' : '<pre>';
}