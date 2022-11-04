<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('auth.update-password');
    }

    public function update(UpdatePasswordRequest $request)
    {
        $user = User::where('id', auth()->user()->id)->first();
        $user->update(['password' => Hash::make($request->password)]);
        return redirect('dashboard');
    }
}
