<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>app</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <header>
  </header>
  <main>
  <div class="main">
    <div class="logo">
      <img src="images/logo.png" alt="">
    </div>
    <div class="login-page">
      <div class="form">
        <form class="login-form" action="top" method="get">
          <h1>会員登録</h1>
          <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="ユーザー名"/>
          <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="メールアドレス"/>
          <input type="password" class="form-control" id="password" name="password" placeholder="パスワード"/>
          <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="パスワード確認用"/>
          <button type="submit" class="btn btn-primary">登録</button>
          <p class="message"> <a href="login">ログインはこちら</a></p>
        </form>
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


