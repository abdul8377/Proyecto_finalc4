<!DOCTYPE html>
<html>
<head>
    <title>Products in Category</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    @livewireStyles
   <!-- Styles -->
</head>
<body>

    <div class="sticky top-0 z-50">
        @livewire('navigation-livewire')
    </div>

    <h1>Products in Category {{ $category->name }}</h1>
    <ul>
        @if($products && $products->count() > 0)
            @foreach($products as $product)
                <li>{{ $product->name }} - ${{ $product->price }}</li>
            @endforeach
        @else
            <p>No products available for this category.</p>
        @endif
    </ul>

    <div class="mt-4">
        {{$products->links()}}
    </div>

</body>
</html>
