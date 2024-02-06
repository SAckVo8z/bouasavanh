<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum AdminRoleEnum: string implements HasLabel
{
    case SuperAdmin = 'superadmin';
    case Admin = 'admin';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::SuperAdmin => 'SuperAdmin',
            self::Admin => 'Admin',
        };
    }
}
