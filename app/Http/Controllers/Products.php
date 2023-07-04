<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Products extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('products.index', [
            'products' => Product::orderBy('created_at', 'desc')->paginate(20)        
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // Validation
        $validated = $request->validate([
            'title' => 'required|max:255',
            'text' => 'alpha_num',
            'image' => 'required|image|mimes:jpg,gif,png',
            'filesize' => 'alpha_num',
            'authors_id' => 'integer' ,
            'categories_id' => 'integer'
        ]);

        // Upload de l'image 
        $path = explode('img/',$request->file('image')->store('img'));
        $validated['image'] = $path[1];
        Product::create($validated);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
      
        return view('products.show',compact('product'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'text' => 'required',
            'image' => 'required|image|mimes:jpg,gif,png',
            'filesize' => 'alpha_num',
            'authors_id' => 'integer' ,
            'categories_id' => 'integer'
        ]); 
        $product = Product::find($id);
        
        $product->title =  $request->get('title');
        $product->text = $request->get('text');
        $product->image = $request->get('image');
        $product->filesize = $request->get('filesize');
        $product->authors_id = $request->get('authors_id');
        $product->categories_id = $request->get('categories_id');
        $path = explode('img/',$request->file('image')->store('img'));
        $product->image = $path[1];
        $product->save();
 
        return  redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        \App\Models\Comment::where('products_id', $product->id)->delete();
        $product->delete(); 
 
        return redirect()->route('products.index'); 
    }


    public function loadMore(Request $request)
{
    $skip = $request->input('skip');
    $products = Product::offset($skip)->limit(8)->get();

    return view('products.load-more', compact('products'));
}




public function filter($id)
{
    $products = Product::where('categories_id', $id)->get();
    return view('products.filter', compact('products'));
}
}
