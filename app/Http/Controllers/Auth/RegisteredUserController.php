<x-guest-layout>
    <form method="POST" action="{{ route('register.store') }}">
        @csrf

        <!-- Nombre -->
        <div class="mt-4">
            <x-input-label for="name" value="Nombre completo" />
            <x-text-input id="name" class="block mt-1 w-full" 
                          type="text" name="name" 
                          :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" value="Correo electrónico" />
            <x-text-input id="email" class="block mt-1 w-full" 
                          type="email" name="email" 
                          :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Teléfono -->
        <div class="mt-4">
            <x-input-label for="phone" value="Teléfono" />
            <x-text-input id="phone" class="block mt-1 w-full" 
                          type="tel" name="phone" 
                          :value="old('phone')" required />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Dirección -->
        <div class="mt-4">
            <x-input-label for="address" value="Dirección" />
            <x-text-input id="address" class="block mt-1 w-full" 
                          type="text" name="address" 
                          :value="old('address')" required />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Contraseña -->
        <div class="mt-4">
            <x-input-label for="password" value="Contraseña" />
            <x-text-input id="password" class="block mt-1 w-full"
                          type="password" name="password"
                          required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmar Contraseña -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" value="Confirmar contraseña" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password" name="password_confirmation"
                          required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Botón de Registro -->
        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                Registrarse
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>