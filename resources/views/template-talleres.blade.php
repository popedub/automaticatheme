{{--
  Template Name: Talleres Template
--}}

@extends('layouts.app')

@section('content')
@query([
'post_type' => 'talleres',
'posts_per_page' => -1,
])
<div class="row">
  @posts
  @isfield('estado', 'proximo')
  <h2 class="t-bigger text-uppercase d-none d-lg-block">{{ __('Próximo taller','automaticatheme') }}</h2>
  <div class="col-12 col-lg-4 d-flex flex-column justify-content-between order-2 order-lg-1">
    <div>
      <h3 class="f-regular mb-0 mb-lg-2">@title</h3>
      <span class="f-regular">@field('fecha')</span>

    </div>
    <div>
      <span class="f-small">&#9654;</span> <a href="mailto:@field('mail')" class="f-regular" target="_blank"> {{ __('Inscríbete', 'automaticatheme') }} </a>
    </div>
  </div>
  <div class="col-12 col-lg-8 order-1 order-lg-2">
    <img class="img-fluid mb-2" src="@thumbnail('featured', false)" alt="">
    <h2 class="t-bigger text-uppercase d-block d-lg-none">{{ __('Próximo taller','automaticatheme') }}</h2>
  </div>
  @endfield
  @endposts

  <div class="col-12 f-regular order-3 order-lg-3 mt-3 mt-lg-0">
    <h3 class="t-bigger text-uppercase pt-3 mb-2">{{ __('Talleres', 'automaticatheme') }}</h3>
    @field('intro')
  </div>
  @php
  $i = 0;
  @endphp
  <div class="desplegables w-100 mt-3 order-4 order-lg-4">
    @fields('tipos_de_talleres')
    <div class="desplegable col-12 border-top border-primary">
      <a class="d-flex align-items-center justify-content-between f-big acordeon" data-toggle="collapse" href="#taller{{ $i }}"
        role="button" aria-expanded="false" aria-controls="introduccion"><span>@sub('titulo')</span> <span
          class="f-small">&#9654;</span> </a>
          <div class="collapse" id="taller{{ $i }}">
                  <div class="padd f-regular">@sub('explicacion_del_tipo_de_taller')</div>

                </div>
    </div>
    @php
    $i++;
    @endphp
    @endfields
  </div>
</div>
<div class="row mt-2 pt-4">
  <h3 class="f-big mb-5 mt-5">
    {!! App::title() !!} <span class="f-regular">&#9654;</span> {{ __('Archivo', 'automaticatheme') }}
  </h3>
</div>
@include('partials.archivo-categories')
@endsection
