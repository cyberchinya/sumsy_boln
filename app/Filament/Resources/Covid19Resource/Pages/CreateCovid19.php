<?php

namespace App\Filament\Resources\Covid19Resource\Pages;

use App\Filament\Resources\Covid19Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCovid19 extends CreateRecord
{
    protected static string $resource = Covid19Resource::class;
}
