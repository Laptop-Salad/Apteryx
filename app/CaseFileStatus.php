<?php

namespace App;

use App\Enum\HasDisplay;

enum CaseFileStatus: int
{
    use HasDisplay;

    case Completed = 0;
    case In_Progress = 1;
    case Closed = 2;
}
