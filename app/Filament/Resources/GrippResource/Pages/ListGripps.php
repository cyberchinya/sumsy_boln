<?php

namespace App\Filament\Resources\GrippResource\Pages;

use App\Filament\Resources\GrippResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGripps extends ListRecords
{
    protected static string $resource = GrippResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
