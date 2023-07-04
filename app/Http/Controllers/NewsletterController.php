<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $validated = $request->validate([
            'mail' => 'required',
        ]);

        \App\Models\Newsletter::create($validated);

        return redirect()->route('products.index');
    }
}
