<?php

// ============================================================
// EXAMPLE

// calculate_execution_time($start_time, $end_time);
// 

// ============================================================

/**
 * Calculates the execution time of a script
 *
 * @param microtime $time_start
 * @param string $label
 * @return void
 */
function calculate_execution_time($time_start, $label)
{
    $time_end = microtime(true);
    $execution_time = ($time_end - $time_start);
    return PHP_EOL . $label . $execution_time .' Sec' . PHP_EOL;
}