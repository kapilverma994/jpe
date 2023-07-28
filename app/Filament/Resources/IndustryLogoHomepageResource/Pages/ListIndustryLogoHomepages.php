<?php

namespace App\Filament\Resources\IndustryLogoHomepageResource\Pages;

use App\Filament\Resources\IndustryLogoHomepageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIndustryLogoHomepages extends ListRecords
{
    protected static string $resource = IndustryLogoHomepageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
