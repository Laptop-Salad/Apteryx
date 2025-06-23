<flux:modal wire:model="show_form" class="w-screen">
    <flux:heading size="lg">{{__('New Case File')}}</flux:heading>

    <form wire:submit="save" class="mt-8 space-y-6">
        {{-- Name --}}
        <flux:input
            wire:model="form.name"
            :label="__('Name')"
            :placeholder="__('The missing cat')"
            required
        />

        {{-- Description --}}
        <flux:textarea
            wire:model="form.description"
            :label="__('Description')"
            :placeholder="__('Missing orange cat last seen at Apteryx Street')"
            required
        />

        {{-- Type --}}
        <flux:select :label="__('Type')" wire:model="form.type" required>
            <flux:select.option>{{__('Select type')}}</flux:select.option>

            @foreach(\App\CaseFileType::cases() as $type)
                <flux:select.option :value="$type->value">{{__($type->display())}}</flux:select.option>
            @endforeach
        </flux:select>

        <div class="flex justify-end space-x-3">
            <flux:button wire:click="$set('show_form', false)">{{__('Cancel')}}</flux:button>
            <flux:button variant="primary" type="submit">{{__('Save')}}</flux:button>
        </div>
    </form>
</flux:modal>
