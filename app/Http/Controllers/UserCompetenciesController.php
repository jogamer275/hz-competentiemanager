<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCompetenciesController extends Controller
{
    public function store(Request $request)
    {
        $this->user_competencies->create($request->all());

        return redirect('/userCompetencies/index')->with(['status' => 'Competentie Gekozen']);
    }
}
