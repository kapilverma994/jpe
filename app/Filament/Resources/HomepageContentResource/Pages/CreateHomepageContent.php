<?php

namespace App\Filament\Resources\HomepageContentResource\Pages;

use App\Filament\Resources\HomepageContentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHomepageContent extends CreateRecord
{
    protected static string $resource = HomepageContentResource::class;
    protected static bool $canCreateAnother = false;
}
