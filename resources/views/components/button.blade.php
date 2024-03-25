@props([
'type' => 'primary',
'loading' => false,
'size' => 'md',
])

@php
$classes = "btn btn-$type btn-$size d-flex justify-content-center align-items-center gap-2"
@endphp

<button type="submit" {{ $attributes->merge(['class' => $classes]) }} >
  @if($loading)
  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  @endif
  {{ $slot }}
</button>