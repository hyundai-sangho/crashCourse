<?php

// 쿠키는 원격 브라우저에 데이터를 저장하여 반환 사용자를 추적하거나 식별하는 메커니즘입니다.
// 브라우저에 저장할 특정 데이터를 설정한 다음 사용자가 사이트를 다시 방문할 때 검색할 수 있습니다.

// Set cookie
// 1달 동안 쿠키에 name은 name이고 value는 Brad인 값을 저장
setcookie('name', 'Brad', time() + 86400 * 30);

if (isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];
}

// name이 name인 쿠키 데이터 삭제
setcookie('name', '', time() - 86400);