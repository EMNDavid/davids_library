<?php

// ============================================================
// EXAMPLE

// require 'davids_library/functions/include_directory.php';
// include_directory('davids_library/functions');

// ============================================================

/**
 * Includes all files in a directory
 *
 * @param String $path example: 'davids_library/functions/include_directory.php'
 * @return void
 */
function include_directory(String $path){

    $path = addslashes($path . '/');
    $files = array_slice(scandir($path), 2);

    foreach ($files as $file){
        if ($file !== 'include_directory.php'){
            include($path . $file);
        }
    }
}