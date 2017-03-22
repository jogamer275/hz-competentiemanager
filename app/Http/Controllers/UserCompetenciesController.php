<?php

namespace App\Http\Controllers;

use App\Models\Competency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserCompetenciesController extends Controller
{
    public function index()
    {
        return view('userCompetencies/index', [
            'comps' => Competency::all(),
            //'competencies' => DB::table('competencies')->pluck('name', 'abbreviation'),
        ]);
    }

    public function store(Request $request)
    {
        return "Gekozen: " . $request['comp_id'] . " voor gebruiker " . Auth::user()->id;
    }
}
