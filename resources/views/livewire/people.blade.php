<div>
    <div class="container">
        <flux:heading size="xl">People</flux:heading>

        <table class="w-full table-fixed mt-10">
            <thead>
            <tr>
                <th></th>
                <th class="text-start p-2">Name</th>
                <th class="text-start p-2">Age</th>
                <th class="text-start p-2">Country</th>
            </tr>
            </thead>
            <tbody>
            @foreach($this->people as $person)
                <tr wire:key="$person->id">
                    <td>
                    </td>
                    <td class="p-2 font-semibold">
                        {{$person->first_name}}
                        {{$person->last_name}}
                    </td>
                    <td class="p-2">
                        {{$person->date_of_birth?->diffInYears(\Carbon\Carbon::now())}}
                    </td>
                    <td class="p-2">
                        {{$person->country_of_birth}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
