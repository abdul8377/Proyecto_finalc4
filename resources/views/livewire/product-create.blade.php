<x-modal-card title="Registro administrador" blur wire:model.defer="isOpen">
    <div class="grid grid-cols-5 gap-4">
        <div class="col-span-3">
            <div class="my-2 md:mr-2 md:mb-0 w-full">
                <div class="col-span-3">
                    <x-input wire:model="form.name" label="Nombre"/>
                </div>
            </div>
            <div class="my-2 md:mr-2 md:mb-0 w-full">
                <x-input wire:model="form.price" label="precio"/>
            </div>
            <div class="my-2 md:mr-2 md:mb-0 w-full">
                <x-input wire:model="form.stock" label="stock"/>
            </div>
            <div class="my-2 md:mr-2 md:mb-0 w-full">
                <x-native-select label="Selecciona una categoria" wire:model="form.category_id">
                    <option>Seleccione opción</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </x-native-select>
            </div>
            <div class="my-2 md:mr-2 md:mb-0 w-full">
                <x-native-select label="Selecciona un proveedor" wire:model="form.supplier_id">
                    <option>Seleccione opción</option>
                    @foreach ($suppliers as $supplier)
                    <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                    @endforeach
                </x-native-select>
            </div>

            <div class="my-2 md:mr-2 md:mb-0 w-full">
                <x-input wire:model="form.description" label="Descripción"/>
            </div>
            <div class="my-2 md:mr-2 md:mb-0 w-full">
                <x-input wire:model="form.other_detail" label="Otro Detalle"/>
            </div>
        </div>
        <div class="col-span-2">
            <div class="mb-2">

                @if(isset($foto)) {{-- caso editar --}}

                    @if(str_contains($foto,'Temp') || str_contains($foto,'tmp'))

                        <img src="{{$foto->temporaryUrl()}}" width="200px">

                    @else

                        <img src="{{'../../storage/'.$foto}}" width="200px" class="cursor-pointer">

                    @endif

                @else {{-- caso nuevo --}}

                    @if(substr($foto,-3)!='tmp')

                        <img src="img/sinfoto.png" width="200px">

                    @else

                        <img src="{{$foto->temporaryUrl()}}" width="200px">

                    @endif

                @endif

            </div>
            <div class="border border-dashed border-indigo-500 relative">

                <input type="file" wire:model="foto" class="cursor-pointer relative block opacity-0 w-full p-3 z-50" accept="image/png,image/jpeg">

                <div class="text-center absolute top-0 right-0 left-0 m-auto mt-2 cursor-pointer">

                    <p class="text-2xs cursor-pointer mt-2">Arraste el archivo / Seleccione archivo</p>

                </div>

            </div>
        </div>
    </div>

    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancelar" x-on:click="close()" />
            <x-button primary label="Registrar" wire:click="store()" />
        </div>
    </x-slot>
</x-modal-card>

