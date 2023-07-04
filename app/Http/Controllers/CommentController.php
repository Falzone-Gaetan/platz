<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'text' => 'required|string|max:255',
            'pseudo'=>'required|string|max:5',
            'products_id' => 'required|integer'
        ]);

        $comment = new \App\Models\Comment();
        $comment->text = $validatedData['text'];
        $comment->pseudo=$validatedData['pseudo'];
        $comment->products_id = $validatedData['products_id'];
        $comment->save();

        return response()->json($comment);
    }
}
