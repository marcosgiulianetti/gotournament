<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Team;
use App\Models\Matchs;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index() {
        $events = User::all();

        return view('site.home',['events' => $events]);
    }

    public function createAccount(Request $req) {
        $user = new User;

        $user->username = $req->username;
        $user->password = $req->password;
        $user->email = $req->email;
        $user->type = '0';

        $user->save();

        return redirect('/login');
    }

    public function createTournament(Request $req) {
        if(isset($req->cad)){
            $tournament = new Tournament;
            $a = $req->game;
            if($a == "lol"){
                $tournament->game = 1;
            }else{
                $tournament->game = 2;
            }
            $tournament->user_id = $req->id;      
            $tournament->name = $req->name;
            $tournament->description = $req->description;
            $tournament->startDate = $req->start;
            $tournament->endDate = $req->end;
    
            $tournament->save();
        }

        return redirect('/tournament');
    }

    public function createTeam(Request $req) {
        $team = new Team;
        //$search = Tournament::where("name", $req->tournamentname)->first();

        $team->tournament_id = $req->id;
        $team->name = $req->name;
        $team->logo = $req->logo;
        $team->playerA = $req->player1;
        $team->playerB = $req->player2;
        $team->playerC = $req->player3;
        $team->playerD = $req->player4;
        $team->playerE = $req->player5;

        $team->save();

        return redirect('/teams');
    }

    public function ccreateMatch(Request $req) {
        $match = new Matchs;
        //$search = Tournament::where("name", $req->tournamentname)->first();

        $match->team_tournament_id = $req->tournament;
        $match->team_id_A = $req->teama;
        $match->team_id_B = $req->teamb;
        $match->result = 3;

        $match->save();

        return redirect('/matchs');
    }

    public function editTournament(Request $req){
        if(isset($req->remove)){
            $t = Tournament::find($req->idTt);
            if(isset($t->id)){
                $t->delete();
                return redirect('/tournament');
            }else{
                return redirect('/tournament');
            }
        }
        if(isset($req->edit)){
            if($req->game == 'lol'){
                $req->game = 1;
            }else{
                $req->game = 2;
            }
            $t = Tournament::find($req->idTt);
            $t->game = $req->game;
            $t->name = $req->name;
            $t->description = $req->description;
            $t->startDate = $req->start;
            $t->endDate = $req->end;
            $t->save();
            return redirect('/tournament');
        }
    }

    public function editTeam(Request $req){
        if(isset($req->remove)){
            $t = Team::find($req->idTt);
            if(isset($t->id)){
                $t->delete();
                return redirect('/teams');
            }else{
                return redirect('/teams');
            }
        }
        if(isset($req->edit)){
            $t = Team::find($req->idTt);
            $t->name = $req->name;
            $t->playerA = $req->playera;
            $t->playerB = $req->playerb;
            $t->playerC = $req->playerc;
            $t->playerD = $req->playerd;
            $t->playerE = $req->playere;
            $t->save();
            return redirect('/teams');
        }
    }

    public function editMatchs(Request $req){
        if(isset($req->remove)){
            $t = Matchs::find($req->idTt);
            if(isset($t->id)){
                $t->delete();
                return redirect('/matchs');
            }else{
                return redirect('/matchs');
            }
        }
        if(isset($req->edit)){
            $t = Matchs::find($req->idTt);
            $t->result = $req->result;
            $t->team_id_A = $req->teama;
            $t->team_id_B = $req->teamb;
            $t->save();
            return redirect('/matchs');
        }
    }

    public function editAccount(Request $req){
        if(isset($req->remove)){
            $u = User::find($req->idTt);
            if(isset($u->id)){
                $u->delete();
                return redirect('/organizations');
            }else{
                return redirect('/organizations');
            }
        }
        if(isset($req->edit)){
            $u = User::find($req->id);
            $u->username = $req->username;
            $u->password = $req->password;
            $u->email = $req->email;
            $u->save();
            return redirect('/organizations');
        }
    }
}
