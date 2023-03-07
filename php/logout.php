<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>ログアウト</title>
</head>
  <body>
    ログアウト<br>
    <?php
      //セッション変数の存在の有無をisset()関数で調べる。
      //存在する場合は、セッションを破棄(終了)してその旨を表示している。
      //存在しない場合は、ログインしていないかログアウトされているか
      //このアドレス(logout.php)に直接アクセスした場合は、「else」を実行させる。
      if(isset($_SESSION['EMAIL'])){
        //クッキーにセッションIDが存在する場合はクッキーのセッションIDを削除する。
        if (isset($_COOKIE[session_name()])){
          setcookie(session_name(), "", time()-1800,"/");
        }
        session_unset(); //すべてのセッション変数を削除する。
        session_destroy(); //セッションを破棄(終了)する。
        echo "ログアウトしました。<br>ご利用ありがとうございました。";
      }
      else{
        $message = "ログインしていないかログアウトされています。ログインしてからご利用してください。";
        require_once('../public_html/html1/userName.php');
      }
    ?>
  </body>
</html>