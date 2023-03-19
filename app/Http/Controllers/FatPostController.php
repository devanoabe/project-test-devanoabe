<?php

namespace App\Http\Controllers;

use App\Models\Hobi;
use Illuminate\Http\Request;

class FatPostController extends Controller
{
    public function index()
    {
        $posts = Hobi::where('draft', false)
            ->orderBy('id', 'desc')
            ->paginate(5);
        return view('hobi', ['posts' => $posts]);
    }

    public function show($slug)
    {
        $post = Hobi::where([
            'slug' => $slug,
            'draft' => false,
        ])->first();
        return view('detail', ['post' => $post]);
    }
}

