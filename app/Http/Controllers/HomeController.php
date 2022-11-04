<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', ['posts' => Post::where('visible', true)->orderBy('updated_at', 'DESC')->take(3)->get()]);
    }

    public function dashboard()
    {
        return view('dashboard', ['posts' => Post::orderBy('updated_at', 'DESC')->get()]);
    }

    public function upload(Request $request)
    {
        $fileName = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->storeAs('uploads', $fileName, 'public');
        return response()->json(['location' => "/storage/$path"]);
    }
}
