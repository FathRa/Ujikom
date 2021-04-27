<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        $profiles = User::find(auth()->user()->id);

        $profiles->name      = $request->name;
        $profiles->nis       = $request->nis;
        $profiles->phone     = $request->phone;
        $profiles->address   = $request->address;

        if ($request->file('profile')) {
            Storage::delete(auth()->user()->profile);
        }

        if ($request->hasFile('profile')) {
            $profiles->profile   = $request->file('profile')->store('images/profile');
        }else{
            $profiles->profile = $profiles->profile;
        }
        
        $profiles->save();

        return redirect()->back();
    }
}
