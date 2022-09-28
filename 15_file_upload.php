<?php
if (isset($_POST['submit'])) {
  $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');
  if (!empty($_FILES['upload']['name'])) {
    // print_r($_FILES);
    $file_name = $_FILES['upload']['name'];
    $file_size = $_FILES['upload']['size'];
    $file_tmp = $_FILES['upload']['tmp_name'];
    $target_dir = "uploads/${file_name}";

    // Get file ext
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    // Validate file ext
    if (in_array($file_ext, $allowed_ext)) {
      if ($file_size <= 1000000) {
        move_uploaded_file($file_tmp, $target_dir);
        $message = '<p style="color:green">업로드 완료</p>';
      } else {
        $message = '<p style="color:red">파일이 너무 큽니다.</p>';
      }
    } else {
      $message = '<p style="color:red;">잘못된 파일 유형</p>';
    }
  } else {
    $message = '<p style="color:red;">업로드할 파일을 선택하세요.</p>';
  }
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
  </head>

  <body>
    <?= $message ?? null; ?>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">사진 업로드
      <input type="file" name="upload">
      <input type="submit" value="제출" name="submit">
    </form>
  </body>

</html>