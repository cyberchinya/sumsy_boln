<?php

namespace App\Http\Controllers;

use App\Models\Thank;
use Illuminate\Http\Request;

class ThanksController extends Controller
{
    public function index()
    {
        return view('doctor');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','string'],
            'email' => ['required','string'],
            'phone' => ['required','min_digits:7'],
            'message' => ['required','string','max:100']
        ]);

        Thank::create($data);
        return redirect()->route('thanks');
    }
}
