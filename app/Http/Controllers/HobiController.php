<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hobi;

class HobiController extends Controller
{
    public function index()
    {
        return view('hobi', ['posts' => Hobi::index()]);
    }

    public function show($slug)
    {
        return view('detail', ['post' => Hobi::getBySlug($slug)]);
    }
}

