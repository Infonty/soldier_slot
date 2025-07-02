<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookings;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Bookings::where('user_id','=',Auth::user()->id)->get();
        return view('user.slot',compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    private function issunday($date){
        $date = strtotime($date);
        $date = date("l", $date);
        $date = strtolower($date);
        
        if($date == "sunday") {
            return true;
        } else {
            return false;
        }
    }

    public function store(Request $request)
    {
        if(Auth::user()->booking){
            return Redirect('/slot')->with("error","There is an active slot for this user.");
        }

        if($this->issunday($request->date)){
            return Redirect('/slot')->with("error","We are closed on Monday.");
        }

        $today = date("Y m d");

        $request->validate([
            'date' => "after:$today|required",
            'slot' => "required",
        ]);

        $date = date("Y-m-d", strtotime($request->date));

        Bookings::insert([
            'user_id' => Auth::user()->id,
            'date' => $date,
            'slot' =>  $request->slot,
            'created_at' => Carbon::now(),
        ]);

        return Redirect("/slot")->with("success","Booking created successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirm()
    {
        $booking = Auth::user()->booking;
        if(!isset($booking)){
            return Redirect("/slot")->with("error","No slots were booked.");
        }
        $today = Carbon::today();
        $date = $booking->date;
        $date = Carbon::createFromFormat("Y-m-d", $date);
        //$today = Carbon::createFromFormat("Y-m-d",$today);
        $today = $today->startOfDay();
        $date = $date->startOfDay();

        if($date->gt($today)){
            return Redirect('/slot')->with("error","wrong date.");
        } else if($date->lt($today)){
            $booking->delete();
            return Redirect('/slot')->with("error","slot expired.");
        }

        $slot = [
            1 => ["09:00:00","11:00:00"],
            2 => ["11:00:00","13:00:00"],
            3 => ["13:00:00","15:00:00"],
            4 => ["15:00:00","17:00:00"]
        ];

        $range = $slot[$booking->slot];
        
        $startTime = Carbon::createFromTimeString($range[0]);
        $endTime = Carbon::createFromTimeString($range[1]);
        
        $now = Carbon::now();
        
        if($now->between($startTime,$endTime)){
            return view('user.confirm');
        } else {
            return Redirect('/slot')->with("error","wrong timing.");
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Bookings::find($id);
        $booking->delete();
        return Redirect("/slot")->with("success","Booking deleted successfully.");
    }
}
