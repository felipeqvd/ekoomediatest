<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Lead;

class LeadController extends Controller
{
    public function index()
    {
        return Lead::all();
    }
 
    public function show(Lead $lead)
    {
        return $lead;
    }

    public function store(Request $request)
    {
        $lead = Lead::create($request->all());
        return response()->json($lead, 201);        
    }

    public function delete(Lead $lead)
    {
        $lead->delete();
        return response()->json(null, 204);
    }
}
