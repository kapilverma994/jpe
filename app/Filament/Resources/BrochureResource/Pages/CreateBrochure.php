<?php

namespace App\Filament\Resources\BrochureResource\Pages;

use App\Filament\Resources\BrochureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBrochure extends CreateRecord
{
    protected static string $resource = BrochureResource::class;
    protected static bool $canCreateAnother = false;
}
