@props(['route', 'post' => true])
<form {{ $attributes->class(['flex flex-col gap-4']) }} action="{{ Route::has($route) ? route($route) : $route }}"
    method="{{ $post ? 'POST' : 'GET' }}">
    @csrf
    {{ $slot }}
</form>
