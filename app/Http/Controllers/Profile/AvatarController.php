<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateAvatarRequest;
//use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function update(UpdateAvatarRequest $request)
    {

        $path = Storage::disk('public')->put('avatars', $request->file('avatar'));
        //$path = $request->file('avatar')->store('avatars', 'public');

        if($oldAvatar = $request->user()->avatar){
            Storage::disk('public')->delete($oldAvatar);
        }

        auth()->user()->update(['avatar' => $path]);
        //return response()->redirectTo('/profile');
        //return response()->redirectTo(route('profile.edit'));
        return back()->with('message', 'Avatar is changed.');
    }
}
