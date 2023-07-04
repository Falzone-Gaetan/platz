<div id="wrapper-header">
    <div id="main-header" class="object">
      <div class="logo">
        <img
          src="{{asset('img/logo-burst.png')}}"
          alt="logo platz"
          height="38"
          width="90"
        />
      </div>
      <div id="main_tip_search">
        <form action="{{route('products.search')}}" method="GET">
          <input
            type="text"
            name="query"
            id="tip_search_input"
            list="search"
            autocomplete="off"
            required
          />
        </form>
      </div>
      <div id="stripes"></div>
    </div>
  </div>