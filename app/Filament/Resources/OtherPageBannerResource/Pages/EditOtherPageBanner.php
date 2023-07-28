<?php

namespace App\Filament\Resources\OtherPageBannerResource\Pages;

use App\Filament\Resources\OtherPageBannerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOtherPageBanner extends EditRecord
{
    protected static string $resource = OtherPageBannerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
