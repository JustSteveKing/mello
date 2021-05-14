<div 
    {{ $attributes->merge([
        'class' => 'py-1 px-2 rounded-md border-2 '
    ]) }}
    {{ $attributes }}
>
    @isset ($icon)
        {{ $icon }}
    @endisset
    <span>{{ $slot }}</span>
</div>