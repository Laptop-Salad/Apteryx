<?php

namespace App;

use App\Enum\HasDisplay;

enum CaseFileType: int
{
    use HasDisplay;

    case Theft = 1;
    case Missing_Person = 2;
    case Fraud = 3;
    case Homicide = 4;
    case Cybercrime = 5;
    case Narcotics = 6;
    case Arson = 7;
    case Other = 8;

    public function icon() {
        return match ($this) {
            self::Theft => 'fa-sack-dollar',
            self::Missing_Person => 'fa-person-circle-question',
            self::Fraud => 'fa-money-check',
            self::Homicide => 'fa-person-circle-xmark',
            self::Cybercrime => 'fa-computer-classic',
            self::Narcotics => 'fa-pills',
            self::Arson => 'fa-fire',
            default => 'fa-folder-open',
        };
    }
}
