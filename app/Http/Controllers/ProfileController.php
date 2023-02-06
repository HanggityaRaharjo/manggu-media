<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        return view('auth.profile.index');
    }
    public function edit()
    {

        if (Profile::where('user_id', Auth::user()->id)->first() !== null) {
            $data = Profile::where('user_id', Auth::user()->id)->first();
        } else {
            $data = [];
        }

        return view('auth.profile.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        // dd($request);
        // dd(!empty(Profile::where('user_id', $id)->first()->photo));
        if ($request->password !== $request->confirm_password) return back();
        if ($request->name != null || $request->email != null || $request->password != null) {
            $user = User::where('id', $id)->first();
            ($request->name != null) ? $name = $request->name : $name = $user->name;
            ($request->email != null) ? $email = $request->email : $email = $user->email;
            ($request->password != null) ? $password = bcrypt($request->password) : $password = $user->password;
            User::where('id', $id)->update([
                'name' => $name,
                'email' => $email,
                'password' => $password,
            ]);
        }

        if (!empty($request->file('photo'))) {
            if (!empty(Profile::where('user_id', $id)->first()->photo)) {
                $filepath = public_path('storage/user_profile/' . Profile::where('user_id', $id)->first()->photo);
                if (file_exists($filepath)) {
                    unlink(public_path('storage/user_profile/' . Profile::where('user_id', $id)->first()->photo));
                }
            }
            $fileName = date("Y-m-d") . $request->file('photo')->getClientOriginalName();
            $request->file('photo')->storeAs('user_profile', $fileName);
        } else {
            $fileName = null;
        }

        if (Profile::where('user_id', $id)->first() !== null) {
            Profile::where('user_id', $id)->update([
                'user_id' => $id,
                'photo' => $fileName,
                'gender' => $request->gender,
                'description' => $request->description,
                'job' => $request->job,
                'url_facebook' => $request->url_facebook,
                'url_instagram' => $request->url_instagram,
                'url_twitter' => $request->url_twitter,
            ]);
        } else {
            Profile::create([
                'user_id' => $id,
                'photo' => $fileName,
                'gender' => $request->gender,
                'description' => $request->description,
                'job' => $request->job,
                'url_facebook' => $request->url_facebook,
                'url_instagram' => $request->url_instagram,
                'url_twitter' => $request->url_twitter,
            ]);
        }

        return back();
    }
}
