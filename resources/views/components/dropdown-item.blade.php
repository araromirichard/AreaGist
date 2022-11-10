@props(['active' => false])

@php
$classes = "block text-left px-3 text-sm leading-6 hover:bg-blue-900 focus:bg-blue-900 hover:text-white
focus:text-white";



if($active) {
$classes .= ' bg-blue-900 text-white';
}


@endphp

<a {{ $attributes(["class"=> $classes]) }}>
    {{$slot}}
</a>