<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DisplayProductController extends Controller
{
    public function index()
    {
        $users = Product::all();

        // return $users;
        return response()->json($users);
    }
}
