<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $number_posts = Post::where('visible', true)->count();
        return view('home', ['posts' => Post::where('visible', true)->orderBy('updated_at', 'DESC')->take(3)->get(), 'number_posts' => $number_posts]);
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
