<?php

namespace App\Filament\Resources\ProvincesResource\Pages;

use App\Filament\Resources\ProvincesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProvinces extends EditRecord
{
    protected static string $resource = ProvincesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
