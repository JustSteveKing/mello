<div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-8">
    <div class="mt-2 flex items-center text-sm text-gray-500">
        <x-icons.user
            class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
        />
        {{ $title }}
    </div>
    <div class="mt-2 flex items-center text-sm text-gray-500">
        <x-icons.user-group
            class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
        />
        {{ $collaborators }} collaborators
    </div>
    <div class="mt-2 flex items-center text-sm {{ $tooMuch() ? 'text-red-400' : 'text-green-400' }}">
        <x-icons.collection
            class="flex-shrink-0 mr-1.5 h-5 w-5"
        />
        {{ $tasks }} tasks
    </div>
</div>