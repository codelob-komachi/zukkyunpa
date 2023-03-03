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
            </ul>
          </div>
        </aside>
        <!-- <img src="images/icon_125850_256.png" alt="" class="menu-icon"> -->
      </div>
      <h1 class="heading-031">新規作成</h1>
    </div>
  </header>
  <main>
    <div class="main">
      <div class="box_con07">
        <form method="get" action="#">
          <ul class="formTable">
            <li>
              <p class="title"><em>ルーム名<span>必須</span></em></p>
              <div class="box_det"><input size="20" type="text" class="wide" name="ルーム名" /></div>
            </li>
            <li>
              <p class="title"><em>ルーム詳細</em></p>
              <div class="box_det"><textarea name="詳細" cols="50" rows="5"></textarea></div>
            </li>
            <li>
              <p class="title"><em>ルーム制限</em></p>
              <div class="box_det"><select name="制限">
                  <option value="">選択してください</option>
                  <option value="あり">あり</option>
                  <option value="なし">なし</option>
                </select></td>
            </li>
            <li>
              <p class="title"><em>パスワード（半角）<span>必須</span></em></p>
              <div class="box_det"><input size="30" type="text" class="wide" name="パスワード" /></div>
            </li>
            <li>
              <p class="title"><em>人数制限</em></p>
              <div class="box_det"><select name="制限">
                  <option value="">選択してください</option>
                  <option value="なし">なし</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select></td>
            </li>
          </ul>
          <p class="btn">
            <span><input type="submit" value="　 確認 　" /></span>
          </p>
        </form>
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


