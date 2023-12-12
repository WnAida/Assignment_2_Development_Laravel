<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function showdata(Request $request)
    {
        // Fetch all unique risks
        $risks = Patient::select('risk')->distinct()->get();

        $selectedRisk = $request->input('risk');
        $selectedAge = $request->input('age'); // Change to $selectedAge

        // Use a single query for both risk and age filtering
        $query = Patient::query();

        if ($selectedRisk) {
            $query->where('risk', $selectedRisk);
        }

        if ($selectedAge) {
            $query->where('age', $selectedAge);
        }

        $myData = $query->get();

        // Fetch all unique ages
        $ages = Patient::select('age')->distinct()->get();

        // Pass $risks and $ages variables to the view
        return view('patient', [
            'myData' => $myData,
            'risks' => $risks,
            'ages' => $ages,
            'selectedRisk' => $selectedRisk,
            'selectedAge' => $selectedAge, // Change to $selectedAge
        ]);
    }


}
