<?php

namespace App\Filament\Resources\DispanserResource\Pages;

use App\Filament\Resources\DispanserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDispanser extends EditRecord
{
    protected static string $resource = DispanserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
