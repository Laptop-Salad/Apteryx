@props([
    'route',
    'heading' => null,
])

<div class="flex space-x-6">
    <flux:button href="{{$route}}" size="sm">
        <i class="fa-regular fa-arrow-left me-2"></i>
        Back
    </flux:button>

    <div>
        @isset($heading)
            <flux:heading size="lg">{{$heading}}</flux:heading>
        @endisset

        {{$slot}}
    </div>
</div>
