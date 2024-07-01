<div>
    {{-- Filtros de Categoría --}}
    <div class="w-full mb-4">
        <div class="text-center border-b-2 border-gray-200 py-2">
            <h3 class="uppercase font-bold text-lg mb-2">Categorías</h3>
            <ul class="flex justify-center gap-4">
                <li>
                    <input wire:model="sendCategory" type="radio" id="todo" name="category" value="0" checked>
                    <label for="todo" class="cursor-pointer">Todo</label>
                </li>
                @foreach ($categories as $category)
                <li>
                    <input wire:model="sendCategory" type="radio" id="{{$category->id}}" name="category" value="{{$category->id}}">
                    <label for="{{$category->id}}" class="cursor-pointer">{{$category->name}}</label>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    {{-- Lista de Productos --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
        @forelse ($products as $product)
        <div class="p-4 bg-white border rounded shadow">
            <h2 class="text-xl font-semibold text-gray-900">{{$product->name}}</h2>
            <p class="text-sm">Precio: S/ {{number_format($product->price, 2)}}</p>
            <p class="text-sm">Stock: {{$product->stock}}</p>
            <p class="text-sm">Disponibilidad: {{$product->availability ? 'Sí' : 'No'}}</p>
        </div>
        @empty
        <p>No hay productos disponibles en esta categoría.</p>
        @endforelse
    </div>

    {{-- Paginación --}}
    <div class="mt-4">
        {{$products->links()}}
    </div>
</div>
