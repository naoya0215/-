<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSS や JavaScript ファイルの読み込みなど、共通の要素をここに配置 -->
    <link rel="stylesheet" href="css/event.css">

    <!-- script -->
    @vite(['resources/css/app.css',
    'resources/js/app.js',
    'resources/js/flatpickr.js'])

</head>
<body>
    <!-- ナビゲーションバーや共通のヘッダーなどの要素をここに配置 -->
        <div class="wrapper">
            <ul>
                <li>カレンダー</li>
                <li>マイページ</li>
                <li><a href="{{ route('events.create') }}">予約登録</a></li>
            </ul>
        </div>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <!-- フッターや共通のスクリプトなどの要素をここに配置 -->
</body>
</html>