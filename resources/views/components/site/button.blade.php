<button
    {{ $attributes }}
    type="button"
    class="space-x-2 flex items-center justify-center px-4 py-2 border border-{{ $borderColor ?? 'gray' }}-300 text-sm font-medium rounded-md shadow-sm text-{{ $color ?? 'white' }} bg-{{ $background ?? 'gray' }} hover:bg-{{ $background ?? 'gray' }}-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ $background ?? 'gray' }}-600"
>
    @isset($icon)
        {{ $icon }}
    @endisset
    <span>{{ $text }}</span>
</button>