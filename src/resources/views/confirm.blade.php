<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

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
        <h2>Confirm</h2>
      </div>
    </div>

    <table>
      @foreach ($contact as $contact)
      <tr>
        <th>お名前</th>
        <td>{{$contact->id}}</td>
      </tr>
      <tr>
        <th>性別</th>
        <td>{{$contact->gender}}</td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>{{$contact->email}}</td>
      </tr>
      <tr>
        <th>電話番号</th>
        <td>{{$contact->tell}}</td>
      </tr>
      <tr>
        <th>住所</th>
        <th>{{$contact->address}}</th>
      </tr>
      <tr>
        <th>建物名</th>
        <td>{{$contact->building}}</td>
      </tr>
      <tr>
        <th>お問い合わせの種類</th>
        <td>{{$contact->id}}</td>
      </tr>
      <tr>
        <th>お問い合わせの内容</th>
        <td>{{$contact->text}}</td>
      </tr>
      @endforeach
    </table>

    <div class="check">
      <button class="check__button--send" type="">送信</button>
      <button class="check__button--fix" type="">修正</button>
    </div>
  </main>
