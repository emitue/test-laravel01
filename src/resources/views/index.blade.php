@extends('layouts.app')
<style>
  

<body>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">
        FashionablyLate
      </h1>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form">
        <div class="form__group">
          <p class="form__group--title">
            <span class="form__label--item">お名前</span>※
          </p>
          <div class="form__group-content">
            <div class="form__input--text">
              <div class="form__input--item">
                <input type="text" name="first_name" placeholder="佐藤"/>
                <input type="text" name="last_name" placeholder="太郎" />
              </div>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述-->
            </div>
          </div>
        </div>

        <div class="form__group">
          <p class="form__group--title">
            <span class="form__label--item">性別</span>
            ※
          </p>
          <div class="form__group--content">
            <div class="form__input--text">
              <div class="form__input--item">
                <input type="radio" name="gender" value="male" class="gender-radio" required>
                <span class="gender-label">男性</span>
                <input type="radio" name="gender" value="female" class="gender-radio" required>
                <span class="gender-label">女性</span>
                <input type="radio" name="gender" value="other" class="gender-radio" required>
                <span class="gender-label">その他</span>
              </div>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述-->
            </div>
          </div>
        </div>

        <div class="form__group">
          <p class="form__group--title">
            <span class="form__label--item">メールアドレス</span>※
          </p>
          <div class="form__group--content">
            <div class="form__input--text">
              <div class="form__input--item">
                <input type="text" name="email" placeholder="例: abcde@fg.com" />
              </div>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述-->
            </div>
          </div>
        </div>

        <div class="form__group">
          <p class="form__group--title">
            <span class="form__label--item">電話番号</span>※
          </p>
          <div class="form__group--content">
            <div class="form__input--text">
              <div class="form__input--item">
                <input type="tel" name="tell" placeholder="010" />
                  <a class="tell"> - </a>
                <input type="tel" name="tell" placeholder="2345" />
                  <a class="tell"> - </a>
                <input type="tel" name="tell" placeholder="6789" />
              </div>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述-->
            </div>
          </div>
        </div>

        <div class="form__group">
          <p class="form__group--title">
            <span class="form__label--item">住所</span>※
          </p>
          <div class="form__group--content">
            <div class="form__input--text">
              <div class="form__input--item">
                <input type="text" name="address" placeholder="abc県def市3-4" />
              </div>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述-->
            </div>
          </div>
        </div>

        <div class="form__group">
          <p class="form__group--title">
            <span class="form__label--item">建物名
            </span>※
          </p>
          <div class="form__group--content">
            <div class="form__input--text">
              <div class="form__input--item">
                <input type="text" name="building" placeholder="abcマンション123" />
              </div>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述-->
            </div>
          </div>
        </div>

        <div class="form__group">
          <p class="form__group--title">
            <span class="form__label--item">お問い合わせの種類</span>
            ※
          </p>
          <div class="form__group--content">
            <div class="form__input--text">
              <div class="form__input--item">
                <input type="text" name="detail" placeholder="選択してください" />
              </div>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述-->
            </div>
          </div>
        </div>

        <div class="form__group">
          <p class="form__group--title">
            <span class="form__label--item">お問い合わせの内容</span>
            ※
          </p>
          <div class="form__group--content">
            <div class="form__input--text">
              <div class="form__input--item">
                <div class="form__input--item-content">
                <input type="content" name="content" placeholder="お問い合わせ内容をご記載ください" /></div>
              </div>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述-->
            </div>
          </div>
        </div>

        <div class="form__button">
          <button class="form__button--confirm" type="confirm">確認画面</button>
        </div>
      </form>
    </div>
  </main>

</body>
</html>