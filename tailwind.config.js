import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/components/**/*.blade.php', // Añadido para componentes
        './node_modules/flowbite/**/*.js' // Si usas Flowbite (opcional)
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: { // Extiende la paleta de colores si necesitas personalización
                primary: {
                    '50': '#f0f9ff',
                    '100': '#e0f2fe',
                    '500': '#3b82f6', // Azul Tailwind por defecto
                    '600': '#2563eb',
                },
                dark: {
                    '800': '#1e293b', // Ejemplo para modo oscuro
                }
            }
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin') // Si usas Flowbite (opcional)
    ],

    darkMode: 'class', // Habilita el modo oscuro basado en clases
};