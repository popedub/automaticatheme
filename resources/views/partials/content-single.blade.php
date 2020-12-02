<article @php post_class('row') @endphp>
  <header class="col-12">
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
  </header>
  <div class="col-12 col-lg-4 d-flex flex-column justify-content-between f-regular">
    <div>@field('subtitulo')</div>
    <div>
      <span>&#9654;</span> @category<br>
      @field('fecha')@hasfield('hora') - @field('hora')h @endfield
    </div>
  </div>
  <div class="col-12 col-lg-8">
    <img class="img-fluid" src="@thumbnail('featured', false)" alt="">
  </div>


  <div class="entry-content col-12 col-lg-8 offset-lg-4 mt-3 mb-5 f-small">
    @field('descripcion')
  </div>
  @hasfield('galeria')
  <div class="col-12">
    <div class="f-big mb-4">{{ __('Imágenes','automaticatheme') }}</div>
    <div id="galeria" class="row">
      @php $g = get_field('galeria')@endphp

        @foreach ($g as $foto)
        <a href="@php echo $foto['sizes']['featured']@endphp" class="col-12 col-lg-4 mb-2">
          <img class="img-fluid" src="@php echo $foto['sizes']['media']@endphp" alt="">
        </a>
        @endforeach



    </div>
  </div>
  @endfield
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
      <p>' . __('Pages:', 'sage'), 'after' => '</p>
    </nav>']) !!}
  </footer>

</article>
<div class="row mt-5">
  <div class="col-12 f-big">
    @category <span class="f-regular">&#9654;</span> {{ 'Archivo', 'automaticatheme' }}
  </div>
</div>
@include('partials.archivo-categories')
