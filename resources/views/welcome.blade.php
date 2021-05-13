<x-app-layout>
    <header class="bg-gray-50 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 xl:flex xl:items-center xl:justify-between">
            <div class="flex-1 min-w-0">
                <h1 class="mt-2 text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                    Project Name
                </h1>
                <div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-8">
                    <div class="mt-2 flex items-center text-sm text-gray-500">
                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        User Name
                    </div>
                    <div class="mt-2 flex items-center text-sm text-gray-500">
                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        X collaborators
                    </div>
                    <div class="mt-2 flex items-center text-sm text-gray-500">
                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        X tasks
                    </div>
                </div>
            </div>
            <div class="mt-5 flex xl:mt-0 xl:ml-4">
                <span class="hidden sm:block">
                    <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-purple-500">
                        <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/pencil" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                        Manage
                    </button>
                </span>
            </div>
        </div>
    </header>

    <section class="mt-8 max-w-3xl mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
        <main class="space-y-6 lg:col-start-1 lg:col-span-2">
            <div class="pb-16 space-y-6">

                <div class="w-full bg-white rounded-lg mx-auto border-b-4 border-blue-600 shadow-sm hover:shadow-lg p-4">
                    <a class="w-full cursor-pointer space-y-6">
                        <div class="w-full flex items-center justify-start">
                            <h4 class="flex items-center space-x-2 text-gray-600 font-semibold text-2xl truncate whitespace-normal">
                                <svg class="inline w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                                <span>Task Title</span>
                            </h4>
                        </div>
                        <div class="w-full flex items-center justify-between">
                            <div class="inline-flex font-medium text-sm space-x-3">
                                <button class="py-1 px-2 rounded-md border-2 border-blue-600 text-blue-600 bg-white">
                                    status
                                </button>
                                <button class="py-1 px-2 rounded-md border-2 border-gray-600 text-gray-600 bg-gray-200">
                                    <svg class="inline w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                    <span>0/4</span>
                                </button>
                                <button class="py-1 px-2 rounded-md border-2 border-gray-600 text-gray-600 bg-gray-200">
                                    <svg class="inline w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                    <span>2</span>
                                </button>
                            </div>
                            <div>
                                <img class="h-10 w-10 object-fit object-center rounded-full border-2" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixqx=4cENLw1Nk9&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="assigned users avatar" />
                            </div>
                        </div>
                    </a>
                </div>

                <div class="w-full bg-white rounded-lg mx-auto border-b-4 border-blue-600 shadow-sm hover:shadow-lg p-4">
                    <a class="w-full cursor-pointer space-y-6">
                        <div class="w-full flex items-center justify-start">
                            <h4 class="flex items-center space-x-2 text-gray-600 font-semibold text-2xl truncate whitespace-normal">
                                <svg class="inline w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                                <span>Task Title</span>
                            </h4>
                        </div>
                        <div class="w-full flex items-center justify-between">
                            <div class="inline-flex font-medium text-sm space-x-3">
                                <button class="py-1 px-2 rounded-md border-2 border-blue-600 text-blue-600 bg-white">
                                    status
                                </button>
                                <button class="py-1 px-2 rounded-md border-2 border-gray-600 text-gray-600 bg-gray-200">
                                    <svg class="inline w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                    <span>0/4</span>
                                </button>
                                <button class="py-1 px-2 rounded-md border-2 border-gray-600 text-gray-600 bg-gray-200">
                                    <svg class="inline w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                    <span>2</span>
                                </button>
                            </div>
                            <div>
                                <img class="h-10 w-10 object-fit object-center rounded-full border-2" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixqx=4cENLw1Nk9&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="assigned users avatar" />
                            </div>
                        </div>
                    </a>
                </div>

                <div class="w-full bg-white rounded-lg mx-auto border-b-4 border-blue-600 shadow-sm hover:shadow-lg p-4">
                    <a class="w-full cursor-pointer space-y-6">
                        <div class="w-full flex items-center justify-start">
                            <h4 class="flex items-center space-x-2 text-gray-600 font-semibold text-2xl truncate whitespace-normal">
                                <svg class="inline w-10 h-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                <span>Task Title</span>
                            </h4>
                        </div>
                        <div class="w-full flex items-center justify-between">
                            <div class="inline-flex font-medium text-sm space-x-3">
                                <button class="py-1 px-2 rounded-md border-2 border-blue-600 text-blue-600 bg-white">
                                    status
                                </button>
                                <button class="py-1 px-2 rounded-md border-2 border-gray-600 text-gray-600 bg-gray-200">
                                    <svg class="inline w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                    <span>0/4</span>
                                </button>
                                <button class="py-1 px-2 rounded-md border-2 border-gray-600 text-gray-600 bg-gray-200">
                                    <svg class="inline w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                    <span>2</span>
                                </button>
                            </div>
                            <div>
                                <img class="h-10 w-10 object-fit object-center rounded-full border-2" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixqx=4cENLw1Nk9&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="assigned users avatar" />
                            </div>
                        </div>
                    </a>
                </div>
        
            </div>
        </main>
        <aside class="lg:col-start-3 lg:col-span-1">
            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">

                <div class="mb-3 flex flex-col justify-stretch">
                    <button type="button" class="space-x-2 flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                        <span>Invite collaborators</span>
                    </button>
                </div>

                <ul class="divide-y divide-gray-200">
                    <li class="py-4 flex">
                        <img class="h-10 w-10 rounded-full object-fit object-center border-2" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixqx=4cENLw1Nk9&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Calvin Hawkins</p>
                            <p class="text-sm text-gray-500">calvin.hawkins@example.com</p>
                        </div>
                    </li>

                    <li class="py-4 flex">
                        <img class="h-10 w-10 rounded-full object-fit object-center border-2" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixqx=4cENLw1Nk9&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">Kristen Ramos</p>
                            <p class="text-sm text-gray-500">kristen.ramos@example.com</p>
                        </div>
                    </li>

                    <li class="py-4 flex">
                        <img class="h-10 w-10 rounded-full object-fit object-center border-2" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixqx=4cENLw1Nk9&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
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