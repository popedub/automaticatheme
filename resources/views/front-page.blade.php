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
<div class="row mt-5 mb-4">
  <div class="col-12 d-flex justify-content-between align-items-end mb-1">
    <h2 class="text-uppercase">@field('titulo_destacado')</h2>
  </div>

  <div class="col-12 col-lg-4 text-lowercase d-lg-flex flex-lg-column justify-content-lg-between f-medium">
    <div>
      @field('texto_destacado')
    </div>
    <div><span class="f-small">&#9654; </span> <a href="@field('enlace_bottom', 'url')" class="d-inline-block link-linea"> @field('enlace_bottom','title')</a></div>

  </div>

  <div class="col-12 col-lg-8 text-right">

    @image('foto_destacada','featured', ['class' => 'img-fluid'])

  </div>
</div>
{{-- end featured --}}

{{-- actividades --}}
<div class="row pt-2 mb-4">
  <div class="col-12 d-flex justify-content-between align-items-baseline mb-1">
    <h2 class="text-uppercase">
      {{ __('ACTIVIDADES', 'automaticatheme') }}
    </h2>
    <div class="f-small"><span>&#9654; </span><a href="@permalink(207)">{{ __('Ver todas', 'automaticatheme') }}</a></div>

  </div>

  @query([
  'posts_per_page' => 2,
  'post_type' => 'actividad',
  'meta_key' => 'featured_home',
  'meta_value' => 1,
  ])

  @posts
  <div class="col-12 col-lg-6 f-small">
    <a href="@permalink">
      <img class="img-fluid mb-2" src="@thumbnail('grande', false)" alt="">
      <div class="d-flex justify-content-between">
        <div>
          <h3 class="entry-title f-small mb-0 link-linea d-inline-block">@title @field('subtitulo')</h3>
          <span class="d-block">@field('tipo_de_actividad')</span>
        </div>
        <div>@field('fecha')<br>@hasfield('hora')@field('hora')h @endfield</div>
      </div>
    </a>
  </div>
  @endposts
</div>
{{-- end actividades --}}

{{-- talleres --}}
<div class="row pt-2 mb-5 pb-5">
  <div class="col-12 d-flex justify-content-between align-items-end mb-1">
    <h2 class="text-uppercase">
      {{ __('TALLERES', 'automaticatheme') }}
    </h2>


  </div>
  <div class="col-12 col-lg-6">
    <img class="img-fluid" src="@field('foto_talleres', 'url')" alt="@field('foto_talleres', 'alt')">
  </div>
  <div class="col-12 col-lg-6 f-small pl-2 d-lg-flex flex-lg-column justify-content-lg-between px-4">
    @field('texto_talleres')
    <div class="f-small"><span>&#9654; </span><a href="@permalink(141)" class="link-linea">{{ __('Ver talleres', 'automaticatheme') }}</a>
    </div>

  </div>
</div>
{{-- end talleres --}}

{{-- newslater --}}
<div class="row pt-5">
  <div class="col-12 col-lg-6 d-lg-block d-none"><h3 class="f-big mb-5">{!! __('Amigos de L&#39;Automatica', 'automaticatheme') !!}</h3></div>
  <div class="col-12 col-lg-6 d-lg-block d-none"><h3 class="f-big mb-5">{!! __('Newslater', 'automaticatheme') !!}</h3></div>
  <div class="col-12 col-lg-6">
    <h3 class="f-big mb-2 d-block d-lg-none">{!! __('Amigos de L&#39;Automatica', 'automaticatheme') !!}</h3>
    <div class="f-small">@field('texto_amigos')</div>
    <div class="f-small"><span>&#9654; </span><a href="@permalink(10)" class="link-linea">{{ __('¡Hazte Amigo!', 'automaticatheme') }}</a></div>

  </div>
  <div class="col-12 col-lg-6">
    <h3 class="f-big mb-2 d-block d-lg-none">{!! __('Newslater', 'automaticatheme') !!}</h3>
    <div class="f-small mb-5 pb-3">
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
