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
                'slotStatus' => $slot->slotStatus,

            ];

        }
    //          return response()->json([
    //         'events' => $events,
    //    ]);


        return view('admincalendar',['events' => $events]);
    }
    // public function index(){
    //     return view('admincalendar');
    // }
    //   public function fetch(){

    //  $events = array();
    //     $slots = Slot::all();

    //     foreach($slots as $slot){
    //         $events[] = [
    //             'title' => $slot->slotSize,
    //             'start' => $slot->slotStartDate,
    //             'end' => $slot->slotEndDate,
    //             'slotStatus' => $slot->slotStatus,

            // ];
            ///test

        // }
    //          return response()->json([
    //         'events' => $events,
    //    ]);
    //    return response()->json($events);
    //  }
      public function store(Request $request){

    // //   return $request->all();
    //     $request->validate([
    //         'title' => 'string'

    //     ]);

        // $slot = Slot::create([
        //     'slotSize' => $request->title,
        //     'slotStartDate' => $request->start_date,
        //     'slotEndDate' => $request->end_date,
        //     'slotStatus' => $request->slotStatus,
        // ]);

        // return response()->json($slot);
        // $validator = Validator::make($request->all(),[

        // ]);
            $slot = new Slot;
            $slot->slotSize = $request->input('title');
             $slot->slotStartDate = $request->input('start_date');
                          $slot->slotEndDate = $request->input('end_date');
                                       $slot->slotStatus = $request->input('slotStatus');
                                       $slot->save();
            // return response()->json([
            //     'status' =>200,
            //     'message'=>'Added Successfully',
            // ]);
                return response()->json($slot);

     }
    }
