<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>セキュリティコードの入力</title>
</head>
  <body>
    <?php echo $message; ?><br>
    <form method="POST" action="../public_html/login.php">
      セキュリティコード：<input type="text" name="securityCode">
      <input type="submit" name="securityCodeSub" value="セキュリティコード送信">
    </form>
  </body>
</html>