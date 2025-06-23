<x-slot:title>Dashboard</x-slot:title>

<div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
    <div class="flex items-center justify-between">
        <flux:heading size="lg">{{__('Hello')}}, {{auth()->user()->name}}.</flux:heading>

        <flux:dropdown>
            <flux:button icon:trailing="ellipsis-horizontal" size="sm" />

            <flux:menu>
                <flux:menu.item wire:click="$dispatch('show-case-file-form')">
                    <i class="fa-regular fa-folder-open w-8"></i>
                    {{__('New Case File')}}
                </flux:menu.item>
                <flux:menu.item wire:click="$dispatch('show-person-form')">
                    <i class="fa-regular fa-user w-8"></i>
                    {{__('New Person')}}
                </flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    </div>

    <div class="grid auto-rows-min gap-4 md:grid-cols-3">
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>
    <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
        <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
    </div>

    <livewire:case-file.creator />
    <livewire:people.creator />
</div>
