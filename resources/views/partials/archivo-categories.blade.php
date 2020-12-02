@query([
  'numberposts' => -1,
  'post_type' => 'actividad',
  'meta_key' => 'activa',
  'meta_value' => 'archivo',
])

@posts
<article class="row f-small">
  <header class="col-12 col-lg-6">
    <h4 class="entry-title f-small"><a href="@permalink">@title</a></h4>
  </header>
  <div class="col-12 col-lg-2 offset-lg-2">
    @field('tipo_de_actividad')
  </div>
  <div class="col-12 col-lg-2 text-right">
    @field('fecha')
  </div>
</article>

@endposts
