<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getEdit()
    {
        return view('profile.edit');
    }

    public function postEdit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'image'=>'required|image'
        ]);

        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $image->storeAs('public', $name);

        Auth::user()->profile->update([
            'image' => $name
        ]);

        return redirect('tasks');
    }
}
