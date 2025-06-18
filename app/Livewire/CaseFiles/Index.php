<?php

namespace App\Livewire\CaseFiles;

use App\Models\CaseFile;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

#[On(['refresh-case-files'])]
class Index extends Component
{
    use WithPagination;

    #[Computed]
    public function caseFiles() {
        return CaseFile::query()
            ->orderBy('updated_at', 'desc')
            ->paginate(15);
    }

    public function render() {
        return view('livewire.case-files.index');
    }
}
