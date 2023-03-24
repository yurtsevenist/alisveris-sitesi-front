<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Http\Requests\ContactRequest;
class TeamController extends Controller
{
    public function hakkimizda()
    {
        $teams=Team::get();        
        return view('front.hakkimizda',compact('teams'));
    }
}
