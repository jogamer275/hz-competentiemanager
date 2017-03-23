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
        DB::table('user_competencies')->insert(
            ['user_id' => Auth::user()->id, 'competency_id' => $request['comp_id']]
        );

        return "Gefeliciteerd ". Auth::user()->name . " je hebt gekozen: " . $request['comp_id'] . " en je ID is " . Auth::user()->id;
    }

    public function show(Request $request)
    {
        return view('userCompetencies/show', [

        ]);
    }
}
