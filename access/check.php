<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>入力内容の確認</title>
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
        <h2>問合せ内容の確認</h2>
        <form action="thanks.php" method="post">
          <?php
            $subject =$_POST['subject'];
            $name = $_POST['name'];
            $mail = $_POST['mail'];
            $companyName = $_POST['company-name'];
            $address = $_POST['address'];
            $inquiry = $_POST['inquiry'];

            $subject =htmlspecialchars($subject);
            $name = htmlspecialchars($name);
            $mail = htmlspecialchars($mail);
            $companyName = htmlspecialchars($companyName);
            $address =htmlspecialchars($address);
            $inquiry =htmlspecialchars($inquiry);

            if ($subject == '' or $name=='' or $mail=='' or $inquiry=='') {
              print'必須項目が入力されていません。<br>
                    <button type="button" name="back" onclick="history.back()">戻る</button>';
            }else{
              $str = <<<EOD
              <div>件名：{$subject}</div>
              <input name='subject' type='hidden' value={$subject}>
              <div>お名前：{$name}</div>
              <input name='name' type='hidden' value={$name}>
              <div>メールアドレス：{$mail}</div>
              <input name='mail' type='hidden' value={$mail}>
              <div>会社名：{$companyName}</div>
              <input name='companyName' type='hidden' value={$companyName}>
              <div>住所：{$address}</div>
              <input name='address' type='hidden' value={$address}>
              <div>お問い合わせ内容：{$inquiry}</div>
              <input name='inquiry' type='hidden' value={$inquiry}>
              <button type='button' name='back' onclick='history.back()'>戻る</button>
              <button type='submit' name='submit'>送信</button>
EOD;
              echo $str;
            }
           ?>
        </form>
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
