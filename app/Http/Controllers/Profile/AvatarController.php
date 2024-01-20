<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function update()
    {
        // store avatar
        //return response()->redirectTo('/profile');
        //return response()->redirectTo(route('profile.edit'));
        return back()->with('message', 'Avatar is changed.');
    }
}
