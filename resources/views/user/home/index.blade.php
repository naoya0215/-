<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <div class="icon">
            <img src="#" alt="icon">
        </div>
        <div class="side_menu">
            <ul>
                <li>宿泊予約</a></li>
                <li>ショッピング</li>
                <li>チャットツール</li>
                <li>問い合わせ</li>
                <li>プロフィール</li>
            </ul>
        </div>
    </header>
    <main>
    <form method="POST" action="{{ route('user.logout') }}">
            @csrf
            <a href="route('logout')"
            onclick="event.preventDefault();
            this.closest('form').submit();">
                {{ __('ログアウト') }}
            </a>
        </form>      
    </main>
</body>
</body>
</html>