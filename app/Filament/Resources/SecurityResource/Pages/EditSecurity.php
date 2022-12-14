<?php

namespace App\Filament\Resources\SecurityResource\Pages;

use App\Filament\Resources\SecurityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSecurity extends EditRecord
{
    protected static string $resource = SecurityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
