<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Post;

class MainController extends Controller
{
    public function index(): View
    {
        $posts = Post::with('user')->get();
        return view('dashboard', ['posts' => $posts]);
    }
}
