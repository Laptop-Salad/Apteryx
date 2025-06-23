<?php

namespace App;

use App\Enum\HasDisplay;

enum Locale: string
{
    use HasDisplay;

    case English = 'en';
    case Bahasa_Melayu = 'ms';
}
