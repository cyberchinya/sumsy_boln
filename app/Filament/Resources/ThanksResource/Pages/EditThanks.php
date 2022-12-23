<?php

namespace App\Filament\Resources\ThanksResource\Pages;

use App\Filament\Resources\ThanksResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditThanks extends EditRecord
{
    protected static string $resource = ThanksResource::class;

    public function getTitle() :string
    {
        return 'Редактирование благодарности';
    }
    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
