<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>お問い合わせありがとうございます</title>
    <link rel="stylesheet" href="../../css/reset.css">
    <script type="text/javascript" src="../../js/font.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/php.css">
  </head>
  <body>
    <nav class="sticky">
      <h1>書道家「書き心」春流・破留</h1>
      <ul>
        <div class="sp cross">
          <i class="fas fa-times" id="cross"></i>
        </div>
        <li><a href="../../">Home</a></li>
        <li><a href="../../about">About</a></li>
        <li><a href="../../work">Work</a></li>
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
            $to ='kakigokoro_haru@yahoo.co.jp';
            $title = 'ホームページからの問合せ';
            $reTitle = 'お問い合わせ内容の確認';
            $from = "書き心　春流・破留";
            $from_mail = "info@kakigokoro-haru.com";
            $from_name = "書き心　春流・破留";
            $header = '';
            $header .= "Content-Type: text/plain \r\n";
            $header .= "Return-Path: " . $from_mail . " \r\n";
            // $header .= "From: " . $from ." \r\n";
            $header .= "Sender: " . $from ." \r\n";
            $header .= "Reply-To: " . $from_mail . " \r\n";
            $header .= "Organization: " . $from_name . " \r\n";
            $header .= "X-Sender: " . $from_mail . " \r\n";
            $header .= "X-Priority: 3 \r\n";
            $addOption = '-f'.$from_mail;

            $thanks = <<<THANKS
お問い合わせありがとうございます。<br>
受付内容の控えを<br>{$mail}へお送りしました。<br>
メールが届かない場合は迷惑メール扱いになっている可能性があります。<br>
一度ご確認ください。<br>
また、お問い合わせ内容に関しては<br>
５日以内にお返事いたします。<br>
今しばらくお待ちください。
THANKS;
            $returnMessage = <<<RETURN
お問い合わせありがとうございます。
本メールは自動返信です。
本メールへの返信でのご対応は致しかねます。
下記の内容で承りました。

----------------------------------------------------

【ご用件】：{$subject}
【お名前】：{$name}
【Eメール】：{$mail}
【お問い合わせ内容】：{$inquiry}
-----以下任意入力-----
【会社名】：{$companyName}
【郵送先住所】：{$address}

----------------------------------------------------

折り返しご返信させていただきますので、
しばらくお待ちください。
RETURN;
            $message = <<<BODY
ウェブサイトより下記の内容でお問い合わせがありました。

----------------------------------------------------

【ご用件】：{$subject}
【お名前】：{$name}
【Eメール】：{$mail}
【お問い合わせ内容】：{$inquiry}
-----以下任意入力-----
【会社名】：{$companyName}
【郵送先住所】：{$address}

----------------------------------------------------
BODY;

            echo $thanks;
            mb_send_mail($to,$title,$message,$header,$addOption);
            mb_send_mail($mail,$reTitle,$returnMessage,$header,$addOption);
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
          <li><a href="../../index.html#hero">top</a></li>
          <li><a href="../../index.html#concept">concept</a></li>
          <li><a href="../../index.html#gallery">gallery</a></li>
          <li><a href="../../index.html#work">work</a></li>
        </ul>
        <ul>
          <p>About.</p>
          <li><a href="../../about">プロフィール</a></li>
        </ul>
        <ul>
          <p>Work.</p>
          <li><a href="../../work">お名前ポエム</a></li>
          <li><a href="../../work/name-writing">命名書</a></li>
          <li><a href="../../work/welcome-board">ウェルカムボード</a></li>
          <li><a href="../../work/calendar">日めくりカレンダー</a></li>
          <li><a href="../../work/performance">書道パフォーマンス</a></li>
          <li><a href="../../work/lesson">レッスン</a></li>
          <li><a href="../../work/character-produce">筆文字制作</a></li>
          <li><a href="../../work/character-goods">筆文字グッズ</a></li>
        </ul>
        <ul>
          <p>Access.</p>
          <li><a href="../">直接の問合せや注文</a></li>
          <li><a href="https://kakigokoro.thebase.in/">BASEからの問合せや注文</a></li>
        </ul>
      </nav>
    </footer>
  </body>
</html>