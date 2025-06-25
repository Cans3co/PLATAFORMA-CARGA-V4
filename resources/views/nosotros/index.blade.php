<x-app-layout>
    <div class="py-12 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 bg-white border-b border-gray-200">
                    <h1 class="text-3xl font-bold text-center text-blue-800 mb-8">NOSOTROS</h1>
                    
                    <div class="prose prose-lg text-gray-700">
                        <p class="text-justify">
                            NAABOL CARGA es más que un equipo; es un pilar de seguridad. Su profesionalismo y atención rigurosa garantizan que cada tipo de carga, sin importar su origen o destino, cumpla con los más altos estándares. Se enorgullecen de ser los mejores en lo que hacen, asegurando que cada inspección de carga sea manejada con excelencia y compromiso. ¡Juntos, elevan la seguridad a un nivel superior!
                        </p>
                    </div>

                    <div class="mt-10 flex justify-center space-x-6">
                        <!-- Botón Primary con icono -->
                        <x-primary-button 
                            :href="route('nosotros.mision-vision')"
                            class="px-6 py-3 text-lg hover:bg-blue-700 transition duration-300">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            Misión y Visión
                        </x-primary-button>
                        
                        <!-- Botón Secondary con icono -->
                        <x-secondary-button 
                            :href="route('nosotros.organigrama')"
                            class="px-6 py-3 text-lg hover:bg-gray-700 transition duration-300">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                            </svg>
                            Organigrama
                        </x-secondary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>