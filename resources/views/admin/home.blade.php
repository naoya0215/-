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
            こちらのページにリダイレクトされたい
        </div>
    </header>
    <main>
    <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <a href="route('admin.logout')"
            onclick="event.preventDefault();
            this.closest('form').submit();">
                {{ __('ログアウト') }}
            </a>
        </form>      
    </main>
</body>
</body>
</html>