<?php

namespace App\Filament\Resources\ThanksResource\Pages;

use App\Filament\Resources\ThanksResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateThanks extends CreateRecord
{
    protected static string $resource = ThanksResource::class;

    public function getTitle() :string
    {
        return 'Добавление благодарности';
    }
}
