@props(['active' => false, 'href' => '#'])

@php
$classes = $active ? 'nav-link active' : 'nav-link'
@endphp

<li class="nav-item">
  <a {{ $attributes->merge(['class' => $classes]) }} href={{ $href }} wire:navigate>
    {{ $slot }}
  </a>
</li>