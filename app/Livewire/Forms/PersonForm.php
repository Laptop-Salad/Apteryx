<?php

namespace App\Livewire\Forms;

use App\Models\Person;
use Livewire\Attributes\Validate;
use Livewire\Form;

class PersonForm extends Form
{
    public ?Person $person;

    #[Validate(['required', 'string', 'max:255'])]
    public $first_name = 'J';

    #[Validate(['nullable', 'string', 'max:255'])]
    public $middle_names;

    #[Validate(['nullable', 'string', 'max:255'])]
    public $last_name = 'Doe';

    #[Validate(['nullable', 'date'])]
    public $date_of_birth;

    #[Validate(['nullable', 'string', 'max:255'])]
    public $city_of_birth;

    #[Validate(['nullable', 'string', 'max:255'])]
    public $country_of_birth;

    #[Validate(['nullable', 'string', 'max:255'])]
    public $occupation;

    public function save() {
        $this->validate();

        if (!isset($this->person)) {
            $this->person = new Person();
        }

        $this->person->fill($this->all());
        $this->person->save();
    }
}
