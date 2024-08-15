<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $users = User::where('role', '2')->get();
        $data = [
            'users' => $users,
            'title' => 'Admin Dashboard',
            'active' => 'Dashboard',
            'breadcrumbs' => array("admin/dashboard" => "Dashboard"),
        ];
        return view('admin.dashboard.index', $data);
    }

    public function editUser($id)
    {
        $user = User::find($id);
        $data = [
            'user' => $user,
            'title' => 'Edit User',
            'active' => 'Dashboard',
            'breadcrumbs' => array("admin/dashboard" => "Dashboard", 'admin/user/edit/' . $user->id => 'Edit User'),
        ];
        return view('admin.dashboard.edit_user', $data);
    }

    public function updateUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        if ($validator->fails()) {
            Session::flash('error', $validator->errors()->first());
            return redirect()->back();
        }

        $user = User::find($request->id);
        if ($user->email != $request->email) {
            $check = User::where('email', $request->email)->first();
            if ($check) {
                return redirect()->back()->with('error', 'Email already exist please provide unique email');
            } else {
                $user->update(['name' => $request->name, 'email' => $request->email]);
                return redirect()->back()->with('success', 'User updated successfully');
            }
        } else {
            $user->update($request->all());
            return redirect()->back()->with('success', 'User updated successfully');
        }
    }

    public function updatePassword(Request $request){
        $validator = Validator::make($request->all(), [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            Session::flash('error', $validator->errors()->first());
            return redirect()->back();
        }

        $user = User::find($request->id);
        $user->update(['password'=> Hash::make($request->password)]);
        return redirect()->back()->with('success', 'Password updated successfully');

    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }
}
