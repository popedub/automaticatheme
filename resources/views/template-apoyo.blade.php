{{--
  Template Name: Apoyo Template
--}}

@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-12">
      <h2 class="t-bigger text-uppercase mb-1">@title</h2>
      <div class="intro f-regular">@field('intro')</div>
    </div>
    <div class="col-12 mt-1">
      <img class="img-fluid" src="@thumbnail('full', false)" alt="">
    </div>
    <div class="col-12 mt-3 mb-5">
      <h3 class="t-bigger text-uppercase mb-1">{{ __('Amigues', 'automaticatheme') }}</h3>
      <div class="f-regular">@field('amigues')</div>
    </div>
    @php
      $i = 0;
      @endphp
      <div class="desplegables w-100 mb-5">
        @fields('tipos')
        <div class="desplegable col-12 border-top border-primary">
          <a class="d-flex align-items-center justify-content-between f-big acordeon" data-toggle="collapse" href="#apoyo{{ $i }}"
            role="button" aria-expanded="false" aria-controls="introduccion"><span>@sub('tipo')</span> <span
              class="f-small">&#9654;</span> </a>
          <div class="collapse" id="apoyo{{ $i }}">
            <div class="row padd f-regular">
              <div class="col-12 col-lg-8 pr-lg-4">@sub('descripcion')</div>
              <div class="col-12 col-lg-4 pl-lg-4">@sub('caracteristicas')</div>
            </div>


          </div>
        </div>
        @php
        $i++;
        @endphp
        @endfields
      </div>
      <div class="col-12 pt-5 agradecimientos f-regular">
        @field('agradecimientos')
      </div>
      <div class="col-12">
        <div class="mb-5" style="font-size: 20px">
          @field('texto_apoyos')
        </div>
        <div class="row pt-5">
          @fields('logos')
          <div class="col-4 col-lg-1 d-flex algin-items-center">
            <img class="img-fluid" src="@sub('logo','url')" alt="">
          </div>
          <div class="col-lg-1"></div>
          @endfields
        </div>
      </div>
  </div>
@endsection
