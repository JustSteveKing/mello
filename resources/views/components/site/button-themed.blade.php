<button
    {{ $attributes }}
    type="button"
    class="space-x-2 flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-{{ $theme }}-600 hover:bg-{{ $theme }}-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-{{ $theme }}-500"
>
    @isset($icon)
        {{ $icon }}
    @endisset
    <span>{{ $text }}</span>
</button>