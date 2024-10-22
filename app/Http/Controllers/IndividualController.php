<?php

namespace App\Http\Controllers;

use App\Models\Individual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class IndividualController extends Controller
{
    /**
     * Show a form to input data for individual.
     */
    public function create() {
        return view('individuals.create');
    }

    /**
     * Store a newly created individual in storage.
     */
    public function store(Request $request) {
        // dd($request->all());
        $individual = Individual::create($request->all());

        return redirect()->route('partners.create', ['individual' => $individual->id]);
    }
}
