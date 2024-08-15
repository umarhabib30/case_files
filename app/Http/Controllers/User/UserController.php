<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'confirmed|required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => '2',
            'password' => Hash::make($request->password),
        ]);
        if ($user) {
            Auth::login($user, true);
            return redirect('user/dashboard')->with('success','Congratulations you registered successfully');
        }else{
            return redirect()->back()->with('error','There was an issue creating your account');
        }
    }
}
