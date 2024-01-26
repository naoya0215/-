<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../css/adminlogin.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者ログイン</title>
</head>
<body>
    <header> 
        管理者ログイン
    </header>
    <div class="flex_wrapper">
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <div class="text_login">
            <h3>メールアドレス</h3>
            <label for="email" :value="__('Email')" >
            <input id="email" class="admin_login" type="email" name="email" :value="old('email')" required autofocus >
        </div>
        <div class="text_login">
            <h3>パスワード</h3>
            <label for="password" :value="__('Password')" >
            <input id="password" class="admin_login" type="password" name="password" required autocomplete="current-password" >
        </div>
        <button class="login_button">
            {{ __('ログイン') }}
        </button>  
        <div class="reset_login">
            <a class="reset_pass" href="{{ route('admin.register') }}">
                {{ __('新規登録はこちら') }}
            </a>
        </div>
    </form>    
</body>
</html>
        

        
