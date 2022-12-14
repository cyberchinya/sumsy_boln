<?php

namespace App\Filament\Resources\Covid19Resource\Pages;

use App\Filament\Resources\Covid19Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCovid19s extends ListRecords
{
    protected static string $resource = Covid19Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
