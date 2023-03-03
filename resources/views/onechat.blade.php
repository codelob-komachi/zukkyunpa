<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>app</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="/css/roomAll.css">
  <link rel="stylesheet" href="/css/styles.css">

</head>
<body>
  <!-- <header>
    <div class="header">
      <h1 class="heading-031">メッセージ</h1>
    </div>
  </header> -->
  <main>
    <div class="main">
    <div class="menu">
        <input type="checkbox" id="myInput">
        <label class="label" for="myInput">
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
      <div class="onechat">

          <div class="one-fuser">
          <form action="#" class="search-form-012">
    <label>
        <input type="text" placeholder="メッセージを検索">
    </label>
    <button type="submit" aria-label="検索"></button>
</form>
            <a href="" class="peach">
              <div class="oneicon">
                <img src="images/icon.png" alt="" class="icon">
              </div>
              <p class="accountName">お名前どうぞ</p>
            </a>

            <a href="" class="peach">
              <div class="oneicon">
                <img src="images/icon.png" alt="" class="icon">
              </div>
              <p class="accountName">お名前どうぞ</p>
            </a>

            <a href="" class="peach">
              <div class="oneicon">
                <img src="images/icon.png" alt="" class="icon">
              </div>
              <p class="accountName">お名前どうぞ</p>
            </a>

            <a href="" class="peach">
              <div class="oneicon">
                <img src="images/icon.png" alt="" class="icon">
              </div>
              <p class="accountName">お名前どうぞ</p>
            </a>

            <a href="" class="peach">
              <div class="oneicon">
                <img src="images/icon.png" alt="" class="icon">
              </div>
              <p class="accountName">お名前どうぞ</p>
            </a>

            <a href="" class="peach">
              <div class="oneicon">
                <img src="images/icon.png" alt="" class="icon">
              </div>
              <p class="accountName">お名前どうぞ</p>
            </a>

          </div>
        <div class="chat-z">
          <div class="chatroom">
              <div class="talk">
              <div class="partner">
              <div class="cicon-partner">
                <img src="" alt="" class="picon">
              </div>
              <h2>相手のネーム</h2>
            </div>
                <div class="talkeach">
                  <div class="talk_left">
                    <p>こちらは左側に表示される吹き出しのメッセージです。<br>二行目はこんな感じ。</p>
                  </div>
                  <p class="timer-left">何時何分どすえ</p>
                </div>

                <div class="talkeach">
                  <div class="talk_right">
                    <p>こちらは右側に表示される吹き出しのメッセージです。<br>二行目はこんな感じ。<br>三行目はこんな感じ。</p>
                  </div>
                  <p class="timer-right">何時何分どすえ</p>
                </div>
              </div>
            <div class="send">
              <textarea class="textbox-003" placeholder="メッセージ"></textarea>
              <button class="button-006">
                <a href="">
                  <img src="images/send.png" alt="" class="send-img">
                </a>
              </button>
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


