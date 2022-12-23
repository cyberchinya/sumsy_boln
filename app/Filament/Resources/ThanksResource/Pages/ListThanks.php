<?php

namespace App\Filament\Resources\ThanksResource\Pages;

use App\Filament\Resources\ThanksResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListThanks extends ListRecords
{
    protected static string $resource = ThanksResource::class;

    public function getTitle() :string
    {
        return 'Благодарности';
    }
    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
