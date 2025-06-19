<?php

namespace App\Livewire\People;

use App\Livewire\Forms\PersonForm;
use Livewire\Attributes\On;
use Livewire\Component;

class Creator extends Component
{

    public PersonForm $form;

    public $show_form = false;

    public function save() {
        $this->form->save();
        $this->show_form = false;
    }

    #[On(['show-person-form'])]
    public function showForm() {
        $this->form->reset();
        $this->show_form = true;
    }

    public function render() {
        return view('livewire.people.creator');
    }
}
