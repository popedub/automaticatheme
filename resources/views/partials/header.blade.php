<header class="banner fixed-top">
  <div class="container-fluid pt-4 padd-head">
    <a class="brand" href="{{ home_url('/') }}"><h1>{!! get_bloginfo('name', 'display') !!}</h1></a>
    <a id="menu" class="btn-menu">@svg('ico-menu', 'ico-menu')</a>
  </div>
</header>
<div class="overlay overlay-slidedown">
<div class="container-fluid padd-head">
<button type="button" id="closeMenu" class="overlay-close font-3">@svg('close-menu','ico-close')</button>
<nav class="nav-primary">
  @if (has_nav_menu('primary_navigation'))
  {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
  @endif
</nav>
</div>

</div>
