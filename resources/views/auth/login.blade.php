<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>ゲームコミュニティ</title>
  <link rel="stylesheet" href="./css/login.css">
</head>
<body>
  <div class="loginbotan">
    <div class="login">
      <h1>ログイン</h1>
      <form action="mypage.html">
        <div class="mail"><input type="email" placeholder="メールアドレス"></div>
        <div class="password"><input type="password" placeholder="パスワード"></div>
        <input class="loginbutton" type="submit" value="ログイン">
        <!--<button type="submit">ログイン</button>-->
      </form>
    </div>
    <div class="sinkitouroku"> <input type="button" value="新規登録を表示" id="s1" onclick="clickBtn1()" /></div>
  </div>
  <div class="sinki">
    <h1>新規登録</h1>
    <form action="profile.html">
      <div class="mail"><input type="text" placeholder="メールアドレス"></div>
      <div class="password"><input type="password" placeholder="パスワード"></div>
      <div class="loginbutton"><input type="submit" value="新規登録"></div>
    </form>
  </div>
  <script src="./js/login.js"></script>
</body>
</html>