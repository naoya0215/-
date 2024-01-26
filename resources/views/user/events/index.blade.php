@extends('layouts.eventapp')

@section('content')

    @if (session('status'))
        <div class="error_check">
            {{ session('status') }}
        </div>
    @endif

    <div class="event_home">
        <h1>ここに予約カレンダーが入ります。</h1>
        <table class="event_box">
            <tr>
                <th>名前</th>
                <th>予約内容</th>
                <th>予約人数</th>
                <th>定員数</th>
                <th>開始日時</th>
                <th>終了日時</th>
                <th>表示・非表示</th>
            </tr>
            @foreach( $events as $event )
            <tr>
                <td><a href="{{ route('events.show', [ 'event' => $event->id ]) }}">{{$event->name}}</a></td>
                <td>{{$event->information}}</td>
                <td>後ほど</td>
                <td>{{ $event->max_people }}</td>
                <td>{{$event->start_date}}</td>
                <td>{{$event->end_date}}</td>
                <td>{{$event->is_visible}}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection

