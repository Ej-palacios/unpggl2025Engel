<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeCalculatorController extends Controller
{
    public function calculate($input)
    {
        $currentYear = now()->year;

        if ($input > 1900 && $input <= $currentYear) {
            // Es un año de nacimiento
            $birthYear = $input;
            $age = $currentYear - $birthYear;
            $mode = 'birth_year';
        } elseif ($input >= 0 && $input <= 120) {
            // Es una edad
            $age = $input;
            $birthYear = $currentYear - $age;
            $mode = 'age';
        } else {
            return view('age.calculate', ['error' => 'Entrada no válida.']);
        }

        return view('age.calculate', compact('birthYear', 'age', 'mode'));
    }
}
