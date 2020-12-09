@if (is_page(207) || 'actividad' == get_post_type())
@query([
'numberposts' => -1,
'post_type' => 'actividad',
'meta_key' => 'activa',
'meta_value' => 'archivo',
])

@posts
<article class="row f-small">
  <header class="col-12 col-lg-6">
    <h4 class="entry-title f-small"><a href="@permalink">@title @field('subtitulo')</a></h4>
  </header>
  @php
  $tags = get_the_tags()
  @endphp
  @if ($tags)
  <div class="col-12 col-lg-2 offset-lg-2">
    @foreach ($tags as $tag)
    <a href="{{ get_tag_link($tag->term_id) }}">{{ $tag->name }}</a>
    @endforeach
  </div>
  @endif
  <div class="col-12 col-lg-2 text-right">
    @field('fecha')
  </div>
</article>

@endposts
@endif

@if (is_page(141) || 'talleres' == get_post_type())
@query([
'numberposts' => -1,
'post_type' => 'talleres',
'meta_key' => 'estado',
'meta_value' => 'archivo',
])

@posts
<article class="row f-small">
  <header class="col-12 col-lg-8">
    <h4 class="entry-title f-small"><a href="@permalink">@title @field('subtitulo')</a></h4>
  </header>
  @php
  $tags = get_the_tags()
  @endphp
  @if ($tags)
  <div class="col-12 col-lg-2">
    @foreach ($tags as $tag)
    <a href="{{ get_tag_link($tag->term_id) }}">{{ $tag->name }}</a>
    @endforeach
  </div>
  @endif
  <div class="col-12 col-lg-2 text-right">
    @field('fecha')
  </div>
</article>

@endposts
@endif
