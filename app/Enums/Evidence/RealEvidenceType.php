<?php

namespace App\Enums\Evidence;

enum RealEvidenceType: int
{
    case Fingerprint = 1;
    case Blood_Sample = 2;
    case DNA = 3;
    case Weapon = 4;
    case Other = 5;
}
