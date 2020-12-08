<article @php post_class('row') @endphp>
  <header class="col-12">
    <h1 class="entry-title text-uppercase">{!! get_the_title() !!}</h1>
  </header>
  <div class="col-12 col-lg-4  f-regular d-flex flex-column justify-content-between">
    <div class="mb-5">@field('subtitulo')<br>
      <div class="pt-5 f-20">
        @hasfield('fecha')
        {{ __('Fecha de producción:','automaticatheme') }} @field('fecha')<br>
        @endfield

        @hasfield('tipologia')
        {{ __('Tipología:','automaticatheme') }} <?php echo implode( ' / ', $tipologia ); ?> <br>
        @endfield


        @hasfield('tintas')
        {{ __('Tintas:','automaticatheme') }}
        @foreach ($tintas as $t)
        {{ $t->tinta }} @if ($loop->iteration && !$loop->last) / @endif
        @endforeach
        <br>
        @endfield

        @hasfield('papel')
        {{ __('Papel:','automaticatheme') }}
        @foreach ($papel as $p)
        {{ $p->papel }} @if ($loop->iteration && !$loop->last) / @endif
        @endforeach
        <br>
        @endfield

        @hasfield('tipografia')
        {{ __('Tipografía:','automaticatheme') }}
        @foreach ($tipografia as $t)
        {{ $t->tipo }}{{ $t->cuerpo }} @if ($loop->iteration && !$loop->last) / @endif
        @endforeach
        <br>
        @endfield

        @hasfield('acabados')
        {{ __('Acabados:','automaticatheme') }}
        <?php echo implode( ' / ', $acabados ); ?>
        <br>
        @endfield

        @hasfield('formato')
        {{ __('Formato:','automaticatheme') }}

        @foreach ($formato as $t => $alto)
        {{ $alto }}@if ($loop->first) x @endif
        @endforeach
        <br>
        @endfield

        @hasfield('tirada')
        {{ __('Tirada:','automaticatheme') }} @field('tirada')<br>
        @endfield

        @hasfield('colectivo_relacionado')
        {{ __('Colectivo relacionado:','automaticatheme') }} @field('colectivo_relacionado')
        @endfield

        @if (is_user_logged_in())
        <div class="mt-3">
        @hasfield('socio_a_cargo')
        {{ __('Socio a cargo:','automaticatheme') }} @field('socio_a_cargo')<br>
        @endfield

        @hasfield('cliente')
        {{ __('Socio a cargo:','automaticatheme') }} @field('cliente')<br>
        @endfield

        @hasfield('precio_final_cliente')
        {{ __('Precio final cliente:','automaticatheme') }} @field('precio_final_cliente')<br>
        @endfield

        @hasfield('distribuidor_del_papel')
        {{ __('Precio final cliente:','automaticatheme') }} @field('distribuidor_del_papel')<br>
        @endfield
        </div>
        @endif
      </div>
    </div>

    <div>
      @hasfield('en_venta')
      {{ __('En venta', 'automaticatheme') }} <span>&#9654;</span> @field('precio')<br>
      <div class="f-20 mt-3">{{ __('Pedidos: ', 'automaticatheme') }}<a href="mailto:tienda@lautomatica.org"
          target="blank">tienda@lautomatica.org</a></div>
      @endfield



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
