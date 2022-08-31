<?php


try {
    // データベース接続
    $pdo = new PDO('mysql:dbname=joto;host=localhost;charset=utf8', 'root', 'root');
} catch (PDOException $e) {
    $e->getMessage();
}

if (!empty($_POST['user'])) {
    try {
        $sql  = 'INSERT INTO saikolo(name, email, password) VALUES(:name, :email, :password)';
        $stmt = $pdo->prepare($sql);

        $stmt->bindValue(':name', $_POST['user'], PDO::PARAM_STR);
        $stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $stmt->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
        $stmt->execute();

        header('location: userok.php');

        exit();
    } catch (PDOException $e) {
        echo 'データベースにアクセスできません！' . $e->getMessage();
    }
}


// db情報をform情報を認証　


//①エラーメッセージの初期状態を空に
$err_msg = "";

//②サブミットボタンが押されたときの処理
if (!empty($_POST['email_conf'])) {
    $email = $_POST['email_conf'];
    $password = $_POST['password_conf'];

    //③データが渡ってきた場合の処理
    try {
        $pdo = new PDO('mysql:host=localhost; dbname=joto', 'root', 'root');
        $sql = 'SELECT count(*) from saikolo(email,password) where email = :email and password = :password';
        $stmt = $pdo->prepare($sql);


        // email,password で受け取った値をセット
        $stmt->bindValue(':email', $_POST['email_conf']);
        $stmt->bindValue(':password', $_POST['password_conf']);
        $stmt->execute();



        $result = $stmt->fetch();


        //④ログイン認証ができたときの処理
        if ($result[0] != 0) {
            header('Location: saikolo.php');
            exit;

            //⑤アカウント情報が間違っていたときの処理
        } else {
            $err_msg = "アカウント情報が間違っています。";
        }

        //⑥データが渡って来なかったときの処理
    } catch (PDOExeption $e) {
        echo $e->getMessage();
        exit;
    }
}
