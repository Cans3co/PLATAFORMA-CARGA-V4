<x-app-layout>
    <div class="py-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Manuales</h1>
            <a href="{{ route('biblioteca.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">
                Volver
            </a>
        </div>
        
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold mb-4">Mercancías Peligrosas</h2>
            <p class="text-gray-500 italic">Aquí irán los documentos PDF (esto lo mejoraremos después)</p>
        </div>
    </div>
</x-app-layout>