<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tournament;
use Illuminate\Support\Facades\DB;

class TournamentController extends Controller
{
    public function index(){
        $events = Tournament::all();

        return view('site.organizations.organizations'.['events' => $events]);
    }

    public function createTournament(Request $req){
        $tournament = new Tournament();

        $tournament->user_id = $req->user_id;
        $tournament->game = $req->game;
        $tournament->name = $req->name;
        $tournament->description = $req->description;
        $tournament->startDate = $req->startDate;
        $tournament->endDate = $req->endDate;

        $tournament->save();
        
        return redirect("/organizations");
    }
}
