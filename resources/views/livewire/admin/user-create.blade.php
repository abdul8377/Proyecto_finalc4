<div>
    <x-dialog-modal wire:model="isOpen">
      <x-slot name="title">
        <h3>Registro nuevo usuario</h3>
      </x-slot>
      <x-slot name="content">
        <div>
            <x-label for="name" value="{{ __('Nombre completo') }}" />
            <x-input wire:model.defer="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" placeholder="Juan Perez Perez"/>
            <x-input-error for="name"/>
        </div>

        <div class="mt-4">
            <x-label for="email" value="{{ __('Correo electrónico') }}" />
            <x-input wire:model.defer="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="ame" placeholder="juan34@gmail.com"/>
            <x-input-error for="email"/>
        </div>


        @if (!isset($user['id']))
        <div class="mt-4">
            <x-label for="password" value="{{ __('Password') }}" />
            <x-input wire:model.defer="password" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="secret"/>
            <x-input-error for="password"/>
        </div>

        <div class="mt-4">
            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-input wire:model.defer="password_confirmation" id="password" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="secret"/>
        </div>
        @endif
        <div class="flex justify-between mx-2 mb-6 mt-4">
            <div class="mb-2 md:mr-2 md:mb-0 w-full">
              <x-label value="Permisos" class="font-bold"/>
              <div class="grid grid-cols-3">
                {{-- {{json_encode($selectroles)}} --}}
                @foreach ($roles as $role)
                <label>
                    <x-checkbox wire:model="selectroles.{{$role->id}}"></x-checkbox>
                    {{$role->name}}
                </label>
                @endforeach
              </div>
            </div>
        </div>
      </x-slot>
      <x-slot name="footer">
        <x-secondary-button wire:click="$set('isOpen',false)" class="mx-2">Cancelar</x-secondary-button>
        <x-button type="submit" wire:click.prevent="store()" wire:loading.attr="disabled" wire:target="store" class="disabled:opacity-25">
          Registrar
        </x-button>
        <!-- <span wire:loading wire:target="store">Cargando...</span> -->
      </x-slot>

    </x-dialog-modal>
</div>
