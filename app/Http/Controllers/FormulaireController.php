<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Direction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormulaireController extends Controller
{
    public function index(){

        $user = Auth::user();
        $managers = User::all();
        $directions = Direction::all();

        return view('badge.formulaire', compact('user','managers','directions'));
    }
}
