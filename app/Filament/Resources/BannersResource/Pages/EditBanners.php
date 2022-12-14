<?php

namespace App\Filament\Resources\BannersResource\Pages;

use App\Filament\Resources\BannersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBanners extends EditRecord
{
    protected static string $resource = BannersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
