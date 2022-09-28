<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
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
            'image'=>'required|mimes:jpg'

        ]);

        Auth::user()->update([
            'name' => $request->input('name'),
            'image' => $request->input('image')
        ]);
        return redirect('tasks');


    }


}
