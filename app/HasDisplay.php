<?php

namespace App;

trait HasDisplay
{
    public function display() {
        return str_replace('_', ' ', $this->name);
    }
}
