<?php

namespace App\Filament\Resources\LineCardResource\Pages;

use App\Filament\Resources\LineCardResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLineCard extends CreateRecord
{
    protected static string $resource = LineCardResource::class;
    protected static bool $canCreateAnother = false;
}
