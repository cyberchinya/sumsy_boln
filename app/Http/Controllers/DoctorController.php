<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        return view('doctor');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','string'],
            'email' => ['required','string'],
            'phone' => ['required','min_digits:7'],
            'message' => ['required','string','max:100']
        ]);
    }
}
