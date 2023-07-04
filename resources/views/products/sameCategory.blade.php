<div class="wrapper-morefrom">
    <div class="text-morefrom">More from {{$product->categories->name}}</div>
    <div class="image-morefrom">
      @foreach ( \App\Models\Category::with(['products' => function($query) {
        $query->paginate(4);}])->get() as $category)
      @foreach($category->products as $products)
      <a href="{{ route('products.show', [
        'product' => $products->id,
        'slug' => \Illuminate\Support\Str::slug($products->title),
    ]) }}"
        ><div class="image-morefrom-1">
          <img
            src="{{asset('img/'. $products->image)}}"
            alt=""
            width="430"
            height="330"
          /></div
      ></a>  
     
     @endforeach
       @endforeach
    </div>
  </div>
</div>
