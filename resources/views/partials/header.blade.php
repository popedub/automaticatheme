<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}"><h1>{!! get_bloginfo('name', 'display') !!}</h1></a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
