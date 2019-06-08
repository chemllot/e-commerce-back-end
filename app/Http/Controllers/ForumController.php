<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\topic;

class ForumController extends Controller
{
    //
    public function index(){
        dd(topic::all());
        $topics = topic::all();
        return view('topic.index',compact('topics'));
    }
}
