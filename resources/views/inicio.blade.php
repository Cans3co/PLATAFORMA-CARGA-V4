<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800">
            {{ __('Página de Inicio Principal') }}
        </h2>
        <p class="mt-1 text-gray-600">Bienvenido a la Plataforma de Carga NAABOL</p>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Tarjetas de contenido -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Tarjeta 1 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-b border-gray-200">
                    <h3 class="text-lg font-medium mb-3">Panel de Control</h3>
                    <p class="text-gray-600 mb-4">Accede al dashboard principal del sistema.</p>
                    <x-primary-button :href="route('inicio')">
                        Ir al Panel Pricipal
                    </x-primary-button>
                </div>

                <!-- Tarjeta 2 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-b border-gray-200">
                    <h3 class="text-lg font-medium mb-3">Tu Perfil</h3>
                    <p class="text-gray-600 mb-4">Actualiza tu información personal.</p>
                    <x-primary-button :href="route('profile.edit')">
                        Editar Perfil
                    </x-primary-button>
                </div>

                <!-- Tarjeta 3 -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-b border-gray-200">
                    <h3 class="text-lg font-medium mb-3">Administración</h3>
                    <p class="text-gray-600 mb-4">Acceso a herramientas de gestión.</p>
                    @can('admin')
                    <x-primary-button :href="route('admin.register.create')">
                        Registrar Usuarios
                    </x-primary-button>
                    @endcan
                </div>
            </div>

            <!-- Sección adicional -->
            <div class="mt-8 bg-white shadow-sm sm:rounded-lg p-6">
                <h3 class="text-xl font-medium mb-4">Actividad Reciente</h3>
                <p class="text-gray-600">Aquí puedes agregar widgets o información relevante.</p>
            </div>
        </div>
    </div>
</x-app-layout>