@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.content-page')
@endwhile
{{-- intro --}}
<div class="row">
  <div class="col-12 f-small">
    @field('introduccion')
  </div>
</div>
{{-- end intro --}}
{{-- featured --}}
<div class="row mb-2">
  <div class="col-12 d-flex justify-content-between align-items-end">
    <h2 class="text-uppercase">@field('titulo_destacado')</h2>
    <a href="@field('enlace_top', 'url')" class="f-small"><span>&#9654;</span> @field('enlace_top','title')</a>
  </div>

  <div class="col-12 col-lg-4 text-lowercase d-lg-flex flex-lg-column justify-content-lg-between f-medium">
    <div>
      @field('texto_destacado')
    </div>
    <a href="@field('enlace_bottom', 'url')"><span>&#9654;</span> @field('enlace_bottom','title')</a>
  </div>

  <div class="col-12 col-lg-8">
    <img class="img-fluid" src="@field('foto_destacada', 'url')" alt="@field('foto_destacada', 'alt')">
  </div>
</div>
{{-- end featured --}}
{{-- actividades --}}
<div class="row mt-5 mb-2">
  <div class="col-12 d-flex justify-content-between align-items-end">
    <h2 class="text-uppercase">
      {{ __('ACTIVIDADES', 'lautomaticatheme') }}
    </h2>
    <a href="#" class="f-small"><span>&#9654;</span> {{ __('Ver todas', 'lautomaticatheme') }}</a>
  </div>

  @query([
  'cat' => 17,
  'posts_per_page' => 2,
  ])

  @posts
  <div class="col-12 col-lg-6">
    <img class="img-fluid" src="@thumbnail('full', false)" alt="">
    <h3 class="entry-title">@title</h3>
  </div>
  @endposts
</div>
{{-- end actividades --}}
{{-- talleres --}}
<div class="row mt-5 mb-2">
  <div class="col-12 d-flex justify-content-between align-items-end">
    <h2 class="text-uppercase">
      {{ __('TALLERES', 'lautomaticatheme') }}
    </h2>
    <a href="#" class="f-small"><span>&#9654;</span> {{ __('Ver talleres', 'lautomaticatheme') }}</a>
  </div>
  <div class="col-12 col-lg-6">
    <img class="img-fluid" src="@field('foto_talleres', 'url')" alt="@field('foto_talleres', 'alt')">
  </div>
  <div class="col-12 col-lg-6 f-small pl-2 d-lg-flex flex-lg-column justify-content-lg-between">
    @field('texto_talleres')
    <a href="#" class="f-small"><span>&#9654;</span> {{ __('Ver Talleres', 'lautomaticatheme') }}</a>
  </div>
</div>
{{-- end talleres --}}
{{-- newslater --}}
<div class="row mt-5">
  <div class="col-12 col-lg-6">
    <h3 class="f-big">{!! __('Amigos de L&#39;Automatica', 'lautomaticatheme') !!}</h3>
    <div class="f-small">@field('texto_amigos')</div>
    <a href="#" class="f-small"><span>&#9654;</span> {{ __('¡Hazte Amigo!', 'lautomaticatheme') }}</a>
  </div>
  <div class="col-12 col-lg-6">
    <h3 class="f-big">{!! __('Newslater', 'lautomaticatheme') !!}</h3>
    <div class="f-small mb-4">
      @field('texto_newslater')
    </div>
    <div>
      @field('mailchimp')
    </div>
  </div>
</div>
{{-- end newslater --}}
{{-- instagram --}}
<div class="row">
  <div class="col-12">
    @field('instagram')
  </div>
</div>
{{-- end instagram --}}
@endsection
