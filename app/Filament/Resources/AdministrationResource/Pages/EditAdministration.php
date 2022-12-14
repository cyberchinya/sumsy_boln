<?php

namespace App\Filament\Resources\AdministrationResource\Pages;

use App\Filament\Resources\AdministrationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdministration extends EditRecord
{
    protected static string $resource = AdministrationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
