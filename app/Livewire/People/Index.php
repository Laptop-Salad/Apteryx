<?php

namespace App\Livewire\People;

use App\Models\Person;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Computed]
    public function people() {
        return Person::query()
            ->orderBy('first_name')
            ->paginate();
    }

    public function render() {
        return view('livewire.people.index');
    }
}
