<article @php post_class('row') @endphp>
  <header class="col-12 order-2 order-lg-1">
    <h1 class="entry-title text-uppercase">{!! get_the_title() !!}</h1>
  </header>
  <div class="col-12 col-lg-4 d-flex flex-column justify-content-between f-regular order-3 order-lg-2">
    <div>@field('subtitulo')</div>
    <div>
      <span>&#9654;</span> @include('partials.tags')<br>
      @field('fecha')@hasfield('hora') - @field('hora')h @endfield
    </div>
  </div>
  <div class="col-12 col-lg-8 order-1 order-lg-3">
    <img class="img-fluid mb-3 mb-lg-0" src="@thumbnail('featured', false)" alt="">
  </div>


  <div class="entry-content col-12 col-lg-8 offset-lg-4 mt-3 mb-5 f-small order-3 order-lg-3">
    @field('descripcion')
  </div>
  <div class="order-4 order-lg-4">
    @include('partials.galeria')
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
      <p>' . __('Pages:', 'sage'), 'after' => '</p>
    </nav>']) !!}
  </footer>

</article>
<div class="row mt-5">
  <div class="col-12 f-big mb-4">
    @category <span class="f-regular">&#9654;</span> {{ 'Archivo', 'automaticatheme' }}
  </div>
</div>
@include('partials.archivo-categories')
