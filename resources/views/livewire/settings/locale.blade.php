<?php

use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Livewire\Volt\Component;

new class extends Component {
    public string $language = '';

    public function mount()
    {
        $this->language = auth()->user()->language;
    }

    public function updateLocale()
    {
        try {
            $validated = $this->validate([
                'language' => ['required', 'string', Rule::in(array_values(config('app.available_locales')))],
            ]);
        } catch (ValidationException $e) {
            $this->reset('language');

            throw $e;
        }

        auth()->user()->language = $validated['language'];
        auth()->user()->save();

        $this->redirectRoute('settings.locale');
    }
}; ?>

<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Locale')"
                       :subheading=" __('Update the language and region settings for your account')">
        <form wire:submit="updateLocale" class="mt-6 space-y-6">
            <flux:select wire:model="language">
                @foreach(config('app.available_locales') as $name => $code)
                    <flux:select.option :value="$code">{{$name}}</flux:select.option>
                @endforeach
            </flux:select>

            <div class="flex items-center gap-4">
                <div class="flex items-center justify-end">
                    <flux:button variant="primary" type="submit" class="w-full">{{ __('Save') }}</flux:button>
                </div>
            </div>
        </form>
    </x-settings.layout>
</section>
