<?php

namespace App\Filament\Resources\OtherPageBannerResource\Pages;

use App\Filament\Resources\OtherPageBannerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOtherPageBanners extends ListRecords
{
    protected static string $resource = OtherPageBannerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
