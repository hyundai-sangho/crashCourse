<?php

$file = 'extras/users.txt';

if (file_exists($file)) {
  // echo readfile($file);
  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));

  fclose($handle);
  echo $contents;
} else {
  $handle = fopen($file, 'w');
  $contents = '김상중' . PHP_EOL . '김민종' . PHP_EOL . '김원중';
  fwrite($handle, $contents);
  fclose($handle);
}