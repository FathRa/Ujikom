<?php

namespace App\Http\Controllers;

use App\Models\Kela;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterStepTwoController extends Controller
{
    public function create()
    {
        $kelas = Kela::get();

        return view('auth.register-step2', compact('kelas'));
    }

    public function store(Request $request)
    {
        auth()->user()->update([
            'address' => $request->address,
            'phone' => $request->phone,
            'kelas_id' => $request->kelas_id
        ]);

        return redirect('dashboard');
    }
}
