<?php

namespace App\Enums\Evidence;

use App\HasDisplay;

enum DigitalStorageType: int
{
    use HasDisplay;

    case Document = 1;
    case Audio = 2;
    case Video = 3;
}
