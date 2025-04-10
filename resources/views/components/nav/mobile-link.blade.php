@props(['active' => false])

<a {{ $attributes->class([
    'block rounded-md px-3 py-2 text-base font-medium hover:bg-gray-700 hover:text-white',
    'bg-gray-900 text-white' => $active,
    'text-gray-600' => !$active
]) }}
    {{ $active ? 'aria-current="page"' : '' }}
>
    {{ $slot }}
</a>