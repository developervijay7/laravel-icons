@props(['size' => 5, 'color' => 'currentColor', 'class' => ''])
<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'h-' . $size . ' w- ' . $size . ' ' . $class]) }} viewBox="0 0 20 20" fill="{{ $color }}">
    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
</svg>
