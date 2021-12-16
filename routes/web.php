<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AuthController;

// Métodos GET
Route::get('/construction', function(){
    return view('site.construction');
})->name('site.construction');

Route::get('/', [EventController::class, 'index'])->name('site');

Route::get('/login', [AuthController::class, 'organizations'])->name('site.login');

Route::get('/createtournament', [AuthController::class, 'createtournament'])->name('tournament.create');

Route::get('/choosetournament', [AuthController::class, 'choosetournament'])->name('tournament.choose');

Route::get('/edittournament', [AuthController::class, 'edittournament'])->name('tournament.edit');

Route::get('/editteam', [AuthController::class, 'editteam'])->name('team.edit');

Route::get('/editmatchs', [AuthController::class, 'editmatchs'])->name('matchs.edit');

Route::get('/editaccount', [AuthController::class, 'editaccount'])->name('account.edit');

Route::get('/aboutcsgo', [AuthController::class, 'aboutcsgo'])->name('about.csgo');

Route::get('/aboutlol', [AuthController::class, 'aboutlol'])->name('about.lol');

Route::get('/accountdetails', [AuthController::class, 'accountdetails'])->name('account.details');

Route::get('/usersadmin', [AuthController::class, 'usersadmin'])->name('users.admin');

Route::get('/createteam', [AuthController::class, 'createteam'])->name('team.create');

Route::get('/create', function () {
    return view('site.create');
})->name('site.create');

Route::get('/organizations', [AuthController::class, 'organizations'])->name('organizations');

Route::get('/organizations/logout', [AuthController::class, 'logout'])->name('site.logout');

Route::get('/organizations/leagueoflegends', function(){
    return view('site.organizations.leagueoflegends');
})->name('site.organizations.leagueoflegends');

Route::get('/organizations/csgo', function(){
    return view('site.organizations.csgo', ['user' => 'user']);
})->name('site.organizations.csgo');

Route::get('/tournament', [AuthController::class, 'tournament'])->name('tournament');

Route::get('/teams', [AuthController::class, 'teams'])->name('teams');

Route::get('/matchs', [AuthController::class, 'matchs'])->name('matchs');

// Métodos POST
Route::post('/createaccount', [EventController::class, 'createAccount']);

Route::post('/createtournament', [EventController::class, 'createTournament']);

Route::post('/createteam', [EventController::class, 'createTeam']);

Route::post('/creatematchs', [AuthController::class, 'creatematchs']);

Route::post('/ccreatematch', [EventController::class, 'ccreatematch']);

Route::post('/editaccount', [EventController::class, 'editaccount']);

Route::post('/login', [AuthController::class, 'login'])->name('site.login');

Route::post('/site',[EventController::class],'/createAccount');

Route::post('/edittournament', [EventController::class, 'editTournament'], ['uri' => 'uri']);

Route::post('/editteam', [EventController::class, 'editteam'], ['uri' => 'uri']);

Route::post('/editmatchs', [EventController::class, 'editmatchs'], ['uri' => 'uri']);

/* BACKUP DE CÓDIGO

Route::get('/login', function () {
    return view('site.login');
})->name('site.login');

//Route::get('/login', 'AuthController@showLoginForm')->name('site.login');

Route::get('/login', function () {
    return view('site.login');
})->name('site.login');

Route::get('/organizations', function(){
    return view('site.organizations.organizations');
})->name('site.organizations.organizations');

Route::get('/', function () {
    return view('site.home');
})->name('site.home');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/