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
       
    </header>
    <form method="POST" action="{{ route('admin.register') }}">
        @csrf
        <!-- Name -->
        <div class="text_login">
            <h3>名前</h3>
            <label for="name" :value="__('Name')" >
            <input id="name" type="text" name="name" :value="old('name')" required autofocus />
        </div>
        <!-- Email Address -->
        <div class="text_login">
            <h3>メールアドレス</h3>
            <label for="email" :value="__('Email')" >
            <input id="email" class="admin_login" type="email" name="email" :value="old('email')" required autofocus >
        </div>
        <!-- Password -->
        <div class="text_login">
            <h3>パスワード</h3>
            <label for="password" :value="__('Password')" >
            <input id="password" class="admin_login" type="password" name="password" required autocomplete="current-password" >
        </div>
        <!-- Confirm Password -->
        <div class="text_login">
            <h3>パスワード確認</h3>
            <label for="password_confirmation" :value="__('Confirm Password')" >
            <input id="password_confirmation" type="password"  name="password_confirmation" required />
        </div>
        <button class="login_button">
            {{ __('新規登録') }}
        </button> 
    </form>
</body>
</html>
        

        
