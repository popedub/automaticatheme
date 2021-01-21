<article @php post_class('col-12 col-lg-6 order-2') @endphp>
  <a href="{{ get_permalink() }}">

    <header>
      <img class="img-fluid" src="@thumbnail('grande', false)" alt="">
      <div class="d-flex justify-content-between f-small mt-3">
        <div>
          <h2 class="entry-title f-small mb-0 link-linea d-inline-block">@title @field('subtitulo')</h2>
          <span class="d-block">@field('tipo_de_actividad')</span>
        </div>
        <div>@field('fecha')<br>@hasfield('hora')@field('hora')h @endfield</div>
      </div>

    </header>
  </a>
</article>
