<?php

namespace App\Livewire\CaseFile;

use App\Livewire\Forms\CaseFileForm;
use Livewire\Attributes\On;
use Livewire\Component;

class Creator extends Component
{
    public CaseFileForm $form;
    public $show_form = false;

    #[On(['show-case-file-form'])]
    public function showForm() {
        $this->form->reset();
        $this->show_form = true;
    }

    public function save() {
        if (!$this->form->save()) {
            return;
        }

        $this->show_form = false;

        $this->dispatch('refresh-case-files');
    }

    public function render() {
        return view('livewire.case-file.creator');
    }
}
