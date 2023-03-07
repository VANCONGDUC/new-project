<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>ログインページ２</title>
</head>
  <body>
    ログインページ２<br>
    <?php
      //セッション変数の存在の有無をisset()関数で調べる。
      //存在する場合は、そのページを表示させる。
      //存在しない場合は、ログインしていないかログアウトされているか
      //このアドレス(loginPage2.php)に直接アクセスした場合は、「else」を実行させる。
      if(isset($_SESSION['EMAIL'])){
        echo "{$_SESSION['EMAIL']}様のページです。<br>";
        echo "<a href=\"loginPage1.php\">ログインページ１へ</a><br>";
        echo "<a href=\"logout.php\">ログアウト</a>";
      }
      else{
        $message = "ログインしていないかログアウトされています。ログインしてからご利用してください。";
        require_once('../public_html/html1/userName.php');
      }
    ?>
  </body>
</html>