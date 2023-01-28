<?php

namespace App\Http\Controllers;
use App\Models\Slot;
use Illuminate\Http\Request;

class SlotController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index()
    {
        $events = array();
        $slots = Slot::all();

        foreach($slots as $slot){
            $events[] = [
                'title' => $slot->slotSize,
                'start' => $slot->slotStartDate,
                'end' => $slot->slotEndDate,
                'description' => $slot->slotStatus,

            ];

        }


        //    $events = Slot::select('slotSize as title', 'slotStartDate as start', 'slotEndDate as end', 'slotStatus as description')->get();
        // return response()->json($events);



        return view('admincalendar',['events' => $events]);
    }

    //   public function fetch(){
    //     $events = Slot::select('slotSize as title', 'slotStartDate as start', 'slotEndDate as end', 'slotStatus as description')->get();
    //     return response()->json($events);

    //  }
      public function store(Request $request){


            $slot = new Slot;
            $slot->slotSize = $request->input('title');
             $slot->slotStartDate = $request->input('start_date');
                          $slot->slotEndDate = $request->input('end_date');
                                       $slot->slotStatus = $request->input('slotStatus');
                                       $slot->save();

                // return response()->json($slot);
        //          $events= Slot::select('slotSize as title', 'slotStartDate as start', 'slotEndDate as end', 'slotStatus as description')->get();
        // return response()->json($events);

     }
    }
