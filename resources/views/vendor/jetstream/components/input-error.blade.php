@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'error invalid-feedback']) }}>{{ $message }}</p>
@enderror

