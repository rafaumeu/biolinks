@props(['route', 'post' => null, 'put' => null])
@php
    $method = $post || $put ? 'POST' : 'GET';
@endphp
<form {{ $attributes->class(['flex flex-col gap-4']) }} action="{{ Route::has($route) ? route($route) : $route }}"
    method="{{ $method }}">
    @csrf
    @if ($put)
        @method('PUT')
    @endif
    {{ $slot }}
</form>
