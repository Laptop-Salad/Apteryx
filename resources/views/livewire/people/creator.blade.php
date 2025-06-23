<flux:modal wire:model="show_form" class="w-screen">
    <flux:heading size="lg">{{__('New Person')}}</flux:heading>

    <form wire:submit="save" class="mt-8 space-y-6">
        <div class="space-y-2">
            <flux:heading class="mt-10">{{__('General')}}</flux:heading>
            <flux:separator />
        </div>

        {{-- First Name --}}
        <flux:input
            wire:model="form.first_name"
            :label="__('First Name')"
            required
        />

        {{-- Middle Names --}}
        <flux:input
            wire:model="form.middle_names"
            :label="__('Middle Names')"
        />

        {{-- Last Name --}}
        <flux:input
            wire:model="form.last_name"
            :label="__('Last Name')"
            required
        />

        <div class="space-y-2">
            <flux:heading class="mt-10">{{__('Place of Birth')}}</flux:heading>
            <flux:separator />
        </div>

        {{-- Country of Birth --}}
        <flux:input
            wire:model="form.country_of_birth"
            :label="__('Country of Birth')"
        />

        {{-- City of Birth --}}
        <flux:input
            wire:model="form.city_of_birth"
            :label="__('City of Birth')"
        />

        <flux:separator />

        {{-- Occupation --}}
        <flux:input
            wire:model="form.occupation"
            :label="__('Occupation')"
        />

        <div class="flex justify-end space-x-3">
            <flux:button wire:click="$set('show_form', false)">{{__('Cancel')}}</flux:button>
            <flux:button variant="primary" type="submit">{{__('Save')}}</flux:button>
        </div>
    </form>
</flux:modal>
