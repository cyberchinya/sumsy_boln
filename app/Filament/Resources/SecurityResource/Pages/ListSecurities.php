<?php

namespace App\Filament\Resources\SecurityResource\Pages;

use App\Filament\Resources\SecurityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSecurities extends ListRecords
{
    protected static string $resource = SecurityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
