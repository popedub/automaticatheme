@php
$tags = get_the_tags()
@endphp
@foreach ($tags as $tag)
<a href="{{ get_tag_link($tag->term_id) }}">{{ $tag->name }}</a>
@endforeach
