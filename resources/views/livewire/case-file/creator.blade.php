<flux:modal wire:model="show_form" class="w-screen">
    <flux:heading size="lg">New Case File</flux:heading>

    <form wire:submit="save" class="mt-8 space-y-6">
        {{-- Name --}}
        <flux:input
            wire:model="form.name"
            label="Name"
            placeholder="The missing cat"
            required
        />

        {{-- Description --}}
        <flux:textarea
            wire:model="form.description"
            label="Description"
            placeholder="Missing orange cat last seen at Apteryx Street"
            required
        />

        {{-- Type --}}
        <flux:select label="Type" wire:model="form.type" required>
            <flux:select.option>Select type</flux:select.option>

            @foreach(\App\CaseFileType::cases() as $type)
                <flux:select.option :value="$type->value">{{$type->display()}}</flux:select.option>
            @endforeach
        </flux:select>

        <div class="flex justify-end space-x-3">
            <flux:button wire:click="$set('show_form', false)">Cancel</flux:button>
            <flux:button variant="primary" type="submit">Save</flux:button>
        </div>
    </form>
</flux:modal>
