<?php

namespace App\Http\Controllers;

use App\Models\Individual;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Show a form to input data for individual's partner.
     */
    public function create(Individual $individual) {
        return view('partners.create', [
            'individual' => $individual
        ]);
    }
    
    /**
     * Store a newly created partner in storage.
     */
    public function store(Request $request, Individual $individual) {
        $partner = $request->all(); 
        $individual->partner()->create($partner);
        $modellingController= new ModellingController();
        
        return $modellingController->index($individual, $partner);
    }
}
