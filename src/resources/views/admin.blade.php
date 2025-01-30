@extends('layouts.app')
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
@section('title', 'admin.blade.php')

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo">
        FashionablyLate
      </a>
      <nav>
        <ul class="header__nav">
          <li class="header-nav__item">
            <a class="header-nav__link" href="/">logout</a></li>
        </ul>
      </nav>
    </div>
  </header>
</body>

<main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Admin</h2>
      </div>

      <div class="entry-group">
        <div class="entry-nav">
          <div class="entry-nav__item">
            <form action="" method="get">
              <input type="text" name="name" value="">
              <input type="radio" name="gender" value=""/>
              <input type="radio" name="" value="">
              <input type="date" name="" value="">
              <button class="search-form__button" type="submit">検索</button>
              <button class="reset__button">リセット</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-form__content">
      <div class="export__button">
        <button class="export__button-submit">エクスポート</button>
      </div>
      <ul class="pagination">
        
        <li class="disabled"><span></span></li>
        
        <li><a href="" rel="prev"></a></li>
        
      </ul>
    </div>

@section('content')
<table>
    <div class="confirm__content">
      <form class="update-form">
        <div class="confirm-table__inner">
          <tr class="confirm-table__row">
            <th class="confirm-table__header">お名前</th>
            <th class="confirm-table__header">性別</th>
            <th class="confirm-table__header">メールアドレス</th>
            <th class="confirm-table__header">お問い合わせの種類</th>
            <th class="confirm-table__header"></th>
          </tr>
          @foreach ($contacts as $contact)
          <tr class="confirm-table__data">
            <td>{{$contact->name}}</td>
            <td>{{$contact->gender}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->categories}}</td>
            <td class="button">詳細</td>
          </tr>
          @endforeach
        </div>
      </form>
    </div>
</table>
@endsection
