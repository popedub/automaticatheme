{{--
  Template Name: Actividades
--}}
@extends('layouts.app')

@section('content')


<div class="row pb-5">
@query([
  'post_type' => 'actividad',
  'meta_key' => 'featured',
  'meta_value' => 1,
])
@posts
@include('partials.featured')
@endposts

<div class="col-12 mb-1">
  <div class="t-bigger mb-2">
    @include('partials.page-header')
  </div>
</div>
@query([
'post_type' => 'actividad',
'meta_query' => array(
  'relation' => 'AND',
  array(
  'key' => 'activa',
  'value' => 'activa',
  'compare' => '=',
  ),
  array(
  'key' => 'featured',
  'value' => 0,
  'compare' => '=',
  ),
  ),
])
@posts
@include('partials.content-'.get_post_type())
@endposts

</div>
<div class="row mt-5">
  <h3 class="f-big mb-5">
    {!! App::title() !!} <span class="f-regular acordeon">&#9654;</span> {{ __('Archivo', 'automaticatheme') }}
  </h3>

</div>

@include('partials.archivo-categories')


@endsection
