<?php

namespace App\Filament\Resources\DispanserResource\Pages;

use App\Filament\Resources\DispanserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDispansers extends ListRecords
{
    protected static string $resource = DispanserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
