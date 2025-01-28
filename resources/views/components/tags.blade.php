@props(['tagsCsv'])

@php
$tags = explode(',', $tagsCsv);
@endphp

<div class="tags">
    @foreach ($tags as $tag)
    @if(!empty(trim($tag)))
    <a href="/?tag={{trim($tag)}}" class="text-decoration-none">
        <span class="badge bg-secondary me-1">{{trim($tag)}}</span>
    </a>
    @endif
    @endforeach
</div>