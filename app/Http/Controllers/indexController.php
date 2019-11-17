<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Number;
use App\City;
use App\Message;

class indexController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only('easy');
    }

    public function index(){
        return view('index');
    }

    public function easyAddNumber(){
        $numbers = Number::orderBy('id', 'DESC')->paginate(40);
        $cities = City::All();
        $count = Number::count();

        return view('easyAddNumber')->with('numbers', $numbers)
                                    ->with('cities', $cities)
                                    ->with('count', $count);
    }
    public function smsToAdmins(){
        return view('smsToAdmins');
    }
    public function mailBox(){
        $messages = Message::orderBy('id', 'DESC')->simplePaginate(3);

        return view('mailbox')->with('messages', $messages);
    }
}
