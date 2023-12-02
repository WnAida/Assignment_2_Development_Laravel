<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function showdata(){
        $MyData = Patient::all();
        return view('patient', [ 'MyData' => $MyData]);
    }
}
