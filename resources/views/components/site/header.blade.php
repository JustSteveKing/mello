<header class="bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 xl:flex xl:items-center xl:justify-between">
        <div class="flex-1 min-w-0">
            <h1 class="mt-2 text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                {{ $title }}
            </h1>
            @isset($meta)
                {{ $meta }}
            @endisset
        </div>
        @isset($actions)
            <div class="mt-5 flex xl:mt-0 xl:ml-4">
                {{ $actions }}
            </div>
        @endisset
    </div>
</header>