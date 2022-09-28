<?php
date_default_timezone_set('Asia/Seoul');

$age = 17;

if ($age >= 18) {
  echo '당신은 투표할 만큼 나이가 많습니다.';
  echo '<br>';
} else {
  echo '죄송합니다, 당신은 투표하기에 충분히 나이가 들지 않습니다.';
  echo '<br>';
}

$t = date("H");

if ($t < 12) {
  echo '좋은 아침이에요.';
  echo '<br>';
} elseif ($t < 17) {
  echo '좋은 점심이에요.';
  echo '<br>';
} else {
  echo '좋은 저녁이에요.';
  echo '<br>';
}

$posts = ['First Post'];

if (!empty($posts)) {
  echo "1: " . $posts[0];
  echo '<br>';
} else {
  echo '게시물이 없습니다.';
  echo '<br>';
}

$firstPost = !empty($posts) ? $posts[0] : 'No Posts';
echo "2: " . $firstPost;
echo '<br>';

$firstPost = !empty($posts) ? $posts[0] : null;
echo "3: " . $firstPost;
echo '<br>';

$firstPost = $posts[0] ?? null;
echo "4: " . $firstPost;
echo '<br>';

$favcolor = 'red';

switch ($favcolor) {
  case "red":
    echo "빨강 선택";
    echo '<br>';
    break;
  case "blue":
    echo "파랑 선택";
    echo '<br>';
    break;
  case "green":
    echo "초록 선택";
    echo '<br>';
  default:
    echo '빨강도 파랑도 초록색도 아니네요.';
}