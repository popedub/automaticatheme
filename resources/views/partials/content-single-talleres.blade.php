<article @php post_class('row') @endphp>
  <header class="col-12">
    <h1 class="entry-title text-uppercase">{!! get_the_title() !!}</h1>
  </header>
  <div class="col-12 col-lg-4  f-regular">
    <div>{{ __('Taller','automaticatheme') }}<br>
      @field('fecha')
    </div>
  </div>
  <div class="col-12 col-lg-8">
    <img class="img-fluid" src="@thumbnail('featured', false)" alt="">
  </div>


  <div class="entry-content col-12 col-lg-8 offset-lg-4 mt-3 mb-5 f-small">
    @field('descripcion')
  </div>
  @include('partials.galeria')
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
