<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo">
        FashionablyLate
      </a>
      <nav>
        <ul class="header__item-button">
          <li class="header-nav__item">
            <a class="header-nav__link" href="/register">register</li>
        </ul>
      </nav>
    </div>
  </header>
</body>

<main>
    <div class="member-form__content">
      <div class="member-form__heading">
        <h2>login</h2>
      </div>
      <form class="member">
        <div class="member__group">
          <div class="member__group-title">
            <span class="member__label--item">メールアドレス</span>
          </div>
          <div class="member__group-content">
            <div class="member__input--text">
              <input type="email" name="email" placeholder="abcde@fg.com" />
            </div>
            <div class="member__error">
              <!--バリデーション機能を実装したら記述-->
            </div>
          </div>
        </div>

        <div class="member__group">
          <div class="member__group-title">
            <span class="member__label--item">パスワード</span>
          </div>
          <div class="member__group-content">
            <div class="member__input--text">
              <input type="password" name="password" placeholder="9876edcba" />
            </div>
            <div class="member__error">
              <!--バリデーション機能を実装したら記述-->
            </div>
          </div>
        </div>

        <div class="member__button">
          <button class="form__button-register" type="register">ログイン</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>