<?php

namespace App\Filament\Resources\LineCardFeatureResource\Pages;

use App\Filament\Resources\LineCardFeatureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLineCardFeature extends CreateRecord
{
    protected static string $resource = LineCardFeatureResource::class;
    protected static bool $canCreateAnother = false;
}
