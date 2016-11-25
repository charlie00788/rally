<?php

namespace App\Http\Controllers;

use App\Entities\Team;
use App\Entities\User;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

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

    public function getAddTeams()
    {
        return view('home.newTeam');
    }

    public function postAddTeams(Request $request)
    {
        $rules = [
            'nickname'  => 'required|between:5,15|unique:users,nickname',
            'email'     => 'required|email|unique:users,email',
        ];

        $this->validate($request,$rules);

        $usuario = new User;
        $usuario->nickname = $request->nickname;
        $usuario->email = $request->email;
        $usuario->password = bcrypt('escuelamilitar');
        $usuario->save();

        Alert::message('Equipo registrado exitósamente.', 'success');

        return redirect(route('web.getTeams'));
    }

    public function getDeleteTeam($team_id)
    {
        $equipo = User::find($team_id);
        $equipo->delete();

        Alert::message('Equipo eliminado exitósamente.', 'danger');

        return redirect(route('web.getTeams'));
    }

    public function getPeople($team_id)
    {
        $personas = Team::where('user_id', $team_id)->get();
        return view('home.personas', compact('personas', 'team_id'));
    }

    public function getAddPeople($team_id)
    {
        return view('home.newPeople', compact('team_id'));
    }

    public function postAddPeople(Request $request)
    {
        $rules = [
            'name'      => 'required|between:5,200|unique:teams,name',
            'code'      => 'required|between:5,20|unique:teams,code',
            'semester'  => 'required|between:1,10',
            'subject'   => 'required|between:5,200',
        ];

        $this->validate($request,$rules);

        $persona = new Team;
        $persona->user_id = $request->team_id;
        $persona->name = $request->name;
        $persona->semester = $request->semester;
        $persona->code = $request->code;
        $persona->subject = $request->subject;
        $persona->save();

        Alert::message('Persona registrada exitósamente.', 'success');

        return redirect(route('web.getPeople', $request->team_id));
    }

    public function getDeletePeople($persona_id)
    {
        $persona = Team::find($persona_id);
        $team_id = $persona->user_id;
        $persona->delete();

        Alert::message('Persona eliminada exitósamente.', 'danger');

        return redirect(route('web.getPeople', $team_id));
    }
}
