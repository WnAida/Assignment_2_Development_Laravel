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
    $selectedage = $request->input('age');

    // Use a single query for both risk and age filtering
    $query = Patient::query();

    if ($selectedRisk) {
        $query->where('risk', $selectedRisk);
    }

    if ($selectedage) {
        $query->where('age', $selectedage);
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
        'selectedage' => $selectedage
    ]);
}

}
