<?php

namespace App\Livewire\People;

use App\Models\Person;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Show extends Component
{
    #[Locked]
    public Person $person;

    public function render() {
        return view('livewire.people.show');
    }
}
