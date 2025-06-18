<?php

namespace App\Livewire\Forms;

use App\CaseFileStatus;
use App\CaseFileType;
use App\Models\CaseFile;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CaseFileForm extends Form
{
    public ?CaseFile $case_file;

    #[Validate(['required', 'string', 'max:255'])]
    public $name;

    #[Validate(['required', 'string', 'max:255'])]
    public $description;

    #[Validate(['required', 'integer'])]
    public $status = CaseFileStatus::In_Progress->value;

    #[Validate(['required', 'integer'])]
    public $type;

    public function save(): bool {
        $this->validate();

        if (!isset($this->case_file)) {
            $this->case_file = new CaseFile();

            // Ensure name has not been duplicated
            $name_exists = CaseFile::where('name', $this->name)->exists();

            if ($name_exists) {
                $this->addError('name', 'Case file name already exists.');
                return false;
            }

            // Link user
            $this->case_file->user_id = auth()->user()->id;
        }

        $this->case_file->fill($this->all());
        $this->case_file->save();

        return true;
    }
}
