@extends('layouts.app')

@section('content')


<div class="row pb-5">
  <div class="col-12">
    <h2 class="t-bigger text-uppercase mb-1">{!! App::title() !!}</h2>
  </div>

  @query([
  'post_type' => 'impreso',
  ])
  @posts

  <div class="col-12 col-lg-4 mb-3 mb-lg-4">
    <a href="@permalink">
      <img class="img-fluid" src="@thumbnail('media', false)" alt="">
      @hasfield('en_venta')
      <div class="label text-uppercase f-28">{{ __('En Venta','automaticatheme') }}</div>
      @endfield
      <h3 class="f-28 mt-2 mt-lg-3">@title @field('subtitulo')<br>
        @field('resumen')</h3>
    </a>
  </div>

  @endposts

</div>

@endsection
