<?php

namespace App\Livewire;

use App\Models\Person;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class People extends Component
{
    use WithPagination;

    #[Computed]
    public function people() {
        return Person::query()
            ->orderBy('first_name')
            ->paginate();
    }

    public function render() {
        return view('livewire.people');
    }
}
