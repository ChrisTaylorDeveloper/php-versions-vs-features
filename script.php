<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Check we can issue notices, warnings and errors.
/* trigger_error('A notice', E_USER_NOTICE); */
/* trigger_error('A warning', E_USER_WARNING); */
/* trigger_error('An error', E_USER_ERROR); */

// PHP 8.0 OK
// PHP 7.4 OK
$foo = 'BAR';
echo "This is the abc${foo}def variable with dollar symbol outside curly braces." . PHP_EOL;
echo "This is the abc{$foo}def variable with dollar symbol inside curly braces." . PHP_EOL;

