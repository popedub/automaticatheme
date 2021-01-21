@php
$tags = get_the_tags()
@endphp

@if (is_single())
  @foreach ($tags as $tag)
  {{ $tag->name }}
  @endforeach
@else
@foreach ($tags as $tag)
<a href="{{ get_tag_link($tag->term_id) }}">{{ $tag->name }}</a>
@endforeach
@endif

