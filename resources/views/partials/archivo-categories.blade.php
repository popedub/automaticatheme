@if (is_page(207) || 'actividad' == get_post_type())
@query([
'numberposts' => -1,
'post_type' => 'actividad',
'meta_key' => 'activa',
'meta_value' => 'archivo',
])

@posts
<article class="row f-small d-none d-lg-flex">
  <header class="col-12 col-lg-6 px-0 px-lg-1">
    <span class="entry-title f-small"><a href="@permalink" class="link-linea">@title @field('subtitulo')</a></span>
  </header>
  @php
  $tags = get_the_tags()
  @endphp
  @if ($tags)
  <div class="col-12 col-lg-2 offset-lg-2">
    @foreach ($tags as $tag)
    <a href="{{ get_tag_link($tag->term_id) }}" class="link-linea">{{ $tag->name }}</a>
    @endforeach
  </div>
  @endif
  <div class="col-12 col-lg-2 text-right">
    @field('fecha')
  </div>
</article>


@endposts
<div class="row f-small d-flex d-lg-none">
  @posts
  <article class="col-12 px-0 pt-3 pb-3 border-phone">
    <header>
      <a href="@permalink">@title @field('subtitulo')</a>
    </header>
  </article>
  @endposts
</div>

@endif

@if (is_page(141) || 'talleres' == get_post_type())
@query([
'numberposts' => -1,
'post_type' => 'talleres',
'meta_key' => 'estado',
'meta_value' => 'archivo',
])

@posts
<article class="row f-small d-none d-lg-flex">
  <header class="col-12 col-lg-8">
    <span class="entry-title f-small"><a href="@permalink" class="link-linea">@title @field('subtitulo')</a></span>

  </header>
  @php
  $tags = get_the_tags()
  @endphp
  @if ($tags)
  <div class="col-12 col-lg-2">
    @foreach ($tags as $tag)
    <a href="{{ get_tag_link($tag->term_id) }}" class="link-linea">{{ $tag->name }}</a>
    @endforeach
  </div>
  @endif
  <div class="col-12 col-lg-2 text-right">
    @field('fecha')
  </div>
</article>

@endposts
<div class="row f-small d-flex d-lg-none">
  @posts
  <article class="col-12 px-0 pt-3 pb-3 border-phone">
    <header>
      <a href="@permalink">@title</a>
    </header>
  </article>
  @endposts
</div>
@endif
