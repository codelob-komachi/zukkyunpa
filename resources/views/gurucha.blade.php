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
      <h1 class="heading-031">参加中ルーム一覧</h1>
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
      </div>
      <div class="chat">
        <div class="chatname">
          <h2>ルーム名どすえ</h2>
          <div class="abc">
            <p class="chatmaster">管理者名どすえ</p>
            <p>参加メンバーどすえ</p>
          </div>
        </div>
        <div class="chatroom">
          <!-- <a href="" class="chateach">
            <div class="cicon">
              <img src="" alt="" class="chaticon">
            </div>
            <p class="chatmember">お名前どうぞ</p>
            <p class="timer">何時何分どすえ</p>
          </a>
          <div class="chatcontent"> -->
            <div class="talk">
              <div class="talkeach">
                <div class="cicon-left">
                  <img src="images/icon.png" alt="" class="chaticon">
                </div>
                <p class="chatmember-left">お名前どうぞ</p>
                <div class="talk_left">
                  <p>こちらは左側に表示される吹き出しのメッセージです。<br>二行目はこんな感じ。</p>
                </div>
                <p class="timer-left">何時何分どすえ</p>
              </div>

              <div class="talkeach">
                <div class="cicon-right">
                  <img src="images/icon.png" alt="" class="chaticon">
                </div>
                <div class="talk_right">
                  <p>こちらは右側に表示される吹き出しのメッセージです。<br>二行目はこんな感じ。<br>三行目はこんな感じ。</p>
                </div>
                <p class="timer-right">何時何分どすえ</p>
              </div>
            </div>
          <!-- </div> -->
          <div class="send">
            <textarea class="textbox-003" placeholder="メッセージ"></textarea>
            <button class="button-006">
              <a href="">
                <img src="images/send.png" alt="" class="send-img">
              </a>
          <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="29" height="29">
              <path fill="#fff" d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z"/>
                </svg> -->
            </button>
          </div>

      </div>
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


