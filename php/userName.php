<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>メールアドレスの入力</title>
</head>
  <body>
    <?php echo $message; ?><br>
    <form method="POST" action="../public_html/login.php">
      ユーザ名(メールアドレス)：<input type="text" name="eMail">
      <input type="submit" name="eMailSub" value="ユーザ名送信">
    </form>
  </body>
</html>