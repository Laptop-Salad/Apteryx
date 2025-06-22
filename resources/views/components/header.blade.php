@props([
    'title',
    'subtitle' => null,
])

<div {{$attributes->class(['space-y-4 mb-5'])}}>
    <flux:heading size="xl">{{$title}}</flux:heading>

    @isset($subtitle)
        <flux:subheading>{{$subtitle}}</flux:subheading>
    @endisset

    <flux:separator />
</div>
