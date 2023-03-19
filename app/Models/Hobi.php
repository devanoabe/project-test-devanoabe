<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    use HasFactory;
    public static function index()
    {
        return Hobi::where('draft', false)
            ->orderBy('id', 'desc')
            ->paginate(5);
    }

    public static function getBySlug($slug)
    {
        return Hobi::where([
            'slug' => $slug,
            'draft' => false,
        ])->first();
    }
}
