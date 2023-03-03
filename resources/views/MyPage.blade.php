<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>app</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link href="https://unpkg.com/phosphor-icons" rel="stylesheet">
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
      <h1 class="heading-031">マイページ</h1>
    </div>
  </header>
  <main>
    <div class="main">
      <div class="myicon">
        <img src="" alt="" class="icon">
      </div>
      <div class="center">
        <h1>ユーザー名</h1>
        <div class="button_solid018">
	        <a href="#">プロフィール変更</a>
        </div>
      </div>
      <div  class="introduction">
        <p>自己紹介的な感じ</p>
      </div>

      <div class="fliend">
        <div class="follow">
          <a href="follow">
            <span>4</span>
            <span>フォロー</span>
          </a>
        </div>
        <div class="follow">
          <a href="followeds">
            <span>5</span>
            <span>フォロワー</span>
          </a>
        </div>
      </div>



      <section>
        <h2>作成済みルーム</h2>

        <ul class="cs">
          <li><a href="#">
            <div class="text">
              <p class="name">ルーム名</p>
            </div>
          </a></li>
          <li><a href="#">
            <div class="text">
              <p class="name">ルーム名</p>
            </div>
          </a></li>
          <li><a href="#">
            <div class="text">
              <p class="name">ルーム名</p>
            </div>
          </a></li>
          <li><a href="#">
            <div class="text">
              <p class="name">ルーム名</p>
            </div>
          </a></li>
          <li><a href="#">
            <div class="text">
              <p class="name">ルーム名</p>
            </div>
          </a></li>
          <li><a href="#">
            <div class="text">
              <p class="name">ルーム名</p>
            </div>
          </a></li>
          <li><a href="#">
            <div class="text">
              <p class="name">ルーム名</p>
            </div>
          </a></li>
          <li><a href="#">
            <div class="text">
              <p class="name">ルーム名</p>
            </div>
          </a></li>
        </ul>

        <a href="new" class="btn-circle-stitch"><img src="images/memo.png" alt="" class="memoimg"></a>
      </section>
    </div>
  </main>
  <footer></footer>
</body>
<script>
  document.getElementById('logout').addEventListener('click', function(event) {
      event.preventDefault();
      document.getElementById('logout-form').submit();
    });
</script>
</html>


