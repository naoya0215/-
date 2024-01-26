<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../css/login.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>
<body>
    <div class="flex_wrapper">
        <div class="page_list">
            <h1><span>Login</span>page</h1>
        </div>
        <div class="login">
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form method="POST" action="{{ route('user.login') }}">
                @csrf
                <div class="text_login">
                    <h3>メールアドレス</h3>
                    <label for="email" :value="__('Email')" >
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus />
                </div>
                <div class="text_login">
                    <h3>パスワード</h3>
                    <label for="password" :value="__('Password')" >
                    <input id="password" type="password" name="password" required autocomplete="current-password" />
                </div>
                <button class="login_button">
                    {{ __('ログイン') }}
                </button>  
                <div class="reset_login">
                    <a class="reset_pass" href="{{ route('user.register') }}">
                        {{ __('新規登録はこちら') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>
