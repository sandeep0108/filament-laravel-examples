<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum PluginStatus: string
{
    case PENDING = 'Pending';
    case INPROGRESS = 'In Progress';

    case IMPLEMENTED = 'Implemented';

}
