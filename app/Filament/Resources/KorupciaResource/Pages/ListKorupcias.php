<?php

namespace App\Filament\Resources\KorupciaResource\Pages;

use App\Filament\Resources\KorupciaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKorupcias extends ListRecords
{
    protected static string $resource = KorupciaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
