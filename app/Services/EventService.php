<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventService
{
    //存在チェック関数
    public static function checkEventApplication($eventDate, $start_Time, $end_Time)
    {

        $check = DB::table('events')
        //日付のチェック
        //同じ日かどうかチェック
        ->whereDate('start_date', $eventDate)
        ->whereTime('end_date', '>', $start_Time)
        ->whereTime('start_date', '<', $end_Time)
        //存在チェック
        ->exists();
        return $check;
    }
    //日付と時間を合体させる関数
    public static function joinDateAndTime($date, $time)
    {
        //日付と開始時間を合体して登録
        $join = $date ." ". $time;
        $dateTime = Carbon::createFromFormat(
            'Y-m-d H:i', $join
        );
        return $dateTime;
    }

    public static function getWeekEvents($startDate, $endDate) 
    {
        $reservedPeople =  DB::table('reservations')
        //予約人数の合計値を出し取得する。
        ->select('event_id', DB::raw('sum(number_of_people) as number_of_people'))
        //イベントごとに
        ->groupBy('event_id');

        $events = DB::table('events')
        ->leftJoinSub($reservedPeople, 'reservationPeople', function($join){
            $join->on('events.id', '=', 'reservationPeople.event_id');
        })

        //
        ->whereBetween('events.start_date', [$startDate, $endDate])
        ->orderBy('events.start_date', 'asc')
        ->get();
    }
}
?>