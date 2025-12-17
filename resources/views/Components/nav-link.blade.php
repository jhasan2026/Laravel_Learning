@props(['active' => false])
<a class="{{ $active ? 'bg-gray-950 text-white' : 'text-gray-300 hover:bg-white hover:text-black' }} rounded-md px-3 py-2 text-sm font-medium"
{{ $attributes }}
>
    {{ $slot }}
</a>

