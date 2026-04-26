<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // return homepage data (for Vue dashboard/home)
    public function index()
    {
        return response()->json([
            'message' => 'Home data fetched successfully',

            // sample structure (replace with DB later)
            'hero' => [
                'title' => 'Share More, Help More.',
                'description' => 'Donate, lend, or borrow items and help build a stronger community.'
            ],

            'categories' => [
                'All', 'Furniture', 'Appliances', 'Books', 'Clothing', 'Tools', 'Toys', 'Others'
            ]
        ]);
    }
}