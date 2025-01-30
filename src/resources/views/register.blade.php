<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">
        FashionablyLate
      </h1>
      <div class="header__item-button">
        <button class="header__button" type="login">login</button>
      </div>
    </div>
  </header>

  <main>
    <div class="member-form__content">
      <div class="member-form__heading">
        <h2>Register</h2>
      </div>
      <form class="member">
        <div class="member__group">
          <div class="member__group-title">
            <span class="member__label--item">お名前</span>
          </div>
          <div class="member__group-content">
            <div class="member__input--text">
              <input type="name" name="name" placeholder="山田太郎" />
            </div>
            <div class="member__error">
              <!--バリデーション機能を実装したら記述-->
            </div>
          </div>
        </div>

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
          <button class="form__button-register" type="register">登録</button>
        </div>
      </form>
    </div>
  </main>
</body>