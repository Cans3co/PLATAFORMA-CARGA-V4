@props(['disabled' => false, 'href' => null])

@if($href)
    <a {{ $attributes->merge([
        'href' => $href,
        'class' => 'inline-flex items-center px-6 py-3 bg-gray-200 dark:bg-gray-700 border border-transparent rounded-lg font-medium text-gray-800 dark:text-gray-200 uppercase tracking-wider hover:bg-gray-300 dark:hover:bg-gray-600 focus:bg-gray-300 dark:focus:bg-gray-600 active:bg-gray-400 dark:active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-300 disabled:opacity-50'
    ]) }} {{ $disabled ? 'disabled' : '' }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge([
        'type' => 'button',
        'class' => 'inline-flex items-center px-6 py-3 bg-gray-200 dark:bg-gray-700 border border-transparent rounded-lg font-medium text-gray-800 dark:text-gray-200 uppercase tracking-wider hover:bg-gray-300 dark:hover:bg-gray-600 focus:bg-gray-300 dark:focus:bg-gray-600 active:bg-gray-400 dark:active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-300 disabled:opacity-50'
    ]) }} {{ $disabled ? 'disabled' : '' }}>
        {{ $slot }}
    </button>
@endif