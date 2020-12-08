<article @php post_class('row') @endphp>
  <header class="col-12">
    <h1 class="entry-title text-uppercase">{!! get_the_title() !!}</h1>
  </header>
  <div class="col-12 col-lg-4  f-regular">
    <div class="mb-5">@field('subtitulo')<br>
      @hasfield('en_venta')
      {{ __('En venta', 'automaticatheme') }} <span>&#9654;</span> @field('precio')
      @endfield
    </div>
    <div class="pt-5 f-20">
      @field('detalle_tecnico')
    </div>
  </div>
  <div class="col-12 col-lg-8">
    <img class="img-fluid" src="@thumbnail('featured', false)" alt="">
  </div>


  <div class="entry-content col-12 col-lg-8 offset-lg-4 mt-3 mb-5 f-small">
    @field('descripcion')
  </div>
  @include('partials.galeria')
  <footer class="w-100 mt-5 f-regular">
    <div class="col-12 d-flex align-items-center justify-content-between">
      <div>{{ previous_post_link('%link', '<span>◄</span> Anterior') }}</div>
      <div>{{ next_post_link('%link', 'Siguiente <span>►</span>') }}</div>

    </div>

  </footer>

</article>
<div class="row mt-5 mb-5">
  <div class="col-12">

  </div>
</div>
