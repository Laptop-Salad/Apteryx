<flux:modal wire:model="show_form" class="w-screen">
    <flux:heading size="lg">New Person</flux:heading>

    <form wire:submit="save" class="mt-8 space-y-6">
        <div class="space-y-2">
            <flux:heading class="mt-10">General</flux:heading>
            <flux:separator />
        </div>

        {{-- First Name --}}
        <flux:input
            wire:model="form.first_name"
            label="Name"
            required
        />

        {{-- Middle Names --}}
        <flux:input
            wire:model="form.middle_names"
            label="Middle Names"
        />

        {{-- Last Name --}}
        <flux:input
            wire:model="form.last_name"
            label="Last Name"
            required
        />

        <div class="space-y-2">
            <flux:heading class="mt-10">Place of Birth</flux:heading>
            <flux:separator />
        </div>

        {{-- Country of Birth --}}
        <flux:input
            wire:model="form.country_of_birth"
            label="Country of Birth"
        />

        {{-- City of Birth --}}
        <flux:input
            wire:model="form.city_of_birth"
            label="City of Birth"
        />

        <flux:separator />

        {{-- Occupation --}}
        <flux:input
            wire:model="form.occupation"
            label="Occupation"
        />

        <div class="flex justify-end space-x-3">
            <flux:button wire:click="$set('show_form', false)">Cancel</flux:button>
            <flux:button variant="primary" type="submit">Save</flux:button>
        </div>
    </form>
</flux:modal>
