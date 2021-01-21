  @hasfield('galeria')
  <div class="col-12">
    <div class="f-big mb-4">{{ __('Imágenes','automaticatheme') }}</div>
    <div id="galeria" class="row">
      @php $g = get_field('galeria')@endphp

        @foreach ($g as $foto)
        <a href="@php echo $foto['sizes']['featured']@endphp" class="col-12 col-lg-4 mb-2 lightbox">
          <img class="img-fluid" src="@php echo $foto['sizes']['media']@endphp" alt="">
        </a>
        @endforeach



    </div>
  </div>
  @endfield
