<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class ManageUserController extends Controller
{
    //Call users Data
    public function index()
    {
        $users = User::all()->where('is_admin', NULL);
        // dd($users);
        return view('admin.user.index', compact('users'));
    }

    public function indexUser()
    {
        $indexUser = User::where('id', \Auth::user()->id)->get();
        $welcomeUser = User::where('id', \Auth::user()->id)->get();
        return view('landing.profile', compact('indexUser', 'welcomeUser'));
    }

    // public function welcomeUser()
    // {
    //     $welcomeUser = User::where('id', \Auth::user()->id)->get();
    //     return view('welcome', compact('welcomeUser'));
    // }

    public function editProfile($id)
    {
        $user_edit = User::findorfail($id);
        $welcomeUser = User::where('id', \Auth::user()->id)->get();

        return view('landing.editProfile', compact('user_edit', 'welcomeUser'));
    }

    public function updateProfile(Request $request, User $user)
    {
        // dd($request->all());
        $user->update($request->all());
        return redirect()->back()->with('success', 'Data Berhasil Di Update');
    }
}
