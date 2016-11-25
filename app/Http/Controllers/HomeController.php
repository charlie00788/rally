<?php

namespace App\Http\Controllers;

use App\Entities\Team;
use App\Entities\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.home');
    }

    public function getTeams()
    {
        $teams = User::all();

        return view('home.teams', compact('teams'));
    }
}
