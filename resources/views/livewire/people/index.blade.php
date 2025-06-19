<div>
    <div class="container">
        <div class="flex items-center justify-between">
            <flux:heading size="lg">People</flux:heading>

            <flux:button wire:click="$dispatch('show-person-form')" size="sm">
                <i class="fa-regular fa-user w-8"></i>
                New Person
            </flux:button>
        </div>

        <div class="mt-10">
            <table class="w-full table-auto">
                <thead>
                <tr class="border-b">
                    <th class="text-start font-normal p-2">Name</th>
                    <th class="text-start font-normal p-2">Age</th>
                </tr>
                </thead>
                <tbody>
                @foreach($this->people as $person)
                    <tr wire:key="{{$person->id}}">
                        <td class="p-2 hover:underline">
                            <a href="{{route('people.show', $person->id)}}">
                                {{$person->first_name}}
                                {{$person->last_name}}
                            </a>
                        </td>
                        <td class="p-2">
                            {{$person->date_of_birth?->diffInYears(\Carbon\Carbon::now()) ?? 'Unknown'}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <livewire:people.creator />
</div>
