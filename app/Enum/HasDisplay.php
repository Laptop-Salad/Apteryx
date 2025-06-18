<?php

namespace App\Enum;

trait HasDisplay
{
    public function display() {
        return str_replace('_', ' ', $this->name);
    }
}
