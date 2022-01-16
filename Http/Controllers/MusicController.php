<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Music;
use Session;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function add(){
        $r=request();
        $addMusic=Music::create([
            'type'=>$r->musicType,
        ]);
        Session::flash('success',"Music Type create successfully!");
        Return view('addMusic');
    }

    public function view(){
        $viewMusic=Music::all(); //generate SQL SELECT * from category
        return view('showMusic')->with('music',$viewMusic);
    }
}
