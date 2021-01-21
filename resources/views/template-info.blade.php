{{--
  Template Name: Info Template
--}}

@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-12 t-bigger text-uppercase">
    {!! __('L&#39;Automatica','automaticatheme') !!}
  </div>
</div>
<div class="row">
  @while(have_posts()) @php the_post() @endphp
  <div class="col-12 f-small">
    @field('intro')
  </div>
  <div class="col-12 mt-1">
    <img class="img-fluid mx-auto d-block" src="@thumbnail('full', false)" alt="L'automatica imprenta">
  </div>
  <div class="col-12 f-small mt-3 pb-5">
    @field('pie')
  </div>
  <div class="col-12 mt-5 f-big mb-4">
    {{ __('Miembros','automaticatheme') }}
  </div>
  @layouts('miembros')
    @layout('nombre')
      @hassub('nombre')
        <div class="col-8 f-regular">@sub('nombre')</div>
      @endsub
      @hassub('colectivos')
        <div class="col-4 f-regular">
          @fields('colectivos')
          <a href="@sub('enlace_del_colectivo')" target="_blank" class="link-linea">
            @sub('nombre_del_colectivo')
          </a>
          @endfields
        </div>
      @endsub
    @endlayout
  @endlayouts
  <div class="col-12 mt-5">
    @include('partials.galeria')
  </div>
  @endwhile
</div>
@endsection
