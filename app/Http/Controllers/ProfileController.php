<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index(User $user) {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        return view('profiles.index', compact('user', 'follows'));

    }

    public function edit(User $user) {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user) {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        if(request('image')) {

            ini_set('memory_limit', '256M');

            $imagePath = request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save()->destroy();

            $imageArray = ['image' => $imagePath];
        }


        auth()->user()->profile->update(
            array_merge($data, $imageArray ?? [])
        );

        return redirect("/profile/{$user->id}");

//        dd($data);
    }
}
