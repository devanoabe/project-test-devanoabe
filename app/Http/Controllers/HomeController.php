<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dummy;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Apply pagination and sorting based on query parameters
        $perPage = $request->get('perPage', 10);
        $sortBy = $request->get('sortBy', 'quantityInStock');
        $sortOrder = $request->get('sortOrder', 'asc');

        $products = Dummy::orderBy($sortBy, $sortOrder)->paginate($perPage);

        return view('banner', [
            'products' => $products,
            'selectedPerPage' => $perPage,
            'sortBy' => $sortBy,
            'sortOrder' => $sortOrder
        ]);
    }
}


