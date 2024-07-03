<!DOCTYPE html>
<html>
<head>
    <title>Products in Category</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    @livewireStyles
</head>
<body>

    <div class="sticky top-0 z-50 bg-white shadow-md">
        @livewire('navigation-livewire')
    </div>

    <div class="container mx-auto mt-10 px-4">
        <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Products in Category {{ $category->name }}</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
            @if($products && $products->count() > 0)
                @foreach($products as $product)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <a href="#">
                            @if($product->image)
                                <img class="p-8 rounded-t-lg" src="{{ Storage::url($product->image->url) }}" alt="product image" />
                            @else
                                <img class="p-8 rounded-t-lg" src="https://via.placeholder.com/150" alt="placeholder image" />
                            @endif
                        </a>
                        <div class="px-5 pb-5">
                            <a href="#">
                                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $product->name }}</h5>
                            </a>
                            <p class="text-gray-600 mt-2">{{ $product->description }}</p>
                            <p class="text-gray-600 mt-2">Brand: {{ $product->brand }}</p>
                            <div class="flex items-center mt-2.5 mb-5">
                                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                    @for($i = 0; $i < 5; $i++)
                                        @if($i < $product->rating)
                                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                        @else
                                            <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                        @endif
                                    @endfor
                                </div>
                                <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">{{ $product->rating }}</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-3xl font-bold text-gray-900 dark:text-white">${{ $product->price }}</span>
                            </div>
                            <div class="mt-4 flex items-center space-x-4">
                                <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition-colors duration-300" onclick="decreaseQuantity({{ $product->id }})">-</button>
                                <input type="text" id="quantity-{{ $product->id }}" class="w-16 text-center border rounded" value="1">
                                <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition-colors duration-300" onclick="increaseQuantity({{ $product->id }})">+</button>
                            </div>
                            <button class="mt-4 w-full bg-yellow-500 text-white font-bold py-2 px-4 rounded hover:bg-yellow-600 transition-colors duration-300">Add to Cart</button>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="col-span-full text-center text-gray-600">No products available for this category.</p>
            @endif
        </div>

        <div class="mt-8">
            {{ $products->links() }}
        </div>
    </div>

    @livewireScripts

    <script>
        function increaseQuantity(productId) {
            const quantityInput = document.getElementById(`quantity-${productId}`);
            let quantity = parseInt(quantityInput.value);
            quantityInput.value = quantity + 1;
        }

        function decreaseQuantity(productId) {
            const quantityInput = document.getElementById(`quantity-${productId}`);
            let quantity = parseInt(quantityInput.value);
            if (quantity > 1) {
                quantityInput.value = quantity - 1;
            }
        }
    </script>

</body>
</html>
