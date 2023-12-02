<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function showdata(Request $request){
        // Fetch all unique risks
        $risks = Patient::select('risk')->distinct()->get();

        $selectedRisk = $request->input('risk');

        $query = Patient::query();

        if($selectedRisk){
            $query->where('risk', $selectedRisk);
        }

        $myData = $query->get();

        // Pass $risks variable to the view
        return view('patient', ['MyData' => $myData, 'risks' => $risks, 'selectedRisk' => $selectedRisk]);
    }
}
