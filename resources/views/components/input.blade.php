@props(['name'])
<div>
    <input class="input input-bordered" {{ $attributes }} name="{{ $name }}">
    @error($name)
        <div class="text-small text-error">{{ $message }}</div>
    @enderror
</div>
