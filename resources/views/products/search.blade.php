@extends('template.index')

@section('title')
    Les produits
@stop
@section('content')
<a
        href="{{ route('products.create') }}"
        class="btn btn-primary"
        style="display: inline-block; margin: 1em"
        >Add a resource</a
      >
<section class="work" id="product-list" >
  
@foreach ($products as $product)
<figure class="white">
    <a href="{{ route('products.show', [
      'product' => $product->id,
      'slug' => \Illuminate\Support\Str::slug($product->title),
  ]) }}">
      <img src="{{ asset('img/' . $product->image) }}" alt="" />
      <dl>
        <dt>{{$product->title}}  </dt>
        <dd>
            {{Illuminate\Support\Str::limit($product->text, 100)}}
        </dd>
      </dl>
    </a>
    <div id="wrapper-part-info">
      <div class="part-info-image">
        <img src="{{asset('img/icon-'.$product->categories->img)}}" alt="" width="28" height="28" />
      </div>
      <div id="part-info">{{$product->categories->name}} </div>
    </div>
  </figure>
  @endforeach

</section>


@stop