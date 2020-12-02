<article @php post_class('col-12 order-1') @endphp>
<header>
  <h2 class="text-uppercase t-bigger">@title</h2>
</header>
<div class="row mt-5 mb-5">
  <div class="col-12 col-lg-4 d-flex flex-column justify-content-between align-items-start">
    <div class="f-regular">
      @field('subtitulo')
      @field('fecha')<br>
      @field('hora')
    </div>
    <a href="@permalink" class="f-small"><span>&#9654;</span> {{ __('Más info') }}</a>
  </div>

  <div class="col-12 col-lg-8 text-right">
    <img class="img-fluid" src="@thumbnail('featured', false)" alt="">

  </div>
</div>
</article>
<div class="t-bigger order-3">
  @include('partials.page-header')
</div>

