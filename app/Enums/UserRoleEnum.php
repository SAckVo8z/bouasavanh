<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum UserRoleEnum: string implements HasLabel
{
    case OwnShop = 'ownshop';
    case Employee = 'employee';
    public function getLabel(): ?string
    {
        return match ($this) {

            self::OwnShop => 'ເຈົ້າຂອງຮ້ານ',
            self::Employee => 'ພະນັກງານ',
        };
    }
}
