<!DOCTYPE html>
<html>
  <head>
    @include('template.partials._head')
  </head>

  <body>
    <a name="ancre"></a>

    <!-- CACHE -->
    <div class="cache"></div>

    <!-- HEADER -->

    @include('template.partials._header')

    <!-- NAVBAR -->

    @include('template.partials._nav')

    <!-- FILTER -->

    @include('template.partials._filter')

    <!-- PORTFOLIO -->

    <div id="wrapper-container">
      @include('template.partials._main')
      </div>

     
      @include('template.partials._more')
      

      @include('template.partials._footer')

      @include('template.partials._copyright')
    </div>

    <!-- SCRIPT -->

  @include('template.partials._script')
  </body>
</html>
