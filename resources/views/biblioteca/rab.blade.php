<x-app-layout>
    <div class="py-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Reglamentación Aeronáutica Boliviana (RAB)</h1>
            <a href="{{ route('biblioteca.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">
                Volver
            </a>
        </div>
        
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <iframe 
                src="https://www.dgac.gob.bo/reglamentacion-aeronautica-boliviana-rab/" 
                class="w-full h-screen border-0"
                frameborder="0">
            </iframe>
        </div>
    </div>
</x-app-layout>