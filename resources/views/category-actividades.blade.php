@extends('layouts.app')

@section('content')


<div class="row pb-5">
@query([
  'post_type' => 'actividad',
])
@posts
@include('partials.content-'.get_post_type())
@endposts

</div>
<div class="row mt-5">
  <h3 class="f-big mb-5">
    {!! App::title() !!} <span class="f-regular">&#9654;</span> {{ __('Archivo', 'automaticatheme') }}
  </h3>

</div>

@include('partials.archivo-categories')

{!! get_the_posts_navigation() !!}
@endsection
