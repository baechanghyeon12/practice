<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  내용 작성
  <p>@{{name}}</p>
  <p>지금은 {{now()}} 입니다.</p>

  @for ($i = 0; $i < 10; $i++)
    숫자가 증가합니다. {{ $i }}<br>
  @endfor

  @includeif('sub.inc')

  @php
    $a = 10;
    $a++;

    echo '<p>a 의 값은 ? '.$a.'입니다.</p>'
  @endphp

  {{-- 블레이드 템플릿 주석 방법--}}
</body>
</html>