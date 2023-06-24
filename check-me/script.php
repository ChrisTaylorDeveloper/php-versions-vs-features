<?php

include 'FooClass.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// Check the settings above.
/* trigger_error('A notice', E_USER_NOTICE); */
/* trigger_error('A warning', E_USER_WARNING); */
/* trigger_error('An error', E_USER_ERROR); */

$foo = 'BAR';
echo "This is the abc${foo}def variable with dollar symbol outside curly braces." . PHP_EOL;
echo "This is the abc{$foo}def variable with dollar symbol inside curly braces." . PHP_EOL;

$bar = 1 <=> 2;

$foo_class = new FooClass();
$foo_class->b();
