<?php
session_start();
require('dbconnect.php');
?>
<?php
$_SESSION=$_POST;
if (!empty($_POST)) {header ('Location: reservecheck.php');}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trouve ご予約</title>
    <meta name="description" content="大阪でパーソナルカラー、素敵に輝くあなたを見つけるお手伝いをします"> 
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/無題149_20210829010831.PNG">
</head>
<body>
     <div class="check"> 
        <header class="pagetop wrapper">
            <h1><a href="index.html"><img class="logo" src="img/無題149_20210829010635.PNG"></a></h1>
            <div class="splogo"><a href="index.html">Trouve</a></div>
            <nav>
                <ul class="main-nav">
                    <li><a href="check.html">診断の流れ・料金</a></li>
                    <li><a href="reserve.php">ご予約</a></li>
                    <li><a href="contact.php">お問い合わせ</a></li>
                    
                </ul>
            </nav>
        </header>
        <h2 class="check-title">ご予約</h2>
     </div>
     
    <main>
       
        
        <div class="bc">
            <h3 class="top-title">ご予約</h3>
                <div class="contct-article">
                    <p>現在の予約状況を
                          ご確認ください</p>
                   
                   

                    
                          <iframe src="https://calendar.google.com/calendar/embed?src=ja.japanese%23holiday%40group.v.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                </div>
              
        </div>
        <div class="bc">
           
             <form class="reserve" method="post" action=''>
                     
                    <div>
                        <label for="name">お名前</label>
                        <input type="text" name="name" id="name">
                     </div>

                    <div>
                        <input type="radio" value="女性" name="gender">女性
                        <input type="radio" value="男性" name="gender">男性
                     </div>

                    <div>
                        <label for="email">メールアドレス</label>
                        <input type="email" name="email" id="email">
                     </div>

                    <div>
                        <label for="date">ご利用日</label>
                        <input type="date" value=" " name="date">
                    </div>

                    <div>
                        <label for="messages">メッセージ</label>
                        <textarea name="messages" cols="50" rows="10"></textarea>
                    </div>

                    <div class="btn">
                        <input type="submit" value="送信" class="button">
                    </div>
                 </form>
        </div>
    </main>

    <footer>
        <p><small>&copy; 2021 Trouve</small></p>
    </footer>

    <!-- <?php var_dump($_POST); ?>  -->
     <!-- <?php var_dump($_SESSION); ?>  -->
</body>
</html>