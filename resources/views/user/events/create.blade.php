<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- script -->
    @vite(['resources/css/app.css',
    'resources/js/app.js',
    'resources/js/flatpickr.js'])
</head>
<body>
    @if (session('status'))
    <div class="error_check">
        {{ session('status') }}
    </div>
    @endif
    <form method="POST" action="{{ route('events.store') }}">
        @csrf
        <div>
            <h2>イベント名</h2>
            <label for="event_name" value="イベント名">
            <input id="event_name" class="event_name" type="text" name="event_name" :value="old('event_name')" required autofocus />
        </div>
            <h2>イベント詳細</h2>
            <label for="information" value="イベント詳細">
            <input id="information" name="information" class="information" :value="old('information')">
        </div>
        <div>
            <h2>イベント日付</h2>
            <label for="event_date" value="イベント日付">
            <input id="event_date" class="event_date" type="text" name="event_date" required/>
        </div>
        <div>
            <h2>開始時間</h2>
            <label for="start_time" value="開始時間">
            <input id="start_time" class="start_time" type="text" name="start_time" required/>
        </div>
        <div>
            <h2>終了時間</h2>
            <label for="end_time" value="終了時間">
            <input id="end_time" class="end_time" type="text" name="end_time" required/>
        </div>
        <div>
            <h2>店員数</h2>
            <label for="max_people" value="定員数">
            <input id="max_people" class="max_people" type="number" name="max_people" required/>
        </div>
        <div>
            <input type="radio" name="is_visible" value="1" checked />表示
            <input type="radio" name="is_visible" value="0" />非表示
        </div>
        <button class="button">
            新規登録
        <button>
    </form>
</body>
</html>


   



