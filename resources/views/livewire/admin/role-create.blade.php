<div>
    <x-dialog-modal wire:model="isOpen">
      <x-slot name="title">
        <h3>Registro nuevo rol</h3>
      </x-slot>
      <x-slot name="content">
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="Nombre del rol" class="font-bold"/>
              <x-input wire:model.defer="rolname" name="rolname" type="text" class="w-full"/>
              <x-input-error for="rolname"/>
            </div>
        </div>
        <div class="flex justify-between mx-2 mb-6">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="Permisos" class="font-bold"/>
              <div class="grid grid-cols-3">
                {{-- {{json_encode($rolpermissions)}} --}}
                @foreach ($permissions as $permission)
                <label>

                    <x-checkbox id="rounded-full" wire:model="rolpermissions.{{$permission->id}}" rounded="full" />
                    {{$permission->name}}
                </label>
                @endforeach
              </div>
            </div>
        </div>
      </x-slot>

      <x-slot name="footer">
        <div class="flex justify-end gap-x-2">
            <x-button flat label="Cancelar" x-on:click="$set('isOpen',false)" />
            <x-button type="submit" primary label="Registrar" wire:click="store()" />
        </div>
    </x-slot>


    </x-dialog-modal>
</div>
