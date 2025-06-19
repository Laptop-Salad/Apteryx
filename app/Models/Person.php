<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = ['id'];
    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function getFullNameAttribute() {
        return
            $this->first_name . ' ' .
            $this->middle_names . ' ' .
            $this->last_name;
    }
}
