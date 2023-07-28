<?php

namespace App\Filament\Resources\LineCardFeatureResource\Pages;

use App\Filament\Resources\LineCardFeatureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLineCardFeatures extends ListRecords
{
    protected static string $resource = LineCardFeatureResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
