<?php

namespace App\Enums\Evidence;

use App\HasDisplay;

enum DocumentaryEvidenceType: int
{
    use HasDisplay;

    case Diary = 1;
    case Letter = 2;
    case Contract = 3;
    case Newspaper = 4;
    case Other = 5;
}
