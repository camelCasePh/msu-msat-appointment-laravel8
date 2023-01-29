<?php

namespace App\Http\Controllers;
use App\Models\Slot;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //

    public function index(){
        $events = Slot::select('slotSize as title', 'slotStartDate as start', 'slotEndDate as end', 'slotStatus as description')->get();
    return response()->json($events);
    }
}
