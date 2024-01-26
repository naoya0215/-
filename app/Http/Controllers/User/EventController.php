<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Http\Controllers\Controller;
use App\Services\EventService;
use Illuminate\Support\Facades\DB;
use App\Models\Event;
use Carbon\Carbon;

class EventController extends Controller
{

    public function __construct() 
    {
        $this->middleware('auth:users');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservationPeople =  DB::table('reservations')
        //予約人数の合計値を出し取得する。
        ->select('event_id', DB::raw('sum(number_of_people) as number_of_people'))
        //イベントごとに
        ->groupBy('event_id');

        $events = DB::table('events')
        ->leftJoinSub($reservationPeople, 'reservationPeople', function($join){
            $join->on('events.id', '=', 'reservationPeople.event_id');
        })
        ->orderBy('start_date', 'asc')
        ->get();

        
        return view('user.events.index' ,compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request) 
    {

        $check = EventService::checkEventApplication($request['event_date'], $request['start_time'], $request['end_time']);

        if($check) {
            session()->flash('status', 'この時間帯にはすでに予約が存在しています。');
            return view('user.events.create');
        }


        $startDate = EventService::joinDateAndTime($request['event_date'], $request['start_time']);
        $endDate = EventService::joinDateAndTime($request['event_date'], $request['end_time']);
        

        Event::create([
            'name' => $request['event_name'],
            'information' => $request['information'],
            'start_date' => $startDate,
            'end_date' => $endDate,
            'max_people' => $request['max_people'],
            'is_visible' => $request['is_visible']
        ]);


        session()->flash('status', '登録okです');
        return to_route('events.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        $event = Event::findOrFail($event->id);
        $eventDate = $event->eventDate;
        $startTime = $event->startTime;
        $endTime = $event->endTime;

        return view('user.events.show', compact('event', 'eventDate', 'startTime', 'endTime'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
