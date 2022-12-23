<?php

namespace App\Filament\Resources\ThanksResource\Pages;

use App\Filament\Resources\ThanksResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewThanks extends ViewRecord
{
    protected static string $resource = ThanksResource::class;

    protected static string $view = 'filament.resources.thanks.pages.view-thank';
}
