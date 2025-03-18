<nav class="bg-gray-900 text-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white md:hidden">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <div class="flex items-center">
                    <svg class="h-8 w-8 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                    </svg>
                    <span class="ml-2 text-xl font-bold">Gaps</span>
                </div>
            </div>
            
            {{-- <div class="hidden md:flex md:items-center md:space-x-8">
                @foreach($categories as $category)
                    <button class="flex items-center space-x-2 px-3 py-2 rounded-md text-sm font-medium {{ $selectedCategory === $category['name'] ? 'bg-red-600 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                        {!! $category['icon'] !!}
                        <span>{{ $category['name'] }}</span>
                    </button>
                @endforeach
            </div> --}}

            <div class="flex items-center space-x-4">
                <div class="relative">
                    <input type="text" placeholder="Search parts..." class="w-full bg-gray-700 text-white rounded-full px-4 py-1 pl-10 focus:outline-none focus:ring-2 focus:ring-red-500" />
                    <svg class="h-5 w-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <button class="text-gray-300 hover:text-white">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </button>
                <button class="text-gray-300 hover:text-white relative">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="absolute -top-2 -right-2 bg-red-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">2</span>
                </button>
            </div>
        </div>
    </div>
</nav>