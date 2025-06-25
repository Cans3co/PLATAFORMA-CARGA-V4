<x-app-layout>
    <div class="py-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Biblioteca</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Tarjeta RAB -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-4">Reglamentación Aeronáutica Boliviana (RAB)</h2>
                <p class="mb-4">Acceda al contenido completo de la RAB.</p>
                <a href="{{ route('biblioteca.rab') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded inline-block">
                    Ver RAB
                </a>
            </div>
            
            <!-- Tarjeta Manuales -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-4">Manuales y Documentos</h2>
                <p class="mb-4">Acceda a manuales y documentos importantes.</p>
                <a href="{{ route('biblioteca.manuales') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded inline-block">
                    Ver Manuales
                </a>
            </div>
        </div>
    </div>
</x-app-layout>