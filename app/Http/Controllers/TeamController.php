<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::with('city')->get(); 
        return view('teams.index', compact('teams'));
    }
}
