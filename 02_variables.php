<?php

/* PHP Data Types */
// 1. String 
// 2. Integer
// 3. Float
// 4. Boolean
// 5. Array
// 6. Object
// 7. Null
// 8. Resource

$name = 'cho'; // String
$age  = 22; // Int
$has_kids = false; // Bool
$cash_on_hand = 20.75; // Float

// same ====================
echo $name . ' is ' . $age . ' years old';
echo '<br>';

echo "$name is $age years old";
echo '<br>';

echo "${name} is ${age} years old";
echo '<br>';
// same ====================

$x =  '5' + '5';
var_dump($x);
echo 10 - 5;
echo '<br>';
echo 5 * 6;
echo '<br>';
echo 10 / 2;
echo '<br>';
echo 10 % 3;
echo '<br>';

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;
echo '<br>';
echo DB_NAME;
echo '<br>';