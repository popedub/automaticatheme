@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.content-page')
@endwhile
{{-- intro --}}
<div class="row mt-5">
  <div class="col-12 f-small">
    @field('introduccion')
  </div>
</div>
{{-- end intro --}}

{{-- featured --}}
<div class="row mt-5 mb-5">
  <div class="col-12 d-flex justify-content-between align-items-end mb-3">
    <h2 class="text-uppercase">@field('titulo_destacado')</h2>
    <a href="@field('enlace_top', 'url')" class="f-small"><span>&#9654;</span> @field('enlace_top','title')</a>
  </div>

  <div class="col-12 col-lg-4 text-lowercase d-lg-flex flex-lg-column justify-content-lg-between f-medium">
    <div>
      @field('texto_destacado')
    </div>
    <a href="@field('enlace_bottom', 'url')"><span>&#9654;</span> @field('enlace_bottom','title')</a>
  </div>

  <div class="col-12 col-lg-8 text-right">

    @image('foto_destacada','featured', ['class' => 'img-fluid'])

  </div>
</div>
{{-- end featured --}}

{{-- actividades --}}
<div class="row pt-5 mb-4">
  <div class="col-12 d-flex justify-content-between align-items-end mb-3">
    <h2 class="text-uppercase">
      {{ __('ACTIVIDADES', 'automaticatheme') }}
    </h2>
    <a href="#" class="f-small"><span>&#9654;</span> {{ __('Ver todas', 'automaticatheme') }}</a>
  </div>

  @query([
  'cat' => 17,
  'posts_per_page' => 2,
  ])

  @posts
  <div class="col-12 col-lg-6 f-small">
    <img class="img-fluid" src="@thumbnail('grande', false)" alt="">
    <div class="d-flex justify-content-between">
      <div>
        <h3 class="entry-title f-small mb-0">@title</h3>
        @field('subtitulo')
      </div>
      <div>@field('fecha')<br>@hasfield('hora')@field('hora')h @endfield</div>
    </div>

  </div>
  @endposts
</div>
{{-- end actividades --}}

{{-- talleres --}}
<div class="row pt-5 mb-4">
  <div class="col-12 d-flex justify-content-between align-items-end mb-3">
    <h2 class="text-uppercase">
      {{ __('TALLERES', 'automaticatheme') }}
    </h2>
    <a href="#" class="f-small"><span>&#9654;</span> {{ __('Ver talleres', 'automaticatheme') }}</a>
  </div>
  <div class="col-12 col-lg-6">
    <img class="img-fluid" src="@field('foto_talleres', 'url')" alt="@field('foto_talleres', 'alt')">
  </div>
  <div class="col-12 col-lg-6 f-small pl-2 d-lg-flex flex-lg-column justify-content-lg-between px-4">
    @field('texto_talleres')
    <a href="#" class="f-small"><span>&#9654;</span> {{ __('Ver Talleres', 'automaticatheme') }}</a>
  </div>
</div>
{{-- end talleres --}}

{{-- newslater --}}
<div class="row pt-5">
  <div class="col-12 col-lg-6">
    <h3 class="f-big mb-5">{!! __('Amigos de L&#39;Automatica', 'automaticatheme') !!}</h3>
    <div class="f-small">@field('texto_amigos')</div>
    <a href="#" class="f-small"><span>&#9654;</span> {{ __('¡Hazte Amigo!', 'automaticatheme') }}</a>
  </div>
  <div class="col-12 col-lg-6">
    <h3 class="f-big mb-5">{!! __('Newslater', 'automaticatheme') !!}</h3>
    <div class="f-small mb-5">
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
    <h3 class="f-big">{{ __('Instagram', 'automaticatheme') }}</h3>
    <?php
    $inst = get_field('instagram');
      echo do_shortcode($inst);
      ?>
    <a href="#" class="f-small float-right mt-4"><span>&#9654;</span> {{ __('Más posts', 'automaticatheme') }}</a>
  </div>

</div>
{{-- end instagram --}}
@endsection
