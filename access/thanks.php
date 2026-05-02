<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/reset.css">
    <script type="text/javascript" src="../js/font.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/php.css">
  </head>
  <body>
    <nav class="sticky">
      <h1>書道家「書き心」春流・破留</h1>
      <ul>
        <div class="sp cross">
          <i class="fas fa-times" id="cross"></i>
        </div>
        <li><a href="../index.html">Home</a></li>
        <li><a href="../about">About</a></li>
        <li><a href="../work">Work</a></li>
        <li><a class="stay">Access</a></li>
      </ul>
      <div class="sp bars icon" id="bars">
        <i class="fas fa-bars"></i>
      </div>
    </nav>
    <main>
      <section>
        <?php
          mb_language("Japanese");
          mb_internal_encoding("UTF-8");

          $subject =$_POST['subject'];
          $name = $_POST['name'];
          $mail = $_POST['mail'];
          $companyName = $_POST['companyName'];
          $address = $_POST['address'];
          $inquiry = $_POST['inquiry'];

          if($subject != '' or $name != '' or $mail != '' or $inquiry != ''){
            $to ='akihiro-f.0509@i.softbank.jp';
            $title = $subject;
            $message = "$name<br>$companyName<br>$address<br>$inquiry";
            $headers ="Form: $mail";
            $thanks = "<p>お問い合わせありがとうございます。<br>◯営業日以内にお返事いたします。<br>暫しお待ちください。<br></p>";

            echo $thanks;
            mb_send_mail($to,$title,$message,$headers);
            echo "$to,$title,$message,$headers,$thanks";

            $result = mb_send_mail($to,$title,$message,$headers);
            if($result){echo "成功"; }else{echo "失敗";}
          }else{
            echo "メール送信失敗です";
          }
         ?>
      </section>

    </main>
    <footer>
      <nav>
        <ul>
          <p>Home.</p>
          <li><a href="../index.html#hero">top</a></li>
          <li><a href="../index.html#concept">concept</a></li>
          <li><a href="../index.html#gallery">gallery</a></li>
          <li><a href="../index.html#work">work</a></li>
        </ul>
        <ul>
          <p>About.</p>
          <li><a href="../about/index.html">プロフィール</a></li>
        </ul>
        <ul>
          <p>Work.</p>
          <li><a href="../work/index.html">お名前ポエム</a></li>
          <li><a href="../work/name-writing/index.html">命名書</a></li>
          <li><a href="../work/welcome-board/index.html">ウェルカムボード</a></li>
          <li><a href="../work/calendar/index.html">日めくりカレンダー</a></li>
          <li><a href="../work/performance/index.html">書道パフォーマンス</a></li>
          <li><a href="../work/lesson/index.html">レッスン</a></li>
          <li><a href="../work/character-produce/index.html">筆文字制作</a></li>
          <li><a href="../work/character-goods/index.html">筆文字グッズ</a></li>
        </ul>
        <ul>
          <p>Access.</p>
          <li><a href="../access/index.html">直接の問合せや注文</a></li>
          <li><a href="https://kakigokoro.thebase.in/">BASEからの問合せや注文</a></li>
        </ul>
      </nav>
    </footer>
  </body>
</html>
