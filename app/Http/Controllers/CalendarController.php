<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CalendarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Services\EventService;

class CalendarController extends Controller
{

    public $currentDate;
    public $currentWeek;
    public $day;
    //7日分のデータを取得するための変数
    public $sevenWeeklater;
    public $events;

    public function mount() 
    {
        $this->currentDate = Carbon::today();
        $this->sevenWeeklater = $this->currentDate->addDays(7);
        $this->currentWeek = [];

        $this->events = EventService::getWeekEvents(
            $this->currentDate->format('Y-m-d'),
            $this->sevenWeeklater->format('Y-m-d'),
        );

        for($i = 0; $i < 7; $i++){
            $this->day = Carbon::today()->addDays($i); 
            array_push($this->currentWeek, $this->day);
        }

        return view('calendar', [
            'currentDate' => $this->currentDate,
            'currentWeek' => $this->currentWeek,
            'sevenWeeklater' => $this->sevenWeeklater,
            'events' => $this->events,
        ]);
    }
}
