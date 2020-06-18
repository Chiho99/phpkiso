<!DOCTYPE html>
<html lang="ja">
<head>
  <title>入力内容確認</title>
  <meta charset="utf-8">
</head>
<body>
  <h1>入力内容確認</h1>
  <?php
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $content = $_POST['content'];
    // サニタイジング
    // $nickname = htmlspecialchars($_POST['nickname']);
    // $email = htmlspecialchars($_POST['email']);
    // $content = htmlspecialchars($_POST['content']);
    
    // ニックネーム
      if ($nickname == '') {
        echo 'ニックネームが入力されていません。';
        echo '<br>';
      } else {
        echo 'ようこそ、' . $nickname .'様';
        echo '<br>';
      }
    // メールアドレス
        if ($email == '') {
          echo 'メールアドレスが入力されていません。';
          echo '<br>';
        } else {
          echo 'メールアドレス：' . $email;
          echo '<br>';
        }
    
        // お問い合わせ内容
      if ($content == '') {
        echo 'お問い合わせ内容が入力されていません。';
      } else {
        echo 'お問い合わせ内容：' . $content;
      }
    // }
  ?>
  <form method="POST" action="thanks.php">
  <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
  <input type="hidden" name="email" value="<?php echo $email; ?>">
  <input type="hidden" name="content" value="<?php echo $content; ?>">

    <input type="button" value="戻る" onclick="history.back()">
    <?php 
      if ($nickname != '' && $email != '' && $content != ''): 
    ?>
    <input type="submit" value="OK">
    <?php endif; ?>
  </form>
</body>