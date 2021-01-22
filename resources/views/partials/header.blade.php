<header class="banner fixed-top">
  <div class="container-fluid pt-3 padd-head d-flex align-items-end">
    <a class="brand" href="{{ home_url('/') }}">
      @if (!is_single())
      <h1>{!! get_bloginfo('name', 'display') !!}</h1>
      @else
      <div class="ml-auto">{!! get_bloginfo('name', 'display') !!}</div>

      @endif
    </a>
    <div class="d-none d-lg-block wpml-lg">
      @php
      do_action('wpml_add_language_selector');
      @endphp
    </div>


    <a id="menu" class="btn-menu">@svg('ico-menu', 'ico-menu')</a>
  </div>
</header>
<div class="overlay overlay-slidedown">
  <div class="container-fluid padd-head">
    <button type="button" id="closeMenu" class="overlay-close font-3">@svg('close-menu','ico-close')</button>
    <nav class="nav-primary">
      <div class="d-block d-lg-none">{!! get_bloginfo('name', 'display') !!}</div>
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <div class="d-block d-lg-none wpml-phone">
      @php
      do_action('wpml_add_language_selector');
      @endphp
    </div>
  </div>

</div>
