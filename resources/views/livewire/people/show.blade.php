<div class="container">
    <x-back :route="route('people')" :heading="$this->person->full_name" />

    <div class="mt-10">
        <x-card class="flex gap-4">
            <img src="{{asset('assets/default-profile.jpg')}}" alt="Person image" class="rounded-md w-48">

            <div class="grid grid-cols-3 gap-8">
                <div>
                    <flux:heading>First Name</flux:heading>
                    <p class="text-sm">{{$this->person->first_name}}</p>
                </div>


                <div>
                    <flux:heading>Middle Name(s)</flux:heading>
                    <p class="text-sm">{{$this->person->middle_names}}</p>
                </div>


                <div>
                    <flux:heading>Last Name</flux:heading>
                    <p class="text-sm">{{$this->person->last_name}}</p>
                </div>

                <div>
                    <flux:heading>Place of Birth</flux:heading>
                    <p class="text-sm">
                        {{$this->person->city_of_birth ?? 'Unknown City'}},
                        {{$this->person_country_of_birth ?? 'Unknown Country'}}
                    </p>
                </div>

                <div>
                    <flux:heading>Occupation</flux:heading>
                    <p class="text-sm">
                        {{$this->person->occupation ?? 'Unknown'}}
                    </p>
                </div>
            </div>
        </x-card>
    </div>
</div>
