<div id="main-container-menu" class="object">
    <div class="container-menu">
      <div id="main-cross">
        <div id="cross-menu"></div>
      </div>

      <div id="main-small-logo">
        <div class="small-logo"></div>
      </div>
   
    
      @foreach(\App\Models\Category::all() as $categories )
    

      <div id="main-premium-ressource">
        <div class="premium-ressource"><a href="{{route('products.filter', $categories->id)}}">{{$categories->name}}</a></div>
      </div>
      @endforeach

      {{-- <div id="main-themes">
        <div class="themes"><a href="">Latest themes</a></div>
      </div>

      <div id="main-psd">
        <div class="psd"><a href="">PSD goodies</a></div>
      </div>

      <div id="main-ai">
        <div class="ai"><a href="">Illustrator freebies</a></div>
      </div>

      <div id="main-font">
        <div class="font"><a href="">Free fonts</a></div>
      </div>

      <div id="main-photo">
        <div class="photo"><a href="">Free stock photos</a></div>
      </div> --}}
   
    </div>
  </div>