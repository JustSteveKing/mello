<x-app-layout>
    <x-site.header
        title="Project Name awesome"
    >
        <x-slot name="meta">
            <x-projects.meta
                :project="$project"
            />
        </x-slot>

        <x-slot name="actions">
            <span class="hidden sm:block">
                <x-site.button
                    text="Manage"
                    color="gray-700"
                    border-color="gray"
                    background="gray"
                >
                    <x-slot name="icon">
                        <x-icons.pencil
                            class="-ml-1 mr-2 h-5 w-5 text-gray-400"
                        />
                    </x-slot>
                </x-site.button>
            </span>
        </x-slot>
    </x-site.header>

    <section class="mt-8 max-w-3xl mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
        <main class="space-y-6 lg:col-start-1 lg:col-span-2">
            <div class="pb-16 space-y-6">

                <div class="w-full bg-white rounded-lg mx-auto border-b-4 border-blue-600 shadow-sm hover:shadow-lg p-4">
                    <a class="w-full cursor-pointer space-y-6">
                        <div class="w-full flex items-center justify-start">
                            <h4 class="flex items-center space-x-2 text-gray-600 font-semibold text-2xl truncate whitespace-normal">
                                <x-icons.badge-check
                                    class="inline w-10 h-10 text-gray-300"
                                />
                                <span>Task Title</span>
                            </h4>
                        </div>
                        <div class="w-full flex items-center justify-between">
                            <div class="inline-flex font-medium text-sm space-x-3">
                                <x-projects.tag
                                    class="border-blue-600 text-blue-600 bg-white"
                                >
                                    <x-slot name="icon">
                                        status
                                    </x-slot>
                                </x-projects.tag>

                                <x-projects.tag
                                    class="border-gray-600 text-gray-600 bg-gray-200"
                                >
                                    <x-slot name="icon">
                                        <x-icons.collection
                                            class="inline h-4 w-4"
                                        />
                                        0/4
                                    </x-slot>
                                </x-projects.tag>
                                <x-projects.tag
                                    class="border-gray-600 text-gray-600 bg-gray-200"
                                >
                                    <x-slot name="icon">
                                        <x-icons.chat
                                            class="inline h-4 w-4"
                                        />
                                        2
                                    </x-slot>
                                </x-projects.tag>
                            </div>
                            <div>
                                <x-site.avatar
                                    src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixqx=4cENLw1Nk9&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="User Avatar"
                                    class="h-10 w-10"
                                />
                            </div>
                        </div>
                    </a>
                </div>

                <div class="w-full bg-white rounded-lg mx-auto border-b-4 border-blue-600 shadow-sm hover:shadow-lg p-4">
                    <a class="w-full cursor-pointer space-y-6">
                        <div class="w-full flex items-center justify-start">
                            <h4 class="flex items-center space-x-2 text-gray-600 font-semibold text-2xl truncate whitespace-normal">
                                <x-icons.badge-check
                                    class="inline w-10 h-10 text-green-600"
                                />
                                <span>Task Title</span>
                            </h4>
                        </div>
                        <div class="w-full flex items-center justify-between">
                            <div class="inline-flex font-medium text-sm space-x-3">
                                <x-projects.tag
                                    class="border-blue-600 text-blue-600 bg-white"
                                >
                                    <x-slot name="icon">
                                        status
                                    </x-slot>
                                </x-projects.tag>
                                <x-projects.tag
                                    class="border-gray-600 text-gray-600 bg-gray-200"
                                >
                                    <x-slot name="icon">
                                        <x-icons.collection
                                            class="inline h-4 w-4"
                                        />
                                        0/4
                                    </x-slot>
                                </x-projects.tag>
                                <x-projects.tag
                                    class="border-gray-600 text-gray-600 bg-gray-200"
                                >
                                    <x-slot name="icon">
                                        <x-icons.chat
                                            class="inline h-4 w-4"
                                        />
                                        2
                                    </x-slot>
                                </x-projects.tag>
                            </div>
                            <div>
                                <x-site.avatar
                                    src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixqx=4cENLw1Nk9&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="User Avatar"
                                    class="h-10 w-10"
                                />
                            </div>
                        </div>
                    </a>
                </div>

                <div class="w-full bg-white rounded-lg mx-auto border-b-4 border-blue-600 shadow-sm hover:shadow-lg p-4">
                    <a class="w-full cursor-pointer space-y-6">
                        <div class="w-full flex items-center justify-start">
                            <h4 class="flex items-center space-x-2 text-gray-600 font-semibold text-2xl truncate whitespace-normal">
                                <x-icons.exclamation
                                    class="inline w-10 h-10 text-red-600"
                                />
                                <span>Task Title</span>
                            </h4>
                        </div>
                        <div class="w-full flex items-center justify-between">
                            <div class="inline-flex font-medium text-sm space-x-3">
                                <x-projects.tag
                                    class="border-blue-600 text-blue-600 bg-white"
                                >
                                    <x-slot name="icon">
                                        status
                                    </x-slot>
                                </x-projects.tag>
                                <x-projects.tag
                                    class="border-gray-600 text-gray-600 bg-gray-200"
                                >
                                    <x-slot name="icon">
                                        <x-icons.collection
                                            class="inline h-4 w-4"
                                        />
                                        0/4
                                    </x-slot>
                                </x-projects.tag>
                                <x-projects.tag
                                    class="border-gray-600 text-gray-600 bg-gray-200"
                                >
                                    <x-slot name="icon">
                                        <x-icons.chat
                                            class="inline h-4 w-4"
                                        />
                                        2
                                    </x-slot>
                                </x-projects.tag>
                            </div>
                            <div>
                                <x-site.avatar
                                    src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixqx=4cENLw1Nk9&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="User Avatar"
                                    class="h-10 w-10"
                                />
                            </div>
                        </div>
                    </a>
                </div>
        
            </div>
        </main>
        <aside class="lg:col-start-3 lg:col-span-1">
            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">

                <div class="mb-3 flex flex-col justify-stretch">
                    <x-site.button-themed
                        text="Invite Collaborators"
                        theme="blue"
                    >
                        <x-slot name="icon">
                            <x-icons.paper-airplane
                                class="w-4 h-4"
                            />
                        </x-slot>
                    </x-site.button-themed>
                </div>

                <ul class="divide-y divide-gray-200">
                    <li class="py-4 flex">
                        <x-site.avatar
                            src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixqx=4cENLw1Nk9&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="User Avatar"
                            class="h-10 w-10"
                        />
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Calvin Hawkins</p>
                            <p class="text-sm text-gray-500">calvin.hawkins@example.com</p>
                        </div>
                    </li>

                    <li class="py-4 flex">
                        <x-site.avatar
                            src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixqx=4cENLw1Nk9&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="User Avatar"
                            class="h-10 w-10"
                        />
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Kristen Ramos</p>
                            <p class="text-sm text-gray-500">kristen.ramos@example.com</p>
                        </div>
                    </li>

                    <li class="py-4 flex">
                        <x-site.avatar
                            src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixqx=4cENLw1Nk9&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="User Avatar"
                            class="h-10 w-10"
                        />
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Ted Fox</p>
                            <p class="text-sm text-gray-500">ted.fox@example.com</p>
                        </div>
                    </li>
                </ul>

            </div>
        </aside>
    </section>
</x-app-layout>