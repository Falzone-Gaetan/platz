<div id="wrapper-navbar">
    <div class="navbar object">
      <div id="wrapper-bouton-icon">
        @foreach(\App\Models\Category::all() as $category )
            
       
        <div id="bouton-ai">
          <a href="{{route('products.filter', $category->id)}}">
          <img
            src="{{asset('img/icon-' .$category->img)}}"
            alt="illustrator"
            title="Illustrator"
            height="28"
            width="28"
          />
          </a>
        </div>
        @endforeach
        {{-- <div id="bouton-psd">
          <img
            src="{{asset('img/icon-5.svg')}}"
            alt="photoshop"
            title="Photoshop"
            height="28"
            width="28"
          />
        </div>
        <div id="bouton-theme">
          <img
            src="{{asset('img/icon-4.svg')}}"
            alt="theme"
            title="Theme"
            height="28"
            width="28"
          />
        </div>
        <div id="bouton-font">
          <img
            src="{{asset('img/icon-3.svg')}}"
            alt="font"
            title="Font"
            height="28"
            width="28"
          />
        </div>
        <div id="bouton-photo">
          <img
            src="{{asset('img/icon-2.svg')}}"
            alt="photo"
            title="Photo"
            height="28"
            width="28"
          />
        </div>
        <div id="bouton-premium">
          <img
            src="{{asset('img/icon-1.svg')}}"
            alt="premium"
            title="Premium"
            height="28"
            width="28"
          />
        </div> --}}
      </div>
    </div>
  </div>