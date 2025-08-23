<?php
/*
|--------------------------------------------------------------------------
| PHP Configuration Override
|--------------------------------------------------------------------------
|
| This file overrides PHP error reporting to suppress deprecation warnings
| Place this at the top of your application to ensure it takes effect.
|
*/

// Completely disable deprecation warnings
ini_set('error_reporting', E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);
ini_set('display_errors', '1');

// Set a custom error handler that ignores deprecation warnings
set_error_handler(function($errno, $errstr, $errfile, $errline) {
    // Ignore deprecation warnings
    if ($errno === E_DEPRECATED || $errno === E_USER_DEPRECATED) {
        return true;
    }
    
    // For other errors, use default handler
    return false;
}, E_ALL);

?>
