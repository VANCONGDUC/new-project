<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>パスワードの入力</title>
</head>
  <body>
    <?php echo $message; ?><br>
    <form method="POST" action="../public_html/login.php">
      パスワード：<input type="password" name="pass">
      <input type="submit" name="passSub" value="パスワード送信">
    </form>
  </body>
</html>