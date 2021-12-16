<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Team;
use App\Models\Matchs;
use App\Models\Tournament;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function organizations(){
        if(Auth::check() === true){
            $id = Auth::id();
            $user = Auth::user();
            return view('site.organizations.organizations', ['id' => $id, 'user' => $user]);
        }
        return view('site.login');
    }

    public function tournament(){
        if(Auth::check() == true){
            $id = Auth::id();
            $user = Auth::user();
            $data = Tournament::where("user_id", $id)->get();

            return view('site.organizations.tournament', ['id' => $id, 'user' => $user, 'data' => $data]);
        }
        return view('site.login');
    }

    public function teams(){
        if(Auth::check() == true){
            $id = Auth::id();
            $user = Auth::user();
            $d = Tournament::where("user_id", $id)->pluck('id');
            $data = Tournament::where("user_id", $id)->get();
            $team = Team::whereIn('tournament_id', $d)->get();
            return view('site.organizations.teams', ['id' => $id, 'user' => $user, 'team' => $team, 'data' => $data]);
        }
        return view('site.login');
    }

    public function matchs(){
        if(Auth::check() == true){
            $id = Auth::id();
            $user = Auth::user();
            $d = Tournament::where("user_id",$id)->pluck('id');
            $t = Tournament::where("user_id",$id)->get();
            $matchs = Matchs::whereIn('team_tournament_id', $d)->get();
            $team = Team::whereIn('tournament_id', $d)->get();
            return view('site.organizations.matchs', ['id' => $id, 'user' => $user, 'd' => $d, 'matchs' => $matchs, 'team' => $team, 't' => $t]);
        }
        return view('site.login');
    }
    
    public function login(Request $request){
        $request->all();
        //var_dump($request->all());
        
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $user = DB::table('user')
        ->where('email',$credentials['email'])
        ->where('password',$credentials['password'])
        ->first();
        if($user == null){
            $erro = 'Usuário ou senha inválida!';
            return view('site.login',['erro' => $erro]);
            //return redirect()->route('site.login');
        }

        Auth::loginUsingId($user->id);
        return view('site.organizations.organizations', ['user' => $user]);
    }
    
    public function logout(){
        Auth::logout();
        return redirect()->route('site.login');
    }
    
    public function createTournament(){
        if(Auth::check() === true){
            $id = Auth::id();
            $user = Auth::user();
            return view('site.organizations.createtournament', ['id' => $id, 'user' => $user]);
        }
        return view('site.organizations');
    }

    public function editTournament(){
        if(Auth::check() === true){
            $id = Auth::id();
            $user = Auth::user();
            $t = Tournament::where("user_id", $user->id)->get();
            return view('site.organizations.edittournament', ['id' => $id, 'user' => $user, 't' => $t]);
        }
        return view('site.organizations');
    }

    public function createTeam(){
        if(Auth::check() === true){
            $id = Auth::id();
            $user = Auth::user();
            $t = Tournament::where("user_id", $user->id)->get();
            return view('site.organizations.createteam', ['id' => $id, 'user' => $user, 't' => $t]);
        }
        return view('site.organizations');
    }

    public function editTeam(){
        if(Auth::check() === true){
            $id = Auth::id();
            $user = Auth::user();
            $d = Tournament::where("user_id", $id)->pluck('id');
            $data = Tournament::where("user_id", $id)->get();
            $team = Team::whereIn('tournament_id', $d)->get();
            return view('site.organizations.editteam', ['id' => $id, 'user' => $user, 'data' => $data, 'team' => $team]);
        }
        return view('site.organizations');
    }

    public function createMatchs(Request $req){
        if(Auth::check() === true){
            $id = Auth::id();
            $user = Auth::user();
            $d = Tournament::where("user_id",$id)->pluck('id');
            $t = Tournament::where("user_id", $id)->get();
            $matchs = Matchs::whereIn('team_tournament_id', $d)->get();
            $y = $req->tournament;
            $team = Team::where('tournament_id', $req->tournament)->get();
            return view('site.organizations.creatematchs', ['id' => $id, 'user' => $user, 'matchs' => $matchs, 'team' => $team, 't' => $t, 'y' => $y]);
        }
        return view('site.organizations');
    }

    public function chooseTournament(){
        if(Auth::check() === true){
            $id = Auth::id();
            $user = Auth::user();
            $d = Tournament::where("user_id",$id)->pluck('id');
            $t = Tournament::where("user_id", $id)->get();
            $matchs = Matchs::whereIn('team_tournament_id', $d)->get();
            $team = Team::whereIn('tournament_id', $d)->get();
            return view('site.organizations.choosetournament', ['id' => $id, 'user' => $user, 'matchs' => $matchs, 'team' => $team, 't' => $t]);
        }
        return view('site.organizations');
    }

    public function editMatchs(){
        if(Auth::check() === true){
            $id = Auth::id();
            $user = Auth::user();
            $d = Tournament::where("user_id",$id)->pluck('id');
            $t = Tournament::where("user_id", $id)->get();
            $matchs = Matchs::whereIn('team_tournament_id', $d)->get();
            $team = Team::whereIn('tournament_id', $d)->get();
            return view('site.organizations.editmatchs', ['id' => $id, 'user' => $user, 'matchs' => $matchs, 'team' => $team, 't' => $t]);
        }
        return view('site.organizations');
    }

    public function editAccount(){
        if(Auth::check() === true){
            $id = Auth::id();
            $user = Auth::user();
            $d = Tournament::where("user_id",$id)->pluck('id');
            $t = Tournament::where("user_id", $id)->get();
            $matchs = Matchs::whereIn('team_tournament_id', $d)->get();
            $team = Team::whereIn('tournament_id', $d)->get();
            $userdetail = User::where('type','0')->get();
            return view('site.organizations.editaccount', ['id' => $id, 'user' => $user, 'matchs' => $matchs, 'team' => $team, 't' => $t, 'userdetail' => $userdetail]);
        }
        return view('site.organizations');
    }

    public function accountDetails(){
        if(Auth::check() === true){
            $id = Auth::id();
            $user = Auth::user();
            $userdetail = User::where('id',$id)->get();
            return view('site.organizations.accountdetails', ['id' => $id, 'user' => $user, 'userdetail' => $userdetail]);
        }
        return view('site.organizations');
    }

    public function usersAdmin(){
        if(Auth::check() === true){
            $id = Auth::id();
            $user = Auth::user();
            $d = Tournament::where("user_id",$id)->pluck('id');
            $t = Tournament::where("user_id", $id)->get();
            $matchs = Matchs::whereIn('team_tournament_id', $d)->get();
            $team = Team::whereIn('tournament_id', $d)->get();
            $allusers = User::where('type','%')->get();
            return view('site.organizations.usersadmin', ['id' => $id, 'user' => $user, 'matchs' => $matchs, 'team' => $team, 't' => $t, 'allusers' => $allusers]);
        }
        return view('site.organizations');
    }

    public function aboutCsgo(){
        if(Auth::check() === true){
            $id = Auth::id();
            $user = Auth::user();
            return view('site.organizations.aboutcsgo', ['id' => $id, 'user' => $user]);
        }
        return view('site.aboutcsgo');
    }

    public function aboutLol(){
        if(Auth::check() === true){
            $id = Auth::id();
            $user = Auth::user();
            return view('site.organizations.aboutlol', ['id' => $id, 'user' => $user]);
        }
        return view('site.aboutlol');
    }
}

/* BACKUP CODES
//return redirect()->route('site.login');

//Auth::attempt($credentials);

if($user == null){
            return redirect()->route('site.login');
        }
        $request->session()->regenerate();
*/