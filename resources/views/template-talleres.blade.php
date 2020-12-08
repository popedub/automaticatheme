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
  <h2 class="t-bigger text-uppercase">{{ __('Próximo taller','automaticatheme') }}</h2>
  <div class="col-12 col-lg-4 d-flex flex-column justify-content-between">
    <div>
      <h3 class="f-regular mb-5">@title</h3>
      <span class="f-regular">@field('fecha')</span>

    </div>
    <div>
      <span class="f-small">&#9654;</span> <a href="#" class="f-regular"> {{ __('Inscríbete', 'automaticatheme') }} </a>
    </div>
  </div>
  <div class="col-12 col-lg-8">
    <img class="img-fluid" src="@thumbnail('featured', false)" alt="">
  </div>
  @endfield
  @endposts
  <h3 class="t-bigger text-uppercase mt-5 mb-5">{{ __('Talleres', 'automaticatheme') }}</h3>
  <div class="col-12 f-regular mb-5">
    @field('intro')
  </div>
  @php
  $i = 0;
  @endphp
  <div class="desplegables w-100">
    @fields('tipos_de_talleres')
    <div class="desplegable col-12 border-top border-primary">
      <a class="d-flex align-items-center justify-content-between f-big" data-toggle="collapse" href="#taller{{ $i }}"
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
<div class="row mt-5">
  <h3 class="f-big mb-5">
    {!! App::title() !!} <span class="f-regular">&#9654;</span> {{ __('Archivo', 'automaticatheme') }}
  </h3>
</div>
@include('partials.archivo-categories')
@endsection
