<?php

namespace App\Enums\Evidence;

use App\HasDisplay;

enum Classification: int
{
    use HasDisplay;

    case Direct = 1;
    case Circumstantial = 2;
    case Primary = 3;
    case Secondary = 4;
    case Forensic = 5;
    case Expert = 6;
}
