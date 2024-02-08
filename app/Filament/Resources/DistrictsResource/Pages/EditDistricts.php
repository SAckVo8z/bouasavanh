<?php

namespace App\Filament\Resources\DistrictsResource\Pages;

use App\Filament\Resources\DistrictsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDistricts extends EditRecord
{
    protected static string $resource = DistrictsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
