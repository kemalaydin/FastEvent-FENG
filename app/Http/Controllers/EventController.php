<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index(){
        $Requests = \App\Request::where('user_id',auth()->id())->get();
        return view('event.index',compact('Requests'));
    }

    public function new(){
        return view('event.new');
    }

    public function new2(Request $request){
        return $request->all();
    }
}
