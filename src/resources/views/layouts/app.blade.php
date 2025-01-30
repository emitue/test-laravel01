<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('FashionablyLate')</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />

</head>

<style>
.header__inner {
  text-align: center;
  max-width: 1230px;
}

.header__logo {
  color: #cfab72;
  text-decoration: none;
  font-weight: bold;
  font-size: 24px;
}

.contact-form__content {
  text-align: center;
  max-width: 1230px;
  color: #cfab72;
}

.contact-form__heading {
  margin-bottom: 40px;
  text-align: center;
}
</style>
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        @yield('FashionablyLate')
      </a>
      @yield('FashionablyLate')
    </div>
  </header>

</body>
</html>