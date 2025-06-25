<x-app-layout>
    <div class="py-12 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 bg-white border-b border-gray-200">
                    <h1 class="text-3xl font-bold text-center text-blue-800 mb-8">Misión y Visión</h1>
                    
                    <div class="prose prose-lg text-gray-700 space-y-8">
                        <div class="bg-blue-50 p-6 rounded-lg">
                            <h2 class="text-2xl font-semibold text-blue-700 mb-4">MISIÓN</h2>
                            <p class="text-justify">
                                NAABOL brinda servicios de accesibilidad al transporte aéreo nacional e internacional, con atención de calidad a través de un equipamiento e infraestructura aeronáutica moderna que cuenta con tecnología de punta para la navegación aérea. Contribuyendo a la integración de los Pueblos, en armonía con el medio ambiente y la Madre Tierra; bajo el marco de las normas aeronáuticas y los planes de gobierno.
                            </p>
                        </div>

                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h2 class="text-2xl font-semibold text-gray-700 mb-4">VISIÓN</h2>
                            <p class="text-justify">
                                NAABOL mediante los servicios prestados, pretende constituirse en la entidad líder dentro los servicios de navegación aérea y aeroportuaria; Garantizar una adecuada infraestructura y un óptimo equipamiento aeronáutico, para lograr un estándar de calidad en la operabilidad de nuestros aeropuertos. Desarrollando planes, programas y proyectos que nos permita consolidarnos como la mejor empresa a nivel nacional con proyección y reconocimiento internacional.
                            </p>
                        </div>
                    </div>

                    <div class="mt-10 text-center">
                        <x-secondary-button :href="route('nosotros.index')" class="px-6 py-3">
                            ← Volver a Nosotros
                        </x-secondary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>