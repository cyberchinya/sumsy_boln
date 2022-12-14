<?php

namespace App\Filament\Resources\VacanciesResource\Pages;

use App\Filament\Resources\VacanciesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVacancies extends EditRecord
{
    protected static string $resource = VacanciesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
