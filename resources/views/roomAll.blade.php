<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>app</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <header>
    <div class="header">
      <div class="menu">
        <input type="checkbox" id="myInput">
        <label for="myInput" class="label">
          <span class="bar top"></span>
          <span class="bar middle"></span>
          <span class="bar bottom"></span>
        </label>
        <aside>
          <div class="aside-section aside-right">
            <ul class="aside-list">
              <li><a href="" class="aside-anchor">検索</a></li>
              <li><a href="top" class="aside-anchor">ルーム一覧</a></li>
              <li><a href="MyPage" class="aside-anchor">マイページ</a></li>
              <li><a href="" class="aside-anchor">お問い合わせ</a></li>
              <li><a href="" class="aside-anchor">退会</a></li>
              <li><a href="" class="aside-anchor">ログアウト</a></li>
            </ul>
          </div>
        </aside>
        <!-- <img src="images/icon_125850_256.png" alt="" class="menu-icon"> -->
      </div>
      <h1>ルーム一覧</h1>
    </div>
  </header>
  <main>
    <div class="main">
      <div class="room">
        <div class="roominner">
          <h2>【　　ルーム名　　】</h2>
          <p class="name">管理者</p>
          <div class="detail">
            <p class="title-tape4">ルーム詳細</p>
            <p>参加人数</p>
            <p>概要</p>
            <div class="button_solid017">
	            <a href="gurucha">参加する</a>
            </div>
          </div>
        </div>
      </div>

      <div class="room">
        <div class="roominner">
          <h2>【　　ルーム名　　】</h2>
          <p class="name">管理者</p>
          <div class="detail">
            <p class="title-tape4">ルーム詳細</p>
            <p>参加人数</p>
            <p>概要</p>
            <div class="button_solid017">
	            <a href="gurucha">参加する</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer></footer>

<script>
  document.getElementById('logout').addEventListener('click', function(event) {
      event.preventDefault();
      document.getElementById('logout-form').submit();
    });
</script>
</body>
</html>


