<?php

namespace App;

use App\Models\Proposal;
use App\Models\User;

enum ProjectStatus: string
{
    case Open = 'open';

    case Closed = 'closed';

    public function label(): string

    {

        return match ($this) {

            self::Open => 'Aceitando propostas',
            self::Closed => 'Encerrado'

        };

    }

}
