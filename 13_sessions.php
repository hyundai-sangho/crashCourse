<?php

// 세션은 여러 페이지에서 정보 (변수)를 저장하는 방법입니다.
// 쿠키와 달리 세션은 서버에 저장됩니다.

session_start();

if (isset($_POST['submit'])) {
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];

  if ($username == 'cho' && $password == 'password') {
    $_SESSION['username'] = $username;
    header('Location: /crashcourse/extras/dashboard.php');
  } else {
    echo '잘못된 로그인';
  }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
    <label for="username">Username: </label>
    <input type="text" name="username">
  </div>
  <div>
    <label for="password">Password: </label>
    <input type="password" name="password">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>