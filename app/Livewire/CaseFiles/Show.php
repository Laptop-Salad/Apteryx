<?php

namespace App\Livewire\CaseFiles;

use App\Models\CaseFile;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Show extends Component
{
    #[Locked]
    public CaseFile $case_file;


    public function render() {
        return view('livewire.case-files.show');
    }
}
