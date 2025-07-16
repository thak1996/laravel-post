<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;

class MainController extends Controller
{
    public function index(): View
    {
        $posts = Post::with('user')->get();
        return view('dashboard', ['posts' => $posts]);
    }

    public function createPost()
    {
        if (Gate::denies('post.create')) {
            abort(403, 'Unauthorized action.');
        }
        echo 'This method is not implemented yet.';
    }

    public function deletePost($id)
    {
        $post = Post::find($id);

        if (Gate::denies('post.delete', $post)) {
            abort(403, 'Unauthorized action.');
        }
        $post->delete();
        return redirect()->route('dashboard');
    }
}
