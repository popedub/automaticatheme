<article @php post_class('col-12') @endphp>
<header class="mb-1 d-none d-lg-block">
  <h2 class="text-uppercase t-bigger">@title</h2>
</header>
<div class="row mt-1 mb-5">
  <div class="col-12 col-lg-4 d-flex flex-column justify-content-between align-items-start order-2 order-lg-1">
    <div class="f-regular">
      @field('subtitulo')
      <div class="mt-0">
        @field('fecha')<br>
        @hasfield('hora')
        @field('hora')h
        @endfield
      </div>

    </div>
    <div class="f-small"><span>&#9654;</span><a href="@permalink" class="link-linea"> {{ __('Más info') }}</a></div>

  </div>

  <div class="col-12 col-lg-8 text-right order-1 order-lg-2">
    <img class="img-fluid" src="@thumbnail('featured', false)" alt="">
    <h2 class="text-uppercase t-bigger d-block d-lg-none mt-1 text-left">@title</h2>
  </div>
</div>
</article>

