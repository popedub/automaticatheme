@php
$activa = get_field('activa')

@endphp

@if (get_field('featured'))
@include('partials.featured')
@elseif($activa == 'activa')

<article @php post_class('col-12 col-lg-6 order-2') @endphp>
  <a href="{{ get_permalink() }}">
  <header>
    <img class="img-fluid" src="@thumbnail('grande', false)" alt="">
    <div class="d-flex justify-content-between f-small">
          <div>
            <h2 class="entry-title f-small mb-0">@title</h2>
            @field('subtitulo')
          </div>
          <div>@field('fecha')<br>@hasfield('hora')@field('hora')h @endfield</div>
        </div>

  </header>
  </a>
</article>

@endif
