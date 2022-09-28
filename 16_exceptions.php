<?php

function inverse($x)
{
  if (!$x) {
    throw new Exception('0으로 나누기');
  }

  return 1 / $x;
}


try {
  echo inverse(5) . PHP_EOL;
  echo inverse(0);
} catch (Exception $e) {
  echo '잡힌 예외 => ', $e->getMessage() . ' ';
  echo '<br>';
} finally {
  echo 'First Finally';
  echo '<br>';
}

try {
  echo inverse(0);
} catch (Exception $e) {
  echo '잡힌 예외 => ', $e->getMessage() . ' ';
  echo '<br>';
} finally {
  echo 'Second Finally';
  echo '<br>';
}

echo 'Hello World';