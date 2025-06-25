<x-app-layout>
    <div class="py-12 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 bg-white border-b border-gray-200">
                    <h1 class="text-3xl font-bold text-center text-blue-800 mb-6">Organigrama</h1>
                    
                    <h2 class="text-xl font-semibold text-center text-gray-700 mb-8">
                        ESTRUCTURA ORGANIZACIONAL DE CARGA NAABOL
                    </h2>
                    
                    <div class="prose prose-lg text-gray-700 mb-10 text-center max-w-3xl mx-auto">
                        <p>
                            El siguiente gráfico representa la estructura formal de nuestra organización, muestra cómo se organiza los organismos o sectores, la jerarquía y las relaciones de comunicación existente entre ellos. 
                        </p>
                    </div>

                    <div class="mt-6 bg-gray-50 rounded-lg p-4 shadow-inner">
                        <div class="text-center">
                            <img 
                                src="{{ asset('images/organigrama-naabol.png') }}" 
                                alt="Organigrama Estructural de NAABOL CARGA"
                                class="mx-auto max-w-full h-auto border border-gray-200 rounded-lg"
                            >
                            <p class="mt-4 text-sm text-gray-500">
                                [Actualizado: {{ now()->format('d/m/Y') }}]
                            </p>
                        </div>
                    </div>

                    <div class="mt-12 text-center">
                        <x-secondary-button :href="route('nosotros.index')" class="px-6 py-3">
                            ← Volver a Nosotros
                        </x-secondary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>