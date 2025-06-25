@props(['disabled' => false, 'href' => null])

@if($href)
    <a {{ $attributes->merge([
        'href' => $href,
        'class' => 'inline-flex items-center px-6 py-3 bg-blue-600 dark:bg-blue-700 border border-transparent rounded-lg font-medium text-white dark:text-white uppercase tracking-wider hover:bg-blue-700 dark:hover:bg-blue-600 focus:bg-blue-700 dark:focus:bg-blue-600 active:bg-blue-800 dark:active:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-300 disabled:opacity-50'
    ]) }} {{ $disabled ? 'disabled' : '' }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge([
        'type' => 'submit',
        'class' => 'inline-flex items-center px-6 py-3 bg-blue-600 dark:bg-blue-700 border border-transparent rounded-lg font-medium text-white dark:text-white uppercase tracking-wider hover:bg-blue-700 dark:hover:bg-blue-600 focus:bg-blue-700 dark:focus:bg-blue-600 active:bg-blue-800 dark:active:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-300 disabled:opacity-50'
    ]) }} {{ $disabled ? 'disabled' : '' }}>
        {{ $slot }}
    </button>
@endif