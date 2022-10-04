@props([
    'href' => '',
    'theme' => 'primary'
])

@php
if(!function_exists('getThemeClassForButtonA')) {
    function getThemeClassForButtonA($theme) {
        return match ($theme) {
            'primary' => 'text-white bg-blue-500 hover:bg-blue-600 focus:fing-blue-500',
            'default' => '',
        };
    }
}
@endphp

<a href="{{$href}}" class="inline">{{$slot}}</a>
