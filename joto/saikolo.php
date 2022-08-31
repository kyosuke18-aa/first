<?php
require('user.php');
$rand = mt_rand(1, 10);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サイコロゲーム</title>
    <link rel="stylesheet" href="saikolo.css">
</head>

<body>
    <header>
        <h1>遊びサイコロ</h1>
    </header>
    <div class="header-p">
        <p>自分の運勢を見てみましょう。<br>そして行動を改めることが必須です。</p>
        <a href="user.php">ログアウト</a>
    </div>
    <div class="saikolo">
        <div class="fhoto">

        </div>
        <div class="result">
            <h3>あなたの運勢は....</h3>
            <?php
            if ($rand > 8) {
                echo "<h1>大吉</h1>";
                echo "<p>おめでとうございます。大吉です</p>";
            } elseif ($rand < 3) {
                echo "<h1>凶</h1>";
                echo "<p>凶でした</p>";
            } elseif ($rand > 4) {
                echo "<h1>中吉</h1>";
                echo "<p>中吉です</p>";
            } else {
                echo "<h1>小吉</h1>";
                echo "<p>小吉です</p>";
            }
            ?>
            <h3>でした！！</h3>
        </div>
        <br>
        <a onclick="window.location.reload(true);">
            <i class="fa fa-refresh" aria-hidden="true"></i>
            <br>
            <buttom type="submit">引き直す</buttom>
        </a>

    </div>
</body>

</html>