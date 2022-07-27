<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>{{ $title }}</title>
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
    </head>
    <body>
        <div class="conteiner">
            {{ $slot }}
        </div>
    </body>
</html>
