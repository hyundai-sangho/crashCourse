<?php

// Simple Array
$numbers = [1, 44, 55, 2];
$fruits = array('apple', 'orange', 'pear');

print_r($numbers);
echo '<br>';
var_dump($numbers);
echo '<br>';
var_export($numbers);
echo '<br>';

// var_dump($numbers);
echo $fruits[0];
echo '<br>';

// Associative Array
$colors = [
  1 => 'red',
  4 => 'blue',
  6 => 'green'
];

echo $colors[6];
echo '<br>';

$hex = [
  'red' => '#f00',
  'blue' => '#0f0',
  'green' => '#00f'
];

echo $hex['blue'];
echo '<br>';

$person = [
  'first_name' => '상호',
  'last_name' => '조',
  'email' => 'cho@naver.com'
];

echo $person['first_name'];
echo '<br>';

$people = [
  [
    'first_name' => '상호',
    'last_name' => '조',
    'email' => 'cho@naver.com'
  ],
  [
    'first_name' => '민재',
    'last_name' => '이',
    'email' => 'lee@naver.com'
  ],
  [
    'first_name' => '성현',
    'last_name' => '지',
    'email' => 'jee@naver.com'
  ],
];

echo $people[1]['email'];
echo '<br>';
// json_encode 한글 유니코드 문제는 옵션 값에 JSON_UNESCAPED_UNICODE 추가
var_dump(json_encode($people, JSON_UNESCAPED_UNICODE));
echo '<br>';