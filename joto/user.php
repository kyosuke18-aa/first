<?php
require('database.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録画面</title>
    <link rel="stylesheet" href="user.css">
</head>

<body>
    <div class="body">
        <div class="form">
            <form action="database.php" method="post">
                <h4>新規登録画面</h4>
                <p>アカウントをお持ちでない方はこちら</p>
                <p>ユーザーネーム</p>
                <input type="text" name="user" placeholder="名前を入力">
                <p>メールアドレス</p>
                <input type="email" name="email" placeholder="emailを入力">
                <p>パスワード</p>
                <input type="password" name="password" placeholder="passwordを入力">
                <button type="submit" name="req">登録</button>

            </form>
        </div>

        <div class="login">
            <form action="saikolo.php" method="post">
                <h4>ログインページ</h4>
                <p>メールアドレス</p>
                <input type="email" name="email_conf" placeholder="emailを入力" required>
                <p>パスワード</p>
                <input type="password" name="password_conf" placeholder="passwordを入力" required>
                <button type="submit" name="req">ログイン</button>
            </form>

        </div>
    </div>
</body>

</html>