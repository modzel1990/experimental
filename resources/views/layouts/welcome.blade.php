<!doctype html>
<html lang="{{ app()->getLocale() }}">
  @include('partials.head')
    <body>
      @include('partials.navigation')
      @include('partials.homepageslider')
      @yield('content')
      @include('partials.footer')
      @include('partials.scripts')
      <script type="text/javascript" src="/slick/slidergallery.js"></script>
  <script type="text/javascript" src="/slick/slick.min.js"></script>
      <!-- FILTER GALLERY -->
      <script src="/js/filter.js"></script>
      <!-- CONTACT FORM MODAL GALLERY -->
      <script src="/js/contactmodal.js"></script>
      <!-- SLICK SLIDER THUMB GALLERY -->
      <script src="/js/slickinthumb.js"></script>
    </body>
</html>
