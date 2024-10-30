@props(['active' => false])
<a 
    {{ $attributes }} 
    class="{{ $active ? 'bg-amber-700 text-white' : 'text-amber-900 hover:bg-amber-900 hover:text-white' }} 
    rounded-md px-4 lg:px-5 py-2 lg:py-2.5 text-sm font-medium" aria-current={{ $active ? 'page' : false }}>{{ $slot }}</a>