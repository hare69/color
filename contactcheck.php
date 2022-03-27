<?php
session_start();
require('dbconnect.php');
?>
<?php
if(!empty($_POST)){
  
    // 入力情報をデータベースに登録
    $sql = "INSERT INTO contact SET name=?, gender=?, email =?, messages=?";
    $statement = $db->prepare($sql);

    $statement->execute(array(
        $_SESSION['name'],
        $_SESSION['gender'],
        $_SESSION['email'],
        $_SESSION['messages']

    ));

    unset($_SESSION['join']);   // セッションを破棄
    header('Location: thank.php');   // thank.phpへ移動
    exit();
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Trouve</title>
</head>
<body>
<form class="content" method="post" action=''>
<div class="from-item"><label>お名前</label><?php echo (htmlspecialchars($_SESSION['name'], ENT_QUOTES));?><p>
<div class="from-item"><label>性別</label><?php echo (htmlspecialchars($_SESSION['gender'], ENT_QUOTES));?><p>
<div class="from-item"><label>メールアドレス</label><?php echo (htmlspecialchars($_SESSION['email'], ENT_QUOTES));?><p>
<!-- <div class="from-item"><label>日付</label><?php echo (htmlspecialchars($_SESSION[''], ENT_QUOTES));?><p> -->
<div class="from-item"><label>メッセージ</label><?php echo (htmlspecialchars($_SESSION['messages'], ENT_QUOTES));?><p>
<div class="btn">
 <input type="submit" onclick="location.href='thank.php'" value="送信" class="button" name="btn_submit"> </div>
</form>
<?php 
var_dump($_POST); 
var_dump($_SESSION); 
echo $sql;
?>
</body>

</html>