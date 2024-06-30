<x-modal-card title="Registro administrador" blur wire:model.defer="isOpen">
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

    <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancelar" x-on:click="close()" />
            <x-button primary label="Registrar" wire:click="store()" />
        </div>
    </x-slot>
</x-modal-card>

