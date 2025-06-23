@props([
    'route_name',
    'params' => [],
])

<?php
    $href = request()->route('locale')
        ? route($route_name . '.locale', ['locale' => request()->route('locale')], ...$params)
        : route($route_name, ...$params);
?>

<flux:link {{$attributes}} :$href>
    {{$slot}}
</flux:link>
