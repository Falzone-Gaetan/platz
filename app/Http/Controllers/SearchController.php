<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = \App\Models\Product::where('title', 'like', "%{$query}%")->get();
        return view('products.search',compact('products'));
    }


}
