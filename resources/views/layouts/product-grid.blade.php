<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold text-gray-900">Auction Parts</h2>
        <div class="flex items-center space-x-2">
            <span class="text-gray-700">Sort by</span>
            <button class="inline-flex items-center text-gray-700 hover:text-gray-900">
                Newest
                <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($products as $product)
            <div class="bg-white rounded-lg shadow-md overflow-hidden group">
                {{-- <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="h-64 w-full object-cover object-center group-hover:opacity-75 transition-opacity" />
                    <button class="absolute top-4 right-4 p-2 rounded-full bg-white shadow-sm hover:bg-gray-100">
                        <svg class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                </div> --}}
                <div class="p-4">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">{{ $product['name'] }}</h3>
                            <p class="text-sm text-gray-500">{{ $product['category'] }}</p>
                        </div>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            {{ $product['condition'] }}
                        </span>
                    </div>
                    <p class="mt-2 text-sm text-gray-600">{{ $product['compatibility'] }}</p>
                    <div class="mt-4 flex justify-between items-center">
                        <p class="text-xl font-bold text-gray-900">${{ $product['price'] }}</p>
                        <button class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition-colors">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>